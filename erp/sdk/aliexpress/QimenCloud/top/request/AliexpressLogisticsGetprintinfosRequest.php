<?php
/**
 * TOP API: qimen.aliexpress.logistics.getprintinfos request
 * 
 * @author auto create
 * @since 1.0, 2018.02.28
 */
class AliexpressLogisticsGetprintinfosRequest
{
	/** 
	 * 卖家登录的login_id
	 **/
	private $id;
	
	/** 
	 * 是否打印详情
	 **/
	private $printDetail;
	
	/** 
	 * 批量查询线上发货信息进去打印,列表类型，以json格式来表达。{internationalLogisticsId为国际运单号(必填)}
	 **/
	private $warehouseOrderQueryDTOs;
	
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

	public function setPrintDetail($printDetail)
	{
		$this->printDetail = $printDetail;
		$this->apiParas["print_detail"] = $printDetail;
	}

	public function getPrintDetail()
	{
		return $this->printDetail;
	}

	public function setWarehouseOrderQueryDTOs($warehouseOrderQueryDTOs)
	{
		$this->warehouseOrderQueryDTOs = $warehouseOrderQueryDTOs;
		$this->apiParas["warehouse_order_query_d_t_os"] = $warehouseOrderQueryDTOs;
	}

	public function getWarehouseOrderQueryDTOs()
	{
		return $this->warehouseOrderQueryDTOs;
	}

	public function getApiMethodName()
	{
		return "qimen.aliexpress.logistics.getprintinfos";
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
