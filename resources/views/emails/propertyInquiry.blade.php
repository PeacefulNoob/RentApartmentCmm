@component('mail::message')
# Hello ! You have new message from CMM Rental website.

Check in : {{$data['checkin']}}  
Check out : {{$data['ckeckout']}}  
Number of guests : {{$data['guests']}}  
Senders name : {{$data['name']}}  
Senders surname : {{$data['surname']}}  
Senders phone number : {{$data['phoneNo']}}  
Senders email : {{$data['email']}}  


Thanks,<br>
{{ config('app.name') }}
@endcomponent
