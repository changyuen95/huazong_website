@extends('layouts.app')

@section('title', '简介 - 大马华总')


@section('content')
<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('assets/images/info.png');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <!-- <h3>象征华人文化火种无处不在</h3> -->
                    <h2>马来西亚中华大会堂总会 - 华总简介</h2>
                    <!-- <h2>随着完成了仙本那马达京岛“海底火炬礼”，以及昨午在古达灯火楼“天涯海角”火炬行创举后，第38届全国华人文化节火炬队伍将在9月把文化火炬，带上东南亚第一顶峰的沙巴神山而“再创高峰”！</h2> -->
                    <div class="btn-box"><a onclick="window.scrollTo(0,700); " class="thm-btn btn-style-one">查看更多</a></div>
                </div>
            </div>
        </div>

        <!-- Slide Item  -->
        <!-- <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('assets/images/main-slider/2.jpg');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <h3></h3>
                    <h2>华总启用全新网站资讯  统称大马华总</h2>
                    <div class="btn-box"><a href="https://www.facebook.com/huazongmy" class="thm-btn btn-style-one">Learn
                            More</a></div>
                </div>
            </div>
        </div> -->

        <!-- Slide Item -->
        <!-- <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('assets/images/main-slider/3.jpg');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <h3>Opening On Sat. Oct 20, 2019</h3>
                    <h2>World’s Leading Museum of History <br> Over 2.3 k Collection</h2>
                    <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Learn
                            More</a></div>
                </div>
            </div>
        </div> -->

    </div>
