@extends('layouts.welcome')
@section('title', 'Được Quan Tâm Nhất')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm"><a href="http://127.0.0.1:8000/" class="hover:text-[#22d69f]">Trang chủ</a> / Blog</span>
        <h1 class="mt-5 text-4xl text-blue-500 font-bold">BLOG</h1>
        <div class="flex gap-4">
            <div class="w-9/12 p-4">
                {{-- chia thành 2 phần --}}
                <div class="flex gap-4 shadow-lg rounded-xl">
                    <div class="w-4/12 ">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                            alt="">
                    </div>
                    <div class="w-8/12">
                        <div class=" mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f]">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được đánh giá
                                cao</span>
                            <p class="mt-3">Thông báo - 10/10/2024
                            <p class="mt-3">Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy tín để thăm khám
                                sức khỏe
                                răng miệng hay không? Vậy thì bài viết này sẽ dành cho bạn. Hôm nay mình sẽ chia sẻ đến
                                bạn top phòng khám</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 shadow-lg rounded-xl mt-5">
                    <div class="w-4/12 ">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/5%20phong%20kham%20da%20lieu%20HCM/WPKT-45-01(1).png"
                            alt="">
                    </div>
                    <div class="w-8/12">
                        <div class=" mt-4">
                            <span class="text-sm font-bold hover:text-[#22d69f]">Top địa chỉ nha khoa Thủ Đức uy tín,
                                được đánh giá
                                cao</span>
                            <p class="mt-3">Thông báo - 10/10/2024
                            <p class="mt-3">Đã bao giờ bạn gặp vấn đề về làn da của mình và bạn phân vân, đặt ra câu hỏi
                                nên tìm địa chỉ phòng khám nào là uy tín để điều trị da chưa? Sức khỏe và vẻ đẹp của làn da
                                luôn là vấn đề không chỉ nữ giới mà cả nam giới cũng quan trọng</p>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 shadow-lg rounded-xl mt-5">
                    <div class="w-4/12 ">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="w-8/12">
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
                <div class="flex gap-4 shadow-lg rounded-xl mt-5">
                    <div class="w-4/12 ">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="w-8/12">
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
                <div class="flex gap-4 shadow-lg rounded-xl mt-5">
                    <div class="w-4/12 ">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="w-8/12">
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
                <div class="flex gap-4 shadow-lg rounded-xl mt-5">
                    <div class="w-4/12 ">
                        <img class="w-full h-[200px] transition duration-300 hover:scale-105 rounded-xl"
                            src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                            alt="">
                    </div>
                    <div class="w-8/12">
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
                <div class="shadow-lg rounded-xl mt-5 p-5 gap-4">
                    <h1 class="text-3xl text-blue-500 font-bold">TIN TỨC</h1>
                    <div class="grid grid-cols-3 gap-4 flex flex-col">
                        <a class="h-[210px]items-center justify-center shadow-lg rounded-2xl overflow-hidden bg-white mt-3">
                            <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                                alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                            <div class="p-4 text-left">
                                <h2 class="text-sm font-bold hover:text-green-500">Top địa chỉ nha khoa Thủ Đức uy tín, được
                                    đánh
                                    giá cao</h2>
                                <p class="text-sm mt-3">Thông báo - 14/10/2024</p>
                                <p class="mt-2 text-sm mt-3">Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy
                                    tín để..</p>
                            </div>
                        </a>
                        <a class="h-[210px]items-center justify-center shadow-lg rounded-2xl overflow-hidden bg-white mt-3">
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
                        <a class="h-[210px]items-center justify-center shadow-lg rounded-2xl overflow-hidden bg-white mt-3">
                            <img src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                                alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                            <div class="p-4 text-left">
                                <h2 class="text-sm font-bold hover:text-green-500">PHÒNG KHÁM TỐT - NỀN TẢNG TÌM
                                    KIẾM PHÒNG KHÁM UY
                                    TÍN</h2>
                                <p class="text-sm mt-3">Tin tức - 14/10/2024</p>
                                <p class="mt-2 text-sm mt-3">Bạn đang tìm kiếm 1 nền tảng trực tuyến về Y tế và chăm
                                    sóc sức
                                    khỏe...</p>
                            </div>
                        </a>
                    </div>
                    <div class="mt-7">
                        <a href="http://127.0.0.1:8000/tintuc"
                            class="w-[150px] bg-[#22d69f] rounded-lg px-4 py-3 text-center text-white font-medium hover:shadow-xl transion">Xem
                            thêm</a>
                    </div>
                </div>
                {{-- Thông báo --}}
                <div class="shadow-lg rounded-xl mt-5 p-5 gap-4">
                    <h1 class="text-3xl text-blue-500 font-bold">THÔNG BÁO</h1>
                    <div class="grid grid-cols-3 gap-4 flex flex-col">
                        <a class="h-[210px]items-center justify-center shadow-lg rounded-2xl overflow-hidden bg-white mt-3">
                            <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                                alt=""
                                class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
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
                                alt=""
                                class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
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
                    <div class="mt-7">
                        <a href="http://127.0.0.1:8000/thongbao"
                            class="w-[150px] bg-[#22d69f] rounded-lg px-4 py-3 text-center text-white font-medium hover:shadow-xl transion">Xem
                            thêm</a>
                    </div>
                </div>
            </div>
            <div class="w-3/12 p-4 bg-blue-900 shadow-lg rounded-lg gap-6 h-fit">
                <h1 class="text-4xl font-bold text-white">TIN NỔI BẬT</h1>
                <div href="#" class="h-[210px]items-center justify-center shadow-lg rounded-2xl bg-white mt-3">
                    <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                        alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                    <div class="p-4 text-left">
                        <h2 class="text-sm font-bold hover:text-green-500">Top địa chỉ nha khoa Thủ Đức uy tín, được đánh
                            giá cao</h2>
                        <p class="text-sm mt-3">Thông báo - 14/10/2024</p>
                        <p class="mt-2 text-sm mt-3">Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy tín để
                            thăm...</p>
                    </div>
                </div>
                <div href="#" class="h-[210px]items-center justify-center shadow-lg rounded-2xl bg-white mt-3">
                    <img src="https://phongkhamtot.com/uploads/static/tin-tuc/5%20phong%20kham%20da%20lieu%20HCM/WPKT-45-01(1).png"
                        alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                    <div class="p-4 text-left">
                        <h2 class="text-sm font-bold hover:text-green-500">TOP 05 PHÒNG KHÁM DA LIỄU UY TÍN TẠI TP.HỒ CHÍ
                            MINH</h2>
                        <p class="text-sm mt-3">Tin tức - 14/10/2024</p>
                        <p class="mt-2 text-sm mt-3">Đã bao giờ bạn gặp vấn đề về làn da của mình và bạn phân vân, đặt ra
                            câu hỏi nên tìm địa chỉ phòng khám nào là..</p>
                    </div>
                </div>
                <div href="#" class="h-[210px]items-center justify-center shadow-lg rounded-2xl bg-white mt-3">
                    <img src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                        alt="" class="w-full h-[150px] transition duration-300 hover:scale-105 rounded-xl">
                    <div class="p-4 text-left">
                        <h2 class="text-sm font-bold hover:text-green-500">PHÒNG KHÁM TỐT - NỀN TẢNG TÌM KIẾM PHÒNG KHÁM UY
                            TÍN</h2>
                        <p class="text-sm mt-3">Tin tức - 14/10/2024</p>
                        <p class="mt-2 text-sm mt-3">Bạn đang tìm kiếm 1 nền tảng trực tuyến về Y tế và chăm sóc sức
                            khỏe...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
