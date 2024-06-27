<?php

use App\Enums\ParcelStatus;

return array(
    ParcelStatus::PENDING => 'Chưa giải quyết',
    ParcelStatus::PICKUP_ASSIGN => 'Chuyển nhượng Pickup',
    ParcelStatus::PICKUP_RE_SCHEDULE => 'Pickup Re-Singedule',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN => 'Nhận được bởi người bán xe bán tải',
    ParcelStatus::RECEIVED_WAREHOUSE => 'Đã nhận được kho',
    ParcelStatus::TRANSFER_TO_HUB => 'Chuyển sang Hub',
    ParcelStatus::RECEIVED_BY_HUB => 'Nhận được bởi Hub',
    ParcelStatus::DELIVERY_MAN_ASSIGN => 'Người giao hàng giao hàng',
        // ParcelStatus::DELIVERY_RE_SCHEDULE      => 'Giao hàng lại lịch trình',
    ParcelStatus::RETURN_TO_COURIER => 'Trở về chuyển phát nhanh',
    ParcelStatus::PARTIAL_DELIVERED => 'Được giao một phần',
    ParcelStatus::DELIVERED => 'Đã giao hàng',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT => 'Trả lại gán cho người bán',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE => 'Trả lại gán cho người bán hàng lại',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT => 'Trả lại bởi thương gia'

);
