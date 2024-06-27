<?php

use App\Enums\ApprovalStatus;

return array(
    ApprovalStatus::REJECT => 'Từ chối',
    ApprovalStatus::APPROVED => 'Tán thành',
    ApprovalStatus::PENDING => 'Chưa giải quyết',
    ApprovalStatus::PROCESSED => 'Xử lý'
);
