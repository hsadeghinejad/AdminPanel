<!doctype html>
<html lang="en">
<head>
    @php
    $title = config('adminpanel.title', '');
    @endphp
    <title>{{ strlen($title) ? "$title - " : '' }}@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('adminpanel::layouts.styles')
</head>
<body>
@include('adminpanel::layouts.navbar')

<main>
    <div class="container-fluid bg-light">
        <div class="row">
            @include('adminpanel::layouts.menus')

            <div id="main" class="col-12 col-md-10 mr-auto pt-3">
                @include('adminpanel::layouts.body')
            </div>
        </div>
    </div>
</main>
@include('adminpanel::layouts.scripts')
</body>
</html>