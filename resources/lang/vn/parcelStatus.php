<?php

use App\Enums\ParcelStatus;

return array(
    ParcelStatus::PENDING => 'Chưa giải quyết',
    ParcelStatus::PICKUP_ASSIGN => 'Chuyển nhượng nhận',
    ParcelStatus::PICKUP_ASSIGN_CANCEL => 'Pickup Assign Cancel',
    ParcelStatus::PICKUP_RE_SCHEDULE_CANCEL => 'Pickup Re-Schedule Cancel',
    ParcelStatus::PICKUP_RE_SCHEDULE => 'Pickup lại lịch trình',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN => 'Nhận được bởi người bán xe bán tải',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN_CANCEL => 'Received By Pickup Man Cancel',
    ParcelStatus::RECEIVED_WAREHOUSE => 'Nhận được kho',
    ParcelStatus::RECEIVED_WAREHOUSE_CANCEL => 'Received Warehouse Cancel',
    ParcelStatus::RECEIVED_BY_HUB_CANCEL => 'Nhận được bởi Hub Hủy',
    ParcelStatus::TRANSFER_TO_HUB => 'Chuyển đến Hub',
    ParcelStatus::TRANSFER_TO_HUB_CANCEL => 'Chuyển sang Hub Hủy',
    ParcelStatus::RECEIVED_BY_HUB => 'Nhận được bởi trung tâm',
    ParcelStatus::DELIVERY_MAN_ASSIGN => 'Người giao hàng',
    ParcelStatus::DELIVERY_MAN_ASSIGN_CANCEL => 'Delivery Man Assign Cancel',
    ParcelStatus::DELIVERY_RE_SCHEDULE_CANCEL => 'Giao hàng Hủy bỏ lại Hủy',
    ParcelStatus::DELIVERY_RE_SCHEDULE => 'Giao hàng lại lịch trình',
    ParcelStatus::PARTIAL_DELIVERED_CANCEL => 'Partial Delivered Cancel',
    ParcelStatus::RETURN_TO_COURIER => 'Trở lại chuyển phát nhanh',
    ParcelStatus::RETURN_TO_COURIER_CANCEL => 'Return to courier cancel',
    ParcelStatus::PARTIAL_DELIVERED => 'Giao một phần',
    ParcelStatus::DELIVERED => 'Đã giao hàng',
    ParcelStatus::DELIVERED_CANCEL => 'Giao hàng hủy bỏ',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT_CANCEL => 'Return assign to merchant cancel',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT => 'Trả lại gán cho thương gia',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE_CANCEL => 'Return assign to merchant Re-Schedule Cancel',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE => 'Trả lại gán cho người bán hàng lại',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT => 'Trở lại nhận được bởi thương gia',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT_CANCEL => 'Return received by merchant cancel',
    ParcelStatus::DELIVER => 'Giao',
    ParcelStatus::RETURN_WAREHOUSE => 'Return Warehouse',
    ParcelStatus::ASSIGN_MERCHANT => 'Assign Merchant',
    ParcelStatus::RETURNED_MERCHANT => 'Returned Merchant'
);
