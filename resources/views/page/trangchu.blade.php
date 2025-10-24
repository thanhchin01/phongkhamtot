@extends('layouts.welcome')
@section('title', 'Trang chủ')

@section('content')
    <div class="main-body">
        <div class="box box-head">
            <div class="box-head__image">
                <img src="https://phongkhamtot.com/frontend/home/images/banner.jpg" alt="Phòng Khám Tốt">
            </div>
            <div class="relative -mt-10 px-6">
                <div class="bg-white shadow-lg rounded-xl p-6 max-w-7xl mx-auto flex flex-col md:flex-row gap-4">
                    {{-- Dropdown 1: Địa điểm --}}
                    <div class="dropdown md:w-auto flex-1 mt-2">
                        <h2>Địa điểm</h2>
                        <div class="relative w-64 border rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                            <button class="dropdown-btn w-full flex justify-between px-4 py-2 rounded-lg">
                                <span><i class="fa-solid fa-location-dot me-2 text-green-300"></i>Tỉnh/Thành phố</span>
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg text-center">
                                <input
                                    class="mt-2 flex-1 border border-gray-300 rounded-lg px-4 py-2 outline-none transition"
                                    placeholder="Nhập nội dung tìm kiếm...">
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                                    <i class="fa-solid fa-location-dot me-2"></i>Hồ Chí Minh
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                                    <i class="fa-solid fa-location-dot me-2"></i>Hà Nội
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                                    <i class="fa-solid fa-location-dot me-2"></i>Đà Nẵng
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                                    <i class="fa-solid fa-location-dot me-2"></i>Bà Rịa - Vũng Tàu
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer text-left">
                                    <i class="fa-solid fa-location-dot me-2"></i>Huế
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Dropdown 2: Loại hình --}}
                    <div class="dropdown md:w-auto flex-1 mt-2">
                        <h2>Loại hình</h2>
                        <div class="relative w-64 border rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                            <button class="dropdown-btn w-full flex justify-between px-4 py-2 rounded-lg verflow-hidden text-ellipsis whitespace-nowrap">
                                <span><i class="truncate max-w-[80%] fa-solid fa-briefcase me-2 text-green-300"></i>Chọn loại hình</span>
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg p-3 space-y-2 text-left">
                                <!-- Checkbox item -->
                                <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option1"
                                        class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option1" class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Bệnh viện</span>
                                    </label>
                                </li>

                                <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option2"
                                        class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option2" class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Phòng khám đa khoa</span>
                                    </label>
                                </li>

                                <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option3"
                                        class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option3" class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Da liễu</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Dropdown 3: Chuyên khoa --}}
                    <div class="dropdown md:w-auto flex-1 mt-2">
                        <h2>Chuyên khoa</h2>
                        <div class="relative w-64 border rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                            <button class="dropdown-btn w-full flex justify-between px-4 py-2 rounded-lg overflow-hidden text-ellipsis whitespace-nowrap">
                                <span><i class="truncate max-w-[80%] fa-solid fa-stethoscope me-2 text-green-300"></i></i></i>Chọn khoa</span>
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg p-3 space-y-2 text-left">
                                <!-- Checkbox item -->
                                <div
                                    class="max-h-60 overflow-y-auto pr-2 space-y-2 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option4"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option4"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Cơ xương khớp</span>
                                        </label>
                                    </li>

                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option5"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option5"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Da liễu</span>
                                        </label>
                                    </li>

                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option6"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option6"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Hô hấp</span>
                                        </label>
                                    </li>
                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option7"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option7"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Ngoại khoa</span>
                                        </label>
                                    </li>
                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option8"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option8"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Nha khoa</span>
                                        </label>
                                    </li>
                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option9"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option9"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Nhi khoa</span>
                                        </label>
                                    </li>
                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option10"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option10"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Phục hồi chức năng</span>
                                        </label>
                                    </li>
                                    <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option11"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option11"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Răng - Hàm - Mặt</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option12"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option12"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Sản phụ khoa</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option13"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option13"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Tai mũi họng</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option14"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option14"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Thẩm mĩ viện</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option15"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option15"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Tim mạch</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option16"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option16"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Ung bướu</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option17"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option17"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Xét nghiệm y khoa</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option18"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option18"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Y học cổ truyền</span>
                                        </label>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    {{-- Dropdown 4: Khác --}}
                    <div class="dropdown md:w-auto flex-1 mt-2">
                        <h2>Khác</h2>
                        <div class="relative w-64 border rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                            <button class="dropdown-btn w-full flex justify-between px-4 py-2 rounded-lg overflow-hidden text-ellipsis whitespace-nowrap">
                                <span> <i class="fa-solid fa-plus me-2 text-green-300 truncate max-w-[80%]"></i></i>Thêm tiêu chí</span>
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg p-3 space-y-2 text-left">
                                <!-- Checkbox item -->
                                <div
                                    class="max-h-60 overflow-y-auto pr-2 space-y-2 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
                                    <h2 class="font-medium">Thời gian làm việc</h2>
                                    <div class="gap-4 mt-2">
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="choose" value="specialty"
                                                class="w-5 h-5 text-blue-600">
                                            <span>Làm việc trong tuần</span>
                                        </label>

                                        <label class="flex items-center space-x-2 mt-2">
                                            <input type="radio" name="choose" value="service"
                                                class="w-5 h-5 text-blue-600">
                                            <span>Làm cả chủ nhật và ngày nghỉ</span>
                                        </label>
                                    </div>
                                    <h2 class="font-medium">Dịch vụ y tế</h2>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option19"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option19"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Khám chuyên khoa</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option20"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option20"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Khám từ xa</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option21"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option21"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Khám tổng quát</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option22"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option22"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Xét nghiệm y học</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option23"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option23"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Sức khỏe tinh thần</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option24"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option24"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Khám nha khoa</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option25"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option25"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Gói giải phẫu</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option26"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option26"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Bài test sức khỏe</span>
                                        </label>
                                    </li>
                                    <li
                                        class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                        <input type="checkbox" id="option27"
                                            class="w-4 h-4 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                        <label for="option27"
                                            class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                            <span>Y tế gần bạn</span>
                                        </label>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <button
                        class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white px-6 py-3  border rounded-lg p-2 h-13 mt-10">
                        <i class="fa-solid fa-magnifying-glass mr-2"></i>Tìm kiếm
                    </button>
                </div>
            </div>
        </div>
        {{-- Dịch vụ toàn diện --}}
        <section class="p-6 text-center mt-4">
            <h1 class="font-bold text-blue-500 text-3xl text-blue-600">DỊCH VỤ TOÀN DIỆN</h1>
            <h4 class="mt-3">Bạn quan tâm đến Dịch vụ nào, vui lòng chọ</h4>
            <div class="flex flex-wrap justify-center gap-2 px-2 mt-5">
                <a href="#"
                    class="flex items-center gap-3 px-6 py-3 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Khám Chuyên khoa</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Khám Từ Xa</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Khám Tổng Quát</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Xét Nghiệm Y Học</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Sức Khỏe Tinh Thần</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Khám Nha Khoa</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Gói Phẫu Thuật</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Sống Khỏe Tiểu Đường</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Bài Test Sức Khỏe</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-7 py-5 rounded-full shadow-md hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-lg">Y tế gần bạn</span>
                </a>
            </div>
        </section>
        {{-- Chuyên Khoa --}}
        <section class="p-6 text-center mt-5">
            <h1 class="text-blue-600 font-bold text-3xl">CHUYÊN KHOA</h1>
            <div class="max-w-8xl p-4 grid grid-cols-5 gap-2 px-10 text-center">
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_14.png" alt=""
                        class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                    <h2 class="p-3 text-xl font-medium">Cơ Xương Khớp</h2>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_1.png" alt=""
                        class="w-14 h-14 rounded-full bg-white p-2 text-green-300 text-green-300">
                    <h2 class="p-3 text-xl font-medium">Da liễu</h2>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_2.png" alt=""
                        class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
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
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_6.png" alt=""
                        class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                    <h2 class="p-3 text-xl font-medium">Phục Hồi Chức Năng</h2>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
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
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_13.png" alt=""
                        class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                    <h2 class="p-3 text-xl font-medium">Xét Nghiệm Y Khoa</h2>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center hover:bg-gradient-to-r from-cyan-400 to-blue-500 rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/frontend/home/images/specialty/img_specialty_15.png" alt=""
                        class="w-14 h-14 rounded-full bg-white p-2 text-green-300">
                    <h2 class="p-3 text-xl font-medium">Y Học Cổ Truyền</h2>
                </a>
            </div>

        </section>
        {{-- Tại sao chọn chúng tôi --}}
        <section class="bg-gradient-to-b from-white to-blue-50 py-16 px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <!-- Ảnh bên trái -->
                <div class="relative flex justify-center">
                    <!-- Hình nền màu xanh lá và xanh dương -->
                    <div class="absolute w-3/4 h-3/4 bg-[#22d69f] top-8 left-6 rounded-lg -z-10"></div>
                    <div class="absolute w-2/3 h-3/4 bg-blue-500 top-24 right-0 rounded-lg -z-10"></div>

                    <img src="https://phongkhamtot.com/frontend/home/images/box_data_img.jpg" alt="Bác sĩ"
                        class="relative max-w-full" />
                </div>
                <!-- Nội dung bên phải -->
                <div class="text-center md:text-left">
                    <h1 class="text-3xl font-bold mb-8">
                        <span class="text-blue-500">TẠI SAO CHỌN </span>
                        <span class="text-green-500">PHÒNG KHÁM TỐT</span>
                    </h1>

                    <!-- Lưới tổng -->
                    <div class="grid grid-cols-3 gap-6 justify-items-center text-center">

                        <!-- Hàng trên -->
                        <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                            <h2 class="text-[#22d69f] text-2xl font-bold">60,000 +</h2>
                            <p class="text-gray-600 text-sm mt-1 font-bold ">Phòng Khám Uy Tín</p>
                        </div>
                        <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                            <h2 class="text-[#22d69f] text-2xl font-bold">8,000 +</h2>
                            <p class="text-gray-600 text-sm mt-1 font-bold">Bác sĩ giỏi toàn quốc</p>
                        </div>
                        <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                            <h2 class="text-[#22d69f] text-2xl font-bold">20 +</h2>
                            <p class="text-gray-600 text-sm mt-1 font-bold">Chuyên khoa</p>
                        </div>

                        <!-- Hàng dưới (2 card, nằm giữa) -->
                        <div class="col-span-3 flex justify-center gap-6 mt-3">
                            <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                                <h2 class="text-[#22d69f] text-2xl font-bold">90,000 +</h2>
                                <p class="text-gray-600 text-sm mt-1 font-bold">Khách hàng tìm kiếm</p>
                            </div>
                            <div class="bg-white shadow-lg rounded-2xl p-6 w-full h-full">
                                <h2 class="text-[#22d69f] text-2xl font-bold">8,000 +</h2>
                                <p class="text-gray-600 text-sm mt-1 font-bold">Lịch hẹn khám</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Đánh giá của khách hàng --}}
        <section class="mt-4 p-6 text-center">
            <h1 class="text-4xl font-bold text-blue-500">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h1>
            <div class="p-6 grid grid-cols-3 gap-2 px-10 text-center">
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/uploads/members/ai.tran/456036003_1059704572827302_4906186076967747574_n.jpg"
                        alt="" class="w-[250px] h-[250px] rounded-full p-2">
                    <h2 class="p-3 text-xl font-medium">Trần Quốc Bảo</h2>
                    <div class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="mt-2">Phongkhamtot.com giúp phòng khám của mình tiếp cận nhiều bệnh nhân mới trong thời
                        gian ngắn. Mình đặc
                        biệt thích các gói đăng tin linh hoạt, phù hợp với ngân sách của từng cơ sở. Điều tuyệt vời là mình
                        có thể chỉnh sửa thông tin dễ dàng khi có thay đổi. Một điều nhỏ mình mong cải thiện là hệ thống báo
                        cáo lượt xem và tương tác cần trực quan hơn để theo dõi hiệu quả.</p>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/uploads/members/ai.tran/340646548_625065249455025_5543772737292531081_n.jpg"
                        alt="" class="w-[250px] h-[250px] rounded-full p-2">
                    <h2 class="p-3 text-xl font-medium">Hoàng Mỹ Duyên</h2>
                    <div class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="mt-2"> Mình đã dùng phongkhamtot.com nhiều lần để tìm phòng khám cho bản thân và người
                        thân. Trang web hoạt động mượt mà, có nhiều phòng khám đa dạng ở các khu vực khác nhau. Đặc biệt,
                        phần tìm kiếm rất thông minh và nhanh. Mình chỉ mong họ thêm tính năng lưu lại phòng khám yêu thích
                        để lần sau không mất thời gian tìm kiếm lại. </p>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center shadow-lg items-center rounded-2xl p-6"><img
                        src="https://phongkhamtot.com/uploads/members/ai.tran/456036003_1059704572827302_4906186076967747574_n.jpg"
                        alt="" class="w-[250px] h-[250px] rounded-full p-2">
                    <h2 class="p-3 text-xl font-medium">Mai Lan Lưu</h2>
                    <div class="text-yellow-500">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="mt-2">Là một người quản lý phòng khám, mình đã thử đăng tin trên nhiều nền tảng, nhưng
                        phongkhamtot.com là nơi mang lại lượng khách hàng ổn định nhất. Quy trình đăng tin đơn giản, giao
                        diện trực quan, và đội ngũ hỗ trợ cực kỳ nhanh chóng. Khách tìm đến thông qua website đều rất chất
                        lượng, phù hợp với dịch vụ mình cung cấp. Hy vọng website sẽ sớm thêm tính năng theo dõi hiệu quả
                        quảng bá chi tiết hơn. </p>
                </a>
            </div>
        </section>

        {{-- Tin nổi bật --}}
        <section class="mt-4 p-6">
            <div class="grid grid-cols-2">
                <h1 class="text-blue-500 font-bold text-3xl">TIN TỨC NỔI BẬT</h1>
                <a href="#" class="text-right">Xem thêm</a>
            </div>
            <div class="grid grid-cols-4 pb- mt-4 gap-6 w-full">
                <!-- Card 1 -->
                <a href="#" class="items-center justify-center shadow-lg rounded-2xl overflow-hidden">
                    <img src="https://phongkhamtot.com/uploads/static/PHONGKHAMTOT/nhakhoavenus/phong-khma-nha-khoa-bao-viet.jpg"
                        alt="" class="w-full h-56 transition duration-300 hover:scale-105">
                    <div class="p-4 text-left mt-3">
                        <h2 class="text-lg font-bold hover:text-green-500">Top địa chỉ nha khoa Thủ Đức uy tín, được đánh
                            giá cao</h2>
                        <p class="text-sm mt-3">Thông báo - 14/10/2024</p>
                        <p class="mt-2 text-lg mt-3">Có phải bạn đang tìm kiếm 1 trung tâm nha khoa tại Thủ Đức uy tín để
                            thăm...</p>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="items-center justify-center shadow-lg rounded-2xl overflow-hidden">
                    <img src="https://phongkhamtot.com/uploads/static/tin-tuc/5%20phong%20kham%20da%20lieu%20HCM/WPKT-45-01(1).png"
                        alt="" class="w-full h-56 transition duration-300 hover:scale-105">
                    <div class="p-4 text-left mt-3">
                        <h2 class="text-lg font-bold hover:text-green-500">TOP 5 PHÒNG KHÁM DA LIỄU UY TÍN TẠI TP.HỒ CHÍ
                            MINH</h2>
                        <p class="text-sm mt-3">Tin tức - 22/06/2024</p>
                        <p class="mt-2 text-lg mt-3">Đã bao giờ bạn gặp vấn đề về làn da của mình chưa và bạn phân vân, đặt
                            câu hỏi...</p>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="items-center justify-center shadow-lg rounded-2xl overflow-hidden">
                    <img src="https://phongkhamtot.com/uploads/static/tin-tuc/Phong%20kham%20t%E1%BB%91t/PKT-214-01.png"
                        alt="" class="w-full h-56 transition duration-300 hover:scale-105">
                    <div class="p-4 text-left mt-3">
                        <h2 class="text-lg font-bold hover:text-green-500">PHÒNG KHÁM TỐT - NỀN TẢNG TÌM KIẾM PHÒNG KHÁM UY
                            TÍN...</h2>
                        <p class="text-sm mt-3">Tin tức - 24/06/2024</p>
                        <p class="mt-2 text-lg mt-3">Bạn đang tìm kiếm 1 nền tảng trực tuyến về Y tế và chăm sóc sức
                            khỏe...</p>
                    </div>
                </a>
                {{-- card 4 --}}
                <a href="#" class="items-center justify-center shadow-lg rounded-2xl overflow-hidden">
                    <img src="https://phongkhamtot.com/uploads/static/tin-tuc/Dung%20hay%20sai%2C%20phong%20kham%20t%E1%BB%91t%20ch%E1%BA%A5t%20lu%E1%BB%A3ng%20cang%20cao/B%E1%BA%A3n%20sao%20PKT_28-3-02.png"
                        alt="" class="w-full h-56 transition duration-300 hover:scale-105">
                    <div class="p-4 text-left mt-3">
                        <h2 class="text-lg font-bold hover:text-green-500">ĐÚNG HAY SAI - PHÒNG KHÁM CẢNG LỚN, CHẤT LƯỢNG
                            CÀNG...</h2>
                        <p class="text-sm mt-3">Thông báo - 25/10/2024</p>
                        <p class="mt-2 text-lg mt-3">Rất nhiều người cho rẳng, các phòng khám càng lớn , chất lượng dịch
                            vụ...</p>
                    </div>
                </a>
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
