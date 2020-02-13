@component('mail::message')
# Thank you for your message

<strong>First Name</strong> {{ $data['firstname'] }}
<strong>Surname</strong> {{ $data['surname'] }}
<strong>User Name</strong> {{ $data['username'] }}
<strong>Email</strong> {{ $data['email'] }}

<strong>Message</strong> 

{{ $data['message'] }}

@endcomponent
