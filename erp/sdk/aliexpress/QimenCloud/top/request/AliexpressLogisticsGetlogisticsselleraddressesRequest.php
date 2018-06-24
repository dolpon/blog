<?php
/**
 * TOP API: qimen.aliexpress.logistics.getlogisticsselleraddresses request
 * 
 * @author auto create
 * @since 1.0, 2018.01.10
 */
class AliexpressLogisticsGetlogisticsselleraddressesRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 请求卖家地址类型:sender/pickup/refund. sender必选
	 **/
	private $sellerAddressQuery;
	
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

	public function setSellerAddressQuery($sellerAddressQuery)
	{
		$this->sellerAddressQuery = $sellerAddressQuery;
		$this->apiParas["seller_address_query"] = $sellerAddressQuery;
	}

	public function getSellerAddressQuery()
	{
		return $this->sellerAddressQuery;
	}

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.getlogisticsselleraddresses";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMaxListSize($this->sellerAddressQuery,999,"sellerAddressQuery");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
