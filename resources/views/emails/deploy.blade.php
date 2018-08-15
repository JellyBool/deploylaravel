@component('mail::message')
# Deploy email

The body of your message.

@component('mail::button', ['url' => 'https://codecasts.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
