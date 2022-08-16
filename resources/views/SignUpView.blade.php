@component('mail::message')
Sign up here {{$name}}
    @component('mail::button',['url'=> 'http://127.0.0.1/verified'])
    Click Here
    @endcomponent
@endcomponent