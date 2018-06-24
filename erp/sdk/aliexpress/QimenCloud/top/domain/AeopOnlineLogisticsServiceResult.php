<?php

/**
 * 支持的线上发货物流方式
 * @author auto create
 */
class AeopOnlineLogisticsServiceResult
{
	
	/** 
	 * 交货地址
	 **/
	public $delivery_address;
	
	/** 
	 * 是否国际快递线路
	 **/
	public $express_logistics_service;
	
	/** 
	 * 物流方案ID
	 **/
	public $logistics_service_id;
	
	/** 
	 * 物流方案名称
	 **/
	public $logistics_service_name;
	
	/** 
	 * 运输时效
	 **/
	public $logistics_timeliness;
	
	/** 
	 * 其它费用项
	 **/
	public $other_fees;
	
	/** 
	 * 试算结果
	 **/
	public $trial_result;
	
	/** 
	 * 仓库中文名称
	 **/
	public $warehouse_name;	
}
?>