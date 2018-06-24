<?php

/**
 * 包裹声明发货结果
 * @author auto create
 */
class AeopShipmentDTO
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
	 * 运单号
	 **/
	public $logistics_no;
	
	/** 
	 * 用户选择的实际发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。平台支持物流服务详细一览表详见论坛链接 （http://sale.aliexpress.com/seller/shipping_methods_list.htm）
	 **/
	public $service_name;
	
	/** 
	 * 追踪网址
	 **/
	public $tracking_web_site;	
}
?>