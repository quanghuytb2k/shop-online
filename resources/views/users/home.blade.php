@extends('users.layouts.app')

@section('content')
    <div id="main-content-wp" class="home-page clearfix">
        <div class="wp-inner">
            <div class="container mx-auto flex flex-wrap mt-4 px-4 md:px-0">
                <div class="w-full md:w-1/4 bg-white p-4 border border-gray-200 mb-4">
                    <h2 class="font-bold text-lg mb-4">DANH MỤC SẢN PHẨM</h2>
                    <ul class="space-y-2">
                        <li><a class="hover:underline" href="#">Hot Deal</a></li>
                        <li><a class="hover:underline" href="#">Phụ kiện &amp; Công nghệ</a></li>
                        <li><a class="hover:underline" href="#">Du lịch &amp; Nghỉ dưỡng</a></li>
                        <li><a class="hover:underline" href="#">Sách &amp; VPP</a></li>
                        <li><a class="hover:underline" href="#">Thời trang</a></li>
                        <li><a class="hover:underline" href="#">Thể thao &amp; Giải trí</a></li>
                        <li><a class="hover:underline" href="#">Spa &amp; Massage</a></li>
                        <li><a class="hover:underline" href="#">Điện lạnh &amp; Gia dụng</a></li>
                        <li><a class="hover:underline" href="#">Mẹ và bé</a></li>
                        <li><a class="hover:underline" href="#">Thực phẩm &amp; Sức khỏe</a></li>
                        <li><a class="hover:underline" href="#">Xem tất cả sản phẩm</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-3/4">
                    <div class="bg-white p-4 border border-gray-200 mb-4">
                        <div class="space-x-4">
                            <img alt="ảnh 1" class="h-[300px] w-full"src="https://th.bing.com/th/id/OIF.m1pc6tZCmWggtYfQK6Qjuw?rs=1&pid=ImgDetMain"/>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 bg-white p-4 border border-gray-200">
                                <img alt="ảnh 2" class="h-40 w-full object-cover" src="https://storage.googleapis.com/a1aa/image/9i6AT8iuhraFI9XoXZnHvb5iAQQHTBFs856tXLDOpIYoXd9E.jpg"/>
                            </div>
                            <div class="w-1/2 bg-white p-4 border border-gray-200">
                                <img alt="ảnh 3" class="h-40 w-full object-cover" src="https://storage.googleapis.com/a1aa/image/9i6AT8iuhraFI9XoXZnHvb5iAQQHTBFs856tXLDOpIYoXd9E.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="container mx-auto mt-4">
                <h2 class="bg-orange-500 text-white px-4 py-2">Hot Deal</h2>
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
        </div>
    </div>

@endsection

