<?php

/**
 * 物流订单详细信息列表
 * @author auto create
 */
class AeopLogisticsWarehouseOrderResult
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * chinaLogisticsType
	 **/
	public $china_logistics_type;
	
	/** 
	 * 国际物流订单类型（CPAM_WLB_FPXSZ小包-物流宝仓库-深圳市递四方速递FPXSZ；CPAM_WLB_ZTOBJ小包-物流宝仓库-中通海外北京仓ZTOBJ；CPAM_WLB_CPHSH小包-物流宝仓库-上海市邮政CPHSH；
	 **/
	public $international_logistics_type;
	
	/** 
	 * 物流运单号
	 **/
	public $internationallogistics_id;
	
	/** 
	 * 运费
	 **/
	public $logistics_fee;
	
	/** 
	 * 物流订单状态:init等待分配物流单号；waitWarehouseReceiveGoods等待仓库操作；pickup_success揽收成功；pickup_fail揽收失败；warehouseRejectGoods入库失败；waitWarehouseSendGoods等待出库；out_stock_success等待发货；out_stock_fail出库失败；send_goods_fail发货失败；warehouseSendGoodsSuccess已发货；
	 **/
	public $logistics_status;
	
	/** 
	 * LP编号
	 **/
	public $lp_number;
	
	/** 
	 * 物流订单ID
	 **/
	public $online_logistics_id;
	
	/** 
	 * 交易订单ID
	 **/
	public $order_id;	
}
?>