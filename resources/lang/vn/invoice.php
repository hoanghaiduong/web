<?php

use App\Enums\InvoiceStatus;

return array(
    'id' => 'NHẬN DẠNG',
    InvoiceStatus::PAID => 'TRẢ',
    InvoiceStatus::UNPAID => 'CHƯA THANH TOÁN',
    InvoiceStatus::PROCESSING => 'XỬ LÝ',
    'paid_out' => 'Trả tiền',
    'invoice' => 'Hóa đơn',
    'status_updated' => 'Trạng thái hóa đơn được cập nhật thành công',
    'status_update' => 'Cập nhật trạng thái',
    'paid_invoice' => 'Hóa đơn thanh toán',
    'invoice_generated_successfully' => 'Hóa đơn tạo ra thành công',
    'invoice_generate_menually' => 'Hóa đơn tạo',
    'generate' => 'Phát ra',
    'invoice_description' => 'Sau khi nhấp vào nút Tạo, hóa đơn sẽ được tạo tùy thuộc vào thời gian thanh toán của người bán.'
);
