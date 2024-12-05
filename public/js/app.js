// // num product in cart
// $(document).ready(function () {
//     $('.num-order').change(function () {
//         // var RowId = $(this).attr('data-id');
//         // var qty = $(this).val();
//         // var url = $(this).attr('data-url');
//         // var data = {RowId: RowId, qty: qty, url: url};
//         // console.log(data);
//         // $.ajax({
//         //     url: 'cart/update',
//         //     method: 'POST',
//         //     data: data,
//         //     dataType: 'json',
//         //     success: function (data) {
//         //         // $('#sub-total-' + product_id).text(data.sub_total);
//         //         // $('#total-price span').text(data.total);
//         //         alert('ok');
//         //     },
//         //     error: function (xhr, ajaxoptions, thrownError) {
//         //         alert(xhr.status);
//         //         alert(thrownError);
//         //     },
//         // });
//         alert('ok');
//     });
// });

// // list product
// $(document).ready(function(){
//     function get_data(cat_id, page_num){
//         var arrange = $("#filter-arrange").find(":selected").val();
//         var data = {page_num: page_num, cat_id: cat_id, arrange: arrange};
//         console.log(data);
//         $.ajax({
//             url: '?mod=product&controller=index&action=product',
//             method: 'POST',
//             data: data,
//             dataType: 'json',
//             success: function(data){
//                 $('#'+cat_id).html(data.output);
//             },
//         });
//     };
//     $(document).on("click", ".num-page", function () {
//         var cat_id = $(this).attr('cat-id');
//         var page_num = $(this).text();
//         get_data(cat_id, page_num);
//     });
// });
// // pagination cat
// $(document).ready(function () {
//     function ferch_data(page_num) {
//         function get_filter(class_name) {
//             var filter = [];
//             $('.' + class_name + ':checked').each(function () {
//                 filter.push($(this).val());
//             });
//             return filter;
//         }
//         var price = get_filter('filter-price');
//         var brand = get_filter('filter-brand');
//         var cat_id = $('h3#cat-title').attr('cat-id');
//         var arrange = $("#filter-arrange").find(":selected").val();
//         var data = {page_num: page_num, cat_id: cat_id, price: price, brand: brand, arrange: arrange };
//         console.log(data);
//         $.ajax({
//             url: '?mod=product&controller=index&action=pagination_cat',
//             method: 'POST',
//             data: data,
//             dataType: 'json',
//             success: function (data) {
//                 $('#result-product-cat').html(data.output);
//                 $('span#num-page').text(data.num_page);
//                 $('#num-filter').text(data.num_filter);
//             },
//             error: function (xhr, ajaxoptions, thrownError) {
//                 alert(xhr.status);
//                 alert(thrownError);
//             },
//         });
//     }
//     // ferch_data();
//     $(document).on("click", ".common_selector", function () {
//         var page_num = $(this).text();
//         ferch_data(page_num);
//     });
// });
// // pagination post
// $(document).ready(function () {
//     function get_data(page_num){
//         var data = {page_num: page_num};
//         console.log(data);
//         $.ajax({
//             url: '?mod=blog&controller=index&action=pagination_post',
//             method: 'POST',
//             data: data,
//             dataType: 'json',
//             success: function (data) {
//                 $('#result_post').html(data.result_post);
//             },
//             error: function (xhr, ajaxoptions, thrownError) {
//                 alert(xhr.status);
//                 alert(thrownError);
//             },
//         });
//     };
//     $(document).on("click", ".common_selector_post", function () {
//         var page_num = $(this).text();
//         get_data(page_num);
//     });
// });

// // pagination search
// $(document).ready(function () {
//     function get_data(page_num, cat_id, value){
//         var arrange = $("#filter-arrange").find(":selected").val();
//         var data = {page_num: page_num, cat_id: cat_id, value: value, arrange: arrange};
//         console.log(data);
//         $.ajax({
//             url: '?mod=home&controller=index&action=pagination_search',
//             method: 'POST',
//             data: data,
//             dataType: 'json',
//             success: function (data) {
//                 $('#'+cat_id).html(data.result_search);
//             },
//             error: function (xhr, ajaxoptions, thrownError) {
//                 alert(xhr.status);
//                 alert(thrownError);
//             },
//         });
//     };
//     $(document).on("click", ".common_selector_search", function () {
//         var cat_id = $(this).attr('cat-id');
//         var page_num = $(this).text();
//         var value = $(this).attr('value');
//         get_data(page_num, cat_id, value);
//     });
// });
// // LOADDING PAGE
// $(window).on('load', function(event){
//     $('.loader').fadeOut('slow');
// });
// //================
// // SELECT ADDRESS
// //================

// //  select district
// $(document).ready(function(){
//     $('.province').change(function(){
//         var province = $(this).find(":selected").val();
//         var data = {province: province};
//         console.log(data);
//         $.ajax({
//             url: '?mod=cart&action=select_district',
//             method: 'POST',
//             data: data,
//             dataType: 'text',
//             success: function(data){
//                 $('.district').html(data);
//             },
//             error: function (xhr, ajaxoptions, thrownError){
//                 alert(xhr.status);
//                 alert(thrownError);
//             },
//         });
//     });
// });
// //  select commune
// $(document).ready(function(){
//     $('.district').change(function(){
//         var district = $(this).find(":selected").val();
//         var data = {district: district};
//         console.log(data);
//         $.ajax({
//             url: '?mod=cart&action=select_commune',
//             method: 'POST',
//             data: data,
//             dataType: 'text',
//             success: function(data){
//                 $('.commune').html(data);
//             },
//             error: function (xhr, ajaxoptions, thrownError){
//                 alert(xhr.status);
//                 alert(thrownError);
//             },
//         });
//     });
// });

// $(document).ready(function() {
//     show_upload_image = function () {
//         console.log(3333);
//         var upload_image = document.getElementById("upload-thumb")
//         if (upload_image.files && upload_image.files[0]) {
//             let reader = new FileReader();
//             reader.onload = function (e) {
//                 $('#upload-image').attr('src', e.target.result)
//             };
//             reader.readAsDataURL(upload_image.files[0]);
//             // let url = URL.createObjectURL(input.files[0]);
//             // upload-image.setAttribute('src', url);
//         }
//     }
// })
