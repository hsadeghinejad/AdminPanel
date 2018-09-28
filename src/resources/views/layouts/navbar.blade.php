<nav class="navbar p-0 navbar-expand-md navbar-light bg-white sticky-top">
    <div class="d-flex align-items-center">
        <a class="navbar-brand m-0 px-5 py-3 bg-light h3" href="#">پنل ادمین</a>
        <i data-toggle="collapse" data-target="#sidebar" class="fas fa-bars text-dark mr-4"></i>
    </div>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto ml-3">
            <li class="nav-item pr-2">
                <a class="btn btn-sm btn-info" href="{{ url('/') }}">
                    صفحه اصلی
                </a>
            </li>
            <li class="nav-item pr-2">
                <form method="post" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <input type="submit" value="خروج" class="btn btn-sm btn-danger">
                </form>
            </li>
        </ul>
    </div>
</nav>