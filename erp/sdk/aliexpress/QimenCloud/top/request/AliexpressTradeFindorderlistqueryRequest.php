<?php
/**
 * TOP API: qimen.aliexpress.trade.findorderlistquery request
 * 
 * @author auto create
 * @since 1.0, 2018.01.17
 */
class AliexpressTradeFindorderlistqueryRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 入参
	 **/
	private $param1;
	
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

	public function setParam1($param1)
	{
		$this->param1 = $param1;
		$this->apiParas["param1"] = $param1;
	}

	public function getParam1()
	{
		return $this->param1;
	}

	public function getApiMethodName()
	{
		return "qimen.aliexpress.trade.findorderlistquery";
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
