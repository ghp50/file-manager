<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>آپلود فایل</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h2 class="text-xl font-bold mb-4 text-center">ارسال فایل به سرور</h2>

    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-2 mb-4 rounded text-sm text-center">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="document" class="block w-full border mb-4 p-2 rounded">
        @error('document') <p class="text-red-500 text-xs mb-2">{{ $message }}</p> @enderror
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">آپلود</button>
    </form>
</div>
</body>
</html>
