@php
$message_types = ['info', 'success', 'warning', 'danger'];
$any_message = false;
@endphp

@foreach($message_types as $type)
    @if (!empty($messages[$type]))
        @if(!$any_message)
            <div class="messages">
        @endif

        @php if (!is_array($messages[$type])) $messages[$type] = [$messages[$type]]; @endphp

        <div class="messages-type messages-{{ $type }}">
        @foreach($messages[$type] as $message)
            <div class="alert alert-{{ $type }}">
                {{ $message }}
            </div>
        @endforeach
        </div>

        @if(!$any_message)
            </div>
            @php $any_message = true; @endphp
        @endif
    @endif
@endforeach