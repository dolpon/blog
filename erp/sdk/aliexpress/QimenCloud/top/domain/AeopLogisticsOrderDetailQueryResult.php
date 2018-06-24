<?php

/**
 * 物流订单信息返回结果
 * @author auto create
 */
class AeopLogisticsOrderDetailQueryResult
{
	
	/** 
	 * 当前页数
	 **/
	public $current_page;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 调用出错信息
	 **/
	public $error_desc;
	
	/** 
	 * 物流订单详细信息列表
	 **/
	public $result_list;
	
	/** 
	 * 调用是否成功
	 **/
	public $success;
	
	/** 
	 * 总页数
	 **/
	public $total_page;	
}
?>