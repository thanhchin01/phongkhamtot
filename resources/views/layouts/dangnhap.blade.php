<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Tailwind CDN (chạy ngay, không cần build) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-3">
        <img src="https://id.ohi.vn/logo.svg" alt="" class="mx-auto w-20 mt-4">
        <span class="flex flex-cols justify-center mt-2">
            <a href="http://127.0.0.1:8000/dangnhap" class="text-xl font-bold text-blue-600 text-center">Đăng nhập</a>/ <a
             href="http://127.0.0.1:8000/dangky" class="text-xl font-bold text-center">Đăng ký</a>
        </span>
        <form action="{{ route('dangnhap') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email"
                    class="w-full h-12 px-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#22d69f]"
                    placeholder="Nhập email của bạn" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu</label>
                <input type="password" name="password"
                    class="w-full h-12 px-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#22d69f]"
                    placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit"
                class="w-full py-3 bg-[#22d69f] text-white rounded-lg font-semibold hover:opacity-90 transition">
                Đăng nhập
            </button>
            <div class="flex items-center justify-center text-sm text-gray-600">
                <a href="#" class="text-[#22d69f] hover:underline">Quên mật khẩu?</a>
            </div>
        </form>
    </div>

</body>

</html>
