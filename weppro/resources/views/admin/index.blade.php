   @extends('admin.app')
   @section('icerik')


   <!--content-->
            <div class="content">
                   
            
                        <!--//area-->
                            <div class="col-md-5 skil">
                                <div class="content-top-1">
                                    <div class="col-md-6 top-content">
                                        <h5>Toplam Satış</h5>
                                        <label>8761</label>
                                    </div>
                                    <div class="col-md-6 top-content1">    
                                        <div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value">25%</span> </div>
                                    </div>
                                        <div class="clearfix"> </div>
                                </div>
                                <div class="content-top-1">
                                    <div class="col-md-6 top-content">
                                        <h5>Toplam Kazanç</h5>
                                        <label>6295</label>
                                    </div>
                                    <div class="col-md-6 top-content1">    
                                        <div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value">50%</span> </div>
                                    </div>
                                     <div class="clearfix"> </div>
                                </div>
                                <div class="content-top-1">
                                    <div class="col-md-6 top-content">
                                        <h5>Bekleyen Siparişler</h5>
                                        <label>3401</label>
                                    </div>
                                    <div class="col-md-6 top-content1">    
                                        <div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value">75%</span> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                                <div class="col-md-7 mid-content-top" style="height: 514px;">
                                <div class="middle-content">
                                    <h3>Yeni Ürünler
                                    </h3 >
                                    <!-- start content_slider -->
                                        <div id="owl-demo" class="owl-carousel text-center " style="padding-top: 100px;">
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            <div class="item">
                                                <img class="lazyOwl img-responsive" data-src="/frontend/images/liftkapagi.jpg" alt="name">
                                            </div>
                                            
                                        </div>
                                </div>

                                <!--//sreen-gallery-cursual---->
                                <!-- requried-jsfiles-for owl -->
                                <link href="/frontend/css/owl.carousel.css" rel="stylesheet">
                                <script src="/frontend/js/owl.carousel.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $("#owl-demo").owlCarousel({
                                                items : 3,
                                                lazyLoad : true,
                                                autoPlay : true,
                                                pagination : true,
                                                nav:true,
                                            });
                                        });
                                    </script>
                                <!-- //requried-jsfiles-for owl -->
                        </div>

                          
                        <div class="clearfix"></div>
                        
           <div class="clearfix"> </div>
 
        <div class="fo-top-di">
            <div class="foot-top">
                
                    <div class="col-md-6 s-c">
                        <li>
                            <div class="fooll">
                                <h1>follow us on</h1>
                            </div>
                        </li>
                        <li>
                            <div class="social-ic">
                                <ul>
                                    <li><a href="#"><i class="facebok"> </i></a></li>
                                    <li><a href="#"><i class="twiter"> </i></a></li>
                                    <li><a href="#"><i class="goog"> </i></a></li>
                                    <li><a href="#"><i class="be"> </i></a></li>
                                        <div class="clearfix"></div>    
                                </ul>
                            </div>
                        </li>
                            <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 s-c">
                        <div class="stay">
                                    <div class="stay-left">
                                        <form>
                                            <input type="text" placeholder="Enter your email" required="">
                                        </form>
                                    </div>
                                    <div class="btn-1">
                                        <form>
                                            <input type="submit" value="join">
                                        </form>
                                    </div>
                                        <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                
            </div>


            @endsection('icerik')



            @section('css')

            @endsection('css')



            @section('js')


            @endsection('js')