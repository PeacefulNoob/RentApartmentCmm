@component('mail::message')
{{$data['title']}}

# Introduction
{{$data['pud']}}
{{$data['dofd']}}
{{$data['put']}}
{{$data['doft']}}
{{$data['pul']}}
{{$data['dofl']}}
{{$data['name']}}
{{$data['surname']}}
{{$data['phoneNo']}}
{{$data['email']}} 

The body of your message.

Button Text

Thanks,<br>
{{ config('app.name') }}
@endcomponent
