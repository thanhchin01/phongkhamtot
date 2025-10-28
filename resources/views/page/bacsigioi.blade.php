@extends('layouts.welcome')
@section('title', 'Thông báo')

@section('content')
    <section class="bg-gradient-to-b from-white to-blue-50 py-16 px-8" x-data x-init="const counters = document.querySelectorAll('[data-target]');
    counters.forEach(counter => {
        let start = 0;
        const target = +counter.getAttribute('data-target');
        const duration = 1500; // thời gian hoàn thành (ms)
        const stepTime = 20; // thời gian mỗi bước
        const increment = target / (duration / stepTime);

        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                counter.innerText = target.toLocaleString();
                clearInterval(timer);
            } else {
                counter.innerText = Math.floor(start).toLocaleString();
            }
        }, stepTime);
    });">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="relative flex justify-center">
                <div class="absolute w-3/4 h-3/4 bg-[#22d69f] top-8 left-6 rounded-lg -z-10"></div>
                <div class="absolute w-2/3 h-3/4 bg-blue-500 top-24 right-0 rounded-lg -z-10"></div>
                <img src="https://phongkhamtot.com/frontend/home/images/box_data_img.jpg" alt="Bác sĩ"
                    class="relative max-w-full" />
            </div>

            <div class="text-center md:text-left">
                <h1 class="text-3xl font-bold mb-8">
                    <span class="text-blue-500">TẠI SAO CHỌN </span>
                    <span class="text-green-500">PHÒNG KHÁM TỐT</span>
                </h1>

                <div class="grid grid-cols-3 gap-6 justify-items-center text-center">
                    <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                        <h2 class="text-[#22d69f] text-2xl font-bold" data-target="60000">0</h2>
                        <p class="text-gray-600 text-sm mt-1 font-bold">Phòng Khám Uy Tín</p>
                    </div>

                    <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                        <h2 class="text-[#22d69f] text-2xl font-bold" data-target="8000">0</h2>
                        <p class="text-gray-600 text-sm mt-1 font-bold">Bác sĩ giỏi toàn quốc</p>
                    </div>

                    <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                        <h2 class="text-[#22d69f] text-2xl font-bold" data-target="20">0</h2>
                        <p class="text-gray-600 text-sm mt-1 font-bold">Chuyên khoa</p>
                    </div>

                    <div class="col-span-3 flex justify-center gap-6 mt-3">
                        <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                            <h2 class="text-[#22d69f] text-2xl font-bold" data-target="90000">0</h2>
                            <p class="text-gray-600 text-sm mt-1 font-bold">Khách hàng tìm kiếm</p>
                        </div>
                        <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                            <h2 class="text-[#22d69f] text-2xl font-bold" data-target="8000">0</h2>
                            <p class="text-gray-600 text-sm mt-1 font-bold">Lịch hẹn khám</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center mt-4">
        <span class="text-sm"><a href="http://127.0.0.1:8000/" class="hover:text-[#22d69f]">Trang chủ</a>/ Bác sĩ
            giỏi</span>
        <h1 class="mt-3 text-3xl text-blue-500 font-bold">BÁC SĨ GIỎI</h1>
    </div>
    <div class="relative w-full">
        <!-- Nút cuộn trái -->
        <button id="scrollLeft"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-100 transition z-10">
            <i class="fa-solid fa-chevron-left text-gray-600"></i>
        </button>
        <!-- Nút cuộn phải -->
        <button id="scrollRight"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full w-10 h-10 flex items-center justify-center hover:bg-blue-100 transition z-10">
            <i class="fa-solid fa-chevron-right text-gray-600"></i>
        </button>
        <!-- Dãy card -->
        <div id="serviceList"
            class="grid grid-flow-col auto-cols-[minmax(13rem,1fr)] gap-4 mt-5 overflow-x-auto scroll-smooth no-scrollbar px-10">
            <!-- Card -->
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl w-52 h-52 p-6 transition text-center">
                <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_14.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2">
                <h2 class="p-3 text-xl font-medium">Cơ Xương Khớp</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl w-52 h-52 p-6 transition text-center">
                <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_1.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2">
                <h2 class="p-3 text-xl font-medium">Da Liễu</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl w-52 h-52 p-6 transition text-center">
                <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_2.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2">
                <h2 class="p-3 text-xl font-medium">Hô Hấp</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_13.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Ngoại Khoa</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_4.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Nha Khoa</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_5.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Nhi Khoa</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_10.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Nội Khoa</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg text-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_6.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Phục Hồi Chức Năng</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg text-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_7.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Răng Hàm Mặt</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_3.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Sản Phụ Khoa</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_9.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Tai Mũi Họng</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_8.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Thẩm Mỹ Viện</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_11.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Tim Mạch</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_12.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Ung Bướu</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg text-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_13.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Xét Nghiệm Y Khoa</h2>
            </a>
            <a href="#"
                class="flex flex-col items-center justify-center shadow-lg text-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                    src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_15.png" alt=""
                    class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                <h2 class="p-3 text-xl font-medium">Y Học Cổ Truyền</h2>
            </a>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="bg-gray-200 relative w-64 border rounded-lg p-2 w-full md:w-auto mt-3">
            <button class="flex flex-cols dropdown-btn w-full flex justify-center px-4 py-2 rounded-lg ">
                <span class="font-bold">Chọn khu vực</span>
                <i class="fa fa-chevron-down mt-1 ms-2"></i>
            </button>
            <ul class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg text-center">
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                    Hồ Chí Minh
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                    Hà Nội
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                    Đà Nẵng
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                    Bà Rịa - Vũng Tàu
                </li>
                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                    Huế
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6 w-full">
            <a href="http://127.0.0.1:8000/ttbacsi">
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/jpb3/img_doctor03.jpg" alt=""
                    class="h-[300px] w-full bg-blue-500">
                <p class="font-medium text-xl mt-2">Nguyễn Bảo Trọng</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Thẩm mỹ viện</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Thẩm mỹ viện SBC Japan</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/bac-si-phong-min.jpg"
                    alt="" class="h-[300px] w-full">
                <p class="font-medium text-lg mt-2">Bác Sĩ CKI Châu Thanh Phong</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Thẩm mỹ viện</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/pngtree-flat-illustration-of-a-male-doctor-avatar-upper-body-in-youth-vector-picture-image_10580735.png"
                    alt="" class="h-[300px] w-full bg-blue-500">
                <p class="font-medium text-lg mt-2">Bác sĩ Lâm Đăng Khoa</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Châm cứu</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/pngtree-flat-illustration-of-a-male-doctor-avatar-upper-body-in-youth-vector-picture-image_10580735.png"
                    alt="" class="h-[300px] w-full bg-blue-500">
                <p class="font-medium text-lg mt-2">Bác sĩ Trịnh Quang Ngọc</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Châm cứu</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/bac-si-Pascal-Oxeda.jpg"
                    alt="" class="h-[300px]">
                <p class="font-medium text-lg mt-2">Tiến sĩ, bác sĩ Oxeda:</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Thẩm mĩ viện</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/bac-si-Alain-Michel.jpg"
                    alt="" class="h-[300px]">
                <p class="font-medium text-lg mt-2">Thạc sĩ, bác sĩ Alain Michel</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Sản phụ khoa</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/bac-si-huong-min.jpg"
                    alt="" class="h-[300px] w-full">
                <p class="font-medium text-lg mt-2">Bác sĩ Ngô Thị Vân Hương</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Thẩm mĩ viện</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
            <a>
                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/benh-vien-quoc-te-thao-dien/bac-si-thang.jpg"
                    alt="" class="h-[300px]">
                <p class="font-medium text-lg mt-2">Bác sĩ Philip Thang Nguyen</p>
                <div class="text-yellow-500 mt-2">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="flex flex-cols mt-2"><b>Chuyên khoa:</b>
                    <p>Thẩm mĩ viện</p>
                </div>
                <div class="flex flex-cols mt-2"><b>Đơn vị:</b>
                    <p>Bệnh viện quốc tế Thảo Điền</p>
                </div>
            </a>
        </div>
    </div>
@endsection
