@component('mail::message')
# TOTAL-BUSINESS

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
	{{ $msg->message }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
