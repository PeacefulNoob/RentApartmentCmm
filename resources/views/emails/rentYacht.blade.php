@component('mail::message')
# Introduction
Rent A Yacht
{{$data['pud']}}
{{$data['dofd']}}
{{$data['nofpeople']}}
{{$data['name']}}
{{$data['surname']}}
{{$data['phoneNo']}}
{{$data['email']}}

Button Text

Thanks,<br>
{{ config('app.name') }}
@endcomponent
