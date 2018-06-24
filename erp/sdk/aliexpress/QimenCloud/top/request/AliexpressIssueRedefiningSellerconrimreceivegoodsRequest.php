<?php
/**
 * TOP API: aliexpress.issue.redefining.sellerconrimreceivegoods request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressIssueRedefiningSellerconrimreceivegoodsRequest
{
	/** 
	 * 12345
	 **/
	private $issueId;
	
	private $apiParas = array();
	
	public function setIssueId($issueId)
	{
		$this->issueId = $issueId;
		$this->apiParas["issue_id"] = $issueId;
	}

	public function getIssueId()
	{
		return $this->issueId;
	}

	public function getApiMethodName()
	{
		return "aliexpress.issue.redefining.sellerconrimreceivegoods";
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
