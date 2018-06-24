<?php
/**
 * TOP API: 9155d88n94.valsun.trade.redefining.findorderbyid request
 * 
 * @author auto create
 * @since 1.0, 2018.03.08
 */
class ValsunTradeRedefiningFindorderbyidRequest
{
	/** 
	 * 订单ID
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "9155d88n94.valsun.trade.redefining.findorderbyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
