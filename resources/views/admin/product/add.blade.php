@extends('admin.layouts.app')

@section('content')
    <div class=" flex justify-center">
        <form class="w-[50%] justify-center ">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('name')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá</label>
                <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
                @error('price')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="old_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá cũ</label>
                <input type="number" id="old_price" name="old_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
                @error('old_price')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chi tiết sản phẩm</label>
                <textarea name="desc" id="content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="desc" cols="30" rows="5">{{ old('desc') }}</textarea>
                @error('content')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="cat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="" name="cat">
                    <option value=''>Chọn danh mục</option>
                    @foreach($cats as $cat)
                        <option value="{{$cat->id}}" @if($cat->id == old('cat'))
                            selected='selected'
                            @endif>{{str_repeat('-- ', $cat->level).' '.$cat->name}}</option>
                    @endforeach
                </select>
                @error('cat')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="upload-thumb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ảnh sản phẩm</label>
                <div id="uploadFile">
                    <img class="max-w-[150px] h-auto w-[150px]" id="upload-image" src="{{asset('uploads/img-thumb.png')}}"><br>
                    <label class="btn btn-primary">
                        Chọn file<input type="file" class="uploadFile img" name="file" id="upload-thumb" value="{{ old('file') }}" style="width: 0px;height: 0px;overflow: hidden;">
                    </label>
                </div>
                @error('content')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-5">
                <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số lượng</label>
                <input type="number" id="number" name="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('number')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <button type="submit" class="min-w-[150px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>

    <script>
        $('#upload-thumb').change(function(){
            console.log(3333);
            var upload_image = document.getElementById("upload-thumb")
            if (upload_image.files && upload_image.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#upload-image').attr('src', e.target.result)
                };
                reader.readAsDataURL(upload_image.files[0]);
                // let url = URL.createObjectURL(input.files[0]);
                // upload-image.setAttribute('src', url);
            }
        })
    </script>
@endsection
