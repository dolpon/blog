<?php
/**
 * TOP API: qimen.aliexpress.logistics.getprintinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.02.08
 */
class AliexpressLogisticsGetprintinfoRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 国际运单号
	 **/
	private $internationalLogisticsId;
	
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

	public function setInternationalLogisticsId($internationalLogisticsId)
	{
		$this->internationalLogisticsId = $internationalLogisticsId;
		$this->apiParas["international_logistics_id"] = $internationalLogisticsId;
	}

	public function getInternationalLogisticsId()
	{
		return $this->internationalLogisticsId;
	}

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.getprintinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->internationalLogisticsId,"internationalLogisticsId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
