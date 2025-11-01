@extends('layouts.welcome')
@section('title', 'Thông tin bác sĩ')

@section('content')
    <div class="main-body p-3 mt-2">
        <span class="text-sm">
            <a href=" {{url('')}} " class="hover:text-[#22d69f]">Trang chủ</a> / Bác sĩ gi
        </span>
        <!-- Layout tổng: chia 2 cột trên PC, 1 cột trên mobile -->
        <div class="flex flex-col lg:flex-row gap-6 mt-4">
            <!-- Cột trái: Thông tin bác sĩ -->
            <div class="w-full lg:w-8/12 p-4">
                <!-- Thông tin bác sĩ -->
                <div class="p-4 flex flex-col md:flex-row gap-6">
                    <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/jpb3/img_doctor03.jpg" alt=""
                        class="w-full md:w-[350px] rounded-xl object-cover">
                    <div>
                        <h1 class="text-3xl text-blue-500 font-bold mt-3">NGUYỄN BẢO TRỌNG</h1>
                        <div class="text-yellow-500 mt-4">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="">
                            <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="">
                            <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="">
                        </div>
                        <p class="mt-3"><b>Chuyên khoa:</b> Thẩm Mỹ Viện</p>
                        <p class="mt-3"><b>Đơn vị công tác:</b> Thẩm Mỹ Viện SBC Japan</p>
                    </div>
                </div>

                <!-- Thông tin chi tiết -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden mt-4">
                    <div class="bg-[#22d69f] text-white text-center font-semibold py-2">
                        Thông tin
                    </div>

                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-blue-600 mb-3">THÔNG TIN CHI TIẾT</h2>
                        <p class="text-gray-700 mb-4">
                            Ước mơ của tôi là muốn góp một phần công sức của mình vào công cuộc làm đẹp cho mọi người,
                            giúp họ lấy lại tự tin.
                        </p>

                        <ul class="list-disc pl-6 space-y-1 text-gray-700">
                            <li>Thành viên chính thức Hội phẫu thuật thẩm mỹ Hàn Quốc (KACS)</li>
                            <li>Thành viên chính thức Hội phẫu thuật thẩm mỹ Dea Han</li>
                            <li>Thành viên Hội nghiên cứu thẩm mỹ mũi của Hội phẫu thuật thẩm mỹ Dea Han</li>
                            <li>Thành viên chính thức Hội phẫu thuật thẩm mỹ Châu Á Thái Bình Dương (APACS)</li>
                            <li>Thành viên chính thức Hội phẫu thuật thẩm mỹ quốc tế (ISAPS)</li>
                        </ul>
                    </div>
                </div>

                <!-- Nơi làm việc -->
                <h1 class="text-blue-500 font-bold text-3xl mt-6">ĐANG LÀM VIỆC</h1>
                <div class="mt-3 bg-white rounded-xl shadow-lg p-4 flex flex-col md:flex-row gap-4">
                    <img class="w-full md:w-[350px] rounded-lg object-cover"
                        src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/jpb3/30167769_1033032673504763_2754046686181685572_o.jpg"
                        alt="">
                    <div class="p-3">
                        <h1 class="text-lg font-bold hover:text-green-500">Thẩm Mỹ Viện SBC Japan</h1>
                        <div class="text-yellow-500 mt-2">
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                        </div>
                        <p class="mt-2 text-gray-700"><i class="fa-solid fa-location-dot mr-2"></i>
                            230 Nguyễn Đình Chiểu, P6, Q3, TP.HCM, Bình Chánh
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cột phải: Lịch hẹn -->
            <div class="w-full lg:w-4/12 p-4">
                <div class="p-4 bg-gray-200 rounded-xl">
                    <h1 class="text-blue-500 text-2xl font-medium text-center md:text-left">NHẬN LỊCH HẸN KHÁM</h1>

                    <!-- Calendar -->
                    <div x-data="calendarApp()" x-init="init()" class="bg-white shadow-lg rounded-2xl p-6 mt-4">
                        <h2 class="text-lg font-bold mb-3 text-center md:text-left">CHỌN NGÀY</h2>

                        <!-- Thanh điều hướng tháng -->
                        <div class="flex justify-between items-center mb-4">
                            <button @click="prevMonth" class="text-gray-600 hover:text-black">&lt;</button>
                            <h3 class="font-semibold text-gray-800">
                                <span x-text="monthNames[currentMonth]"></span>
                                <span x-text="currentYear"></span>
                            </h3>
                            <button @click="nextMonth" class="text-gray-600 hover:text-black">&gt;</button>
                        </div>

                        <!-- Tên các thứ -->
                        <div class="grid grid-cols-7 text-center text-sm font-semibold text-gray-700 border-b pb-2 mb-2">
                            <div>T2</div>
                            <div>T3</div>
                            <div>T4</div>
                            <div>T5</div>
                            <div>T6</div>
                            <div>T7</div>
                            <div>CN</div>
                        </div>

                        <!-- Lưới ngày -->
                        <div class="grid grid-cols-7 text-center gap-y-2">
                            <template x-for="(day, index) in days" :key="index">
                                <div>
                                    <button x-text="day" @click="selectedDay = day" :disabled="day === ''"
                                        :class="{
                                            'bg-blue-600 text-white rounded-full': selectedDay === day,
                                            'text-gray-700': selectedDay !== day
                                        }"
                                        class="w-8 h-8 rounded-full hover:bg-blue-100 transition"></button>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Giờ hẹn -->
                    <div class="mt-4 bg-white shadow-xl rounded-xl p-3">
                        <h1 class="text-xl font-medium text-center md:text-left">CHỌN GIỜ HẸN</h1>
                        <div class="grid grid-cols-3 sm:grid-cols-4 text-center p-3 gap-3">
                            <a href="#" class="px-4 py-2 bg-green-500 text-white rounded-lg">09:00</a>
                            <a href="#" class="px-4 py-2 bg-green-300 rounded-lg">10:00</a>
                            <a href="#" class="px-4 py-2 bg-green-300 rounded-lg">11:00</a>
                            <a href="#" class="px-4 py-2 bg-green-300 rounded-lg">13:00</a>
                            <a href="#" class="px-4 py-2 bg-green-300 rounded-lg">14:00</a>
                            <a href="#" class="px-4 py-2 bg-green-300 rounded-lg">15:00</a>
                        </div>
                    </div>

                    <!-- Nút đặt lịch -->
                    <button
                        class="bg-yellow-500 hover:bg-yellow-600 shadow-lg px-4 py-3 text-white w-full rounded-lg mt-5 font-semibold">
                        ĐẶT LỊCH HẸN
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection
<script>
    function calendarApp() {
        return {
            monthNames: [
                'Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
                'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'
            ],
            currentMonth: new Date().getMonth(),
            currentYear: new Date().getFullYear(),
            selectedDay: new Date().getDate(),
            days: [],

            // Khởi tạo
            init() {
                this.renderDays();
            },

            // Sinh các ngày trong tháng
            renderDays() {
                const firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay(); // Chủ nhật = 0
                const totalDays = new Date(this.currentYear, this.currentMonth + 1, 0).getDate();

                const offset = firstDay === 0 ? 6 : firstDay - 1; // Đưa T2 về đầu tuần
                this.days = Array(offset).fill('');
                for (let i = 1; i <= totalDays; i++) {
                    this.days.push(i);
                }
            },

            // Tháng trước
            prevMonth() {
                if (this.currentMonth === 0) {
                    this.currentMonth = 11;
                    this.currentYear--;
                } else {
                    this.currentMonth--;
                }
                this.renderDays();
            },

            // Tháng sau
            nextMonth() {
                if (this.currentMonth === 11) {
                    this.currentMonth = 0;
                    this.currentYear++;
                } else {
                    this.currentMonth++;
                }
                this.renderDays();
            }
        };
    }
</script>
