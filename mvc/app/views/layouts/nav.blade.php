<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{BASE_URL}}">Danh mục</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{BASE_URL . 'san-pham'}}">Sản phẩm <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{BASE_URL . 'tai-khoan'}}">Tài khoản</a>
        </li>
        @if(isset($_SESSION[AUTH]))
        <li class="nav-item active">
            <a class="nav-link" href="{{BASE_URL . 'logout'}}">Hello, {{$_SESSION[AUTH]['name']}} - Đăng xuất</a>
        </li>
        @endif
    </ul>
    </div>
</nav>