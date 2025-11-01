@extends('layouts.welcome')
@section('title', 'Thông tin phòng khám')

@section('content')
    <div class="main-body p-3 mt-2 max-w-[1400px] mx-auto">
        <span class="text-sm">
            <a href=" {{url('')}} " class="hover:text-[#22d69f]">Trang chủ</a> / <a
                href=" {{url('phongkhamtu')}} " class="hover:text-[#22d69f]">Phòng khám tư</a> / Phòng khám Tuệ An,
            Chi nhánh Khánh Hòa
        </span>
        <h1 class="text-3xl text-blue-500 font-bold mt-6">PHÒNG KHÁM TUỆ AN, CHI NHÁNH KHÁNH HÒA</h1>
        <p><i class="fa-solid fa-location-dot me-2 mt-5"></i>Lô số 9 đường A4 Thích Quảng Đức, Khu Đô Thị VCN Phước Long,
            Phường Phước Hải, TP Nha Trang, Khánh Hòa, Nha Trang</p>
        <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/tue%20an/tuean_khanhhoa.png" alt=""
            class="rounded-xl mt-4">
        <!-- Layout tổng: chia 2 cột trên PC, 1 cột trên mobile -->
        <div class="flex flex-col lg:flex-row gap-6 mt-4">
            <!-- Cột trái -->
            <div class="w-full lg:w-4/12 p-4">
                <div class="p-4 bg-gray-200 rounded-xl">
                    <h1 class="text-blue-500 text-2xl font-bold text-center md:text-left">GÓI DỊCH VỤ</h1>
                    {{-- Gói điều trị --}}
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md">
                        <div class="flex justify-between mt-3 p-6">
                            <div>
                                <p class="font-medium">Gói điều trị (120 phút)</p>
                                <p>Giá gói: 900.000đ</p>
                                <div class="text-yellow-400">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-end">
                                <button class="bg-yellow-400 rounded-lg px-4 py-2 text-white">
                                    <i class="fa-solid fa-calendar-days me-2"></i>Đặt lịch
                                </button>
                                <button @click="open = !open" class="text-green-500 flex items-center">
                                    Xem thêm
                                    <i :class="open ? 'fa-solid fa-angle-up ms-2' : 'fa-solid fa-angle-down ms-2'"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <!-- Phần mô tả -->
                        <div x-show="open" x-transition x-cloak class="p-4 mt-2">
                            <p>
                                Gói trị liệu và - Giác hơi - Đắp thuốc vùng bệnh sau điều trị - Tặng gói khám bệnh &
                                theo dõi định kì miễn phí 3 lần mỗi tháng
                            </p>
                        </div>
                    </div>
                    {{-- gói trị liệu --}}
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md">
                        <div class="flex justify-between mt-3 p-6">
                            <div>
                                <p class="font-medium">Gói điều trị (120 phút)</p>
                                <p>Giá gói: 900.000đ</p>
                                <div class="text-yellow-400">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-end">
                                <button class="bg-yellow-400 rounded-lg px-4 py-2 text-white">
                                    <i class="fa-solid fa-calendar-days me-2"></i>Đặt lịch
                                </button>
                                <button @click="open = !open" class="text-green-500 flex items-center">
                                    Xem thêm
                                    <i :class="open ? 'fa-solid fa-angle-up ms-2' : 'fa-solid fa-angle-down ms-2'"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <!-- Phần mô tả -->
                        <div x-show="open" x-transition x-cloak class="p-4 mt-2">
                            <p>
                                Gói cơ bản và - Khám bệnh và lên phác đồ chuẩn đoán tình trạng bệnh lý - Trị liệu thoái hóa
                                cột sống, gai đốt sống - Trị liệu mất ngủ, căng thẳng thần kinh - Trị liệu khớp vai, tay,
                                đầu gối, cổ chân - Chạy máy kéo
                            </p>
                        </div>
                    </div>
                    {{-- gói cơ bản --}}
                    <div x-data="{ open: false }" class="bg-white rounded-lg">
                        <div class="flex justify-between mt-3 p-6">
                            <div>
                                <p class="font-medium">Gói cơ bản(40 phút)</p>
                                <p>Giá gói: 380.000đ</p>
                                <div class="text-yellow-400">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-end">
                                <button class="bg-yellow-400 rounded-lg px-4 py-2 text-white"><i
                                        class="fa-solid fa-calendar-days me-2"></i>Đặt lịch</button>
                                <button @click="open = !open" class="text-green-500 flex items-center">
                                    Xem thêm
                                    <i :class="open ? 'fa-solid fa-angle-up ms-2' : 'fa-solid fa-angle-down ms-2'"></i>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div x-show="open" x-transition x-cloak class="p-4 mt-2">
                            <p>Giải cơ và nắn chỉnh cơ bản - Trị liệu cơ mông - cổ vai gáy / cột sống thắt lưng - Chiếu đèn
                                hồng ngoại / tần phổ làm mềm cơ - Chạy máy điện xung trung tần / siêu âm - Bắn súng làm mềm
                                các khối cơ</p>
                        </div>
                    </div>
                    <div class="mt-3 text-right">
                        <a href=" {{url('')}} " class="hover:text-red-500"><i
                                class="fa-solid fa-circle-exclamation me-2"></i>Báo cáo</a>
                    </div>
                </div>
            </div>
            <!-- Cột phải -->
            <div class="w-full lg:w-8/12 p-4">

                <body class="bg-gray-100 p-6">

                    <div x-data="{ tab: 'info' }" class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                        <!-- Tabs -->
                        <div class="flex border-b border-gray-200 gap-2">
                            <button @click="tab = 'info'"
                                :class="tab === 'info' ? 'bg-green-500 text-white' : 'bg-gray-100 text-gray-700'"
                                class="flex-1 text-center py-3 font-medium transition-colors rounded-lg">
                                Thông tin
                            </button>
                            <button @click="tab = 'specialty'"
                                :class="tab === 'specialty' ? 'bg-green-500 text-white' : 'bg-gray-100 text-gray-700'"
                                class="flex-1 text-center py-3 font-medium transition-colors rounded-lg">
                                Chuyên khoa
                            </button>
                            <button @click="tab = 'equipment'"
                                :class="tab === 'equipment' ? 'bg-green-500 text-white' : 'bg-gray-100 text-gray-700'"
                                class="flex-1 text-center py-3 font-medium transition-colors rounded-lg">
                                Trang thiết bị
                            </button>
                            <button @click="tab = 'insurance'"
                                :class="tab === 'insurance' ? 'bg-green-500 text-white' : 'bg-gray-100 text-gray-700'"
                                class="flex-1 text-center py-3 font-medium transition-colors rounded-lg">
                                Bảo hiểm
                            </button>
                            <button @click="tab = 'location'"
                                :class="tab === 'location' ? 'bg-green-500 text-white' : 'bg-gray-100 text-gray-700'"
                                class="flex-1 text-center py-3 font-medium transition-colors rounded-lg">
                                Vị trí
                            </button>
                        </div>
                        <!-- Nội dung -->
                        <div class="p-6">
                            <!-- Tab 1 -->
                            <div x-show="tab === 'info'" x-transition>
                                <h2 class="text-blue-600 font-bold text-xl mb-3">THÔNG TIN CHI TIẾT</h2>
                                <p class="leading-relaxed">
                                    Là một trong những trung tâm điều trị cơ xương khớp hàng đầu tại Việt Nam,
                                    phòng khám Tuệ An không chỉ tự hào bởi sở hữu hệ thống phòng khám trải dài từ Bắc tới
                                    Nam
                                    với đầy đủ trang thiết bị hiện đại nhất, mà trên hết 100% bác sĩ tại phòng khám Tuệ An
                                    đều có chuyên môn và nhiều năm kinh nghiệm. Đây chính là yếu tố giúp phòng khám Tuệ An
                                    trở nên vững tin và lớn mạnh trong lòng hàng trăm ngàn bệnh nhân.
                                </p>
                                <p class="italic mt-3 font-bold">
                                    “Chiropractic chỉ an toàn và mang lại hiệu quả khi được thực hiện bởi bác sĩ chuyên
                                    ngành.”
                                </p>

                                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/tue%20an/418725030_344772108317336_1187179015436066544_n.jpg"
                                    alt="Ảnh minh họa" class="rounded-lg mt-4">
                                <p class="mt-3">Nắn chỉnh Chiropratic hiện được công nhận là một trong những phương pháp
                                    an toàn và hiệu quả nhất với tiêu chí: không thuốc, không tiêm, không phẩu thuật để điều
                                    trị các vấn đề về hệ cơ, xương, khớp, thần kinh, cột sông</p>
                                <p class="mt-3">Thực tế đã chứng mính rằng Chiropratic cực kì an toàn cho cả người già,
                                    trẻ em và cả phụ nữ mang thai... Tuy nhiên, phòng khám Tuệ An xin nhấn mạnh là phuong
                                    pháp này an toàn khi và chỉ khi được thực hiện bởi các bác sĩ đươc đào tạo về chuyên
                                    ngành Chiropratic. phải đáp ứng những tiêu chuẩn giáo dục khắt khe từ Hội đồng Giáo dục
                                    Nắn chỉnh hình cột sống</p>
                                <p class="mt-3">Tại phòng khám Tuệ An, chúng tôi chỉ cho phép các Bác sĩ đã có chứng nhận
                                    hành nghề thực hiện trị bệnh</p>
                                <p class="mt-3">Đến với phòng khám Tuệ An, bạn sẽ thấy được đội ngũ bác sĩ ở đây luôn đặt
                                    mục tiêu hàng đầu là mang lại hiệu quả điều trị cao nhất cho khách hàng. Những mối quan
                                    tâm cũng như yêu cầu của bạn luôn được bác sĩ lắng nghe và chia sẻ, thông qua đó Tuệ An
                                    sẽ mang đến những phác đồ điều trị toàn diện và phù hợp nhất mà bạn cần. Sức khỏe của
                                    bạn sẽ được chăm sóc bởi đội ngũ Bác sĩ, những người rất giàu kinh nghiệm trong việc
                                    chữa trị cơn đau nhức toàn thân, cột sống hay những vùng khác trên cơ thể như bàn chân,
                                    đầu gối, vai...</p>
                                <h1 class="mt-3 text-xl font-bold">Bác sĩ Tuấn - Bác sĩ Chiropratic đầu ngành
                                    hơn 25 năm kinh nghiệm</h1>
                                <p class="mt-2">Với hơn 20 kinh nghiệm trong ngành này, nắm vững các kiến thức về trị
                                    liệu thần kinh cột sống, đồng cảm với những nỗi đau của bệnh nhân, luôn đặt tinh thần
                                    “tất cả vì người bệnh” lên trên hết, vị bác sĩ hiền lành gần gũi ấy đã mang đến sự an
                                    tâm tin tưởng và là một trong những yếu tố quan trọng nhất giúp hàng trăm ngàn bệnh nhân
                                    vượt lên chiến thắng bệnh tật.</p>
                                <h1 class="mt-3 text-xl font-bold">Bác sĩ Quang – Chuyên gia cơ xương khớp với 20 năm kinh
                                    nghiệm</h1>
                                <p class="mt-2">Trải qua quãng thời gian dài cống hiến, không ngừng tìm tòi học hỏi và
                                    tiếp thu những kiến thức mới về Chiropractic nói riêng cũng như chuyên ngành cơ xương
                                    khớp cột sống nói chung, bác sĩ đã có nhiều thành công trong việc điều trị cho các bệnh
                                    nhân mắc bệnh lý cột sống như: Thoát vị đĩa đệm, thoái hóa cột sống, thoái hóa khớp, gai
                                    cột sống…</p>
                                <h1 class="mt-3 text-xl font-bold">Bác sĩ Dũng – Chuyên gia điều trị & phục hồi cơ xương
                                    khớp hơn 10 năm kinh nghiệm</h1>
                                <p class="mt-2">- Đạt chứng nhận chuyên giáo dục vật lý và hiệu suất học, ứng dụng trong
                                    nghiên cứu & thực hành vật lý trị liệu.</p>
                                <p class="mt-2">- Thường xuyên tham gia các khóa học – hội thảo trong nước lẫn Quốc Tế
                                    trau dồi kiến thức chuyên môn, cập nhật xu hướng trị liệu mới.</p>
                                <p class="mt-2">- Bác sĩ chuyên khoa vật lý trị liệu Physical therapy tại phòng khám Tuệ
                                    An.</p>
                                <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/tue%20an/eklk1700025607.png"
                                    alt="" class="mt-3 rounded-lg">
                                <p class="mt-3">Tuệ An mang đến phương pháp tác động cột sống nhằm cải thiện tình trạng
                                    đau mỏi vai gáy, thắt lưng ngay trong lần đầu trải nghiệm. Tại đây, sức khoẻ của khách
                                    hàng là ưu tiên hàng đầu của chúng tôi. Chính vì vậy, với đội ngũ Bác sĩ có tay nghề và
                                    chuyên môn cao, chúng tôi mong muốn được đóng góp vào trong quá trình nâng cao sức khoẻ
                                    của người dân Việt Nam.</p>
                                <p class="mt-3">Với nhóm các Bác sĩ, chuyên viên được huấn luyện kỹ càng, có kinh nghiệm
                                    chuyên môn cao. Phòng khám Tuệ An mang đến phương pháp tác động cột sống. Đảm bảo KHÔNG
                                    ĐAU - KHÔNG TIÊM - KHÔNG PHẪU THUẬT. Giúp bạn khắc phục hoàn toàn các cơn đau của mình.
                                </p>
                                <p class="mt-3">Không chỉ làm giảm cơn đau chúng tôi còn xác định rõ nguyên nhân của vấn
                                    đề và cải thiện nó tận gốc.</p>
                                <p class="mt-3">Bên cạnh đó, chúng tôi sẽ hỗ trợ bạn trong việc hình thành thói quen tốt
                                    có thể áp dụng trong cuộc sống hàng ngày của mình, sống một cuộc sống năng dộng và khỏe
                                    mạnh hơn.</p>
                                <p class="mt-2 font-bold">Dịch vụ tại phòng khám Tuệ An</p>
                                <p class="mt-2 font-medium">PHỤC HỒI CƠ</p>
                                <p class="mt-2">Chuyên điều trị các chúng đau mỏi, chèn ép, viêm cơ, viêm khớp</p>
                                <p class="mt-2 font-medium">PHỤC HỒI CHỨC NĂNG SAU TAI BIẾN</p>
                                <p class="mt-2">Phục hồi chức năng sau tai biến và các ván đè mãn tính như bị căng/co
                                    cứng cổ tay hoặc cổ /vai/gáy</p>
                                <p class="mt-2 font-medium">ĐIỀU CHỈNH LỆCH HÀM</p>
                                <p class="mt-2">Điều chỉnh hàm lệch, rối loạn thái dương hàm</p>
                                <p class="mt-2 font-medium">ĐIỀU TRỊ TÊ BÌ TAY CHÂN</p>
                                <p class="mt-2 font-medium">ĐIỀU TRỊ VIÊM ĐAU KHỚP GỐI</p>
                                <p class="mt-2 font-medium">ĐIỀU TRỊ BỆNH THOÁT VỊ ĐĨA ĐỆM</p>
                                <p class="mt-2 font-medium">ĐIỀU TRỊ ĐAU KHỚP CỔ TAY</p>

                                {{-- chuyên khoa --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">CHUYÊN KHOA</h1>
                                <a href=" {{url('coxuongkhop')}} "
                                    class="mt-3 w-48 h-48 flex flex-col items-center justify-center shadow-lg hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-5 transition-all duration-300">
                                    <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_14.png"
                                        alt="" class="w-14 h-14 rounded-full bg-white p-2">
                                    <h2 class="p-2 text-base sm:text-base font-medium">Cơ Xương Khớp</h2>
                                </a>
                                {{-- Trang thiết bị --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">TRANG THIẾT BỊ</h1>
                                <a
                                    class="mt-3 w-96 h-32 bg-gray-400 flex flex-cols items-center shadow-lg rounded-2xl p-5">
                                    <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_14"
                                        alt=""
                                        class="w-24 h-24 bg-white p-2 hover:scale-105 transition-all duration-300 rounded-lg">
                                    <div class="p-2">
                                        <h2 class="text-base sm:text-base font-medium">Máy châm phục hồi</h2>
                                        <h2 class="text-base sm:text-base">Máy châm phục hồi cho các tình huống khẩn cấp về
                                            tim mạch</h2>
                                    </div>
                                </a>
                                {{-- Bảo hiểm y tế --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">BẢO HIỂM Y TẾ</h1>
                                <a
                                    class="mt-3 w-96 h-32 bg-gray-400 flex flex-cols items-center shadow-lg rounded-2xl p-5">
                                    <img src="https://phongkhamtot.com/uploads/static/thong-tin-chung/baohiem/bhyt.png"
                                        alt=""
                                        class="w-24 h-24 bg-white p-2 hover:scale-105 transition-all duration-300 rounded-lg">
                                    <div class="p-2">
                                        <h2 class="text-base sm:text-base font-medium">Máy châm phục hồi</h2>
                                        <h2 class="text-base sm:text-base">Máy châm phục hồi cho các tình huống khẩn cấp về
                                            tim mạch</h2>
                                    </div>
                                </a>
                                {{-- LIÊN HỆ --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">LIÊN HỆ</h1>
                                <p>Hotline: 0966533350</p>
                                <p>Email: vienthammyoanhoanh@gmail.com</p>
                                <p>Facebook: https://www.facebook.com/PhongKhamTueAnCNKhanhHoa/Hotline</p>
                                <p>Chỉ đường:</p>
                                <div class="rounded-xl overflow-hidden shadow-lg border border-gray-200 mt-4">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15597.757886255979!2d109.19270700000001!3d12.218495000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705df624818927%3A0x9faa63e7e9d4a81!2zOSDEkC4gU-G7kSA0LCBQaMaw4bubYyBMb25nLCBOaGEgVHJhbmcsIEtow6FuaCBIw7JhLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1761970228691!5m2!1svi!2sus"
                                        width="1000" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                            <!-- Tab 2 -->
                            <div x-show="tab === 'specialty'" x-transition>
                                {{-- chuyên khoa --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">CHUYÊN KHOA</h1>
                                <a href=" {{url('coxuongkhop')}} "
                                    class="mt-3 w-48 h-48 flex flex-col items-center justify-center shadow-lg hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-5 transition-all duration-300">
                                    <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_14.png"
                                        alt="" class="w-14 h-14 rounded-full bg-white p-2">
                                    <h2 class="p-2 text-base sm:text-base font-medium">Cơ Xương Khớp</h2>
                                </a>
                            </div>

                            <!-- Tab 3 -->
                            <div x-show="tab === 'equipment'" x-transition>
                                 {{-- Trang thiết bị --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">TRANG THIẾT BỊ</h1>
                                <a
                                    class="mt-3 w-96 h-32 bg-gray-400 flex flex-cols items-center shadow-lg rounded-2xl p-5">
                                    <img src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_14"
                                        alt=""
                                        class="w-24 h-24 bg-white p-2 hover:scale-105 transition-all duration-300 rounded-lg">
                                    <div class="p-2">
                                        <h2 class="text-base sm:text-base font-medium">Máy châm phục hồi</h2>
                                        <h2 class="text-base sm:text-base">Máy châm phục hồi cho các tình huống khẩn cấp về
                                            tim mạch</h2>
                                    </div>
                                </a>
                            </div>

                            <!-- Tab 4 -->
                            <div x-show="tab === 'insurance'" x-transition>
                               {{-- Bảo hiểm y tế --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">BẢO HIỂM Y TẾ</h1>
                                <a
                                    class="mt-3 w-96 h-32 bg-gray-400 flex flex-cols items-center shadow-lg rounded-2xl p-5">
                                    <img src="https://phongkhamtot.com/uploads/static/thong-tin-chung/baohiem/bhyt.png"
                                        alt=""
                                        class="w-24 h-24 bg-white p-2 hover:scale-105 transition-all duration-300 rounded-lg">
                                    <div class="p-2">
                                        <h2 class="text-base sm:text-base font-medium">Máy châm phục hồi</h2>
                                        <h2 class="text-base sm:text-base">Máy châm phục hồi cho các tình huống khẩn cấp về
                                            tim mạch</h2>
                                    </div>
                                </a>
                            </div>

                            <!-- Tab 5 -->
                            <div x-show="tab === 'location'" x-transition>
                                {{-- LIÊN HỆ --}}
                                <h1 class="mt-8 text-xl font-bold text-blue-500 ">LIÊN HỆ</h1>
                                <p>Hotline: 0966533350</p>
                                <p>Email: vienthammyoanhoanh@gmail.com</p>
                                <p>Facebook: https://www.facebook.com/PhongKhamTueAnCNKhanhHoa/Hotline</p>
                                <p>Chỉ đường:</p>
                                <div class="rounded-xl overflow-hidden shadow-lg border border-gray-200 mt-4">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15597.757886255979!2d109.19270700000001!3d12.218495000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705df624818927%3A0x9faa63e7e9d4a81!2zOSDEkC4gU-G7kSA0LCBQaMaw4bubYyBMb25nLCBOaGEgVHJhbmcsIEtow6FuaCBIw7JhLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1761970228691!5m2!1svi!2sus"
                                        width="1000" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>

                </body>
            </div>
        </div>
         {{-- Hỗ trợ khách hàng --}}
        <section class="mt-4 p-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-blue-500">HỖ TRỢ KHÁCH HÀNG</h1>
                <p class="text-gray-500 mt-3">
                    Bạn cần hỗ trợ <span class="text-green-500">Tìm kiếm, Đăng tin, Thanh toán?</span>
                    Liên hệ với chúng tôi ngay qua các hình thức:
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6 max-w-[1400px] mx-auto">
                <!-- Card 1 -->
                <div class="shadow-lg rounded-2xl p-4 text-center flex flex-col justify-between h-full">
                    <div>
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_mail.svg" alt=""
                            class="w-24 mx-auto">
                        <h2 class="text-lg font-bold text-blue-500 mt-3">Mail</h2>
                        <p class="text-lg mt-3">Chúng tôi sẽ trả lời thắc mắc của bạn trong vòng 24h</p>
                    </div>
                    <a href=""
                        class="block bg-[#22d69f] text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-500">Email ngay</a>
                </div>

                <!-- Card 2 -->
                <div class="shadow-lg rounded-2xl p-4 text-center flex flex-col justify-between h-full">
                    <div>
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_phone.svg" alt=""
                            class="w-24 mx-auto">
                        <h2 class="text-lg font-bold text-blue-500 mt-3">Hotline 24/7</h2>
                        <p class="text-lg mt-3">Điện thoại viên luôn sẵn sàng giải đáp cho bạn</p>
                    </div>
                    <a href=""
                        class="block bg-[#22d69f] text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-500">Gọi ngay</a>
                </div>

                <!-- Card 3 -->
                <div class="shadow-lg rounded-2xl p-4 text-center flex flex-col justify-between h-full">
                    <div>
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_mess.svg" alt=""
                            class="w-24 mx-auto">
                        <h2 class="text-lg font-bold text-blue-500 mt-3">Facebook</h2>
                        <p class="text-lg mt-3">Nhắn tin với chúng tôi trên nền tảng Facebook Messenger</p>
                    </div>
                    <a href="#"
                        class="block bg-[#22d69f] text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-500">Gửi tin nhắn</a>
                </div>

                <!-- Card 4 -->
                <div class="shadow-lg rounded-2xl p-4 text-center flex flex-col justify-between h-full">
                    <div>
                        <img src="https://phongkhamtot.com/frontend/home/images/icons/icon_zalo.svg" alt=""
                            class="w-24 mx-auto">
                        <h2 class="text-lg font-bold text-blue-500 mt-3">Zalo</h2>
                        <p class="text-lg mt-3">Nhắn tin hoặc gọi chúng tôi trên nền tảng Zalo</p>
                    </div>
                    <a href="#"
                        class="block bg-[#22d69f] text-white px-4 py-2 mt-4 rounded-lg hover:bg-blue-500">Liên hệ ngay</a>
                </div>
            </div>
        </section>
    </div>


@endsection
