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

                    <form wire:submit.prevent="edit">
                        <div class="mb-3">
                            <label for="machine_name" class="form-label">ชื่อเครื่องจักร</label>
                            <input type="text" id="machine_name" wire:model="machine_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="machine_type" class="form-label">ประเภทเครื่องจักร</label>
                            <input type="text" id="machine_type" wire:model="machine_type" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">สถานะ</label>
                            <input type="text" id="status" wire:model="status" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="maintenance_cycle" class="form-label">รอบการบำรุงรักษา</label>
                            <input type="number" id="maintenance_cycle" wire:model="maintenance_cycle" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">รหัสใหม่ (ถ้าต้องการเปลี่ยน)</label>
                            <input type="password" id="new_password" wire:model="new_password" class="form-control">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">แก้ไข</button>
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
