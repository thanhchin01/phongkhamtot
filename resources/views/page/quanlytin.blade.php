@extends('layouts.welcome')
@section('title', 'Hướng Dẫn')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm sticky top-20 self-start"><a href="http://127.0.0.1:8000/" class="hover:text-[#22d69f]">Trang chủ</a>/ <a
                href="http://127.0.0.1:8000/huongdan" class="hover:text-[#22d69f]">Hướng dẫn</a>/Quản lý tin</span>
        <div class="flex gap-4">
            <div class="w-4/12 p-4 gap-4 flex flex-col sticky top-24 self-start">
                <a href="http://127.0.0.1:8000/huongdan" class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Hưỡng dẫn tìm
                    kiếm</a>
                <a href="http://127.0.0.1:8000/hdtaotaikhoan" class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Tạo tài
                    khoản</a>
                <a href="http://127.0.0.1:8000/hddangtin" class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Hưỡng dẫn đăng
                    tin</a>
                <a href="http://127.0.0.1:8000/quanlytin" class="bg-blue-500 px-4 py-3 rounded-lg font-bold">Quản lý tin</a>
            </div>
            <div class="w-8/12 p-4 shadow-lg rounded-lg gap-6">
                <h1 class="text-3xl text-blue-500 font-bold">QUẢN LÝ TIN</h1>
                <p class="mt-5 text-red-500 font-bold">Nếu bạn muốn quản lý các tin Phòng khám mà mình đã đăng hoặc chỉnh
                    sửa thông tin Phòng khám đã đăng trước đó:
                </p>
                <p class="mt-4">- Nhấn vào nút "Tài khoản của bạn" sau đó chọn mục "Quản lý tin"</p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736741242.png" alt="">
                <p class="mt-6">
                    Tại đây, giao diện quản lý tin sẽ hiển thị danh sách các tin đăng mà bạn đã thực hiện.
                </p>
                <p class="mt-6">
                    Nếu bạn muốn chỉnh sửa một tin đã đăng, chỉ cần chọn tin cần chỉnh sửa, nhấn vào nút "Sửa tin", sau đó thay đổi các thông tin cần thiết.
                </p>
                 <p class="mt-6">
                    Sau khi hoàn tất việc chỉnh sửa, nhấn "Lưu tin" để lưu lại thay đổi. Tin của bạn sẽ được cập nhật thành công.
                </p>
                <p class="mt-9">- Phongkhamtot.com là nguồn thông tin uy tín, cập nhật đầy đủ và chính xác về các phòng
                    khám, cam kết mang đến sự an tâm tuyệt đối và bảo vệ quyền lợi người dùng.</p>
                <p class="mt-3">- Chúc bạn sớm tìm được phòng khám phù hợp và đáng tin cậy trên website Phongkhamtot.com,
                    nơi luôn đồng hành cùng bạn trong việc chăm sóc sức khỏe.</p>
                <p class="mt-3">- Nếu cần tư vấn bất cứ thông tin gì, bạn hãy liên hệ với chúng tôi để được hỗ trợ.</p>
                <p class="flex mt-3"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i><b>Email: </b>
                    phongkhamtot.com@gmail.com
                </p>
                <p class="flex mt-3"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i><b>Số điện thoại:
                    </b> 036 332 1579
                </p>
                <p class="flex mt-3"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i><b>Fanpage: </b>
                    https://www.facebook.com/phongkhamtottoanquoc
                </p>
            </div>
        </div>
        <section class="mt-4 p-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-blue-500">HỖ TRỢ KHÁCH HÀNG</h1>
                <p class="text-gray-500 mt-3">Bạn cần hỗ trợ <span class="text-green-500">Tìm kiếm, Đăng tin. Thanh
                        toán?</span> Liên hệ với chúng tôi ngay qua các hình thức:</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6 w-full">
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
