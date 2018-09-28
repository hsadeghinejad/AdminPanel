<div class="card">
    <div class="card-header">
        <h4 class="d-flex align-items-center my-1">
            @yield('block-title')
        </h4>
    </div>
    <div class="card-body">
        @include('adminpanel::layouts.messages')
        @yield('body')
    </div>
</div>