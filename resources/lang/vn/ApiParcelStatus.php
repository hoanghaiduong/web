<?php

use App\Enums\ParcelStatus;

return array(
    ParcelStatus::RETURN_TO_COURIER => 'Trở lại chuyển phát nhanh',
    ParcelStatus::PARTIAL_DELIVERED => 'Giao một phần',
    ParcelStatus::DELIVERED => 'Đã giao hàng'
);
