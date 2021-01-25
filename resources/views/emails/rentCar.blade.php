@component('mail::message')
{{$data['title']}}

# Hello ! You have new message from CMM Rental website.


Pick up date : {{$data['pud']}}: {{$data['put']}}  
Drop off date : {{$data['dofd']}}: {{$data['doft']}}  
Pick up location : {{$data['pul']}}  
Drop off location : {{$data['dofl']}}  
Number of guests : {{$data['nofpeople']}}  
Senders name : {{$data['name']}}  
Senders surname : {{$data['surname']}}  
Senders phone number : {{$data['phoneNo']}}  
Senders email : {{$data['email']}}  


Thanks,<br>
{{ config('app.name') }}
@endcomponent
