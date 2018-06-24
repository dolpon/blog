<?php
/**
 * TOP API: 9155d88n94.valsun.trade.redefining.findorderlistquery request
 * 
 * @author auto create
 * @since 1.0, 2018.03.08
 */
class ValsunTradeRedefiningFindorderlistqueryRequest
{
	/** 
	 * 订单创建时间结束值，格式: MM/dd/yyyy HH:mm:ss,如10/08/2013 00:00:00 倘若时间维度未精确到时分秒，故该时间条件筛选不许生效。
	 **/
	private $createDateEnd;
	
	/** 
	 * 订单创建时间起始值，格式: MM/dd/yyyy HH:mm:ss,如10/08/2013 00:00:00 倘若时间维度未精确到时分秒，故该时间条件筛选不许生效。
	 **/
	private $createDateStart;
	
	/** 
	 * 订单修改时间结束值，格式: MM/dd/yyyy HH:mm:ss,如10/08/2013 00:00:00
	 **/
	private $modifiedDateEnd;
	
	/** 
	 * 订单修改时间起始值，格式: MM/dd/yyyy HH:mm:ss,如10/08/2013 00:00:00
	 **/
	private $modifiedDateStart;
	
	/** 
	 * 订单状态： PLACE_ORDER_SUCCESS:等待买家付款; IN_CANCEL:买家申请取消; WAIT_SELLER_SEND_GOODS:等待您发货; SELLER_PART_SEND_GOODS:部分发货; WAIT_BUYER_ACCEPT_GOODS:等待买家收货; FUND_PROCESSING:买卖家达成一致，资金处理中； IN_ISSUE:含纠纷中的订单; IN_FROZEN:冻结中的订单; WAIT_SELLER_EXAMINE_MONEY:等待您确认金额; RISK_CONTROL:订单处于风控24小时中，从买家在线支付完成后开始，持续24小时。 以上状态查询可分别做单独查询，不传订单状态查询订单信息不包含（FINISH，已结束订单状态） FINISH:已结束的订单，需单独查询。
	 **/
	private $orderStatus;
	
	/** 
	 * 查询多个订单状态下的订单信息，具体订单状态见order_status描述
	 **/
	private $orderStatusList;
	
	/** 
	 * 当前页码
	 **/
	private $page;
	
	/** 
	 * 每页个数，最大50
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCreateDateEnd($createDateEnd)
	{
		$this->createDateEnd = $createDateEnd;
		$this->apiParas["create_date_end"] = $createDateEnd;
	}

	public function getCreateDateEnd()
	{
		return $this->createDateEnd;
	}

	public function setCreateDateStart($createDateStart)
	{
		$this->createDateStart = $createDateStart;
		$this->apiParas["create_date_start"] = $createDateStart;
	}

	public function getCreateDateStart()
	{
		return $this->createDateStart;
	}

	public function setModifiedDateEnd($modifiedDateEnd)
	{
		$this->modifiedDateEnd = $modifiedDateEnd;
		$this->apiParas["modified_date_end"] = $modifiedDateEnd;
	}

	public function getModifiedDateEnd()
	{
		return $this->modifiedDateEnd;
	}

	public function setModifiedDateStart($modifiedDateStart)
	{
		$this->modifiedDateStart = $modifiedDateStart;
		$this->apiParas["modified_date_start"] = $modifiedDateStart;
	}

	public function getModifiedDateStart()
	{
		return $this->modifiedDateStart;
	}

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
	}

	public function setOrderStatusList($orderStatusList)
	{
		$this->orderStatusList = $orderStatusList;
		$this->apiParas["order_status_list"] = $orderStatusList;
	}

	public function getOrderStatusList()
	{
		return $this->orderStatusList;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "valsun.trade.redefining.findorderlistquery";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
