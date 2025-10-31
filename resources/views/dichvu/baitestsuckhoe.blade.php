@extends('layouts.duocqtam')
@section('title', 'Được Quan Tâm Nhất')

@section('content')
    <div class="gap-6 ">
        <h1 class="text-3xl text-blue-500 font-bold">BÀI TEST SỨC KHỎE</h1>
        <div class="flex flex-cols gap-2 mt-4">
            <span class="font-medium">0</span>
            <p>phòng khám đang chờ bạn</p>
        </div>
        <div class="mt-9 flex justify-center">
            <img src="https://phongkhamtot.com/frontend/home/images/no_result_img.png" alt="" class="w-[400px] ">
        </div>
        <h1 class="text-blue-500 text-3xl font-medium text-center mt-5">KHÔNG TÌM THẤY KẾT QUẢ PHÙ HỢP</h1>
        <p class="text-gray-500 mt-2 text-center">Thử lại bằng tiêu chí khác</p>
        <div class="mt-4 flex justify-center"><a href="http://127.0.0.1:8000/duocquantam"
                class="bg-[#22d69f] text-white px-4 py-2 rounded-lg">Thử lại<i class="fa-solid fa-rotate-right ms-2"></i></a></div>
    </div>
@endsection
