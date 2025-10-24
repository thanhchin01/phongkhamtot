@extends('layouts.welcome')
@section('title', 'Được Quan Tâm Nhất')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm"><a href="http://127.0.0.1:8000/" class="hover:text-[#22d69f]">Trang chủ</a>/Liên hệ</span>
        <section class="p-4 bg-white overflow-x-auto rounded-xl shadow-lg">
            <h1 class="text-3xl font-medium text-blue-500 mt-2">LIÊN HỆ NGAY VỚI CHÚNG TÔI</h1>
            <div class="grid grid-cols-2">
                <div class="p-3 gap-3 space-y-3">
                    <label class="text-bold text-lg block">Họ và tên</label>
                    <input type="text" class="w-full h-12 bg-gray-200 rounded-lg px-4 py-3" placeholder="Ví dụ: Nguyễn Văn A">
                    <label class="text-bold text-lg block">Số điện thoại</label>
                    <input type="text" class="w-full h-12 bg-gray-200 rounded-lg px-4 py-3" placeholder="Ví dụ: 0123456789">
                    <label class="text-bold text-lg block">Ghi chú</label>
                    <textarea
                        class="w-full h-24 bg-gray-200 rounded-lg px-4 py-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Nội dung..."></textarea>
                    <button class="px-4 py-3 text-center bg-[#22d69f] text-white rounded-xl text-lg font-medium hover:shadow-xl transition">Gửi<i class="fa-solid fa-paper-plane ms-2"></i></button>
                </div>
                <img src="https://phongkhamtot.com/frontend/home/images/cover.jpg" alt="" class="h-full">
            </div>
        </section>
    </div>
@endsection
