@extends('layouts.welcome')
@section('title', 'Được Quan Tâm Nhất')

@section('content')
    <div class="main-body">
        <section class="relative w-full h-[400px]">
            <img src="https://phongkhamtot.com/frontend/home/images/banner_head_2.jpg" alt=""
                class="w-full h-full object-cover">
            <div class="absolute inset-0 flex flex-col justify-center text-white text-left p-6">
                <h1 class="text-4xl font-bold drop-shadow-lg text-blue-700">ĐĂNG TIN PHÒNG KHÁM</h1>
                <h1 class="text-4xl font-bold drop-shadow-lg">MỘT CHẠM TIẾP CẬN BỆNH NHÂN</h1>
            </div>
        </section>
        {{-- liên hệ --}}
        <section class="mt-4 p-6 text-center">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-blue-500">CHỈ 4 BƯỚC ĐƠN GIẢN</h1>
                <h1 class="text-3xl font-bold text-blue-500">ĐƯA PHÒNG KHÁM CỦA BẠN LÊN HỆ THỐNG PHÒNG KHÁM TỐT</h1>
            </div>
            <img src="https://phongkhamtot.com/frontend/home/images/img_procedure.png" alt="">
            <a href="http://127.0.0.1:8000/lienhe" class="bg-[#22d69f] text-white px-4 py-4 rounded-lg font-medium hover:shadow-xl transition">Liên hệ quản trị viên</a>
        </section>
        <section class="mt-4 p-6">
            <div class="p-6">
                <h1 class="text-3xl text-blue-500 font-bold">CHỌN PHÒNG KHÁM TỐT ĐỂ ĐỊNH VỊ VÀ QUẢNG BÁ PHÒNG KHÁM CỦA BẠN
                    TRÊN TOÀN QUỐC</h1>
            </div>
            <div class="max-w-8xl p-4 grid grid-cols-3 gap-2 px-10">
                <a href="#" class="shadow-lg rounded-2xl p-6 bg-white gap-6">
                    <div class="w-20 h-20 rounded-full bg-[#22d69f] flex items-center justify-center">
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_benefit_1.svg" alt=""
                            class="w-10 h-10 object-contain">
                    </div>
                    <h2 class="text-lg font-medium text-[#22d69f] mt-2">Xác thực cơ sở y tế</h2>
                    <h2 class=" text-sm text-gray-800 mt-2">Xác thực vị trí, số điện thoại, địa điểm thời gian làm
                        việc của phòng khám để bệnh nhân có thể tin tưởng và dễ dàng liên hệ để dặt lịch hẹn</h2>
                </a>

                <a href="#" class="shadow-lg rounded-2xl p-6 bg-white gap-6">
                    <div class="w-20 h-20 rounded-full bg-[#22d69f] flex items-center justify-center">
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_benefit_2.svg" alt=""
                            class="w-10 h-10 object-contain">
                    </div>
                    <h2 class="text-lg font-medium text-[#22d69f] mt-2">Tăng khả năng tiếp cận</h2>
                    <h2 class=" text-sm text-gray-800 mt-2">Phòng khám của bạn được giới thiệu trên trang web chất lượng và
                        có lượng truy cập cao mỗi ngày tăng khả năng tiếp cận với bệnh nhân.</h2>
                </a>
                <a href="#" class="shadow-lg rounded-2xl p-6 bg-white gap-6">
                    <div class="w-20 h-20 rounded-full bg-[#22d69f] flex items-center justify-center">
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_benefit_3.svg" alt=""
                            class="w-10 h-10 object-contain">
                    </div>
                    <h2 class="text-lg font-medium text-[#22d69f] mt-2">Có trang riêng giới thiệu về phòng khám tốt, Bác sĩ
                        giỏi</h2>
                    <h2 class=" text-sm text-gray-800 mt-2">Phòng khám của bạn được xây dựng chuyên nghiệp, bắt mắt, đầy đủ
                        tất cả các thông tin và lịch hẹn khám.</h2>
                </a>
                <a href="#" class="shadow-lg rounded-2xl p-6 bg-white gap-6">
                    <div class="w-20 h-20 rounded-full bg-[#22d69f] flex items-center justify-center">
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_benefit_4.svg" alt=""
                            class="w-10 h-10 object-contain">
                    </div>
                    <h2 class="text-lg font-medium text-[#22d69f] mt-2">Tiết kiệm chi phí lên đến 80%</h2>
                    <h2 class=" text-sm text-gray-800 mt-2">Tiết kiệm so với việc tự xây dựng và quảng cáo Phòng khám của
                        bạn trên Website cá nhân.</h2>
                </a>
                <a href="#" class="shadow-lg rounded-2xl p-6 bg-white gap-6">
                    <div class="w-20 h-20 rounded-full bg-[#22d69f] flex items-center justify-center">
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_benefit_5.svg" alt=""
                            class="w-10 h-10 object-contain">
                    </div>
                    <h2 class="text-lg font-medium text-[#22d69f] mt-2">Định hướng cùng đối tượng khách hàng</h2>
                    <h2 class=" text-sm text-gray-800 mt-2">Kênh phát triển khách hàng tiềm năng cho Phòng khám của bạn.
                    </h2>
                </a>
                <a href="#" class="shadow-lg rounded-2xl p-6 bg-white gap-6">
                    <div class="w-20 h-20 rounded-full bg-[#22d69f] flex items-center justify-center">
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_benefit_6.svg" alt=""
                            class="w-10 h-10 object-contain">
                    </div>
                    <h2 class="text-lg font-medium text-[#22d69f] mt-2">Bệnh nhân dễ dàng đặt lịch khám</h2>
                    <h2 class=" text-sm text-gray-800 mt-2">Dễ dàng đặt lịch phòng khám của bạn 24/7 thay vì chỉ bị giới hạn
                        trong giờ hành chính như dịch vụ truyền thống.</h2>
                </a>
            </div>
        </section>

        {{-- CHuyển đổi số --}}
        <section class="mt-4 p-6">
            <div class="text-center">
                <h1 class="text-blue-500 text-3xl font-bold">CHUYỂN ĐỔI SỐ CÙNG PHÒNG KHÁM TỐT</h1>
            </div>
            <div class="overflow-x-auto rounded-lg p-6">
                <table class="w-full text-left border-collapse text-center">
                    <thead>
                        <tr class="text-white text-lg font-semibold">
                            <th class="p-4 rounded-tl-2xl bg-gradient-to-r from-green-300 to-blue-600">Tiêu chí</th>
                            <th class="p-4 bg-gradient-to-r from-green-300 to-blue-600">Thông qua Phòng Khám Tốt</th>
                            <th class="p-4 rounded-tr-2xl bg-gradient-to-r from-green-300 to-blue-600">Trực tiếp tại Phòng
                                khám</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="p-4 font-medium">Phòng khám</td>
                            <td class="p-4">Được giới thiệu chuyên nghiệp, đầy đủ, chính xác, trực quan</td>
                            <td class="p-4">Thường bị dài dòng, nhiều từ ngữ chuyên ngành khó hiểu</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium">Bác sĩ</td>
                            <td class="p-4">Nhiều bác sĩ để lựa chọn</td>
                            <td class="p-4">Lượng bác sĩ bị hạn chế</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium">Chuyên khoa</td>
                            <td class="p-4">Đề xuất các chuyên khoa nổi bật</td>
                            <td class="p-4">Không có sự phân biệt giữa các chuyên khoa</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium">Đặt lịch</td>
                            <td class="p-4">Mọi lúc mọi nơi</td>
                            <td class="p-4">Trong giờ hành chính</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium">Giá khám</td>
                            <td class="p-4">Công khai, rõ ràng</td>
                            <td class="p-4">Khó hiểu</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium rounded-bl-2xl">Thời gian chờ</td>
                            <td class="p-4">Giảm thiểu</td>
                            <td class="p-4 rounded-br-2xl">Lấy số thứ tự, chờ lâu</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        {{-- Hỗ trợ khách hàng --}}
        <section class="mt-4 p-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-blue-500">HỖ TRỢ KHÁCH HÀNG</h1>
                <p class="text-gray-500 mt-3">Bạn cần hỗ trợ <span class="text-green-500">Tìm kiếm, Đăng tin. Thanh
                        toán?</span> Liên hệ với chúng tôi ngay qua các hình thức:</p>
            </div>
            <div class="grid grid-cols-4 mt-4 gap-6">
                <!-- Card 1 -->
                <div class="items-center justify-center shadow-lg rounded-2xl p-4 text-center">
                    <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_mail.svg" alt=""
                        class="w-24 mx-auto">
                    <h2 class="text-lg font-bold text-blue-500">Mail</h2>
                    <p class="text-lg mt-3">Chúng tôi sẽ trả lời thắc mắc của bạn trong vòng 24h</p>
                    <a href=""
                        class="block w-full bg-[#22d69f] text-white px-4 py-2 mt-2 rounded-lg hover:bg-blue-500">Email
                        ngay</a>
                </div>

                <!-- Card 2 -->
                <div class="items-center justify-center shadow-lg rounded-2xl p-4 text-center">
                    <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_phone.svg" alt=""
                        class="w-24 mx-auto">
                    <h2 class="text-lg font-bold text-blue-500">Hotline 24/7</h2>
                    <p class="text-lg mt-3">Điện thoại viên luôn sẵn sàng giải đáp cho bạn</p>
                    <a href=""
                        class="block w-full bg-[#22d69f] text-white px-4 py-2 mt-2 rounded-lg hover:bg-blue-500">Gọi
                        ngay</a>
                </div>
                <!-- Card 3 -->
                <div class="items-center justify-center shadow-lg rounded-2xl p-4 text-center">
                    <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_mess.svg" alt=""
                        class="w-24 mx-auto">
                    <h2 class="text-lg font-bold text-blue-500">Facebook</h2>
                    <p class="text-lg mt-3">Nhắn tín với chúng tôi trên nền tảng facebook messenger</p>
                    <a href="#"
                        class="block w-full bg-[#22d69f] text-white px-4 py-2 mt-2 rounded-lg hover:bg-blue-500">Gửi tin
                        nhắn</a href="#">
                </div>
                {{-- card 4 --}}
                <div class="items-center justify-center shadow-lg rounded-2xl p-4 text-center">
                    <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_zalo.svg" alt=""
                        class="w-24 mx-auto">
                    <h2 class="text-lg font-bold text-blue-500">Zalo</h2>
                    <p class="text-lg mt-3">Nhắn tin hoặc gọi chúng tôi trên nền tảng Zalo</p>
                    <a href="#"
                        class="block w-full bg-[#22d69f] text-white px-4 py-2 mt-2 rounded-lg hover:bg-blue-500">Liên hệ
                        ngay
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
