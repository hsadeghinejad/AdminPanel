@foreach($items as $item)
<li @lm-attrs($item) class="nav-item my-1" @lm-endattrs>
    <a
            href="{!! $item->url() !!}"
            class="nav-link @if($item->hasChildren()) collapsed @endif"
            @if($item->hasChildren()) data-toggle="collapse" data-target="#{{ $item->id }}" @endif
    >
        @if($item->attr('icon'))
            <i class="fa ml-2 fa-{{ $item->attr('icon') }}"></i>
        @endif
        <span>{!! $item->title !!}</span>
        @if ($item->hasChildren())
            <i class="fa fa-chevron-left float-left child-icon"></i>
        @endif
    </a>
    @if($item->hasChildren())
        <div class="collapse @if($item->isActive) show @endif" id="{{ $item->id }}">
            <ul class="navbar-nav p-0">
                @include('adminpanel::layouts.menu.childs', ['items' => $item->children()])
            </ul>
        </div>
    @endif
</li>
@endforeach