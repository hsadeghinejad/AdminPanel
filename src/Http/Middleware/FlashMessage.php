<?php
namespace HamedSadeghi\AdminPanel\Http\Middleware;

class FlashMessage
{
    public function handle($request, \Closure $next){
        $message = [
            'info' => [],
            'danger' => [],
            'success' => [],
            'warning' => []
        ];

        if (session()->has('message')) {
            $temp = session('message');
            $temp = is_array($temp) ? $temp : [$temp];

            $message['info'] = $temp;
        }

        if (session()->has('message_info')) {
            $temp = session('message_info');
            $temp = is_array($temp) ? $temp : [$temp];

            $message['info'] = array_merge($message['info'], $temp);
        }

        if (session()->has('message_success')){
            $temp = session('message_success');
            $temp = is_array($temp) ? $temp : [$temp];

            $message['success'] = $temp;
        }

        if (session()->has('message_danger')){
            $temp = session('message_danger');
            $temp = is_array($temp) ? $temp : [$temp];

            $message['danger'] = $temp;
        }

        if (session()->has('message_warning')){
            $temp = session('message_warning');
            $temp = is_array($temp) ? $temp : [$temp];

            $message['warning'] = $temp;
        }

        view()->share('messages', $message);

        return $next($request);
    }
}