
<img src="{{ asset('bullsmarket_logo.png') }}" width="200">

<h3>Contact Message From {{ $name }}</h3>

<p>
    @if(!empty($subject))
    <strong>Subject:</strong><br>
    {{ $subject }}
    @endif

  <strong>Message:</strong><br>
    {{ $email_message }}
</p>
