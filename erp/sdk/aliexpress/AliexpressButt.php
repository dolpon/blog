<?php


include "QimenCloud/TopSdk.php";
include "QimenCloud/QimenCloudClient.php";
date_default_timezone_set('Asia/Shanghai');

class AliexpressButt
{

    private $appKey;
    private $aliexpress_id;
    private $access_token;
    private $appSecret;

    const PLATFORM = 'aliexpress';

    public function setConfig($account)
    {

        $this->appKey         = $aliexpressToken['appKey'];
        $this->aliexpress_id  = $aliexpressToken['aliexpress_id'];
        $this->access_token   = $aliexpressToken['access_token'];
        $this->appSecret      = $aliexpressToken['appSecret'];

    }

    /**
     * 获取订单列表数据
     * @param array $request
     * @return mixed|ResultSet|SimpleXMLElement
     * @throws Exception
     */
    public function findOrderListQuery($request=[], $account='')
    {
        $pageSize = isset($request['page_size']) ? (string)$request['page_size'] : '20';
        $page = isset($request['page']) ? (string)$request['page'] : '1';

        date_default_timezone_set('Asia/Shanghai');
        $c = new \QimenCloudClient();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $c->gatewayUrl = 'http://120.27.130.169/order/FindOrderListQuery';
        $c->format = 'json';

        $req2 = new \ValsunTradeRedefiningFindorderlistqueryRequest;  // 奇门网关api文档生成的php文件

        ########## 传参 #############
        if(isset($request['create_date_start'])){
            $req2->setCreateDateStart($request['create_date_start']);
        }
        if(isset($request['create_date_end'])){
            $req2->setCreateDateEnd($request['create_date_end']);
        }
        if(isset($request['modified_date_start'])){
            $req2->setModifiedDateStart($request['modified_date_start']);
        }
        if(isset($request['modified_date_end'])){
            $req2->setModifiedDateEnd($request['modified_date_end']);
        }

        $req2->setOrderStatus("WAIT_SELLER_SEND_GOODS");

        if(isset($request['order_status_list'])){
            $req2->setOrderStatusList($request['order_status_list']);
        }
        $req2->setPage($page);
        $req2->setPageSize($pageSize);

        ######## 第二个参数为sessionKey 有些时候需要填写#######

        $result = $c->execute($req2, $this->access_token);
        LogService::backupRequestAndResponseXml(var_export($request, true), var_export($result, true), self::PLATFORM, $account);
        return $result;
    }

    /**
     * 通过订单号 -> 订单详情查询
     * @param string $orderId
     * @return mixed|ResultSet|SimpleXMLElement
     * @throws Exception
     */
    public function findOrderById($orderId='', $account='')
    {
        date_default_timezone_set('Asia/Shanghai');
        $c = new \QimenCloudClient();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $c->gatewayUrl = 'http://120.27.130.169/order/FindOrderById';
        $c->format = 'json';
        $orderId = (string)$orderId;

        ################ 传参 #####################################################
        $req2 = new \ValsunTradeRedefiningFindorderbyidRequest;

        $req2->setOrderId($orderId);

        $result = $c->execute($req2, $this->access_token);
        LogService::backupRequestAndResponseXml($c->gatewayUrl .' orderId=>'.$orderId, var_export($result, true), self::PLATFORM, $account);

        return $result;

    }

