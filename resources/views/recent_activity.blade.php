@extends('layouts.app')

@section('title', '最新活动 - 大马华总')

@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->

<div class="page-wrapper">
    <input type="hidden" class="recent-search-route" data-search-route="{{ route('recent_search') }}" />
    <section class="page-header" style="background-image: url(assets/images/late.jpg);">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <h2>最新活动</h2>
        </div>
    </section>


    <section class="event-three">

        <div class="container mb-5 list-of-state" style="padding-left:0px;padding:right:0px">
            <!-- <button class="btn thm-btn">马来西亚中华大会堂总会</button> -->
            <!-- <button class="btn btn-outline-thm">马来西亚中华大会堂总会</button> -->
            <!-- <button class="nav-link active" id="pills-main-tab" data-toggle="pill" data-target="#pills-main" type="button" role="tab" aria-controls="pills-main" aria-selected="true">马来西亚中华大会堂总会</button> -->

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link active recent-activity-group-selections" id="pills-main-tab" data-toggle="pill" data-target="#pills-main" type="button" role="tab" aria-controls="pills-main" aria-selected="true" value="all">全部</button>
                </li>
                @foreach($groups as $group)
                <li class="nav-item pill-items pr-2 pb-2" role="presentation">
                    <button class="nav-link recent-activity-group-selections" id="pills-main-tab" data-toggle="pill" data-target="#pills-main" type="button" role="tab" aria-controls="pills-main" aria-selected="true" value="{{ $group->id }}">{{ $group->name }}</button>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-main" role="tabpanel" aria-labelledby="pills-main-tab">
                    <div class="row event-state-content"></div>
                </div>
            </div>
            <nav class="event-state-pagination-nav" aria-label="Event Pagination">
                <ul class="pagination event-state-pagination-ul justify-content-center">
                </ul>
            </nav>
        </div><!-- /.container -->
    </section><!-- /.event-three -->


    @include('layouts.footer')
</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection