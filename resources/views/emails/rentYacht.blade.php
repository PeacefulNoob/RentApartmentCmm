@component('mail::message')
# Hello ! You have new message from CMM Rental website.
Rent A Yacht

Pick up date : {{$data['pud']}}  
Drop off date : {{$data['dofd']}}  
Number of guests : {{$data['nofpeople']}}  
Senders name : {{$data['name']}}  
Senders surname : {{$data['surname']}}  
Senders phone number : {{$data['phoneNo']}}  
Senders email : {{$data['email']}}  
  
Thanks,<br>
{{ config('app.name') }}
@endcomponent
