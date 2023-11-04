@extends('layouts.app')

@section('content')
<style>
    .golf-title1{
        font-size: 28px;
        margin-bottom: 50px;
        color:#FFDFC5;
    }

    .golf-title2{
        font-size: 65px;
        color:#FFDFC5
    }

    .golf-title3{
        font-size: 125px;
        color:#ff8a68;
        line-height: 150px;
    }

    .golf-bg{
        background: url(/assets/images/charity-golf/decoration3.png);
        background-size: 600px;
        background-repeat: no-repeat;
        background-position-x: left;
        background-position-y: center;
    }

    .golf-guy-img{
        width:175%
    }

    .decoration-bg{
        background: url(/assets/images/charity-golf/element.png);
        background-size: 730px;
        background-repeat: no-repeat;
        background-position-x: right;
        background-position-y: bottom;
    }

    .decoration2-bg{
        background: url(/assets/images/charity-golf/decoration2.png);
        background-size: 250px;
        background-repeat: no-repeat;
        background-position-x: right
    }

    .info_card_text{
        color: #405c4c;
        line-height:50px;
        font-size: 30px;
    }

    .hover_effect:hover{
        transform: scale(1.05);
        transition: 1s;
    }

    .responsive_img1{
        width:10%;
        height:10%
    }

    .responsive_img2{
        width:18%;
        height:18%
    }

    ul {
        list-style: none; /* Remove default bullets */
    }

    ul .list1::before {
        content: "\2022";
        color: #FFDFC5;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
        font-size: 40px;
        vertical-align: top;
    }

    ul .list2::before {
        content: "\2022";
        color: #40544c;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
        font-size: 40px;
    }

    .sponsor_logo_style{
        width:300px
    }

    .responsive-title{
        font-size: 56px;
        color: #40544c;
        font-weight: 500
    }

    .responsive-text{
        font-size: 28px;
    }

    .deco_responsive{
        width:40%;
        margin-top: -100px;
    }

    .info_img{
        width:88%
    }

    .info_img:hover{
        transform: translateX(20px);
        transition: 1s;
    }

    .golf-img{
        margin-top: -150px;
        width:90%;
    }

    .golf-img:hover{
        transform: scale(110%);
        transition: 1s;
    }

    .img_hover:hover{
        box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
        transition: 0.5s;
    }


    @media (min-width: 577px) and (max-width: 992px){
        .golf-img{
            margin-top: 150px;
            width:90%;
        }

        .golf-title-3{
            line-height: 150px;
        }
        .deco_responsive{
            width:100%;
            margin-top: 0px;
        }
    }


    @media(max-width: 576px)
    {
        .golf-title1{
            font-size: 16px;
        }

        .golf-title2{
            font-size: 30px;
            color:#FFDFC5
        }

        .golf-title3{
            font-size: 35px;
            color:#ff8a68;
            line-height: 10px;
        }

        .golf-bg{
            background-size: 280px;
            background-position-x: center;
        }

        .golf-guy-img{
            width:50%
        }

        .decoration1-bg{
            background-size: 150px;
        }

        .decoration2-bg{
            background-size: 100px;
        }

        .info_card_text{
            font-size: 20px;
            line-height: 32px;
        }

        .responsive_img1{
            width:18%;
            height:18%
        }

        .responsive_img2{
            width:32%;
            height:32%
        }

        .sponsor_logo_style{
            width:110px
        }

        .decoration-bg{
            background: url(/assets/images/charity-golf/element.png);
            background-size: 200px;
            background-repeat: no-repeat;
            background-position-x: right;
            background-position-y: bottom;
        }

        .responsive-title{
            font-size: 36px;
            color: #40544c;
            font-weight: 500
        }

        .responsive-text{
            font-size: 20px;
        }

        .deco_responsive{
            width:150%;
            margin-top: 0px;
        }

        .info_img{
            width:100%
        }

        .golf-img{
            margin-top: 0px;
            width:60%;
        }


    }

</style>

