@extends('master')
@section('tieudetrang')
Trang chủ
@endsection
@section('content')
@include('layout.slide')

<!-- ****** Welcome Area End ****** -->

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                    <img src="../public/img/catagory-img/1.jpg" alt="" height="250px">
                    <div class="catagory-title">
                        <a href="#">
                            <h5>Địa điểm ăn uống</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                    <img src="../public/img/catagory-img/2.jpg" alt="" height="250px">
                    <div class="catagory-title">
                        <a href="#">
                            <h5>Du lịch</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                    <img src="../public/img/catagory-img/3.jpg" alt="" height="250px">
                    <div class="catagory-title">
                        <a href="#">
                            <h5>Giải trí</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Categories Area End ****** -->

<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row">

                    <!-- Single Post -->
                    <div class="single-post">
                         <div class="post-title">
                            <h2 class="post-headline">Những địa điểm ăn uống</h2>
                            <div class="line"></div>
                    </div>
                    </div>



                    @foreach ($datapostanuong as $item)
                        
                  
                    <div class="col-12 col-md-6">
                        <div class="single-post wow fadeInUp" data-wow-delay=".4s">
                            <!-- Post Thumb -->
                            <div class="post-thumb">
                                <a href="Bai-viet/{{ $item['baiviet_id'] }}"><img src="../public/img/{{ $item['anhgioithieu'] }}" alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta d-flex">
                                    <div class="post-author-date-area d-flex">
                                        <!-- Post Author -->
                                        <div class="post-author">
                                            <a href="#">By {{ $item['user_id'] }}}</a>
                                        </div>
                                        <!-- Post Date -->
                                        <div class="post-date">
                                            <a href="#">01 tháng 04, 2019</a>
                                        </div>
                                    </div>
                                    <!-- Post Comment & Share Area -->
                                    <div class="post-comment-share-area d-flex">
                                        <!-- Post Favourite -->
                                        <div class="post-favourite">
                                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                        </div>
                                        <!-- Post Comments -->
                                        <div class="post-comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                        </div>
                                        <!-- Post Share -->
                                        <div class="post-share">
                                            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4 class="post-headline">{{ $item['tieude'] }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                


                    <div class="single-post">
                            <div class="post-title">
                               <h2 class="post-headline">Những địa điểm du lịch hấp dẫn</h2>
                               <div class="line"></div>
                       </div>
                       </div>


                       @foreach ($datapostdulich as $item)
                           
                       
                       <!-- Single Post -->
                       <div class="col-12 col-md-6">
                           <div class="single-post wow fadeInUp" data-wow-delay=".4s">
                               <!-- Post Thumb -->
                               <div class="post-thumb">
                                   <img src="../public/img/{{ $item['anhgioithieu'] }}" alt="">
                               </div>
                               <!-- Post Content -->
                               <div class="post-content">
                                   <div class="post-meta d-flex">
                                       <div class="post-author-date-area d-flex">
                                           <!-- Post Author -->
                                           <div class="post-author">
                                               <a href="#">{{ $item['user_id'] }}</a>
                                           </div>
                                           <!-- Post Date -->
                                           <div class="post-date">
                                               <a href="#">01 tháng 04, 2019</a>
                                           </div>
                                       </div>
                                       <!-- Post Comment & Share Area -->
                                       <div class="post-comment-share-area d-flex">
                                           <!-- Post Favourite -->
                                           <div class="post-favourite">
                                               <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                           </div>
                                           <!-- Post Comments -->
                                           <div class="post-comments">
                                               <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                           </div>
                                           <!-- Post Share -->
                                           <div class="post-share">
                                               <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                           </div>
                                       </div>
                                   </div>
                                   <a href="#">
                                       <h4 class="post-headline">{{ $item['tieude'] }}</h4>
                                   </a>
                               </div>
                           </div>
                       </div>
                     
                       @endforeach
                       <div class="single-post">
                        <div class="post-title">
                           <h2 class="post-headline">Những địa điểm giải trí hấp dẫn</h2>
                           <div class="line"></div>
                   </div>
                   </div>


                   @foreach ($datapostgiaitri as $item)
                       
                   
                   <!-- Single Post -->
                   <div class="col-12 col-md-6">
                       <div class="single-post wow fadeInUp" data-wow-delay=".4s">
                           <!-- Post Thumb -->
                           <div class="post-thumb">
                               <img src="../public/img/{{ $item['anhgioithieu'] }}" alt="">
                           </div>
                           <!-- Post Content -->
                           <div class="post-content">
                               <div class="post-meta d-flex">
                                   <div class="post-author-date-area d-flex">
                                       <!-- Post Author -->
                                       <div class="post-author">
                                           <a href="#">{{ $item['user_id'] }}</a>
                                       </div>
                                       <!-- Post Date -->
                                       <div class="post-date">
                                           <a href="#">01 tháng 04, 2019</a>
                                       </div>
                                   </div>
                                   <!-- Post Comment & Share Area -->
                                   <div class="post-comment-share-area d-flex">
                                       <!-- Post Favourite -->
                                       <div class="post-favourite">
                                           <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                       </div>
                                       <!-- Post Comments -->
                                       <div class="post-comments">
                                           <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                       </div>
                                       <!-- Post Share -->
                                       <div class="post-share">
                                           <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                       </div>
                                   </div>
                               </div>
                               <a href="#">
                                   <h4 class="post-headline">{{ $item['tieude'] }}</h4>
                               </a>
                           </div>
                       </div>
                   </div>
                 
                   @endforeach


                    <!-- ******* List Blog Area Start ******* -->

                    <div class="single-post">
                            <div class="post-title">
                               <h2 class="post-headline">Bí kíp</h2>
                               <div class="line"></div>
                       </div>
                       </div>
                 <div class="col-12">
                    
                    </div>
                    @foreach ($datablog as $item)
                        
                    
                    <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".2s">

                                <div class="post-thumb">
                                    <img src="../public/img/{{ $item['anhmota'] }}" alt="">
                                </div>

                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">

                                            <div class="post-author">
                                                <a href="#">By ăn thôi nào</a>
                                            </div>

                                            <div class="post-date">
                                                <a href="#">01 tháng 4,2019</a>
                                            </div>
                                        </div>

                                        <div class="post-comment-share-area d-flex">

                                            <div class="post-favourite">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                            </div>

                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                            </div>

                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h4 class="post-headline">{{ $item['tieudeblog'] }}</h4>
                                    </a>
                                    <p>{{ $item['mota'] }}</p>
                                    <a href="#" class="read-more">Xem chi tiết...</a>
                                </div>
                            </div>
                    </div>
                    @endforeach
               


                </div>
            </div>

            <!-- ****** Blog Sidebar ****** -->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="blog-sidebar mt-5 mt-lg-0">
                    <!-- Single Widget Area -->
                    <div class="single-widget-area about-me-widget text-center">
                        <div class="widget-title">
                            <h6>Giới thiệu</h6>
                        </div>
                        <div class="about-me-widget-thumb">
                            <img src="img/about-img/1.jpg" alt="">
                        </div>
                        <h4 class="font-shadow-into-light">Shopia Bernard</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area subscribe_widget text-center">
                        <div class="widget-title">
                            <h6>Theo dõi</h6>
                        </div>
                        <div class="subscribe-link">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area popular-post-widget">
                        <div class="widget-title text-center">
                            <h6>Review hot</h6>
                        </div>
                        <!-- Single Popular Post -->
                        <div class="single-populer-post d-flex">
                            <img src="img/sidebar-img/1.jpg" alt="">
                            <div class="post-content">
                                <a href="#">
                                    <h6>8 món ăn vặt nổi tiếng ở Đà Nẵng, số 1 sốt xình xịch ở Hà Nội, Sài Gòn</h6>
                                </a>
                                <p>01 tháng 04,2019</p>
                            </div>
                        </div>
                        <div class="single-populer-post d-flex">
                                <img src="img/sidebar-img/1.jpg" alt="">
                                <div class="post-content">
                                    <a href="#">
                                        <h6>8 món ăn vặt nổi tiếng ở Đà Nẵng, số 1 sốt xình xịch ở Hà Nội, Sài Gòn</h6>
                                    </a>
                                    <p>01 tháng 04,2019</p>
                                </div>
                            </div>
                            <div class="single-populer-post d-flex">
                                    <img src="img/sidebar-img/1.jpg" alt="">
                                    <div class="post-content">
                                        <a href="#">
                                            <h6>8 món ăn vặt nổi tiếng ở Đà Nẵng, số 1 sốt xình xịch ở Hà Nội, Sài Gòn</h6>
                                        </a>
                                        <p>01 tháng 04,2019</p>
                                    </div>
                                </div>
                                <div class="single-populer-post d-flex">
                                        <img src="img/sidebar-img/1.jpg" alt="">
                                        <div class="post-content">
                                            <a href="#">
                                                <h6>8 món ăn vặt nổi tiếng ở Đà Nẵng, số 1 sốt xình xịch ở Hà Nội, Sài Gòn</h6>
                                            </a>
                                            <p>01 tháng 04,2019</p>
                                        </div>
                                    </div>

                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget text-center">
                        <div class="add-widget-area">
                            <img src="img/sidebar-img/6.jpg" alt="">
                            <div class="add-text">
                                <div class="yummy-table">
                                    <div class="yummy-table-cell">
                                        <h2>You can cook</h2>
                                        <p>Hãy dến You can cook để thực hiện những món ăn ngon</p>
                                        <a href="#" class="add-btn">Đi thôi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area newsletter-widget">
                        <div class="widget-title text-center">
                            <h6>Đăng ký</h6>
                        </div>
                        <p>Hãy đăng ký để nhận được những review mới nhất</p>
                        <div class="newsletter-form">
                            <form action="#" method="post">
                                <input type="email" name="newsletter-email" id="email" placeholder="Your email">
                                <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** Blog Area End ****** -->

<!-- ****** Instagram Area Start ****** -->

<!-- ****** Our Creative Portfolio Area End ****** -->

<!-- ****** Footer Social Icon Area Start ****** -->



@endsection
