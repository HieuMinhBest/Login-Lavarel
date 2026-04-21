<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h2>Thông tin sinh viên thực hiện</h2>
    <p><strong>Họ tên sinh viên:</strong> Nguyễn Văn A</p>
    <p><strong>Mã sinh viên:</strong> 20201234</p>
    <p><strong>Lớp:</strong> D18CNPM2</p>

    <hr>
    <h2>Thông tin tài khoản đăng nhập</h2>
    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <div>
        <img src="{{ auth()->user()->avatar }}" alt="Avatar" width="100">
        <p><strong>Tên:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Provider:</strong> {{ auth()->user()->provider }}</p>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>