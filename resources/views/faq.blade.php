@extends('layouts.main')

@section('title')
    FAQ
@endsection

@section('content')
    <div class="page-head section row-vm light has-bg-image">
        <div class="imagebg bg-image-loaded"
             style="background-image: url(&quot;{{ asset('main/images/page-inside-bg.jpg') }}&quot;);">
            <img src="{{ asset('main/images/page-inside-bg.jpg') }}" alt="page-head">
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>FAQ</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>FAQ</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 res-m-bttm">
                    <h4>Pre Answered <span>Questions</span></h4>
                    <!-- Accordion -->
                    <div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i1">
                                <h6 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false" class="collapsed">
                                        What does Bulls Market Traders do?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i1" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Bulls Market Traders is one of the leaders at international cryptocurrency investment market, it is engaged in cryptocurrency trade for profit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i2">
                                <h6 class="panel-title">
                                    <a class="" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="true">
                                        How safe are the investments offered by Bulls Market Traders?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i2" aria-expanded="true" style="">
                                <div class="panel-body">
                                    <p>We make every effort for your deposit to be fully secured and to bring stable income. We can safely call our investments risk-free.</p>
                                </div>
                            </div>
                        </div>
                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i3">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
                                        Should i pay for account registration ?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3" aria-expanded="false">
                                <div class="panel-body">
                                    <p>No, the registration is absolutely free.</p>
                                </div>
                            </div>
                        </div>

                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i4">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
                                        What should i specify on my bitcoin account field?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i4" aria-expanded="false">
                                <div class="panel-body">
                                    <p>In this field, you must enter your Bitcoin address, containing about 33 alphanumeric characters, in the current version of the protocol, it begins with 1 or 3. Using this address, you can make Bitcoin transactions.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->

                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i5">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i5" aria-expanded="false">
                                        What should i do if i cannot enter my account?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i5" aria-expanded="false">
                                <div class="panel-body">
                                    <p>Most likely, you are entering incorrect data (username or password), check it and try again. If the problem remains, reset your password, using a special function at the login page. Do not forget to check the spam folder, sometimes letters from the company can get there.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->

                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i6">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i6" aria-expanded="false">
                                        What profit can i expect?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i6" aria-expanded="false">
                                <div class="panel-body">
                                    <p>Depending on the amount of your deposit, you can make a profit of 10-15% every day on a regular basis.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->

                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i7">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i7" aria-expanded="false">
                                        What currency can i invest in?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i7" aria-expanded="false">
                                <div class="panel-body">
                                    <p>We only accept Bitcoin.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->

                        <!-- each panel for accordion -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-i8">
                                <h6 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i8" aria-expanded="false">
                                        How can i make a deposit?
                                        <span class="plus-minus"><span></span></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="accordion-pane-i8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i8" aria-expanded="false">
                                <div class="panel-body">
                                    <p>Sign in to your account and in the section “Make a deposit” select an investment plan and specify the amount you would like to invest. The system will suggest you the Bitcoin address where you will need to send the exact amount.</p>
                                </div>
                            </div>
                        </div><!-- end each panel -->

                    </div><!-- Accordion #end -->
                </div>
            </div>
        </div>
    </div>
@endsection
