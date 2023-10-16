@extends('layouts.app')

@section('content')
<div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        
        <!-- <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <h2>华博简介</h2>
            </div>
        </section> -->
        <section class="venue-one">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="venue-one__top">
                    <div class="block-title">
                        <p>华总教育基金简介</p>
                        <!-- <h3>Museum Locations</h3> -->
                    </div><!-- /.block-title -->
                    <p>前言：<br>
教育是立国和强国之本，也是百年树人的千秋大业。马来西亚中华大会堂总会（华总）了解到教育对国家建设的重要性，毅然成立了数项教育基金，为国内清寒家庭的莘莘学子提供免利息的贷学金，协助他们完成大学的学业。
华总自1998年开始陆续设立了以下三项教育基金，为国内清寒学子提供免利息贷学金：
（一）	华总-Carlsberg教育基金
（二）	华总-吉隆坡广东义山教育基金
（三）	华总-Astro教育基金
截至1.1.2023，华总教育基金总共发放了总额RM9,859,000（马币九百八十五万九千令吉）的免息贷学金，受惠学生共1,077人。

此外，华总也在2020年当国家经济受到新冠疫情的重大打击时，通过华总—Carlsberg教育基金发出总值RM1,000,000（马币一百万令吉）的免还助学金于国内的贫寒大专生，协助他们度过经济难关。共有333名大专生在这项助学金计划下受惠，每人获取RM3,000款额。
</p>
                        

<p>
华总贷学金优惠：
</p>
<ul>
<li>免利息贷学金</li>
<li>每位成功申请者每年可获得RM8,000 (马币八千令吉)，至到课程完毕为止</li>
</ul>
                </div><!-- /.venue-one__top -->
            </div><!-- /.container -->
        </section><!-- /.venue-one -->
        
       

        
        @include('layouts.footer')
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

@endsection
