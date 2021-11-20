
<img src="{{ asset('bullsmarket_logo.png') }}" width="200">

<h3>Hello {{ $name }}</h3>

<p>
    @if($is_approved)
        Your Withdrawal of ${{ $amount }} has been Approved.<br>
        You will receive payment within an hour.
    @else
        Your Withdrawal of ${{ $amount }} has been Cancelled.
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>info@bullsmarkettraders.com</strong>.</p>
