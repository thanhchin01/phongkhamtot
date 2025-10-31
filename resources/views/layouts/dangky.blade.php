<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   {{-- Tailwind CDN (chạy ngay, không cần build) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/style.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6">
        <img src="https://id.ohi.vn/logo.svg" alt="" class="mx-auto w-20 mt-4">
        <span class="flex flex-cols justify-center mt-2">
            <a href="http://127.0.0.1:8000/dangnhap" class="text-xl font-bold text-blue-600 text-center">Đăng nhập</a>/
            <a href="http://127.0.0.1:8000/dangky" class="text-xl font-bold text-center">Đăng ký</a>
        </span>
        <form action="{{ route('dangky') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tài khoản/Email</label>
                <input type="email" name="name"
                    class="w-full h-12 px-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#22d69f]"
                    placeholder="Nhập họ và tên" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu</label>
                <input type="password" name="password"
                    class="w-full h-12 px-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#22d69f]"
                    placeholder="Nhập mật khẩu" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nhập lại mật khẩu</label>
                <input type="password" name="password_confirmation"
                    class="w-full h-12 px-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#22d69f]"
                    placeholder="Nhập lại mật khẩu" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tên đầy đủ</label>
                <input type="text" name="email"
                    class="w-full h-12 px-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#22d69f]"
                    placeholder="Nhập email" required>
            </div>
            <p class="text-center text-sm text-gray-600 mt-6">
                Bằng cách nhấn vào Đăng ký, bạn đồng ý với bạn đã đồng ý với ?
                <a class="text-blue-500 font-medium hover:underline">Điều khoản sử dụng</a>
            </p>
            <button type="submit"
                class="w-full py-3 bg-[#22d69f] text-white rounded-lg font-semibold hover:opacity-90 transition">
                Đăng ký
            </button>
        </form>
    </div>

</body>

</html>
