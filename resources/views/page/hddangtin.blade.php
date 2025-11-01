@extends('layouts.welcome')
@section('title', 'Hướng Dẫn')

@section('content')
    <div class="main-body p-3 mt-2 container mx-auto">
        <span class="text-sm sticky top-20 self-start"><a href=" {{url('')}} " class="hover:text-[#22d69f]">Trang chủ</a>/ <a
                href=" {{url('huongdan')}} " class="hover:text-[#22d69f]">Hướng dẫn</a>/Hướng dẫn đăng tin</span>
        <div class="flex gap-4">
            <div class="w-4/12 p-4 gap-4 flex flex-col sticky top-24 self-start">
                <a href=" {{url('huongdan')}} " class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Hưỡng dẫn tìm
                    kiếm</a>
                <a href=" {{url('hdtaotaikhoan')}} " class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Tạo tài
                    khoản</a>
                <a href=" {{url('hddangtin')}} " class="bg-blue-500 px-4 py-3 rounded-lg font-bold">Hưỡng dẫn đăng
                    tin</a>
                <a href=" {{url('quanlytin')}} " class="bg-gray-200 px-4 py-3 rounded-lg font-bold">Quản lý tin</a>
            </div>
            <div class="w-8/12 p-4 shadow-lg rounded-lg gap-6">
                <h1 class="text-3xl text-blue-500 font-bold">HƯỚNG DẪN ĐĂNG TIN</h1>
                <p class="mt-5">Khi có nhu cầu đăng tin phòng khám, cần chuẩn bị:
                </p>
                <p class="flex mt-4"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Nội dung tin đăng
                </p>
                <p class="flex"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Hình ảnh: theo dạng ảnh
                    IPG, PNG</p>
                <p class="mt-4">Để thực hiện <b>"Đăng tin"</b>, bạn cần tạo 1 tài khoản. Cách tạo tài khoản xem hướng dẫn
                    ở tab "Tạo tài khoản".</p>
                <p class="mt-4">Sau khi có tài khoản, để đăng tin phòng khám lên website bạn hãy làm theo hướng dẫn sau:
                </p>
                <p class="mt-6 font-bold">
                    Bước 1: Đăng nhập vào hệ thống đăng tin.
                </p>
                <p class="mt-4">
                    Đầu tiên, đăng nhập tài khoản mà bạn đã tạo trước đó, hoặc đăng nhập bằng tài khoản Facebook hay Google
                    của bạn.
                </p>
                <p class="mt-3">Sau đó, nhấn vào nút "Đăng tin" bên góc phải màn hình để đăng nhập tài vào tài khoản của
                    bạn:
                </p>
                <img src="https://phongkhamtot.com/uploads/members/ai.tran/screenshot_1736738679.png" alt=""
                    class="mt-6">
                <p class="mt-5">Sau khi đăng nhập vào hệ thống và chọn nút “Đăng tin”. Giao diện của bạn sẽ hiển thị như
                    sau: </p>
                <p class="mt-6 font-bold">
                    Bước 2: Điền đẩy đủ nội dung tin của Phòng khám:
                </p>
                <p class="mt-4">Bao gồm các mục
                </p>
                <p class="flex mt-4"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Tiêu đề tin: Điền
                    tên Phòng khám/Bệnh viện của bạn.</p>
                <p class="flex mt-4"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Loại hình: Bạn nên
                    lưu ý chọn đúng mục Loại hình mà mình đang cung cấp dịch vụ.</p>
                <p class="mt-4">Gồm 3 loại hình sau:
                </p>
                <p class="flex mt-4"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Phòng khám tư</p>
                <p class="flex mt-4"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Bệnh viện</p>
                <p class="flex mt-4"><i class="fa-solid fa-circle me-2 mt-3" style="font-size: 6px"></i>Phòng khám đa khoa
                </p>
                <p class="mt-4">- Chuyên khoa: Hãy chắc chắn nhập chính xác chuyên khoa của phòng khám để người tìm kiếm
                    dễ dàng tiếp cận và tìm được dịch vụ phù hợp nhất.
                </p>
                <p class="mt-4">- Ngày làm việc: Đảm bảo thông tin về các ngày làm việc và ngày nghỉ được cập nhật chính
                    xác, giúp khách hàng biết rõ lịch trình làm việc của phòng khám.
                </p>
                <p class="mt-4">- Thời gian làm việc: Nhập đúng thời gian mở cửa và đóng cửa của phòng khám để khách hàng
                    dễ dàng sắp xếp thời gian đến thăm khám.
                </p>
                <p class="mt-4">- Dịch vụ: Hãy chọn đầy đủ và chính xác các dịch vụ mà phòng khám cung cấp để khách hàng
                    có thể dễ dàng tìm thấy các lựa chọn điều trị phù hợp.
                </p>
                <p class="mt-4">- Trang thiết bị: Đừng quên đánh dấu các trang thiết bị mà phòng khám của bạn sở hữu, giúp
                    tăng sự tin tưởng của khách hàng về chất lượng cơ sở vật chất.
                </p>
                <p class="mt-4">- Bảo hiểm: Lựa chọn và đánh dấu các hình thức bảo hiểm mà phòng khám chấp nhận, tạo điều
                    kiện thuận lợi cho khách hàng khi sử dụng dịch vụ.
                </p>
                <p class="mt-4">- Hình ảnh: Cung cấp những hình ảnh rõ ràng về phòng khám, cơ sở vật chất, tiện nghi và
                    đội ngũ bác sĩ, nhân viên để tăng độ tin cậy và uy tín cho phòng khám của bạn.
                </p>
                <p class="mt-4">- Nội dung mô tả: Hãy mô tả rõ ràng và chi tiết về phòng khám, các đặc điểm nổi bật,
                    chuyên môn và những lợi thế mà phòng khám mang lại cho người tìm kiếm.
                </p>
                <p class="mt-4">- Gói khám: Cung cấp thông tin chi tiết về các gói khám, giá cả và các dịch vụ đi kèm để
                    khách hàng có thể dễ dàng chọn lựa và đánh giá.
                </p>
                <p class="mt-4">- Bác sĩ: Cung cấp đầy đủ thông tin về bác sĩ, bao gồm tên, chuyên môn, bằng cấp, kinh
                    nghiệm và các thành tựu nổi bật nếu có, để khách hàng cảm thấy yên tâm hơn khi lựa chọn dịch vụ.
                </p>
                <p class="mt-4">- Địa chỉ: Hãy ghi rõ và đầy đủ địa chỉ phòng khám để khách hàng có thể dễ dàng tìm đường
                    và đến đúng nơi.
                </p>
                <p class="mt-4">- Thông tin liên hệ: Đảm bảo nhập chính xác thông tin liên lạc để khách hàng có thể dễ
                    dàng liên hệ và giải đáp thắc mắc khi cần thiết.
                </p>
                <p class="mt-5 font-bold">Bước 3: Sau khi điền đầy đủ thông tin, nhấn nút "Lưu tin" để đăng tin.</p>
                <p class="mt-3">- Tiếp theo, bộ phận duyệt tin của Phongkhamtot.com sẽ tiến hành kiểm tra và phê duyệt tin
                    đăng của bạn trước khi hiển thị trên website.</p>
                <p class="mt-3">- Nếu tin đăng của bạn hợp lệ (không vi phạm các quy định duyệt tin của Phongkhamtot.com),
                    tin sẽ được kích hoạt và bạn sẽ nhận được thông báo qua email về việc tin đăng đã được phê duyệt.</p>
                <p class="mt-3">- Ngoài ra, trên trang cá nhân của bạn, bạn cũng sẽ nhận được thông báo khi tin đăng của
                    mình đã được duyệt và hiển thị thành công.</p>
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
