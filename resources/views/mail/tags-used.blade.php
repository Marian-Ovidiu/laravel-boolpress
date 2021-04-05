@component('mail::message')
# Nuovi tag usati!!

Ecco i tag usati:

@foreach ($tags as $tag)
    - {{$tag->name}}
@endforeach

@component('mail::button', ['url' => ''])
Clicca qui
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
