
<img src="{{ asset('cryptolabsfx_logo.png') }}" width="100">

<h3>Dear {{ $name }},</h3>

<p>
    You made a withdrawal request of ${{ $amount }}<br>
</p>

<p><strong>Below are your withdrawal details:</strong></p>
<ul>
    <li><strong>Amount:</strong> ${{ $amount }}</li>
    <li><strong>Status:</strong> {{ $is_approved ? 'Approved' : 'Unapproved' }}</li>
</ul>

<p align="center">Need more information?<br>
    Please contact <strong>support@wglobalinvestment.com</strong>.</p>
