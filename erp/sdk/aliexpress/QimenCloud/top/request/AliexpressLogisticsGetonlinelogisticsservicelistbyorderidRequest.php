<?php
/**
 * TOP API: qimen.aliexpress.logistics.getonlinelogisticsservicelistbyorderid request
 * 
 * @author auto create
 * @since 1.0, 2018.02.06
 */
class AliexpressLogisticsGetonlinelogisticsservicelistbyorderidRequest
{
	/** 
	 * 包裹高度
	 **/
	private $goodsHeight;
	
	/** 
	 * 包裹长度
	 **/
	private $goodsLength;
	
	/** 
	 * 包裹重量
	 **/
	private $goodsWeight;
	
	/** 
	 * 包裹宽度
	 **/
	private $goodsWidth;
	
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 交易订单号
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setGoodsHeight($goodsHeight)
	{
		$this->goodsHeight = $goodsHeight;
		$this->apiParas["goods_height"] = $goodsHeight;
	}

	public function getGoodsHeight()
	{
		return $this->goodsHeight;
	}

	public function setGoodsLength($goodsLength)
	{
		$this->goodsLength = $goodsLength;
		$this->apiParas["goods_length"] = $goodsLength;
	}

	public function getGoodsLength()
	{
		return $this->goodsLength;
	}

	public function setGoodsWeight($goodsWeight)
	{
		$this->goodsWeight = $goodsWeight;
		$this->apiParas["goods_weight"] = $goodsWeight;
	}

	public function getGoodsWeight()
	{
		return $this->goodsWeight;
	}

	public function setGoodsWidth($goodsWidth)
	{
		$this->goodsWidth = $goodsWidth;
		$this->apiParas["goods_width"] = $goodsWidth;
	}

	public function getGoodsWidth()
	{
		return $this->goodsWidth;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

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
		return "qimen.aliexpress.logistics.getonlinelogisticsservicelistbyorderid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
