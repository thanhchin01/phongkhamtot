<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng Khám Tốt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Tailwind CDN (chạy ngay, không cần build) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- CSS riêng của bạn --}}
    @vite(['resources/css/style.css'])
</head>

<body class="font-sans text-gray-800">
    {{-- Header --}}
    <header x-data="{
        openMenu: false,
        openSearch: false
    }" class="bg-white shadow-md sticky top-0 z-50">
        <div class="px-4 md:px-6 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="http://127.0.0.1:8000/" class="flex items-center gap-3">
                <img src="https://phongkhamtot.com/logo.png" alt="Logo" class="h-9 w-auto md:h-10">
            </a>

            <!-- Nút menu cho mobile -->
            <button @click="openMenu = !openMenu" class="md:hidden p-2 border rounded text-gray-700">
                ☰
            </button>

            <!-- Nav cho PC/Tablet -->
            <nav class="hidden md:flex items-center gap-4 lg:gap-4">
                <!-- Form tìm kiếm -->
                <div class="relative" x-data="{ open: false }">
                    <!-- Nút toggle -->
                    <div class="inline-flex items-center gap-2 cursor-pointer group" @click="open = !open">
                        <div
                            class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-emerald-400 transition-all duration-300 group-hover:w-full group-hover:rounded-2xl">
                        </div>
                        <i
                            class="fa fa-search relative z-10 text-white text-xl flex items-center justify-center w-10 h-10"></i>
                        <span
                            class="relative z-10 font-medium text-gray-800 transition-all duration-300 group-hover:text-white hidden sm:inline">
                            Tìm kiếm
                        </span>
                    </div>

                    <!-- Form tìm kiếm ẩn-->
                    <div x-cloak x-show="open" x-transition @click.away="open = false"
                        class="fixed top-[64px] left-0 w-full bg-[#002566] p-4 sm:p-6 shadow-lg border-t border-gray-200 z-50">
                        <form action="{{ url('/') }}" method="get"
                            class="max-w-7xl mx-auto flex flex-col sm:flex-row gap-3">
                            <input type="text" name="keyWord" placeholder="Nhập tên phòng khám..."
                                class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-400 outline-none text-gray-800" />
                            <button type="submit"
                                class="px-6 py-3 bg-[#22d69f] text-white font-semibold rounded-lg hover:opacity-90 transition">
                                Tìm nhanh
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Menu items -->
                <div class="relative group">
                    <a href="http://127.0.0.1:8000/duocquantam"
                        class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition font-medium">
                        Được quan tâm nhất
                    </a>
                    <div
                        class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-40 text-gray-700 z-50">
                        <a href="http://127.0.0.1:8000/nhakhoa" class="block px-4 py-2 hover:bg-gray-100">Nha khoa</a>
                        <a href="http://127.0.0.1:8000/dalieu" class="block px-4 py-2 hover:bg-gray-100">Da liễu</a>
                        <a href="http://127.0.0.1:8000/ranghammat" class="block px-4 py-2 hover:bg-gray-100">Răng hàm
                            mặt</a>
                        <a href="http://127.0.0.1:8000/thammyvien" class="block px-4 py-2 hover:bg-gray-100">Thẩm mỹ
                            viện</a>
                    </div>
                </div>

                <a href="http://127.0.0.1:8000/bacsigioi"
                    class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition font-medium">Bác sĩ giỏi</a>
                <a href="http://127.0.0.1:8000/blog"
                    class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition font-medium">Blog</a>
                <a href="http://127.0.0.1:8000/huongdan"
                    class="px-3 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition font-medium">Hướng dẫn</a>
                <!-- Nút Đăng nhập -->
                <div x-data="{ dangnhap: false, dangky: false }" class="relative mt">
                    <!-- Nút mở form đăng nhập -->
                    <a href="#" @click.prevent="dangnhap = true"
                        class="px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-200 transition duration-200 mt-2 font-medium">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>Đăng ký/Đăng nhập
                    </a>

                    <!-- Modal ĐĂNG NHẬP -->
                    <div x-show="dangnhap" x-transition x-cloak
                        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                        <div @click.away="dangnhap = false" class="bg-white w-96 rounded-2xl shadow-lg p-6 relative">

                            <!-- Nút đóng -->
                            <button @click="dangnhap = false"
                                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                                <i class="fa-solid fa-xmark text-xl"></i>
                            </button>

                            <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">ĐĂNG NHẬP</h2>

                            <!-- Form đăng nhập -->
                            <form action="{{ route('dangnhap') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="block text-gray-700 font-medium mb-1">Email</label>
                                    <input type="email" name="email"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="Nhập email của bạn">
                                </div>

                                <div class="mb-3">
                                    <label class="block text-gray-700 font-medium mb-1">Mật khẩu</label>
                                    <input type="password" name="password"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="••••••••">
                                </div>

                                <div class="text-right">
                                    <a href="#" class="text-sm text-blue-500 hover:underline">Quên mật khẩu?</a>
                                </div>

                                <button type="submit"
                                    class="w-full bg-[#22d69f] text-white py-2 rounded-lg hover:bg-blue-700 transition mt-4">
                                    Đăng nhập
                                </button>

                                <!-- Nút mở form đăng ký -->
                                <div class="text-center mt-4">
                                    <a href="#" @click.prevent="dangnhap = false; dangky = true"
                                        class="text-gray-700 hover:text-blue-600 transition font-medium">
                                        Đăng ký tài khoản mới
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal ĐĂNG KÝ -->
                    <div x-show="dangky" x-transition x-cloak
                        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                        <div @click.away="dangky = false" class="bg-white w-[450px] rounded-2xl shadow-lg p-6 relative">

                            <!-- Nút đóng -->
                            <button @click="dangky = false"
                                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                                <i class="fa-solid fa-xmark text-xl"></i>
                            </button>

                            <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">ĐĂNG KÝ TÀI KHOẢN</h2>

                            <!-- Form đăng ký -->
                            <form action="{{ route('dangky') }}" method="POST">
                                @csrf
                                <div class="mb-3 text-left">
                                    <label class="block text-gray-700 font-medium mb-1">Họ và tên</label>
                                    <input type="text" name="name"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="Họ và tên">
                                </div>
                                <div class="mb-3 text-left">
                                    <label class="block text-gray-700 font-medium mb-1">Số điện thoại</label>
                                    <input type="text" name="sdt"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="Số điện thoại">
                                </div>
                                <div class="mb-3 text-left">
                                    <label class="block text-gray-700 font-medium mb-1">Email</label>
                                    <input type="email" name="email"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="Nhập email của bạn">
                                </div>
                                <div class="mb-3 text-left">
                                    <label class="block text-gray-700 font-medium mb-1">Mật khẩu</label>
                                    <input type="password" name="password"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="••••••••">
                                </div>
                                <div class="mb-3 text-left">
                                    <label class="block text-gray-700 font-medium mb-1">Xác nhận mật khẩu</label>
                                    <input type="password" name="password_confirmation"
                                        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        placeholder="••••••••">
                                </div>

                                <button type="submit"
                                    class="w-full bg-[#22d69f] text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                    Đăng ký
                                </button>
                                <div class="mt-4 flex items-center justify-center gap-2">
                                    <p>Hoặc bạn đã có tài khoản?</p>
                                    <a @click.prevent="dangky =false; dangnhap = true"
                                        class="hover:text-blue-600 font-medium">Đăng nhập</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Nút đăng tin -->
                <a href="http://127.0.0.1:8000/dangtin"
                    class="bg-[#22d69f] text-white px-4 py-2 rounded-lg hover:bg-red-500 transition flex items-center">
                    Đăng tin
                    <i class="fa-solid fa-paper-plane ms-2"></i>
                </a>
            </nav>
        </div>

        <!-- Menu mobile -->
        <div x-show="openMenu" x-transition
            class="flex flex-col bg-gray-50 border-t md:hidden text-gray-800 px-5 py-3 space-y-2">
            <a href="http://127.0.0.1:8000/duocquantam" class="block py-2 hover:bg-gray-200 rounded-md">Được quan tâm
                nhất</a>
            <a href="http://127.0.0.1:8000/bacsigioi" class="block py-2 hover:bg-gray-200 rounded-md">Bác sĩ giỏi</a>
            <a href="http://127.0.0.1:8000/blog" class="block py-2 hover:bg-gray-200 rounded-md">Blog</a>
            <a href="http://127.0.0.1:8000/huongdan" class="block py-2 hover:bg-gray-200 rounded-md">Hướng dẫn</a>
            <a href="http://127.0.0.1:8000/dangtin"
                class="block bg-[#22d69f] text-white text-center py-2 rounded-lg hover:bg-red-500 transition">
                Đăng tin
                <i class="fa-solid fa-paper-plane ms-2"></i>
            </a>
        </div>
    </header>

    <body>
        <div class="main-body p-3 mt-2">
            <span class="text-sm"><a href="" class="hover:text-[#22d69f]">Trang chủ</a>/Được quan tâm
                nhất</span>
        </div>
        <div class="relative">
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
                class="grid grid-flow-col auto-cols-[minmax(15rem,1fr)] gap-4 mt-5 overflow-x-auto scroll-smooth no-scrollbar bg-white">
                <a href="khamchuyenkhoa"
                    class="flex items-center justify-center h-16 text-center gap-3 px-6 py-3 rounded-full shadow-lg border-2 border-gray-100 border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Khám Chuyên khoa</span>
                </a>
                <a href="http://127.0.0.1:8000/khamtuxa"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Khám Từ Xa</span>
                </a>
                <a href="http://127.0.0.1:8000/khamtongquat"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Khám Tổng Quát</span>
                </a>
                <a href="http://127.0.0.1:8000/xetnghiemyhoc"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Xét Nghiệm Y Học</span>
                </a>
                <a href="http://127.0.0.1:8000/suckhoetinhthan"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Sức Khỏe Tinh Thần</span>
                </a>
                <a href="http://127.0.0.1:8000/khamnhakhoa"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Khám Nha Khoa</span>
                </a>
                <a href="http://127.0.0.1:8000/goiphauthuat"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Gói Phẫu Thuật</span>
                </a>
                <a href="http://127.0.0.1:8000/songkhoetieuduong"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Sống Khỏe Tiểu Đường</span>
                </a>
                <a href="http://127.0.0.1:8000/baitestsuckhoe"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Bài Test Sức Khỏe</span>
                </a>
                <a href="http://127.0.0.1:8000/yteganban"
                    class="flex items-center justify-center h-16 text-center gap-3 px-7 py-5 rounded-full shadow-lg border-2 border-gray-100 hover:bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-lg transition-all duration-300">
                    <img src="https://phongkhamtot.com/frontend/home/images/img_service.png" alt="icon"
                        class="w-10 h-10 rounded-full bg-white p-1">
                    <span class="font-semibold text-base whitespace-nowrap">Y tế gần bạn</span>
                </a>

            </div>
        </div>
        <div class="flex gap-4 rounded-xl mt-3 p-6 gap-6">
            <!-- Bọc toàn bộ sidebar trong Alpine -->
            <div x-data="{ openFilter: false }" class="relative">

                <!-- Nút lọc chỉ hiện trên mobile -->
                <div class="flex justify-end mb-4 md:hidden">
                    <button @click="openFilter = true"
                        class="bg-[#22d69f] text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-500 transition">
                        <i class="fa-solid fa-filter mr-2"></i> Bộ lọc
                    </button>
                </div>

                <div class="hidden md:block w-full">
                    {{-- Tinh/thanh pho --}}
                    <div class="shadow-xl p-6 gap-6 rounded-lg border">
                        <p class="font-bold">Tỉnh/Thành phố</p>
                        <div
                            class="relative w-64 border-2 border-gray-600 rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                            <button class="dropdown-btn w-full flex justify-between px-4 py-2 rounded-lg">
                                <div class="flex flex-cols"><span><i style="font-size: 20px"
                                            class="fa-solid fa-location-dot me-2 text-white bg-[#22d69f] w-10 h-10 rounded-full flex items-center justify-center"></i></span>
                                    <p class="mt-2">Địa điểm</p>
                                </div>
                                <i class="fa fa-chevron-down mt-3"></i>
                            </button>
                            <ul
                                class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg text-center z-50">
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
                    {{-- Loại hình --}}
                    <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                        <div class="relative w-64 rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                            <p class="font-bold">Loại hình</p>
                            <!-- Checkbox item -->
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option1"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option1"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Bệnh viện</span>
                                </label>
                            </li>

                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option2"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option2"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Phòng khám đa khoa</span>
                                </label>
                            </li>

                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option3"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option3"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Da liễu</span>
                                </label>
                            </li>
                        </div>
                    </div>
                    {{-- Chuyên khoa --}}
                    <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                        <p class="font-bold">Chuyên khoa</p>
                        <ul id="specialtyList" class="overflow-hidden transition-all duration-300 max-h-60">
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option4"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option4"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Cơ xương khớp</span>
                                </label>
                            </li>

                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option5"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option5"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Da liễu</span>
                                </label>
                            </li>

                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option6"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option6"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Hô hấp</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option7"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option7"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Ngoại khoa</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option8"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option8"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Nha khoa</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option9"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option9"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Nhi khoa</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option10"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option10"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Phục hồi chức năng</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option11"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option11"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Răng - Hàm - Mặt</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option12"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option12"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Sản phụ khoa</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option13"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option13"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Tai mũi họng</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option14"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option14"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Thẩm mĩ viện</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option15"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option15"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Tim mạch</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option16"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option16"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Ung bướu</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option17"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option17"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Xét nghiệm y khoa</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option18"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option18"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Y học cổ truyền</span>
                                </label>
                            </li>
                        </ul>
                        <button id="toggleButton"
                            class="text-blue-500 font-medium mt-3 hover:underline focus:outline-none">
                            Hiển thị thêm
                        </button>
                    </div>
                    {{-- Dịch vụ y tế --}}
                    <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                        <p class="font-bold">Dịch vụ y tế</p>
                        <ul id="specialtyList" class="overflow-hidden transition-all duration-300 max-h-60">
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option19"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option19"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Khám chuyên khoa</span>
                                </label>
                            </li>

                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option20"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option20"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Khám từ xa</span>
                                </label>
                            </li>

                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option21"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option21"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Khám tổng quát</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option22"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option22"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Xét nghiệm y học</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option23"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option23"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Sức khỏe tinh thần</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option24"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option24"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Khám nha khoa</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option25"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option25"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Gói phẫu thuật</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option26"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option26"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Sống khỏe tiểu đường</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option27"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option27"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Bài test sức khỏe</span>
                                </label>
                            </li>
                            <li class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                <input type="checkbox" id="option28"
                                    class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                <label for="option28"
                                    class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                    <span>Y tế gần bạn</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    {{-- Thời gian làm việc --}}
                    <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                        <p class="font-bold">Thời gian làm việc</p>
                        <div class="gap-4 mt-2">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="choose" value="specialty"
                                    class="w-5 h-5 text-blue-600">
                                <span>Làm việc trong tuần</span>
                            </label>

                            <label class="flex items-center space-x-2 mt-2">
                                <input type="radio" name="choose" value="service" class="w-5 h-5 text-blue-600">
                                <span>Làm cả chủ nhật và ngày nghỉ</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Modal bộ lọc (chỉ hiện trên mobile khi bấm nút) -->
                <div x-show="openFilter" x-transition.opacity
                    class="fixed inset-0 bg-black/50 flex justify-center items-center z-50 md:hidden">
                    <div @click.away="openFilter = false"
                        class="bg-white rounded-xl shadow-2xl w-11/12 max-h-[90vh] overflow-y-auto p-4">
                        <div class="flex justify-between items-center border-b pb-2 mb-3">
                            <h2 class="text-xl font-semibold text-blue-600">Bộ lọc</h2>
                            <button @click="openFilter = false"
                                class="text-gray-600 hover:text-red-500 text-2xl">&times;</button>
                        </div>

                        <!-- Nội dung form lọc (copy từ sidebar gốc vào đây) -->
                        {{-- Tinh/thanh pho --}}
                        <div class="shadow-xl p-6 gap-6 rounded-lg border">
                            <p class="font-bold">Tỉnh/Thành phố</p>
                            <div
                                class="relative w-64 border-2 border-gray-600 rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                                <button class="dropdown-btn w-full flex justify-between px-4 py-2 rounded-lg">
                                    <div class="flex flex-cols"><span><i style="font-size: 20px"
                                                class="fa-solid fa-location-dot me-2 text-white bg-[#22d69f] w-10 h-10 rounded-full flex items-center justify-center"></i></span>
                                        <p class="mt-2">Địa điểm</p>
                                    </div>
                                    <i class="fa fa-chevron-down mt-3"></i>
                                </button>
                                <ul
                                    class="dropdown-menu hidden absolute left-0 mt-2 w-full bg-white border rounded-lg shadow-lg text-center z-50">
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
                        {{-- Loại hình --}}
                        <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                            <div class="relative w-64 rounded-lg p-2 w-full md:w-auto flex-1 mt-2">
                                <p class="font-bold">Loại hình</p>
                                <!-- Checkbox item -->
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option1"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option1"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Bệnh viện</span>
                                    </label>
                                </li>

                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option2"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option2"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Phòng khám đa khoa</span>
                                    </label>
                                </li>

                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option3"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option3"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Da liễu</span>
                                    </label>
                                </li>
                            </div>
                        </div>
                        {{-- Chuyên khoa --}}
                        <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                            <p class="font-bold">Chuyên khoa</p>
                            <ul class="overflow-hidden transition-all duration-300">
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option4"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option4"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Cơ xương khớp</span>
                                    </label>
                                </li>

                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option5"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option5"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Da liễu</span>
                                    </label>
                                </li>

                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option6"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option6"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Hô hấp</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option7"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option7"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Ngoại khoa</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option8"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option8"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Nha khoa</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option9"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option9"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Nhi khoa</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option10"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option10"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Phục hồi chức năng</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option11"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option11"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Răng - Hàm - Mặt</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option12"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option12"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Sản phụ khoa</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option13"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option13"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Tai mũi họng</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option14"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option14"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Thẩm mĩ viện</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option15"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option15"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Tim mạch</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option16"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option16"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Ung bướu</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option17"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option17"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Xét nghiệm y khoa</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option18"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option18"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Y học cổ truyền</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        {{-- Dịch vụ y tế --}}
                        <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                            <p class="font-bold">Dịch vụ y tế</p>
                            <ul id="specialtyList" class="overflow-hidden transition-all duration-300 max-h-60">
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option19"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option19"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Khám chuyên khoa</span>
                                    </label>
                                </li>

                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option20"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option20"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Khám từ xa</span>
                                    </label>
                                </li>

                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option21"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option21"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Khám tổng quát</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option22"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option22"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Xét nghiệm y học</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option23"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option23"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Sức khỏe tinh thần</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option24"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option24"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Khám nha khoa</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option25"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option25"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Gói phẫu thuật</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option26"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option26"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Sống khỏe tiểu đường</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option27"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option27"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Bài test sức khỏe</span>
                                    </label>
                                </li>
                                <li
                                    class="flex items-center space-x-2 hover:bg-gray-100 rounded-md p-2 cursor-pointer">
                                    <input type="checkbox" id="option28"
                                        class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-400">
                                    <label for="option28"
                                        class="flex items-center space-x-2 text-gray-700 cursor-pointer">
                                        <span>Y tế gần bạn</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        {{-- Thời gian làm việc --}}
                        <div class="shadow-xl p-6 gap-6 rounded-xl mt-4 border">
                            <p class="font-bold">Thời gian làm việc</p>
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
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-10/12">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>

    </body>

    {{-- footer --}}
    <footer class="bg-light shadow-lg mt-20 gap-4 border-t border-gray-300">
        <div class="max-w-[1500px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-left p-4">
            <div class="p-4 flex-1 leading-[70px]">
                <img src="https://phongkhamtot.com/logo.png" alt="" class="w-64 h-17">
                <h1 class="ms-2 text-left text-xl font-normal mt-2">Thành viên của Công ty TNHH OHI</h1>
                <div class="grid grid-cols-5 gap-3 mt-3">
                    <a href="https://phongkhamtot.com" class="" aria-label="Trọ Mới">
                        <img src="https://phongkhamtot.com/frontend/home/images/logo_tro_moi.png" alt="Trọ mới">
                    </a>
                    <a href="http://ohdidi.com/" class="mt-6" aria-label="Ohdidi" target="_blank">
                        <img src="https://phongkhamtot.com/frontend/home/images/logo_ohdidi.png" alt="Ohdidi">
                    </a>
                    <a href="https://phongkhamtot.com/" class="" aria-label="Phòng Khám Tốt" target="_blank">
                        <img src="https://phongkhamtot.com/frontend/home/images/logo_phong_kham.png"
                            alt="Phòng Khám Tốt">
                    </a>
                    <a href="https://nhadepdattot.com/" class="" aria-label="Nhà Đẹp Đất Tốt" target="_blank">
                        <img src="https://phongkhamtot.com/frontend/home/images/logo_nha_dat.png"
                            alt="Nhà Đẹp Đất Tốt">
                    </a>
                    <a href="https://matbangmoi.com/" class="" aria-label="Mặt Bằng Mới" target="_blank">
                        <img src="https://phongkhamtot.com/frontend/home/images/logo_mat_bang.png" alt="Mặt Bằng Mới">
                    </a>
                </div>
            </div>
            <div class="p-4 flex-1 text-left leading-[50px]">
                <h1 class="text-[#22d69f] font-medium text-2xl">THÔNG TIN</h1>
                <div class="hover:underline">
                    <a href="https://phongkhamtot.com/thong-tin/dieu-khoan-cam-ket">Điều khoản & Cam
                        kết</a>
                </div>
                <div class="hover:underline">
                    <a href="https://phongkhamtot.com/thong-tin/quy-che-hoat-dong">Quy chế hoạt
                        động</a>
                </div>
                <div class="hover:underline">
                    <a href="https://phongkhamtot.com/thong-tin/giai-quyet-khieu-nai">Giải quyết
                        khiếu nại</a>
                </div>
                <div class="hover:underline">
                    <a href="https://phongkhamtot.com/thong-tin/chinh-sach-bao-mat">Chính sách bảo
                        mật</a>
                </div>
            </div>
            <div class="p-4 flex-1 text-left leading-[50px]">
                <h1 class="text-[#22d69f] font-medium text-2xl">HỆ THỐNG</h1>
                <div>
                    <div class="hover:underline"><a
                            href="https://phongkhamtot.com/thong-tin/huong-dan-thanh-toan-vnpay"
                            class="item-link">Hướng dẫn thanh toán VNPAY</a></div>
                    <div class="hover:underline"><a href="https://phongkhamtot.com/thong-tin/bang-phi"
                            class="item-link">Bảng
                            phí</a></div>
                    <div class="hover:underline"><a href="https://phongkhamtot.com/lien-he" class="item-link">Liên
                            hệ</a>
                    </div>
                    <div class="hover:underline"><a href="https://phongkhamtot.com/huong-dan" class="item-link"
                            target="_blank">Hướng dẫn</a></div>
                </div>
            </div>
            <div class="p-4 flex-1 text-left leading-[50px]">
                <h1 class="text-[#22d69f] font-medium text-2xl">KẾT NỐI VỚI CHÚNG TÔI</h1>
                <div>
                    <div class="hover:underline"><i class="fa-solid fa-phone"></i> <a href="tel:0363321579"
                            class="item-link"><span class="item-data ms-2">036.332.1579</span></a></div>
                    <div class="hover:underline"><i class="fa-brands fa-facebook"></i><a
                            href="https://www.facebook.com/phongkhamtottoanquoc" target="_blank"
                            class="item-link"><span class="item-data ms-2">phongkhamtot.com
                            </span></a></div>
                    <div class="hover:underline"><i class="fa-brands fa-tiktok"></i><a
                            href="https://www.tiktok.com/@ohdidi.vn" target="_blank" class="item-link"><span
                                class="item-data ms-2">@phongkhamtot.com</span></a></div>
                    {{-- <div class="grid grid-cols-2 flex space-x-2">
                        <svg class="w-24" xmlns="http://www.w3.org/2 000/svg">
                            <path fill="currentColor"
                                d="M12.49 10.272v-.45h1.347v6.322h-.77a.576.576 0 0 1-.577-.573v.001a3.273 3.273 0 0 1-1.938.632a3.284 3.284 0 0 1-3.284-3.282a3.284 3.284 0 0 1 3.284-3.282a3.273 3.273 0 0 1 1.937.632zM6.919 7.79v.205c0 .382-.051.694-.3 1.06l-.03.034a7.714 7.714 0 0 0-.242.285L2.024 14.8h4.895v.768a.576.576 0 0 1-.577.576H0v-.362c0-.443.11-.641.25-.847L4.858 9.23H.192V7.79zm8.551 8.354a.48.48 0 0 1-.48-.48V7.79h1.441v8.354zM20.693 9.6a3.306 3.306 0 1 1 .002 6.612a3.306 3.306 0 0 1-.002-6.612m-10.14 5.253a1.932 1.932 0 1 0 0-3.863a1.932 1.932 0 0 0 0 3.863m10.14-.003a1.945 1.945 0 1 0 0-3.89a1.945 1.945 0 0 0 0 3.89" />
                        </svg>
                        <a href="https://zalo.me/0363321579" target="_blank" class="item-link"><span
                                class="item-data ms-2 text-left">036.332.1579
                            </span></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <footer class="bg-[#22d69f] text-white text-center p-4">
        <h1 class="font-medium text-lg">Copyright © 2018 - 2025 OHI Co.Ltd</h1>
    </footer>

    @vite(['resources/js/app.js'])
</body>

</html>
