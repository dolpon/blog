<?php
/**
 * TOP API: qimen.aliexpress.logistics.getfieldinfoforprint request
 * 
 * @author auto create
 * @since 1.0, 2018.02.07
 */
class AliexpressLogisticsGetfieldinfoforprintRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 国际运单号
	 **/
	private $internationalLogisticsId;
	
	/** 
	 * 物流订单号
	 **/
	private $logisticsNo;
	
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

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
	}

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.getfieldinfoforprint";
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
