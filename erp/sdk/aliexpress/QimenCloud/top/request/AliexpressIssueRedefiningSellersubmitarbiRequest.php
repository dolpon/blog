<?php
/**
 * TOP API: aliexpress.issue.redefining.sellersubmitarbi request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressIssueRedefiningSellersubmitarbiRequest
{
	/** 
	 * 12345
	 **/
	private $content;
	
	/** 
	 * 12345
	 **/
	private $issueId;
	
	/** 
	 * 12345
	 **/
	private $reason;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setIssueId($issueId)
	{
		$this->issueId = $issueId;
		$this->apiParas["issue_id"] = $issueId;
	}

	public function getIssueId()
	{
		return $this->issueId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "aliexpress.issue.redefining.sellersubmitarbi";
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
