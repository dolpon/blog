<?php
/**
 * TOP API: qimen.aliexpress.logistics.querysellershipmentinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.01.11
 */
class AliexpressLogisticsQuerysellershipmentinfoRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 国际运单号
	 **/
	private $logisticsNo;
	
	/** 
	 * 物流服务名称
	 **/
	private $serviceName;
	
	/** 
	 * 子订单序号，从1开始
	 **/
	private $subTradeOrderIndex;
	
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

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function setSubTradeOrderIndex($subTradeOrderIndex)
	{
		$this->subTradeOrderIndex = $subTradeOrderIndex;
		$this->apiParas["sub_trade_order_index"] = $subTradeOrderIndex;
	}

	public function getSubTradeOrderIndex()
	{
		return $this->subTradeOrderIndex;
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
		return "qimen.aliexpress.logistics.querysellershipmentinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->tradeOrderId,"tradeOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
