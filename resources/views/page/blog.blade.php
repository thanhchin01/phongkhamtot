@extends('layouts.welcome')
@section('title', 'BLog')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm"><a href="/" class="hover:text-[#22d69f]">Trang chủ</a> / Blog</span>
        <h1 class="mt-5 text-4xl text-blue-500 font-bold">BLOG</h1>

        <!-- Dùng grid để chia layout -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-6">
            <!-- Cột trái: Nội dung chính -->
            <div class="lg:col-span-3 space-y-5">

                {{-- Bài viết --}}
                <div class="flex flex-col md:flex-row gap-4 shadow-lg rounded-xl p-4">
                    <div class="md:w-4/12">
                        <img class="w-full h-[200px] object-cover transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                            alt="">
                    </div>
                    <div class="md:w-8/12">
                        <div class="mt-2 md:mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f] block">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được đánh giá cao</span>
                            <p class="mt-2 text-sm text-gray-500">Thông báo - 10/10/2024</p>
                            <p class="mt-3 text-sm leading-relaxed">
                                Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy tín để thăm khám sức khỏe răng
                                miệng hay không?
                                Vậy thì bài viết này sẽ dành cho bạn...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4 shadow-lg rounded-xl p-4">
                    <div class="md:w-4/12">
                        <img class="w-full h-[200px] object-cover transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/5%20phong%20kham%20da%20lieu%20HCM/WPKT-45-01(1).png"
                            alt="">
                    </div>
                    <div class="md:w-8/12">
                        <div class="mt-2 md:mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f] block">Top 5 phòng khám da liễu uy tín tại
                                TP.HCM</span>
                            <p class="mt-2 text-sm text-gray-500">Tin tức - 10/10/2024</p>
                            <p class="mt-3 text-sm leading-relaxed">
                                Đã bao giờ bạn gặp vấn đề về làn da của mình và phân vân nên tìm địa chỉ phòng khám nào là
                                uy tín để điều trị chưa?...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4 shadow-lg rounded-xl p-4">
                    <div class="md:w-4/12">
                        <img class="w-full h-[200px] object-cover transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="md:w-8/12">
                        <div class=" mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f]">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được đánh giá
                                cao</span>
                            <p class="mt-3">Thông báo - 10/10/2024
                            <p class="mt-3">Bạn đang tìm kiếm một nền tảng trực tuyến về Y tế và Chăm sóc sức khỏe toàn
                                diện kết nối người nhà/bệnh nhân đến với các cơ sở phòng khám đầy đủ các chuyên khoa cùng
                                đội ngũ y bác sĩ giỏi trên toàn quốc. Đọc bài viết này...</p>
                        </div>
                    </div>
                </div>
                 <div class="flex flex-col md:flex-row gap-4 shadow-lg rounded-xl p-4">
                    <div class="md:w-4/12">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="md:w-8/12">
                        <div class=" mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f]">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được đánh giá
                                cao</span>
                            <p class="mt-3">Thông báo - 10/10/2024
                            <p class="mt-3">Bạn đang tìm kiếm một nền tảng trực tuyến về Y tế và Chăm sóc sức khỏe toàn
                                diện kết nối người nhà/bệnh nhân đến với các cơ sở phòng khám đầy đủ các chuyên khoa cùng
                                đội ngũ y bác sĩ giỏi trên toàn quốc. Đọc bài viết này...</p>
                        </div>
                    </div>
                </div>
                 <div class="flex flex-col md:flex-row gap-4 shadow-lg rounded-xl p-4">
                    <div class="md:w-4/12">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="md:w-8/12">
                        <div class=" mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f]">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được đánh giá
                                cao</span>
                            <p class="mt-3">Thông báo - 10/10/2024
                            <p class="mt-3">Bạn đang tìm kiếm một nền tảng trực tuyến về Y tế và Chăm sóc sức khỏe toàn
                                diện kết nối người nhà/bệnh nhân đến với các cơ sở phòng khám đầy đủ các chuyên khoa cùng
                                đội ngũ y bác sĩ giỏi trên toàn quốc. Đọc bài viết này...</p>
                        </div>
                    </div>
                </div>
                {{-- Tin tức --}}
                <div class="shadow-lg rounded-xl mt-5 p-5">
                    <h1 class="text-3xl text-blue-500 font-bold mb-4">TIN TỨC</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a class="block shadow-lg rounded-2xl overflow-hidden bg-white">
                            <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                                alt=""
                                class="w-full h-[150px] object-cover transition duration-300 hover:scale-105">
                            <div class="p-4 text-left">
                                <h2 class="text-sm font-bold hover:text-green-500">Top địa chỉ nha khoa Thủ Đức uy tín</h2>
                                <p class="text-sm mt-3">Thông báo - 14/10/2024</p>
                                <p class="mt-2 text-sm">Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy tín
                                    để..</p>
                            </div>
                        </a>
                        <!-- Thêm các bài khác tương tự -->
                    </div>
                    <div class="mt-7 text-center">
                        <a href="/tintuc"
                            class="inline-block bg-[#22d69f] rounded-lg px-5 py-2 text-white font-medium hover:shadow-xl transition">
                            Xem thêm
                        </a>
                    </div>
                </div>

                {{-- Thông báo --}}
                <div class="shadow-lg rounded-xl mt-5 p-5">
                    <h1 class="text-3xl text-blue-500 font-bold mb-4">THÔNG BÁO</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a class="block shadow-lg rounded-2xl overflow-hidden bg-white">
                            <img src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                                alt=""
                                class="w-full h-[150px] object-cover transition duration-300 hover:scale-105">
                            <div class="p-4 text-left">
                                <h2 class="text-sm font-bold hover:text-green-500">Phòng khám tốt - nền tảng uy tín</h2>
                                <p class="text-sm mt-3">Tin tức - 14/10/2024</p>
                                <p class="mt-2 text-sm">Bạn đang tìm kiếm nền tảng y tế & chăm sóc sức khỏe toàn diện...</p>
                            </div>
                        </a>
                    </div>
                    <div class="mt-7 text-center">
                        <a href="/thongbao"
                            class="inline-block bg-[#22d69f] rounded-lg px-5 py-2 text-white font-medium hover:shadow-xl transition">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cột phải: Tin nổi bật -->
            <div class="bg-blue-900 shadow-lg rounded-lg p-5 h-fit">
                <h1 class="text-3xl font-bold text-white">TIN NỔI BẬT</h1>

                <div class="mt-4 space-y-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow">
                        <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                            alt="" class="w-full h-[150px] object-cover transition duration-300 hover:scale-105">
                        <div class="p-4">
                            <h2 class="text-sm font-bold hover:text-green-500">Top địa chỉ nha khoa Thủ Đức uy tín</h2>
                            <p class="text-sm mt-3">Thông báo - 14/10/2024</p>
                            <p class="mt-2 text-sm">Có phải bạn đang tìm kiếm trung tâm nha khoa uy tín tại Thủ Đức...</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl overflow-hidden shadow">
                        <img src="https://phongkhamtot.com/uploads/static/tin-tuc/5%20phong%20kham%20da%20lieu%20HCM/WPKT-45-01(1).png"
                            alt="" class="w-full h-[150px] object-cover transition duration-300 hover:scale-105">
                        <div class="p-4">
                            <h2 class="text-sm font-bold hover:text-green-500">Top 5 phòng khám da liễu uy tín</h2>
                            <p class="text-sm mt-3">Tin tức - 14/10/2024</p>
                            <p class="mt-2 text-sm">Gợi ý phòng khám da liễu được đánh giá cao tại TP.HCM...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
