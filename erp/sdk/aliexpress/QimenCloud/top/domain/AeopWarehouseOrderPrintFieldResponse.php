<?php

/**
 * 服务出参
 * @author auto create
 */
class AeopWarehouseOrderPrintFieldResponse
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 调用错误描述信息
	 **/
	public $error_desc;
	
	/** 
	 * PresortingCode
	 **/
	public $presorting_code;
	
	/** 
	 * 是否打印分拣码
	 **/
	public $print_presorting;
	
	/** 
	 * 是否调用成功
	 **/
	public $success;
	
	/** 
	 * 交易订单号
	 **/
	public $trade_order_id;
	
	/** 
	 * 分区码
	 **/
	public $zoning_code;	
}
?>