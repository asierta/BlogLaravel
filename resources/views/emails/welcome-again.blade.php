@component('mail::message')
# Introduction

The body of your message.

@component('mail::panel', ['url' => ''])
asdfasdfasdfasdf
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
