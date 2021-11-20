
<img src="{{ asset('bullsmarket_logo.png') }}" width="100">

<h3>Hello {{ $name }}</h3>

<p>
    @if($status === 'activated')
        Congratulations, Your account has been activated. <a href="{{ route('login') }}"><strong>Login</strong></a>, Choose an investment plan and make a deposit to start earning.
    @else
        Your Account has been deactivated. Contact <strong>info@bullsmarkettraders.com</strong> for more info
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>info@bullsmarkettraders.com</strong>.</p>
