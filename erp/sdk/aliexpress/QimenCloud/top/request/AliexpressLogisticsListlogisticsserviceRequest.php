<?php
/**
 * TOP API: qimen.aliexpress.logistics.listlogisticsservice request
 * 
 * @author auto create
 * @since 1.0, 2018.02.06
 */
class AliexpressLogisticsListlogisticsserviceRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
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

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.listlogisticsservice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
