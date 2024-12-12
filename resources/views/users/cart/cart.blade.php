@extends('users.layouts.app')

@section('content')

<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="w-full lg:w-2/3">
                <h1 class="text-2xl font-bold mb-2">GIỎ HÀNG CỦA BẠN</h1>
                <p class="text-gray-600 mb-4">Tổng cộng (1 sản phẩm)</p>
                <p class="text-gray-600 mb-4">Các mặt hàng trong giỏ hàng của bạn không được bảo lưu – hãy kiểm tra ngay để đặt hàng.</p>
                <div class="flex items-center mb-4">
                    <input class="mr-2" type="checkbox"/><span class="font-bold">CHỌN TẤT CẢ</span>
                </div>
                <div class="flex items-center mb-4">
                    <input class="mr-2" type="checkbox"/><img alt="Black casual pants" class="w-24 h-36 object-cover mr-4" height="150" src="https://product.hstatic.net/200000887901/product/1_645c3de607a74ea08af9468d090ff175_large.jpg" width="100"/>
                    <div class="flex-1">
                        <p class="text-gray-500">Aristino</p>
                        <p class="font-bold">Quần Âu Nam Casual Aristino Slim Fit ATRU020Z</p>
                        <div class="flex items-center mt-2">
                            <span class="mr-4">Đen 09</span>
                            <span>29</span>
                        </div>
                    </div>
                    <div class="text-right md:flex">
                        <p class="font-bold mb-2 px-2">950,000₫</p>
                        <div class="flex items-center border border-gray-300 rounded">
                            <button class="px-2">-</button>
                            <input class="w-8 text-center border-l border-r border-gray-300" type="text" value="1"/>
                            <button class="px-2">+</button>
                        </div>
                        <button class="text-gray-500 mt-2 px-2"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>
        <div class="w-full lg:w-1/3 lg:pl-6">
            <h2 class="text-xl font-bold mb-4">TÓM TẮT ĐƠN HÀNG</h2>
            <div class="flex justify-between mb-2">
                <span class="text-gray-600">Tổng tiền hàng</span>
                <span class="font-bold"> 950,000₫</span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="text-gray-600">Phí vận chuyển</span>
                <span class="font-bold">0₫</span>
            </div>
            <div class="flex justify-between mb-4">
                <span class="text-gray-600">Tổng thanh toán</span>
                <span class="font-bold">950,000₫</span>
            </div>
            <button class="w-full bg-gray-800 text-white py-2 rounded flex items-center justify-center">THANH TOÁN<i class="fas fa-arrow-right ml-2"></i></button>
            <div class="mt-4">
                <input class="w-2/3 p-2 border border-gray-300 rounded-l" placeholder="Nhập mã giảm giá" type="text"/>
                <button class="w-1/3 bg-gray-800 text-white py-2 rounded-r">Áp dụng</button>
            </div>
        </div>
    </div>
</div>

@endsection