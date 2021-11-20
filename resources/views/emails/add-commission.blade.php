<img src="{{ asset('bullsmarket_logo.png') }}" width="100">

<h3>Hello {{ $name }},</h3>

<h4>Congratulations, your commission has been added.</h4><br>

<strong>Transaction Details</strong><br>
<p><strong>Description:</strong> {{ $description }}</p>
<p><strong>Amount:</strong> ${{ $amount }}</p>
<p><strong>Date of Transaction:</strong> {{ $time }}</p>

<strong>Your Wallet Balance as at {{ $time }}</strong><br>
<p><strong>Current Balance:</strong> ${{ number_format($balance) }}</p>