    /**
     * 上传跟踪号
     * @param $serviceName
     * @param $logisticsNo
     * @param $sendType
     * @param $outRef
     * @param string $description
     * @param string $trackingWebsite
     * @return array
     * @throws \Exception
     */
    public function sellerShipment($serviceName='', $logisticsNo='', $sendType='', $outRef='', $description='', $trackingWebsite='', $account='')
    {
        $logisticsNo = trim($logisticsNo);
        date_default_timezone_set('Asia/Shanghai');
        $endParma = "\n\r\n\r\n\r\n\r";

        $errorFileName  = 'aliexpress/aliexpress_seller_shipment/aliexpress_seller_shipment'.date('Y-m-d', time());

        $c = new \QimenCloudClient();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $c->gatewayUrl = 'http://120.27.130.169/order/SellerShipmentForTop';
        $c->format = 'json';

        ################ 传参 #####################################################
        $req = new \ValsunLogisticsSellershipmentfortopRequest;
        $req->setLogisticsNo($logisticsNo);
        $req->setDescription($description);
        $req->setSendType($sendType);
        $req->setOutRef($outRef);
        $req->setTrackingWebsite($trackingWebsite);
        $req->setServiceName($serviceName);  // TODO
//        $req->setServiceName('other');

        $su = $c->execute($req, $this->access_token);
        LogService::backupRequestAndResponseXml(serialize($req), var_export($su, true), self::PLATFORM, $account);
        echo serialize($req).$endParma;
        LogService::writeLog($errorFileName, serialize($req).$endParma);

        if(is_object($su)) {
            echo $suStr = serialize($su);
            $arr = ['error_code'=>'-001', 'error_message'=>$suStr];
            LogService::writeLog($errorFileName, var_export($arr, true).$endParma);
            return $arr;
        }
        $result = json_decode($su['result_data'], true);
        echo '---------------------------------------------'.PHP_EOL.PHP_EOL.PHP_EOL;
        echo 'update no ----------------------------------'.PHP_EOL;

        if(isset($result['sub_msg'])){
            echo '---- error ---'.$logisticsNo.'--------------'.PHP_EOL;
            $arr = ['error_code'=>$result['sub_code'], 'error_message'=>$result['sub_msg']];
        }else{

            if($result['result_success'] || $result['result_error_code'] == '-2001'){

                echo '-----上传成功---'.$logisticsNo.'--------------'.PHP_EOL;
                $arr = ['success'=>'上传成功','error_code'=>'200', 'error_message'=>'ok!'];
            } // elseif($result['result_error_code'] == '-2001')  已经上传过的跟踪号 需要调用修改接口
            else{
                echo '---- error ---'.$logisticsNo.'--------------'.PHP_EOL;
                $arr = ['error_code'=>$result['result_error_code'], 'error_message'=>$result['result_error_desc']];
            }
        }

        LogService::writeLog($errorFileName, var_export($arr, true).$endParma);
        return $arr;

    }

