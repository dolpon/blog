<?php
/**
 * TOP API: qimen.aliexpress.logistics.getnextleveladdressdata request
 * 
 * @author auto create
 * @since 1.0, 2018.01.10
 */
class AliexpressLogisticsGetnextleveladdressdataRequest
{
	/** 
	 * 1001
	 **/
	private $areaId;
	
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setAreaId($areaId)
	{
		$this->areaId = $areaId;
		$this->apiParas["area_id"] = $areaId;
	}

	public function getAreaId()
	{
		return $this->areaId;
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

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.getnextleveladdressdata";
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
