<?php
/**
 * TOP API: qimen.aliexpress.logistics.sellershipmentsupportsubtradeorder request
 * 
 * @author auto create
 * @since 1.0, 2018.01.10
 */
class AliexpressLogisticsSellershipmentsupportsubtradeorderRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 声明发货信息
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
		return "qimen.aliexpress.logistics.sellershipmentsupportsubtradeorder";
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