</section>
<!--End Banner Section -->

    <section class="collection-grid">
            <div id="menu" class="container" style="padding-left:0px;padding:right:0px">
                <div class="collection-grid__top">
                    <div class="block-title-two text-center">
                        
                    </div><!-- /.block-title-two -->

                    <ul class="collection-filter post-filter list-unstyled">
                        <li  class="active"><span onclick="window.scrollTo(0,900)" >简介</span></li>
                        <li ><span onclick="window.scrollTo(0,1350)" >会员</span></li>
                        <li ><span onclick="window.scrollTo(0,1850)" >宗旨</span></li>
                        <li ><span onclick="window.scrollTo(0,2350)" >关系图</span></li>
                        <li ><span onclick="window.scrollTo(0,2800)" >组织</span></li>
                        <li ><span onclick="window.scrollTo(0,3200)" >活动</span></li>
                        <li ><span onclick="window.scrollTo(0,4000)" >组织结构图</span></li>
                        <!-- <li ><span onclick="window.scrollTo(0,900)" >影片介绍</span></li> -->

                    </ul><!-- /.collection-filter list-unstyled -->
                </div><!-- /.collection-grid__top -->
                <div class="container">



                    <!--简介-->
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="featured-collection__left">
                                    <div class="featured-collection__image"></div><!-- /.featured-collection__image -->
                                    <img src="/assets/images/horizontal-line.png">
                                    <h1>华总简介</h1><br>
                                    <p style="font-size:16px;line-weight:14px;">成立于1991年的马来西亚中华大会堂总会(简称华总)是由马来西亚15华团,其中包括13 州的中华大会堂或华团总会(即州内的最高华团领导机构)所组成的一个总机构。</p>
                                    <br>
                                    <p style="font-size:16px;line-weight:14px;">华总的前身为马來西亞中华大会堂联合会(简称堂联),1997年易名华总。堂联筹组于1982年9月,由雪兰莪中华大会堂发起,并获得各州华团领导机构的响应;随后在 1983 年 2 月即向社团注册局申请 注冊。但是由于客观因素的影响,堂联的注册历经8年的等待、争取,始于1991年10月17日获准, 並于同年12月13日举行第一届全国代表大会,正式宣告成立。华总的成立是华人社会期盼已久的成果,是华社共同意愿的实现。</p>
                                    <br>
                                    <p style="font-size:16px;line-weight:14px;">当前,马来西亚注册的华团超过一万多个,其中大部分为地缘、血缘、业缘及文教团体, 这些团体也是各州华团的直属会员,也就是华总的间接会员。 换言之, 华总是马来西亚的华团领导机构,专注于华社的文化、教育、经济、社会及民生课题。</p>
                                    <br>
                                    <!-- /.thm-btn featured-collection__btn -->
                                </div><!-- /.featured-collection__left -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div><!-- /.row -->
                    <!-- 简介 end -->

                    <!--会员-->
                    <div class="row">
                        <div class="col-lg-4">
                            
                                <div class="featured-collection__left">
                                    <div class="featured-collection__image"></div><!-- /.featured-collection__image -->
                                    <img src="/assets/images/horizontal-line.png">
                                    <h1>会员</h1><br>
                                  
                                   
                                    <ol>
                                    <li >玻璃市州华人大会堂</li>
                                    <li >吉打州华人大会堂</li>
                                    <li >槟州华人大会堂</li>
                                    <li >霹雳中华大会堂</li>
                                    <li >吉隆坡暨雪兰莪中华大会堂</li>
                                    <li >森美兰中华大会堂</li>
                                    <li >马六甲中华大会堂</li>
                                    <li >柔佛州中华总会</li>
                                    <li >吉兰丹中华大会堂</li>
                                    <li >登嘉楼中华大会堂</li>
                                    <li >彭亨华人社团联合会</li>
                                    <li >沙巴中华大会堂</li>
                                    <li >砂拉越华人社团联合总会</li>
                                    </ol>

                                    <!-- /.thm-btn featured-collection__btn -->
                                </div>
                                
                        </div><!-- /.col-lg-6 -->
                      
                        <div class="col-lg-8">
                            <div class="featured-collection__right">
                                <div class="featured-collection__image">
                                    <img src="/assets/images/huatang-info.png" alt="">
                                </div><!-- /.featured-collection__image -->
                            </div><!-- /.featured-collection__right -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div><!-- /.row -->
                    <!-- 会员 end -->

                    <!--宗旨-->
                    <div class="row">
                        <div class="col-lg-6">
                            
                                <div style="padding-top:100px" class="featured-collection__left">
                                    <div class="featured-collection__image">
                                        <img src="/assets/images/zhongzhi-info.png" alt="">
                                    </div><!-- /.featured-collection__image -->
                                </div>
                                
                        </div><!-- /.col-lg-6 -->
                      
                        <div class="col-lg-6">
                            <div class="featured-collection__right">
                            <img src="/assets/images/horizontal-line.png">

                                    <h1>宗旨</h1>
                                  
                                   
                                    <ul>
                                    <li >促进我国各民族亲善与团结。</li>
                                    <li >商讨与处理与会员有关的问题。</li>
                                    <li >针对影响会员的政策或措施提出意见。</li>
                                    <li >在符合联邦宪法的原则下，推动和参与文教、福利、社会及经济工作。</li>
                                    <li >联合与本会宗旨相同的社团，以达致上述日标。</li>
                                    <li >华总及各州中华大会堂作为综合性组织，其宗旨涵盖社、经、文教各领域，而其他华团属会则是依据主要会务宗旨分类为地缘性、血缘性、业缘性、学缘性、文化、教育、青年、 联谊、慈善、体育、宗教等组织。</li>
                                    </ul>

                                    <!-- /.thm-btn featured-collection__btn -->
                                
                            </div><!-- /.featured-collection__right -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div><!-- /.row -->
                    <!-- 宗旨 end -->

                    <!--关系-->
                    <div class="row">
                        <div class="col-lg-12">
                                <div style="padding-top:100px" class="featured-collection__left">
                                <div class="featured-collection__image">
                                        <img src="/assets/images/relationship-info.png" alt="">
                                    </div><!-- /.featured-collection__image -->
                                    <!-- /.thm-btn featured-collection__btn -->
                                </div><!-- /.featured-collection__left -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div><!-- /.row -->
                    <!-- 关系 end -->

                    <!--组织-->
                    <div class="row">
                        <div class="col-lg-6">
                            
                                <div style="padding-top:100px" class="featured-collection__left">
                                    <div class="featured-collection__image">
                                        <img src="/assets/images/zhuzhi-info.png" alt="">
                                    </div><!-- /.featured-collection__image -->
                                </div>
                                
                        </div><!-- /.col-lg-6 -->
                      
                        <div class="col-lg-6">
                            <div class="featured-collection__right">
                            <img src="/assets/images/horizontal-line.png">

                                    <h1>组织</h1>
                                  
                                    <p style="font-size:16px;line-weight:10px;">全国代表大会是华总的最高决策机构。13 州会员各派出10名代表出席会员大会。<br>
                                    <br>
                                    华总中委会是由代表大会投选而产生,人数不超过60名。13州大会堂的会长或主席为当然中委。在会 大会中,从各州华堂会长中选出一名总会长,一名署理总会长及不超过5名副总会长,惟另外保留2个 副总会长名额分别给沙巴及砂拉越的当然中央委员,同时从全国代表中选21 名中委。总会长可推荐不 超过 12人予中委会委任为中委。青年团团长及妇女部主席自动成为中委。
                                    </p>
                                
                            </div><!-- /.featured-collection__right -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div><!-- /.row -->
                    <!-- 组织 end -->

                    <!--活动-->
                    <div class="row">
                        <div class="col-lg-6">
                            
                            <div class="featured-collection__left">
                                <img src="/assets/images/horizontal-line.png">

                                <h1>活动</h1>

                                <p style="font-size:16px;line-weight:10px;"><br>

                                过去 28 年来,在华社的支持及配合下,华总在各领域总算略有所成。华总通过向政府反映华社的意愿及表达华社对政治、经济、文化、教育、社会和宗教课题的看法和立场,以便华社的问题能够得到适时的关注
                                <br><br>

                                华总不时和内阁部长,副部长及部门总监会面交流,商讨涉及华社的种种课题。除此之外,华总也设立了数个文化和教育基金以推动文化教育建设工作及为贫穷学生提供奖贷学金。
                                <br><br>
                                全国华人文化节是由华总和 13 中华大会堂主办并取得最成功的文化活动。自1984年在雪兰莪州开始 主办全国华人文化节后,它已经成为一项常年盛会,由13 州轮值主办。
                                <br><br>
                                全国华人文化节的节目包括提灯游行、文化及文学研讨会及讲座、文化表演如各族舞蹈和歌唱、舞狮和舞龙、灯笼制作比赛、挥春比赛、中华武术表演、服装表演、手工艺品展览和美食嘉年华等。
                                <br><br>
                                近年来,我们力求让全国华人文化节也能反映多元种族文化的风貌,特别邀请马来和印度文化组织在华人文化节呈献节目,如马来传统婚礼和印度文化舞蹈。我们也邀请各州的旅游局参与文化节的活动。我们深信,这些活动有助于加强公众对中华文化的兴趣,同时促进马来西亚各族之间的谅解。
                                <br><br>
                                </p>
                            </div>
                                
                        </div><!-- /.col-lg-6 -->
                      
                        <div class="col-lg-6">
                            <div class="featured-collection__right">
                           
                                    <div class="featured-collection__image">
                                        <img src="/assets/images/huodong-info.png" alt="">
                                    </div><!-- /.featured-collection__image -->
                            </div><!-- /.featured-collection__right -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div>
                    <!-- 活动 end -->

                    <!--结构图-->
                    <div class="row">
                        <div class="col-lg-3">
                        
                                <div style="padding-top:100px" class="featured-collection__left">
                                <img src="/assets/images/horizontal-line.png">

                                <h1>组织结构图</h1>
                                </div>
                        </div><!-- /.col-lg-6 -->

                        <div class="col-lg-9">
                            <div class="featured-collection__right">
                           
                                    <div class="featured-collection__image">
                                        <img src="/assets/images/jieguo-info.png" alt="">
                                    </div><!-- /.featured-collection__image -->
                            </div><!-- /.featured-collection__right -->
                        </div><!-- /.col-lg-6 -->
                    
                    </div><!-- /.row -->
                    <!-- 结构图 end -->
                
            </div><!-- /.container -->

        </section><!-- /.collection-grid -->

<div class="about-cta__wrapper" style="margin-top:100px">
    



    @include('layouts.footer')
</div><!-- /.about-cta__wrapper -->
@endsection



@section('scripts')

<script>
    $(document).ready(function(){
        
        function toScroll(element){
            console.log(element);
            $('#'+element).scrollIntoView();


        }

    });


</script>


@endsection