<?php
/**
 * TOP API: qimen.aliexpress.logistics.sellermodifiedshipmentsupportsubtradeorder request
 * 
 * @author auto create
 * @since 1.0, 2018.01.10
 */
class AliexpressLogisticsSellermodifiedshipmentsupportsubtradeorderRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 旧的运单号
	 **/
	private $oldLogisticsNo;
	
	/** 
	 * 旧的物流服务名称
	 **/
	private $oldServiceName;
	
	/** 
	 * 新的声明发货信息
	 **/
	private $subTradeOrderList;
	
	/** 
	 * 交易订单号
	 **/
	private $tradeOrderId;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setOldLogisticsNo($oldLogisticsNo)
	{
		$this->oldLogisticsNo = $oldLogisticsNo;
		$this->apiParas["old_logistics_no"] = $oldLogisticsNo;
	}

	public function getOldLogisticsNo()
	{
		return $this->oldLogisticsNo;
	}

	public function setOldServiceName($oldServiceName)
	{
		$this->oldServiceName = $oldServiceName;
		$this->apiParas["old_service_name"] = $oldServiceName;
	}

	public function getOldServiceName()
	{
		return $this->oldServiceName;
	}

	public function setSubTradeOrderList($subTradeOrderList)
	{
		$this->subTradeOrderList = $subTradeOrderList;
		$this->apiParas["sub_trade_order_list"] = $subTradeOrderList;
	}

	public function getSubTradeOrderList()
	{
		return $this->subTradeOrderList;
	}

	public function setTradeOrderId($tradeOrderId)
	{
		$this->tradeOrderId = $tradeOrderId;
		$this->apiParas["trade_order_id"] = $tradeOrderId;
	}

	public function getTradeOrderId()
	{
		return $this->tradeOrderId;
	}

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.sellermodifiedshipmentsupportsubtradeorder";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->oldLogisticsNo,"oldLogisticsNo");
		RequestCheckUtil::checkNotNull($this->oldServiceName,"oldServiceName");
		RequestCheckUtil::checkNotNull($this->tradeOrderId,"tradeOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
