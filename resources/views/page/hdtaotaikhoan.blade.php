@extends('layouts.welcome')
@section('title', 'Hướng Dẫn')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm sticky top-20 self-start"><a href="http://127.0.0.1:8000/" class="hover:text-[#22d69f]">Trang chủ</a>/ <a
                href="http://127.0.0.1:8000/huongdan" class="hover:text-[#22d69f]">Hướng dẫn</a>/Tạo tài khoản</span>
        <div class="flex gap-4">
            <div class="w-4/12 p-4 gap-4 flex flex-col sticky top-24 self-start">
                <a href="http://127.0.0.1:8000/huongdan" class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Hưỡng dẫn tìm
                    kiếm</a>
                <a href="http://127.0.0.1:8000/hdtaotaikhoan" class="bg-blue-500 px-4 py-3 rounded-lg font-bold">Tạo tài
                    khoản</a>
                <a href="http://127.0.0.1:8000/hddangtin" class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Hưỡng dẫn đăng
                    tin</a>
                <a href="http://127.0.0.1:8000/quanlytin" class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Quản lý tin</a>
            </div>
            <div class="w-8/12 p-4 shadow-lg rounded-lg gap-6">
                <h1 class="text-3xl text-blue-500 font-bold">TẠO TÀI KHOẢN</h1>
                <p class="mt-5 text-red-500 font-bold">Cách 1: Hình thức tạo tài khoản trực tiếp bằng tài khoản Phongkhamcom
                </p>
                <p class="mt-6 font-bold">Bước 1: Chọn Đăng nhập/Đăng ký</p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736736534.png" alt="">
                <p class="flex"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Trên giao diện website
                    Phongkhamtot.com, bạn chọn nút “Đăng nhập/Đăng ký” để lập một tài khoản.</p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736741663.png" alt="">
                <p class="flex"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Chọn Đăng ký tài khoản
                    mới
                </p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736741501.png" alt="">
                <p class="mt-6 font-bold">
                    Bước 2: Điền tên, nhập lại mật khẩu hai lần.
                </p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736742005.png" alt="">
                <p class="mt-6 font-bold">
                    Bước 3: Nhấn "Đăng ký" là bạn đã có tài khoản.
                </p>
                <p class="mt-7 text-red-500 font-bold">Cách 2: Đăng ký trực tiếp bằng tài khoản Facebook hoặc tài khoản
                    Google của bạn
                </p>
                <p class="mt-5 font-bold">Bước 1: Nhấn Đăng nhập/Đăng ký tài khoản</p>
                <p class="mt-4">Trên giao diện website Phongkhamtot.com, bạn chọn nút “Đăng nhập/Đăng ký” để lập một tài khoản.
                </p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736741663.png" alt=""
                    class="mt-6">
                <p class="mt-5 font-bold">Bước 2: Chọn tài khoản Facebook hoặc tài khoản Google mà bạn muốn đăng ký.</p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736742192.png" alt="">
                <p class="mt-5 font-bold">Bước 3: Bạn đăng nhập vào tài khoản Facebook hoặc Google của mình.</p>
                <p class="mt-3">Sau đó chọn đồng ý. Để Phongkhamtot.com lấy thông tin đăng ký của bạn từ tài khoản.</p>
                <p class="mt-3">Vậy là bạn đã có tài khoản, bạn hãy đăng nhập vào để tiến hành đăng tin ngay nhé!</p>
                <p class="mt-3 font-bold">Chúc bạn thành công.</p>
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
