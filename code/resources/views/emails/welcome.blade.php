@component('mail::message')
# Welcome to {{ config('app.name') }}!

Hi, **{{ $user->name }}**. Thank you for registering with us.

Now you are able to buy varieties of products from our sellers.
Happy shopping :)

@component('mail::panel')
@component('mail::button', ['url' => 'http://athwela.tk/shop',])
Shop Now
@endcomponent
@endcomponent

And also you can learn about making products from our learning center.

@component('mail::button', ['url' => 'http://athwela.tk/study'])
Learn Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
