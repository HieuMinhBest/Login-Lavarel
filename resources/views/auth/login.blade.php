<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Đăng nhập hệ thống</h2>
    @if(session('error'))
        <div style="color:red;">{{ session('error') }}</div>
    @endif
    <a href="{{ route('social.redirect', 'google') }}">
        <button>Đăng nhập bằng Google</button>
    </a>
    <a href="{{ route('social.redirect', 'facebook') }}">
        <button>Đăng nhập bằng Facebook</button>
    </a>
</body>
</html>