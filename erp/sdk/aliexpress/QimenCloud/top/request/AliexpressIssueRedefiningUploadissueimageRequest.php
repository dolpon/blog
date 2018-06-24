<?php
/**
 * TOP API: aliexpress.issue.redefining.uploadissueimage request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressIssueRedefiningUploadissueimageRequest
{
	/** 
	 * 12345
	 **/
	private $extension;
	
	/** 
	 * 12345
	 **/
	private $imageBytes;
	
	private $apiParas = array();
	
	public function setExtension($extension)
	{
		$this->extension = $extension;
		$this->apiParas["extension"] = $extension;
	}

	public function getExtension()
	{
		return $this->extension;
	}

	public function setImageBytes($imageBytes)
	{
		$this->imageBytes = $imageBytes;
		$this->apiParas["image_bytes"] = $imageBytes;
	}

	public function getImageBytes()
	{
		return $this->imageBytes;
	}

	public function getApiMethodName()
	{
		return "aliexpress.issue.redefining.uploadissueimage";
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
