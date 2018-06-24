<?php
/**
 * TOP API: 5185r6e05f.saiwei.order.orderlist request
 * 
 * @author auto create
 * @since 1.0, 2018.03.04
 */
class SaiweiOrderOrderlistRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "5185r6e05f.saiwei.order.orderlist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
