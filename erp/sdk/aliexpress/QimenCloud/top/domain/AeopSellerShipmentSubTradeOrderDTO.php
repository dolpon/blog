<?php

/**
 * 结果
 * @author auto create
 */
class AeopSellerShipmentSubTradeOrderDTO
{
	
	/** 
	 * 调用出错码
	 **/
	public $error_code;
	
	/** 
	 * 调用出错信息
	 **/
	public $error_msg;
	
	/** 
	 * 声明发货类型：part(部分发货)，all(全部发货)
	 **/
	public $send_type;
	
	/** 
	 * 包裹声明发货结果
	 **/
	public $shipment_list;
	
	/** 
	 * 子订单序号，从1开始
	 **/
	public $sub_trade_order_index;	
}
?>