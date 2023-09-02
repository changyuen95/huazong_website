@extends('layouts.app')

@section('content')
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->
    

        <div class="contact-one">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="block-title-two text-center">
                    <p style="font-size:32px"><b>联络我们</b></p>
                    <!-- <h3>Stay Touch With Art Gallery <br> of San Francisco</h3> -->
                </div><!-- /.block-title-two -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-one__box">
                            <h3>工作时间</h3>
                            <p style="color:#EB1757">星期一至五 : 9：00 AM–5：00 PM 
                        </div><!-- /.contact-one__box -->
                        <div class="contact-one__box">
                            <h3>地址</h3>
                            <p style="color:#EB1757">9 Wisma Huazong Lot 15285,<br> Lebuhraya Sungai Besi, <br> 43300 Seri Kembangan,<br> Selangor, Malaysia </p>
                            
                        </div><!-- /.contact-one__box -->
                        <div class="contact-one__box">
                            <h3>联络方式</h3>
                            <p style="color:#EB1757">
                                <a href="mailto:secretariat@dama-huazong.com">secretariat@dama-huazong.com</a> <br> 
                                <a href="tel:601110534110">(60) 1110534110</a></p>                        </div><!-- /.contact-one__box -->
                        <div class="contact-one__box">
                            <h3>社交账号</h3>
                            <div class="contact-one__box-social">
                                <a href="https://www.facebook.com/huazongmy" class="fab fa-facebook-f"></a>
                                <a href="https://www.instagram.com/dama_huazong_official" class="fab fa-instagram"></a>
                                
                            </div><!-- /.contact-one__box-social -->
                        </div><!-- /.contact-one__box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <iframe style="width:100%;height:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.332257938723!2d101.7237150114649!3d3.004977454007449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdca9260459201%3A0x9c6b5fad28411a6e!2sWisma%20Huazong!5e0!3m2!1sen!2smy!4v1693327084080!5m2!1sen!2smy" class="google-map__contact" allowfullscreen></iframe>

                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.contact-one -->

        
    </div>

    @endsection