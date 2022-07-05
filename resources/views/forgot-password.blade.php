<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('sign')}}/style.css" />
    <title>Lấy lại mật khẩu</title>
</head>
<body>
    @include('sweetalert::alert')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="POST" enctype="multipart/form-data" class="sign-in-form">
                @csrf
                <h2 class="title">Lấy lại mật khẩu</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input required name="email" type="email" placeholder="Email" />
                </div>
                <button type="submit" name="login" class="btn solid">Gửi yêu cầu</button>
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Bạn đã có tài khoản?</h3>
                <p>
                    Bạn đã có tài khoản và không muốn tiếp tục với mục lấy lại mật khẩu, trở lại để tham gia vào website!!!
                </p>
                <a href="{{route('join')}}"><button class="btn transparent" id="sign-up-btn">Đăng nhập</button></a>
            </div>
            <img src="{{asset('sign')}}/img/log.svg" class="image" alt="" />
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</body>
</html>
