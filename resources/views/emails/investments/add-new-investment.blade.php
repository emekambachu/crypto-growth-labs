
<img src="{{ asset('bullsmarket_logo.png') }}" width="100">

<h3>Dear {{ $name }},</h3>

<p>
    Your investment was successful.<br>
    Once your payment has been approved, your wallet would be funded.<br><br>
</p>

<p><strong>Below are your payment details:</strong></p>
<ul>
    <li><strong>Investment ID:</strong> {{ $investment_id }}</li>
    <li><strong>Amount:</strong> ${{ $amount }}</li>
    <li><strong>Investment Package:</strong> {{ $investment_package }}</li>
    <li><strong>Status:</strong> {{ $status ? 'Approved' : 'Unapproved' }}</li>
</ul>

<p align="center">Need more information?<br>
    Please contact <strong>info@bullsmarkettraders.com</strong>.</p>


