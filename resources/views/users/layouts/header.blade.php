<div class="container mx-auto flex justify-between items-center py-4 md:px-0">
    <div class="text-2xl font-bold text-orange-600 whitespace-nowrap">
        Multi Chanel
    </div>
    <div class="flex items-center space-x-2 w-full md:w-auto mx-auto">
        <div class="flex w-full mx-auto px-2 md:px-0">
        <input type="search" id="search-dropdown" class="w-full md:w-[300px] p-2.5 text-ml text-gray-900 bg-gray-50 rounded md:rounded-s-lg md:border-e-gray-50 md:border-e-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tìm kiếm sản phẩm..."/>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="relative hidden md:flex flex-shrink-0 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-e-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">Tất cả danh mục
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg> 
            </button>
            <div id="dropdown" class="absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Quần</button></li>
                    <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Áo</button></li>
                    <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Mũ</button></li>
                    <li><button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100">Kính</button</li>
                </ul>
            </div>   
        </div>
        <button class="bg-orange-500 text-white px-4 py-2 rounded whitespace-nowrap">Tìm kiếm</button>
    </div>
    <div class="hidden md:flex space-x-4 mt-4 md:mt-0">
        <div class="flex items-center space-x-2">
            <i class="fas fa-shopping-cart text-orange-500"></i><span>Giỏ hàng</span>
        </div>
        <div class="flex items-center space-x-2">
            <i class="fas fa-user text-orange-500"></i><span>Tài khoản</span>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById("dropdown-button");
    const dropdownMenu = document.getElementById("dropdown");

    dropdownButton.addEventListener("click", function (event) {
        dropdownMenu.classList.toggle("hidden");
        event.stopPropagation();
    });

    document.addEventListener("click", function (event) {
        if (!dropdownMenu.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownMenu.classList.add("hidden");
        }
    });
});
</script>