<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->
<div class="page-wrapper" style="background-color: #FFDFC5">

    <section>
        <div class="row d-flex pt-4 justify-content-between mx-3 mx-lg-5" style="background-color: #FFDFC5;">
            <img class="responsive_img1" src="/assets/images/charity-golf/south-africa-logo.png">

            <img class="responsive_img2" src="/assets/images/charity-golf/malaysia-southafrica-logo.png">

            <img class="responsive_img1" src="/assets/images/huazong.png">
        </div>
    </section>

    <section>
        <div class="mt-5 row d-block d-lg-flex pb-3 pb-lg-0 py-0 py-lg-5 justify-content-center" style="background-color: #405c4c;">
            <div class="col-lg-10 col-12 text-center my-auto pl-lg-5 py-4 px-5">
                <div class="mb-2 mb-lg-5 pt-md-5 pt-0 pt-lg-0"><span class="golf-title2 ">华总教育基金</span></div><br/>
                <div class="mb-3 mb-lg-5"><span class="golf-title3"><b>慈善高尔夫球活动</b></span></div>
                <div class="px-lg-5 px-0 mx-lg-5 text-justify"><span class="golf-title1" style="">与我们一起欢庆马来西亚与南非外交关系建立30周年的慈善高尔夫球赛中, 为华总教育基金贡献力量, 为慈善尽一份心意。</span><br/></div>
            </div>
        </div>
    </section>

    <section>
        <div class="decoration-bg" >
            <div class="row mt-5">
                <div class="col-9 col-lg-6">
                    <img src="/assets/images/charity-golf/date-element.png" class="info_img"><br><br>
                    <a href="https://maps.app.goo.gl/LRR9NvX4hu4k5g5N9" target="__blank"><img src="/assets/images/charity-golf/location-element.png" class="info_img"></a><br><br>
                    <img src="/assets/images/charity-golf/time-element.png" class="info_img">
                </div>
                <div class="col-3 col-lg-6" style="text-align: end;">
                    <img class="deco_responsive" style="" src="/assets/images/charity-golf/decoration4.png">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-12 px-5 py-3">
                    <div class="mr-0 mr-lg-5 pl-2 pt-3" style="border: solid; border-color: #965441; border-width: 5px;">
                        <span class="responsive-text">乐意捐款</span><br><br/>
                        <div class="mb-3">
                            <span class="responsive-text"><b>BANK OF CHINA</b></span><br>
                            <span class="responsive-text"><b>Account Number:</b></span><br>
                            <span class="responsive-text"><b>100000403205318</b></span><br>
                        </div>
                        <div class="mb-3">
                            <span class="responsive-text"><b>Account Holder:</b></span><br>
                            <span class="responsive-text"><b>The Federation of Chinese Associations Malaysia</b></span><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12" style="text-align: end;">
                    <img class="golf-img" src="/assets/images/charity-golf/golf-wif-shadow.png">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="mt-5 row d-block d-lg-flex pb-3 pb-lg-0 py-0 py-lg-5 justify-content-center">
            <div class="col-lg-10 col-12 text-center my-auto pl-lg-5 py-3 px-5">
                <div class="mb-2 text-justify"><span class="h4" style="color:#40544c; line-height: 40px"><img width="13%" style="vertical-align: unset" src="/assets/images/charity-golf/malaysia-southafrica-logo.png">马来西亚与南非外交关系建立30周年标志着一段悠久而互利的伙伴关系。在过去的三十年里, 这两个国家加强了政治、经济和文化方面的纽带, 为地区稳定和全球合作做出了贡献。在庆祝这一里程碑时, 它们重申了对持续合作和共同进步的承诺。</span></div><br/>
            </div>

            <div class="col-lg-10 col-12 text-center my-auto pl-lg-5 py-3 px-5">
                <div class="text-left mb-3"><span class="h3 font-weight-bold">马来西亚中华大会堂总会（华总）</span></div>
                <div class="mb-2 text-justify"><span class="h4" style="color:#40544c; line-height: 40px">华总成立于1991年, 是一个由马来西亚13个州份的华人会馆和华人协会组成的中国领先组织。华总致力于改善华人社会的文化、教育、经济和社会各个方面。目前, 马来西亚已注册超过10,000个华人协会, 主要基于地缘政治、血缘关系、职业特定以及文化和教育等方面。</span></div><br/>
            </div>

            <div class="col-lg-10 col-12 text-center my-auto pl-lg-5 py-3 px-5">
                <div class="text-left mb-3"><span class="h3 font-weight-bold">华总教育基金</span></div>
                <div class="mb-2 text-justify"><span class="h4" style="color:#40544c; line-height: 40px">鉴于当前仍有许多华社子弟因家庭面临财务压力而无法负担高等教育的费用, 而国家仍在从Covid-19恢复当中, “华总教育基金” 由丹斯里拿督斯里邦里玛吴添泉局绅博士领导的华总委员会坚定启动。</span></div><br/>
                <div class="mb-2 text-justify"><span class="h4" style="color:#40544c; line-height: 40px">该基金将通过各种渠道, 致力于帮助那些符合条件、有资格的华社贫困学子, 确保他们不会错失追求高等教育和确保更光明未来的机会。</span></div><br/>
            </div>

            <div class="col-lg-10 col-12 text-center my-auto pl-lg-5 pb-3 px-5">
                <img src="/assets/images/charity-golf/graduation.png" class="img_hover" width="85%">
            </div>

        </div>
    </section>

    <section>
        <div class="row d-lg-flex pb-3 pb-lg-0 py-0 py-lg-5 my-4 justify-content-center" style="background-color: #39594b;">
            <div class="row my-4 my-lg-0">
                <div class="text-center">
                    <span class="h1 font-weight-bold" style="color:#ff8a68;">RM3,500/个人</span><br/>
                    <img src="/assets/images/charity-golf/line.png">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-12 col-lg-6 text-center pl-lg-5 py-4 px-5" style="border-right: 4px dotted; border-color: white">
                    <div class="row">
                        <div class="col-5 col-lg-6">
                            <img class="pb-n5 hover_effect" src="/assets/images/charity-golf/wine.png" width="85%">
                        </div>
                        <div class="col-7 col-lg-6" style="line-height: 45px">
                            <div class="h1"><span class="" style="color:#FFDFC5;">RM2,000</span></div><br/>
                            <div class="h4"><span style="color:#FFDFC5;">捐赠于华总教育基金</span></div>
                            <span class="h4" style="color:#FFDFC5;">捐赠者将获得 一瓶1.5公升的DE KLERK总统签名佳酿葡萄酒 作为感谢!</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 pl-lg-5 py-4 px-5">
                    <div class="h4" style="line-height: 45px; color:#FFDFC5;">
                        <div class="h1 ml-lg-5 pl-lg-2"><span>RM1,500</span></div><br/>
                        <div class="pr-lg-5 ">
                            <ul>
                                <li class="list1">高尔夫球赛位于Tropicana GCR</li>
                                <li class="list1">自助午餐</li>
                                <li class="list1">Dr. Nortier's 南非国宝茶</li>
                                <li class="list1">蒂玛威士忌</li>
                                <li class="list1">丰富晚宴庆祝马来西亚和南非 30年的友好外交关系</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mt-5 row d-block d-lg-flex pb-lg-0 py-0 justify-content-center" style="color:#40544c;">
            <div class="col-lg-5 col-12 text-left pl-lg-5 px-5">
                <div class="row ml-0">
                    <div class="responsive-title font-weight-bold mb-3"><span>流程</span></div>
                </div>
                <div class="row mb-5 mb-lg-0">
                    <div class="col-4 col-lg-3 responsive-text" style="line-height: 53px">
                        <span>12时</span><br/>
                        <span>1时</span><br/>
                        <span>1:15时</span><br/>
                        <span>1:30时</span><br/>
                        <span>6:30时</span><br/>
                        <span>7时</span><br/>
                    </div>
                    <div class="col-8 col-lg-9 responsive-text" style="line-height: 53px">
                        <span>- 签到&享用午餐</span><br/>
                        <span>- 活动简介</span><br/>
                        <span>- 群体大合照</span><br/>
                        <span>- 开球仪式</span><br/>
                        <span>- 比赛结束</span><br/>
                        <span>- 葡萄酒晚宴, 拍卖, 幸运抽奖 & 颁奖仪式</span><br/>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 text-left my-auto pl-lg-5 px-5" style="line-height: 40px">
                <div class="responsive-title font-weight-bold mb-3"><span>NOVELTY HOLES</span></div>
                <div class="responsive-text"><span><b>4 x</b> 一杆进洞</span></div>
                <ul>
                    <li class="list2 responsive-text pl-4">Hole 3 - RM50,000 + TaylorMade 全套高尔夫球杆 Namjoo Tan赞助</li>
                    <li class="list2 responsive-text pl-4">Hole 8 - 150-2亿抗衰老干细胞(间充质干细胞) 治疗值RM90000 Cellvation Sdn Bhd 赞助</li>
                    <li class="list2 responsive-text pl-4">Hole 13 - RM50,000现金+一套四瓶1.5公升总统签名 佳酿葡萄酒 Namjoo Tan赞助</li>
                    <li class="list2 responsive-text pl-4">Hole 17 - 150-2亿抗衰老干细胞(间充质干细胞) 治疗值RM90000 Cellvation Sdn Bhd 赞助</li>
                </ul>
                <div class="responsive-text"><span><b>4 x Par 3</b></span></div>
                <ul>
                    <li class="list2 responsive-text pl-4">蒂玛威士忌赞助</li>
                </ul>
                <div class="responsive-text"><span><b>4 x Par 4</b></span></div>
                <ul>
                    <li class="list2 responsive-text pl-4">De.Wan by Chef Wan赞助</li>
                    <li class="list2 responsive-text pl-4">雪邦黄金海岸阿瓦尼度假村赞助</li>
                </ul>
                <div class="responsive-text"><span><b>2 x Par 5</b></span></div>
                <ul>
                    <li class="list2 responsive-text pl-4">猎豹酒庄赞助</li>
                </ul>
            </div>
        </div>
    </section>


    <section>
        <div class="mt-5 row d-block d-lg-flex pb-3 pb-lg-0 py-0 justify-content-center" style="color:#40544c;">
            <div class="col-lg-6 col-12 text-center my-auto pl-lg-5 py-3 px-4">
                <img class="mb-4 img_hover" src="/assets/images/charity-golf/ambassador.png" width="75%"><br/>
                <div class="px-5 text-left py-3 px-5" style="line-height: 45px">
                    <div class="pb-lg-1 pb-0">
                        <span class="responsive-text mb-5">
                            南非和马来西亚有着长久的历史联系和团结纽带。今年, 我们庆祝建交30周年, 同时我们将继续在未来构建我们的战略伙伴关系。
                        </span>
                    </div>
                    <br/>
                    <span class="responsive-text">
                        H.E. Dave Malcomson<br/>南非驻马来西亚大使。
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-12 text-center my-auto pl-lg-5 py-3 px-4">
                <img class="mb-4 img_hover" src="/assets/images/charity-golf/president-huazong.png" width="75%"><br/>
                <div class="px-5 text-left py-3 px-5" style="line-height: 45px">
                    <div class="pb-lg-1 pb-0">
                        <span class="responsive-text">
                            以共情和团结携手共创一个不同的世界。通过这项协力合作, 可以加强两国外交关系, 并同时满足教育领域的重要需求。
                        </span>
                    </div>
                    <br/>
                    <span class="responsive-text">
                        丹斯里拿督斯里邦里玛吴添泉局绅博士<br/>华总总会长
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mt-2 my-lg-4 row d-block d-lg-flex py-3 pb-lg-0 py-0 py-lg-3 justify-content-center" style="background-color: #39594b;">
            <div class="col-12 text-center my-auto pl-lg-5 px-5">
                <div class="px-lg-5 px-4 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="">欢庆马来西亚与南非外交关系建立30周年晚宴</span></div>
                <div class="px-lg-5 px-4 mx-lg-5 text-center"><span class="golf-title1" style="">由马来西亚中华大会堂总会(华总)主办</span></div>
            </div>
        </div>

        <div class="text-center my-auto pl-lg-5 px-5 py-4" style="line-height: 18px">
            <div class="px-lg-5 px-0 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="color: #40544c;"><img class="pr-2" width="50px" src="/assets/images/charity-golf/south-africa-flag.png"> 南非肉干水果沙拉</span></div>
            <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c">搭配猎豹酒庄葡萄酒</span></div>
        </div>

        <div class="text-center my-auto pl-lg-5 px-5 py-4" style="line-height: 18px">
            <div class="px-lg-5 px-0 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="color: #40544c;"><img class="pr-2" width="50px" src="/assets/images/charity-golf/malaysia-flag.png"> 馬來西亞燕窩燉蟹肉湯</span></div>
            <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c">搭配猎豹酒庄葡萄酒</span></div>
        </div>

        <div class="text-center my-auto pl-lg-5 px-5 py-4" style="line-height: 18px">
            <div class="px-lg-5 px-0 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="color: #40544c;"><img class="pr-2" width="50px" src="/assets/images/charity-golf/south-africa-flag.png"> 南非炖鲍鱼与蘑菇</span></div>
            <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c">搭配猎豹酒庄葡萄酒</span></div>
        </div>

        <div class="text-center my-auto pl-lg-5 px-5 py-4" style="line-height: 18px">
            <div class="px-lg-5 px-0 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="color: #40544c;"><img class="pr-2" width="50px" src="/assets/images/charity-golf/malaysia-flag.png"> 烤沙巴野生虎虾配鱼子酱</span></div>
            <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c">搭配猎豹酒庄葡萄酒</span></div>
        </div>

        <div class="text-center my-auto pl-lg-5 px-5 py-4" style="line-height: 18px">
            <div class="px-lg-5 px-0 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="color: #40544c;"><img class="pr-2" width="50px" src="/assets/images/charity-golf/south-africa-flag.png"> 烤南非卡鲁羊排搭配辣椒薯泥</span></div>
            <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c">搭配猎豹酒庄葡萄酒</span></div>
        </div>

        <div class="text-center my-auto pl-lg-5 px-5 py-4" style="line-height: 18px">
            <div class="px-lg-5 px-0 mx-lg-5 pb-3 text-center"><span class="golf-title1" style="color: #40544c;"><img class="pr-2" width="50px" src="/assets/images/charity-golf/malaysia-flag.png"> 马来西亚传统甜点</span></div>
            <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c">搭配猎豹酒庄葡萄酒</span></div>
        </div>
    </section>


    <section>
        <div class="my-3 my-lg-5 row d-block d-lg-flex pb-3 pb-lg-0 py-0 py-lg-3 justify-content-center">
            <div class="col-12 text-center my-auto pl-lg-5 px-5">
                <div class="px-lg-5 px-0 mx-lg-5 pb-3 pb-lg-5 text-center"><span class="responsive-title">非营利慈善拍卖会</span></div>
                <div class="px-lg-5 px-1 mx-lg-5 text-center"><span class="golf-title1" style="color: #40544c;">慈善拍卖是一种筹款活动, 嘉宾通过出价竞拍物品, 拍卖所得的全部款项将全额捐赠给华总教育基金。</span></div>
            </div>
        </div>
        <div class="row mt-lg-5 pt-lg-5">
            <img src="/assets/images/charity-golf/3guys.png" width="100%">
        </div>
        <div class="row pt-lg-5 mt-lg-5 mt-3 mb-5 mb-lg-0">
            <img src="/assets/images/charity-golf/lucky-draw.png" width="100%">
        </div>
    </section>

    <section class="mb-5 mb-lg-0">
        <div class="my-3 my-lg-5 row d-block d-lg-flex pb-3 pb-lg-0 py-0 py-lg-3 justify-content-center">
            <div class="col-12 text-center my-auto pl-lg-5 px-5">
                <div class="px-lg-5 px-0 mx-lg-5 text-center"><span class="responsive-title">赞助商</span></div>
            </div>
        </div>
        <div class="row justify-content-center pb-4">
            <img class="sponsor_logo_style" src="/assets/images/charity-golf/sponsor-logo1.png">
        </div>
        <div class="row d-flex justify-content-around py-lg-5 py-3">
            <img class="sponsor_logo_style" src="/assets/images/charity-golf/sponsor-logo3.png">
            <img class="sponsor_logo_style" src="/assets/images/charity-golf/sponsor-logo2.png">
        </div>
        <div class="row d-flex justify-content-around py-lg-5 py-3">
            <img src="/assets/images/charity-golf/logo-sponsors.png" width="70%">
        </div>
    </section>


    {{--<section class="exhibition-one" style="background: url(/assets/images/charity-golf/decoration.png) bottom;background-repeat:no-repeat;background-size:1200px">

    </section><!-- /.exhibition-one --> --}}



