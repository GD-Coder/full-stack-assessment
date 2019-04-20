@component('mail::message')
# Hello {{ ucwords($message->name) }},

# We recieved a message stating the following:

# Company Name: {{ ucwords($message->company) }}

# Phone: {{ $message->phone }}

# Email: {{ $message->email }}

# Subject: {{ ucwords($message->subject) }}

# Message: {{ ucfirst($message->content) }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
