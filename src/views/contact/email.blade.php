@component('mail::message')
# Introduction


There is a new query from  {{ $name }}
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
