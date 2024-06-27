<?php

use App\Enums\ParcelStatus;

return array(
    ParcelStatus::PICKUP_ASSIGN => 'Chuyển nhượng nhận',
    ParcelStatus::PICKUP_RE_SCHEDULE => 'Pickup lại lịch trình',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN => 'Nhận được bởi người bán xe bán tải',
    ParcelStatus::RECEIVED_WAREHOUSE => 'Nhận được kho',
    ParcelStatus::TRANSFER_TO_HUB => 'Chuyển đến Hub',
    ParcelStatus::RECEIVED_BY_HUB => 'Nhận được bởi trung tâm',
    ParcelStatus::DELIVERY_MAN_ASSIGN => 'Người giao hàng',
    ParcelStatus::DELIVERY_RE_SCHEDULE => 'Giao hàng lại lịch trình',
    ParcelStatus::DELIVER => 'Giao',
    ParcelStatus::RETURN_TO_COURIER => 'Trở lại chuyển phát nhanh',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT => 'Trả lại gán cho thương gia',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE => 'Trả lại gán cho người bán hàng lại',
    ParcelStatus::DELIVERED => 'Đã giao hàng',
    ParcelStatus::PARTIAL_DELIVERED => 'Giao một phần',
    ParcelStatus::RETURN_WAREHOUSE => 'Return Warehouse',
    ParcelStatus::ASSIGN_MERCHANT => 'Assign Merchant',
    ParcelStatus::RETURNED_MERCHANT => 'Returned Merchant',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT => 'Trở lại nhận được bởi thương gia',
    'hub_name' => 'Tên trung tâm',
    'hub_phone' => 'Điện thoại trung tâm',
    'delivery_man' => 'Người giao hàng',
    'delivery_man_phone' => 'Điện thoại giao hàng'
);
