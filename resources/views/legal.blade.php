@extends('layouts.main')

@section('title')
    Legal
@endsection

@section('content')
    <div class="breadcrumb-area" style="background-image:url('{{ asset('main/img/breadcrumb/1.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Legal </h1>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Legal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="client-area text-center pd-top-88 pd-bottom-90">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title section-title-2 text-center">
                        <p>The content provided on this website is for informational purposes only. Bulls Market Traders is not responsible for, and explicitly disclaims, all liability for damages of any kind arising out of the use, reference to or reliance on any information contained within the website.<br>
                            Although the Bulls Market Traders website may include links with direct access to other internet resources / websites, it is not responsible for the accuracy or content of the information listed on these sites. Links from the Bulls Market Traders website to third party websites do not constitute an endorsement by Bulls Market Traders of those parties or their products and services.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
