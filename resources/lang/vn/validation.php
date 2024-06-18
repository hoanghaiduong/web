<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau đây chứa các thông báo lỗi mặc định được sử dụng bởi
    | lớp trình xác thực. Một số quy tắc này có nhiều phiên bản như quy tắc kích thước.
    | Hãy thoải mái điều chỉnh từng thông báo này tại đây.
    |
    */

    'accepted' => ':attribute phải được chấp nhận.',
    'accepted_if' => ':attribute phải được chấp nhận khi :other là :value.',
    'active_url' => ':attribute không phải là URL hợp lệ.',
    'after' => ':attribute phải là một ngày sau :date.',
    'after_or_equal' => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha' => ':attribute chỉ được chứa các chữ cái.',
    'alpha_dash' => ':attribute chỉ được chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => ':attribute chỉ được chứa các chữ cái và số.',
    'array' => ':attribute phải là một mảng.',
    'before' => ':attribute phải là một ngày trước :date.',
    'before_or_equal' => ':attribute phải là một ngày trước hoặc bằng :date.',
    'between' => [
        'array' => ':attribute phải có từ :min đến :max mục.',
        'file' => ':attribute phải nằm trong khoảng từ :min đến :max kilobyte.',
        'numeric' => ':attribute phải nằm trong khoảng từ :min đến :max.',
        'string' => ':attribute phải có từ :min đến :max ký tự.',
    ],
    'boolean' => 'Trường :attribute phải là đúng hoặc sai.',
    'confirmed' => 'Xác nhận :attribute không khớp.',
    'current_password' => 'Mật khẩu không chính xác.',
    'date' => ':attribute không phải là một ngày hợp lệ.',
    'date_equals' => ':attribute phải là một ngày bằng :date.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'declined' => ':attribute phải bị từ chối.',
    'declined_if' => ':attribute phải bị từ chối khi :other là :value.',
    'different' => ':attribute và :other phải khác nhau.',
    'digits' => ':attribute phải là :digits chữ số.',
    'digits_between' => ':attribute phải nằm trong khoảng từ :min đến :max chữ số.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => ':attribute phải là một địa chỉ email hợp lệ.',
    'ends_with' => ':attribute phải kết thúc bằng một trong những giá trị sau: :values.',
    'enum' => ':attribute được chọn không hợp lệ.',
    'exists' => ':attribute được chọn không hợp lệ.',
    'file' => ':attribute phải là một tệp tin.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'gt' => [
        'array' => ':attribute phải có nhiều hơn :value mục.',
        'file' => ':attribute phải lớn hơn :value kilobyte.',
        'numeric' => ':attribute phải lớn hơn :value.',
        'string' => ':attribute phải lớn hơn :value ký tự.',
    ],
    'gte' => [
        'array' => ':attribute phải có :value mục trở lên.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'string' => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
    ],
    'image' => ':attribute phải là một hình ảnh.',
    'in' => ':attribute được chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => ':attribute phải là một số nguyên.',
    'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4' => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6' => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
    'lt' => [
        'array' => ':attribute phải có ít hơn :value mục.',
        'file' => ':attribute phải nhỏ hơn :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'string' => ':attribute phải nhỏ hơn :value ký tự.',
    ],
    'lte' => [
        'array' => ':attribute không được có nhiều hơn :value mục.',
        'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobyte.',
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'string' => ':attribute phải nhỏ hơn hoặc bằng :value ký tự.',
    ],
    'mac_address' => ':attribute phải là một địa chỉ MAC hợp lệ.',
    'max' => [
        'array' => ':attribute không được có nhiều hơn :max mục.',
        'file' => ':attribute không được lớn hơn :max kilobyte.',
        'numeric' => ':attribute không được lớn hơn :max.',
        'string' => ':attribute không được lớn hơn :max ký tự.',
    ],
    'mimes' => ':attribute phải là một tệp tin loại: :values.',
    'mimetypes' => ':attribute phải là một tệp tin loại: :values.',
    'min' => [
        'array' => ':attribute phải có ít nhất :min mục.',
        'file' => ':attribute phải có ít nhất :min kilobyte.',
        'numeric' => ':attribute phải có ít nhất :min.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
    ],
    'multiple_of' => ':attribute phải là bội số của :value.',
    'not_in' => ':attribute được chọn không hợp lệ.',
    'not_regex' => 'Định dạng :attribute không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'password' => 'Mật khẩu không chính xác.',
    'present' => 'Trường :attribute phải có mặt.',
    'prohibited' => 'Trường :attribute bị cấm.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other nằm trong :values.',
    'prohibits' => 'Trường :attribute ngăn cấm :other có mặt.',
    'regex' => 'Định dạng :attribute không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_array_keys' => 'Trường :attribute phải chứa các mục nhập cho: :values.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi :values có mặt.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi :values có mặt.',
    'required_without' => 'Trường :attribute là bắt buộc khi :values không có mặt.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có :values nào có mặt.',
    'same' => ':attribute và :other phải khớp.',
    'size' => [
        'array' => ':attribute phải chứa :size mục.',
        'file' => ':attribute phải là :size kilobyte.',
        'numeric' => ':attribute phải là :size.',
        'string' => ':attribute phải là :size ký tự.',
    ],
    'starts_with' => ':attribute phải bắt đầu bằng một trong các giá trị sau: :values.',
    'string' => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là một múi giờ hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => ':attribute tải lên thất bại.',
    'url' => ':attribute phải là một URL hợp lệ.',
    'uuid' => ':attribute phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Ở đây bạn có thể chỉ định các thông báo xác thực tùy chỉnh cho các thuộc tính
    | sử dụng quy ước "attribute.rule" để đặt tên các dòng. Điều này giúp bạn
    | dễ dàng chỉ định thông báo ngôn ngữ tùy chỉnh cho quy tắc thuộc tính cụ thể.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'thông báo tùy chỉnh',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ sau được sử dụng để thay thế chỗ giữ chỗ thuộc tính
    | bằng một cái gì đó thân thiện hơn với người đọc như "Địa chỉ Email" thay vì "email".
    | Điều này giúp chúng ta làm cho thông báo của mình biểu cảm hơn.
    |
    */

    'attributes' => [
        'dashboard' => 'Bảng điều khiển',
        'profile' => 'Hồ sơ',
        'hub_id' => 'Hub',
        'image_id' => 'Hình ảnh',
        'driving_license_image_id' => 'Giấy phép lái xe',
        'image' => 'hình ảnh',
        'name' => 'Tên',
        'title' => 'Tiêu đề',
        'status' => 'Trạng thái',
        'add' => 'Thêm',
        'edit' => 'Chỉnh sửa',
        'view' => 'Xem',
        'description' => 'Mô tả',
        'delivery_charge' => 'Phí giao hàng',
        'pickup_charge' => 'Phí nhận hàng',
        'return_charge' => 'Phí trả hàng',
        'opening_balance' => 'Số dư ban đầu',
        'email' => 'Email',
        'username' => 'Tên người dùng',
        'phone' => 'Điện thoại',
        'address' => 'Địa chỉ',
        'user' => 'Người dùng',
        'category' => 'thể loại',
        'delivery_category' => 'Thể loại đã được sử dụng.',
        'user_assigned' => 'Người dùng đã được chỉ định.',
        'user_exists' => 'Người dùng đã tồn tại.',
    ],

];
