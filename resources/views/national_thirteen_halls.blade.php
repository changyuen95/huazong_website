@extends('layouts.app')

@section('title', '全国十三州大会堂 - 大马华总')


@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->
<div class="page-wrapper">
    <section class="page-header" style="background-image: url(assets/images/huatang-info.png);">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <h2>全国十三州大会堂</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->


    <section class="event-two event-two__event-1-page">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-sm-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                        <button class="pill-nav-items nav-link mb-1 active w-100" id="v-pills-sabah-tab" data-toggle="pill" data-target="#v-pills-sabah" type="button" role="tab" aria-controls="v-pills-sabah" aria-selected="true">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/sabah-logo.png') }}" alt="sabah-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">沙巴中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-sarawak-tab" data-toggle="pill" data-target="#v-pills-sarawak" type="button" role="tab" aria-controls="v-pills-sarawak" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/sarawak-logo.png') }}" alt="sarawak-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">砂拉越华人社团联合总会</span>
                            </div>
                        </button>
                        
                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-johor-tab" data-toggle="pill" data-target="#v-pills-johor" type="button" role="tab" aria-controls="v-pills-johor" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/johor-logo.png') }}" alt="johor-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">柔佛州中华总会</span>
                            </div>
                        </button>

                        <!-- <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-pahang-tab" data-toggle="pill" data-target="#v-pills-pahang" type="button" role="tab" aria-controls="v-pills-pahang" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/pahang-logo.png') }}" alt="pahang-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">彭亨华人社团联合会</span>
                            </div>
                        </button> -->

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-terenganu-tab" data-toggle="pill" data-target="#v-pills-terenganu" type="button" role="tab" aria-controls="v-pills-terenganu" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/terenganu-logo.png') }}" alt="terenganu-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">登嘉楼中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-kelantan-tab" data-toggle="pill" data-target="#v-pills-kelantan" type="button" role="tab" aria-controls="v-pills-kelantan" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/kelantan-logo.png') }}" alt="kelantan-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">吉兰丹中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-penang-tab" data-toggle="pill" data-target="#v-pills-penang" type="button" role="tab" aria-controls="v-pills-penang" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/penang-logo.png') }}" alt="penang-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">槟州华人大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-perak-tab" data-toggle="pill" data-target="#v-pills-perak" type="button" role="tab" aria-controls="v-pills-perak" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/perak-logo.png') }}" alt="perak-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">霹雳中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-kl-selangor-tab" data-toggle="pill" data-target="#v-pills-kl-selangor" type="button" role="tab" aria-controls="v-pills-kl-selangor" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/sl-logo.png') }}" alt="kl_selangor-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">吉隆坡暨雪兰莪中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-ns-tab" data-toggle="pill" data-target="#v-pills-ns" type="button" role="tab" aria-controls="v-pills-ns" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/ns-logo.png') }}" alt="ns-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">森美兰中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-melaka-tab" data-toggle="pill" data-target="#v-pills-melaka" type="button" role="tab" aria-controls="v-pills-melaka" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/melaka-logo.png') }}" alt="melaka-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">马六甲中华大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-kedah-tab" data-toggle="pill" data-target="#v-pills-kedah" type="button" role="tab" aria-controls="v-pills-kedah" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/kedah-logo.png') }}" alt="kedah-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">吉打州华人大会堂</span>
                            </div>
                        </button>

                        <button class="pill-nav-items nav-link mb-1 w-100" id="v-pills-perlis-tab" data-toggle="pill" data-target="#v-pills-perlis" type="button" role="tab" aria-controls="v-pills-perlis" aria-selected="false">
                            <div class="d-flex">
                                <img class="mx-2 align-self-center" src="{{ asset('assets/images/team/perlis-logo.png') }}" alt="perlis-logo" style="width: 70px;">
                                <span class="mx-2 align-self-center flex-grow-1 text-left">玻璃市州华人大会堂</span>
                            </div>
                        </button>

                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active bg-light" id="v-pills-sabah" role="tabpanel" aria-labelledby="v-pills-sabah-tab">
                            @include('huatang.sabah')
                        </div>
                        <div class="tab-pane fade" id="v-pills-sarawak" role="tabpanel" aria-labelledby="v-pills-sarawak-tab">
                            @include('huatang.sarawak')
                        </div>
                        <div class="tab-pane fade" id="v-pills-johor" role="tabpanel" aria-labelledby="v-pills-johor-tab">
                            @include('huatang.johor')
                        </div>
                        <div class="tab-pane fade" id="v-pills-pahang" role="tabpanel" aria-labelledby="v-pills-pahang-tab">
                            @include('huatang.pahang')
                        </div>
                        <div class="tab-pane fade" id="v-pills-terenganu" role="tabpanel" aria-labelledby="v-pills-terenganu-tab">
                            @include('huatang.terenganu')
                        </div>
                        <div class="tab-pane fade" id="v-pills-kelantan" role="tabpanel" aria-labelledby="v-pills-kelantan-tab">
                            @include('huatang.kelantan')
                        </div>
                        <div class="tab-pane fade" id="v-pills-penang" role="tabpanel" aria-labelledby="v-pills-penang-tab">
                            @include('huatang.penang')
                        </div>
                        <div class="tab-pane fade" id="v-pills-perak" role="tabpanel" aria-labelledby="v-pills-perak-tab">
                            @include('huatang.perak')
                        </div>
                        <div class="tab-pane fade" id="v-pills-kl-selangor" role="tabpanel" aria-labelledby="v-pills-kl-selangor-tab">
                            @include('huatang.kl_selangor')
                        </div>
                        <div class="tab-pane fade" id="v-pills-ns" role="tabpanel" aria-labelledby="v-pills-ns-tab">
                            @include('huatang.negeri_sembilan')
                        </div>
                        <div class="tab-pane fade" id="v-pills-melaka" role="tabpanel" aria-labelledby="v-pills-melaka-tab">
                            @include('huatang.melaka')
                        </div>
                        <div class="tab-pane fade" id="v-pills-kedah" role="tabpanel" aria-labelledby="v-pills-kedah-tab">
                            @include('huatang.kedah')
                        </div>
                        <div class="tab-pane fade" id="v-pills-perlis" role="tabpanel" aria-labelledby="v-pills-perlis-tab">
                            @include('huatang.perlis')
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.event-two -->

    
    @include('layouts.footer')
</div><!-- /.page-wrapper -->
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection