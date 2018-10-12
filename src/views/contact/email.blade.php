@component('mail::message')
# Enquiry

There is a query from {{ $data['name'] }}

<br>

{{ $data['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
