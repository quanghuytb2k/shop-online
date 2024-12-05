<div class="container mx-auto flex justify-between items-center py-4 md:px-0">
    <div class="text-2xl font-bold text-orange-600 whitespace-nowrap">
        Multi Chanel
    </div>
    <div class="flex items-center space-x-2 w-full md:w-auto mx-auto">
        <div class="flex w-full mx-auto px-2 md:px-0">
            <input type="search" id="search-dropdown"
                   class="w-full md:w-[300px] p-2.5 text-ml text-gray-900 bg-gray-50 rounded md:rounded-s-lg md:border-e-gray-50 md:border-e-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                   placeholder="Tìm kiếm sản phẩm..."/>
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
