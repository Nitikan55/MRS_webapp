<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('asset/front/plugins/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<section class="login-signup section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="login">
                    <h3 class="mt-4 mb-3">ลืมรหัสผ่าน</h3>
                    <p class="mb-4">กรอกอีเมลของคุณเพื่อรับลิงก์ตั้งรหัสผ่านใหม่</p>

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('edituser', ['id' => $user->id]) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">อีเมล</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus autocomplete="username">
                        </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">รหัสผ่านใหม่</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">รีเซ็ตรหัสผ่าน</button>
                        </form>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="mt-3 text-center">
                            <a href="{{ route('login') }}">กลับไปหน้าเข้าสู่ระบบ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('asset/front/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