</div><!-- /.page-wrapper -->
@include('layouts.footer')

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->

<div class="side-content__block">
    <div class="side-content__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-content__block-overlay -->
    <div class="side-content__block-inner ">
        <a href="index.html">
            <img src="assets/images/logo-1-1.png" alt="" width="143">
        </a>
        <div class="side-content__block-about">
            <h3 class="side-content__block__title">About Us</h3><!-- /.side-content__block__title -->
            <p class="side-content__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-content__block-about__text -->
            <a href="#" class="thm-btn side-content__block-about__btn">Get Consultation</a>
        </div><!-- /.side-content__block-about -->
        <hr class="side-content__block-line" />
        <div class="side-content__block-contact">
            <h3 class="side-content__block__title">Contact Us</h3><!-- /.side-content__block__title -->
            <ul class="side-content__block-contact__list">
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-map-marker"></i>
                    Rock St 12, Newyork City, USA
                </li><!-- /.side-content__block-contact__list-item -->
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-phone"></i>
                    <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                </li><!-- /.side-content__block-contact__list-item -->
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:example@mail.com">example@mail.com</a>
                </li><!-- /.side-content__block-contact__list-item -->
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-clock"></i>
                    Week Days: 09.00 to 18.00 Sunday: Closed
                </li><!-- /.side-content__block-contact__list-item -->
            </ul><!-- /.side-content__block-contact__list -->
        </div><!-- /.side-content__block-contact -->
        <p class="side-content__block__text site-footer__copy-text"><a href="#">Muzex</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
    </div><!-- /.side-content__block-inner -->
</div><!-- /.side-content__block -->

<div class="side-menu__block">

    <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
        <!-- /.fa fa-close --></a>

    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">

        <a href="index.html" class="side-menu__logo"><img src="assets/images/logo-light-1-1.png" alt="" width="143"></a>
        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">(c) 2020 <a href="#">Muzex</a> - All rights reserved.</p>
        <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->
@endsection