    /**
     *  修改声明发货
     * @param string $oldServiceName
     * @param string $newServiceName
     * @param string $oldLogisticsNo
     * @param string $newLogisticsNo
     * @param string $sendType
     * @param string $outRef
     * @param string $trackingWebsite
     * @param string $account
     * @return array
     * @throws \Exception
     */
    public function changeSellerShipment(
        $oldServiceName='',
        $newServiceName='',
        $oldLogisticsNo='',
        $newLogisticsNo='',
        $sendType='',
        $outRef='',
        $trackingWebsite='',
        $account=''
    )
    {
        $oldLogisticsNo = trim($oldLogisticsNo);
        $newLogisticsNo = trim($newLogisticsNo);
        date_default_timezone_set('Asia/Shanghai');
        $endParma = "\n\r\n\r\n\r\n\r";

        $errorFileName  = 'aliexpress/aliexpress_seller_shipment/aliexpress_change_seller_shipment'.date('Y-m-d', time());

        $c = new \QimenCloudClient();
        $c->appkey = $this->appKey;
        $c->secretKey = $this->appSecret;
        $c->gatewayUrl = 'http://120.27.130.169/order/SellerModifiedShipmentfortop';
        $c->format = 'json';

        ################ 传参 #####################################################
        $req = new \ValsunLogisticsSellermodifiedshipmentfortopRequest;
        $req->setOldLogisticsNo($oldLogisticsNo);
        $req->setNewLogisticsNo($newLogisticsNo);
        $req->setSendType($sendType);
        $req->setOutRef($outRef);
        $req->setTrackingWebsite($trackingWebsite);
        $req->setOldServiceName($oldServiceName);
        $req->setNewServiceName($newServiceName);
        $su = $c->execute($req, $this->access_token);
//        var_dump($newLogisticsNo);exit;
        LogService::backupRequestAndResponseXml(serialize($req), var_export($su, true), self::PLATFORM, $account);
        echo serialize($req).$endParma;
        LogService::writeLog($errorFileName, serialize($req).$endParma);

        if(is_object($su)) {
            echo $suStr = serialize($su);
            $arr = ['error_code'=>'-001', 'error_message'=>$suStr];
            LogService::writeLog($errorFileName, var_export($arr, true).$endParma);
            return $arr;
        }
        echo $su['result_data'];exit;
        $result = json_decode($su['result_data'], true);
        echo '---------------------------------------------'.PHP_EOL.PHP_EOL.PHP_EOL;
        echo 'update no ----------------------------------'.PHP_EOL;
        if(isset($result['sub_msg'])){
            echo '---- error ---'.$newLogisticsNo.'--------------'.PHP_EOL;
            $arr = ['error_code'=>$result['sub_code'], 'error_message'=>$result['sub_msg']];
        }else{
            if($result['result_success']) {
                echo '-----上传成功---' . $newLogisticsNo . '--------------' . PHP_EOL;
                $arr = ['success' => '上传成功', 'error_code' => '200', 'error_message' => 'ok!'];
            }
            else{
                echo '---- error ---'.$newLogisticsNo.'--------------'.PHP_EOL;
                $arr = ['error_code'=>$result['result_error_code'], 'error_message'=>$result['result_error_desc']];
            }
        }
        LogService::writeLog($errorFileName, var_export($arr, true).$endParma);
        return $arr;

    }

    public function getSendType($omOrderId=0)
    {
        $send_type		    = "all";
        M('splitOrder')->getSplittedMainOrderId($omOrderId);
        if(!empty($main_order_id) && $main_order_id!=$omOrderId) {//拆分订单 部分发货上传跟踪号
            $wherrArr = array(
                'main_order_id' => array('$e' => $main_order_id),
                'is_enable' => array('$e' => 1)
            );//主单找子单条件
            $splitOrders = M('Order')->getAllData(C('DB_PREFIX') . "records_splitOrder", 'split_order_id', $wherrArr);
            $splitOrderIDS = array();
            foreach ($splitOrders as $splitOrder) {
                $split_order_id = $splitOrder['split_order_id'];
                $splitOrderIDS[] = $split_order_id;
            }
            if (!empty($splitOrderIDS)) {
                //$countSplit     = M("OrderTracknumber")->checkAllUped($splitOrderIDS); 不适应没有申请到跟踪号的情况
                $wherrArr = array(
                    'is_delete' => array('$e' => 0),
                    'marketTime' => array('$e' => 0),
                    'id' => array('$in' => $splitOrderIDS)
                );
                $countSplit = M('Order')->getAllData(C('DB_PREFIX') . "unshipped_order", '*', $wherrArr);
                $countSplit = count($countSplit);

                //检查拆分子单是否含有尖货仓发货的订单
                $wherrArr = array(
                    'is_delete' => array('$e' => 0),
                    'id' => array('$in' => $splitOrderIDS)
                );
                $orderdata = M('Order')->getAllData(C('DB_PREFIX') . "unshipped_order", '*', $wherrArr);
                $isOrderJianhuoChildOrder = false;
                if (!empty($orderdata)) {
                    foreach ($orderdata as $val) {
                        $orderStore = $val["orderStore"];
                        if (in_array($orderStore, array(23))) {
                            $isOrderJianhuoChildOrder = true;
                            break;
                        }
                    }
                }
                if ($isOrderJianhuoChildOrder == true) {
                    $countSplit = 0;
                }
            } else {
                $countSplit = 0;
            }
            if ($countSplit > 1) {//大于一个表示部分发货。
                $send_type = "part";
            }
        }
        return $send_type;
    }


}

