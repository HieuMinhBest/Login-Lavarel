
## Mô tả
Hệ thống đăng nhập bằng tài khoản bên thứ ba (Google, Facebook) sử dụng Laravel Socialite.

## Cách cài đặt
1. Clone project từ GitHub về máy.
2. Chạy lệnh `composer install` để cài đặt các thư viện.
3. Copy file `.env.example` thành `.env` và chạy `php artisan key:generate`.
4. Cấu hình Database trong file `.env`.
5. Chạy lệnh `php artisan migrate` để tạo bảng dữ liệu.
6. Chạy `php artisan serve` để khởi động server.

## Cách cấu hình Google & Facebook OAuth
### Google:
1. Truy cập [Google Cloud Console](https://console.cloud.google.com/).
2. Tạo Project -> APIs & Services -> Credentials.
3. Tạo OAuth client ID (Web application).
4. Nhập Authorized redirect URIs: `http://localhost:8000/auth/google/callback`.
5. Copy Client ID và Client Secret dán vào file `.env`.

### Facebook:
1. Truy cập [Facebook Developers](https://developers.facebook.com/).
2. Tạo App mới (Use cases: Authenticate and request data from users).
3. Thiết lập Facebook Login, thêm Valid OAuth Redirect URIs: `http://localhost:8000/auth/facebook/callback`.
4. Copy App ID và App Secret dán vào file `.env`.
