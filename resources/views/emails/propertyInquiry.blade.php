@component('mail::message')
# Introduction

{{$data['checkin']}}
{{$data['ckeckout']}}
{{$data['guests']}}
{{$data['name']}}
{{$data['surname']}}
{{$data['phoneNo']}}
{{$data['email']}}
Button Text

Thanks,<br>
{{ config('app.name') }}
@endcomponent
