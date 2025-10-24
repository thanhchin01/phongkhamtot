@extends('layouts.welcome')
@section('title', 'Thông báo')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm"><a href="http://127.0.0.1:8000/" class="hover:text-[#22d69f]">Trang chủ</a>/ <a
                href="http://127.0.0.1:8000/blog" class="hover:text-[#22d69f]">Blog</a>/ Thông báo</span>
        <h1 class="text-3xl font-bold text-blue-500 mt-4">THÔNG BÁO</h1>
        <div class="flex gap-4">
            <div class="w-9/12 p-5 gap-4">
                <div class="grid grid-cols-3 gap-4 flex flex-col">
                    <a class="h-[210px]items-center justify-center shadow-lg rounded-2xl bg-white mt-3">
                        <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                            alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                        <div class="p-4 text-left">
                            <h2 class="text-sm font-bold hover:text-green-500">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được
                                đánh
                                giá cao</h2>
                            <p class="text-sm mt-3">Thông báo - 14/10/2024</p>
                            <p class="mt-2 text-sm mt-3">Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy
                                tín để..</p>
                        </div>
                    </a>
                    <a class="h-[210px]items-center justify-center shadow-lg rounded-2xl bg-white mt-3">
                        <img src="https://phongkhamtot.com/uploads/static/tin-tuc/5%20phong%20kham%20da%20lieu%20HCM/WPKT-45-01(1).png"
                            alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                        <div class="p-4 text-left">
                            <h2 class="text-sm font-bold hover:text-green-500">TOP 05 PHÒNG KHÁM DA LIỄU UY TÍN TẠI
                                TP.HỒ CHÍ
                                MINH</h2>
                            <p class="text-sm mt-3">Tin tức - 14/10/2024</p>
                            <p class="mt-2 text-sm mt-3">Đã bao giờ bạn gặp vấn đề về làn da của mình và bạn phân
                                vân, đặt ra
                                câu..</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    @endsection
