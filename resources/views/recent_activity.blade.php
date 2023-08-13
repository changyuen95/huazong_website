@extends('layouts.app')

@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->

<div class="page-wrapper">

    <section class="page-header" style="background-image: url(assets/images/activity/bg_layer.png);">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <h2>最新活动</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="event-three">

        <div class="container mb-5 list-of-state" style="padding-left:0px;padding:right:0px">
            <!-- <button class="btn thm-btn">马来西亚中华大会堂总会</button> -->
            <!-- <button class="btn btn-outline-thm">马来西亚中华大会堂总会</button> -->

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link active" id="pills-main-tab" data-toggle="pill" data-target="#pills-main" type="button" role="tab" aria-controls="pills-main" aria-selected="true">马来西亚中华大会堂总会</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-sabah-tab" data-toggle="pill" data-target="#pills-sabah" type="button" role="tab" aria-controls="pills-sabah" aria-selected="false">沙巴中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-sarawak-tab" data-toggle="pill" data-target="#pills-sarawak" type="button" role="tab" aria-controls="pills-sarawak" aria-selected="false">砂拉越华人社团联合总会</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-johor-tab" data-toggle="pill" data-target="#pills-johor" type="button" role="tab" aria-controls="pills-johor" aria-selected="true">柔佛州中华总会</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-pahang-tab" data-toggle="pill" data-target="#pills-pahang" type="button" role="tab" aria-controls="pills-pahang" aria-selected="false">彭亨华人社团联合会</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-terengganu-tab" data-toggle="pill" data-target="#pills-terengganu" type="button" role="tab" aria-controls="pills-terengganu" aria-selected="false">登嘉楼中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-kelantan-tab" data-toggle="pill" data-target="#pills-kelantan" type="button" role="tab" aria-controls="pills-kelantan" aria-selected="true">吉兰丹中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-penang-tab" data-toggle="pill" data-target="#pills-penang" type="button" role="tab" aria-controls="pills-penang" aria-selected="false">槟州华人大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-perak-tab" data-toggle="pill" data-target="#pills-perak" type="button" role="tab" aria-controls="pills-perak" aria-selected="false">霹雳中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-kl-selangor-tab" data-toggle="pill" data-target="#pills-kl-selangor" type="button" role="tab" aria-controls="pills-kl-selangor" aria-selected="true">吉隆坡暨雪兰莪中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-negerisembilan-tab" data-toggle="pill" data-target="#pills-negerisembilan" type="button" role="tab" aria-controls="pills-negerisembilan" aria-selected="false">森美兰中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-melaka-tab" data-toggle="pill" data-target="#pills-melaka" type="button" role="tab" aria-controls="pills-melaka" aria-selected="false">马六甲中华大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-kedah-tab" data-toggle="pill" data-target="#pills-kedah" type="button" role="tab" aria-controls="pills-kedah" aria-selected="false">吉打州华人大会堂</button>
                </li>
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link" id="pills-perlis-tab" data-toggle="pill" data-target="#pills-perlis" type="button" role="tab" aria-controls="pills-perlis" aria-selected="false">玻璃市州华人大会堂</button>
                </li>
            </ul>
        </div>
        <div class="container" style="padding-left:0px;padding:right:0px">

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-main" role="tabpanel" aria-labelledby="pills-main-tab">1 @include('event_state.main_hall')</div>
                <div class="tab-pane fade" id="pills-sabah" role="tabpanel" aria-labelledby="pills-sabah-tab">2 @include('event_state.sabah_hall')</div>
                <div class="tab-pane fade" id="pills-sarawak" role="tabpanel" aria-labelledby="pills-sarawak-tab">3 @include('event_state.sarawak_hall')</div>
                <div class="tab-pane fade" id="pills-johor" role="tabpanel" aria-labelledby="pills-johor-tab">4 @include('event_state.johor_hall')</div>
                <div class="tab-pane fade" id="pills-pahang" role="tabpanel" aria-labelledby="pills-pahang-tab">5 @include('event_state.pahang_hall')</div>
                <div class="tab-pane fade" id="pills-terengganu" role="tabpanel" aria-labelledby="pills-terengganu-tab">6 @include('event_state.terengganu_hall')</div>
                <div class="tab-pane fade" id="pills-kelantan" role="tabpanel" aria-labelledby="pills-kelantan-tab">7 @include('event_state.kelantan_hall')</div>
                <div class="tab-pane fade" id="pills-penang" role="tabpanel" aria-labelledby="pills-penang-tab">8 @include('event_state.penang_hall')</div>
                <div class="tab-pane fade" id="pills-perak" role="tabpanel" aria-labelledby="pills-perak-tab">9 @include('event_state.perak_hall')</div>
                <div class="tab-pane fade" id="pills-kl-selangor" role="tabpanel" aria-labelledby="pills-kl-selangor-tab">10 @include('event_state.kl_and_selangor_hall')</div>
                <div class="tab-pane fade" id="pills-negerisembilan" role="tabpanel" aria-labelledby="pills-negerisembilan-tab">11 @include('event_state.negeri_sembilan_hall')</div>
                <div class="tab-pane fade" id="pills-melaka" role="tabpanel" aria-labelledby="pills-melaka-tab">12 @include('event_state.melaka_hall')</div>
                <div class="tab-pane fade" id="pills-kedah" role="tabpanel" aria-labelledby="pills-kedah-tab">13 @include('event_state.kedah_hall')</div>
                <div class="tab-pane fade" id="pills-perlis" role="tabpanel" aria-labelledby="pills-perlis-tab">14 @include('event_state.perlis_hall')</div>
            </div>

        </div><!-- /.container -->
    </section><!-- /.event-three -->

    
    @include('layouts.footer')
</div><!-- /.page-wrapper -->
    
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection