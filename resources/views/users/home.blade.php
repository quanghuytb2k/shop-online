@extends('users.layouts.app')

@section('content')
    <div id="main-content-wp" class="home-page clearfix">
        <div class="wp-inner">
            <div class="container mx-auto mt-4">
                <h2 class="bg-orange-500 font-bold text-white px-4 py-2">Hot Deal</h2>
                <div class="flex flex-wrap md:flex-nowrap space-y-4 md:space-y-0 md:space-x-4 mt-2">
                    <div class="w-full md:w-1/4 bg-white p-4 border border-gray-200 md:space-y-0 md:space-x-4">
                        <img alt="Hot deal image 1" class="h-32 w-full object-cover mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/dCzDq6j3ZmLsGxlfzbbxsyewgsQ2z08VWaZt96aPtE1jeqrnA.jpg" width="200"/>
                    </div>
                    <div class="w-full md:w-1/4 bg-white p-4 border border-gray-200 md:space-y-0 md:space-x-4">
                        <img alt="Hot deal image 2" class="h-32 w-full object-cover mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/I4fyK1lyCBWYCqeInecu1hxADq7uRxXDNmR3sxmSrLLI9qrnA.jpg" width="200"/>
                    </div>
                    <div class="w-full md:w-1/4 bg-white p-4 border border-gray-200 md:space-y-0 md:space-x-4">
                        <img alt="Hot deal image 3" class="h-32 w-full object-cover mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/ggVeFs1dOWz9A6k9JjcKs19KKtwkCfYB5LQQYoLL5MKieqrnA.jpg" width="200"/>
                    </div>
                    <div class="w-full md:w-1/4 bg-white p-4 border border-gray-200 md:space-y-0 md:space-x-4">
                        <img alt="Hot deal image 4" class="h-32 w-full object-cover mb-2" height="150" src="https://storage.googleapis.com/a1aa/image/tpzX0HZ5IaZRARODmmetOleWc34l0WuxCT28ppLKgRGgeqrnA.jpg" width="200"/>
                    </div>
                </div>
            </div>
            <div class="container mx-auto mt-8">
                <h2 class="text-lg font-bold bg-orange-500 p-2 text-white">Sản phẩm cùng loại cùng tầm giá</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Brown striped polo shirt" class="w-full h-auto border-red-500 focus:border-red-500 focus:ring-red-500 hover:border-red-500" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01rKgbX91spmSJV0QsD_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã C0191 Giá 830K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Kín Cổ Thời Trang Nam</p>
                        <p class="text-lg text-red-500">830.000 đ</p>
                        <p class="line-through">830.000 đ</p>
                        <p>Đã bán 104</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="White polo shirt" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01dvKGCX1spmSFuMMYW_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã C0291 Giá 890K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Hàng Mùa Hè Kín Cổ Thời Trang Nam Chất Liệu</p>
                        <p class="text-lg text-red-500">890.000 đ</p>
                        <p class="line-through">890.000 đ</p>
                        <p>Đã bán 104</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Black polo shirt with logo" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01dvKGCX1spmSFuMMYW_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã B9146 Giá 1000K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Kín Cổ Thời Trang Nam</p>                            <p class="text-lg text-red-500">890.000 đ</p>
                        <p class="line-through">1.000.000 đ</p>
                        <p>Đã bán 100</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Beige polo shirt" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01Od1N171spmSFuquOT_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã B9177 Giá 1020K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Thời Trang Nam Chất Liệu</p>
                        <p class="text-lg text-red-500">890.000 đ</p>
                        <p class="line-through">1.020.000 đ</p>
                        <p>Đã bán 82</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Black button-up shirt" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01jI5Yf91spmSFunLv5_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã B8841 Giá 940K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Kín Cổ Thời Trang Nam Chất</p>
                        <p class="text-lg text-red-500">940.000 đ</p>
                        <p class="line-through">940.000 đ</p>
                        <p>Đã bán 96</p>
                    </div>
                </div>
                <div class="p-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Brown striped polo shirt" class="w-full h-auto border-red-500 focus:border-red-500 focus:ring-red-500 hover:border-red-500" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01rKgbX91spmSJV0QsD_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã C0191 Giá 830K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Kín Cổ Thời Trang Nam</p>
                        <p class="text-lg text-red-500">830.000 đ</p>
                        <p class="line-through">830.000 đ</p>
                        <p>Đã bán 104</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="White polo shirt" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01dvKGCX1spmSFuMMYW_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã C0291 Giá 890K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Hàng Mùa Hè Kín Cổ Thời Trang Nam Chất Liệu</p>
                        <p class="text-lg text-red-500">890.000 đ</p>
                        <p class="line-through">890.000 đ</p>
                        <p>Đã bán 104</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Black polo shirt with logo" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01dvKGCX1spmSFuMMYW_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã B9146 Giá 1000K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Kín Cổ Thời Trang Nam</p>                            <p class="text-lg text-red-500">890.000 đ</p>
                        <p class="line-through">1.000.000 đ</p>
                        <p>Đã bán 100</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Beige polo shirt" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01Od1N171spmSFuquOT_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã B9177 Giá 1020K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Thời Trang Nam Chất Liệu</p>
                        <p class="text-lg text-red-500">890.000 đ</p>
                        <p class="line-through">1.020.000 đ</p>
                        <p>Đã bán 82</p>
                    </div>
                    <div class="px-1 py-1 border border-transparent focus:border-red-500 focus:ring-red-500 hover:border-red-500">
                        <img alt="Black button-up shirt" class="w-full h-auto" height="300" src="https://cbu01.alicdn.com/img/ibank/O1CN01jI5Yf91spmSFunLv5_!!2206365235816-0-cib.jpg" width="200"/>
                        <p class="text-sm">(Mới) Mã B8841 Giá 940K: Áo Sơ Mi Nam Sutder Big Size Ngoại Cỡ Ngắn Tay Hàng Mùa Hè Kín Cổ Thời Trang Nam Chất</p>
                        <p class="text-lg text-red-500">940.000 đ</p>
                        <p class="line-through">940.000 đ</p>
                        <p>Đã bán 96</p>
                    </div>
                </div>
            </div>   
        </div>
    </div>
@endsection

