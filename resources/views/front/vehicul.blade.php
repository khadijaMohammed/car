
     
      <x-front-layout>
        <div class="inner-head overlap">
            <div style="background: url(front/img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>Mercedes-Benz</h2>
                    <ul>
                        <li><a href="{{route('home')}}" title="">HOME</a></li>
                        <li><a href="{{route('vehicul')}}" title="">Mercedes-Benz</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->


        <div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
              <div class="tp-banner-container">
                  <div class="tp-banner">
                      <ul>
                          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on" data-title="Ken Burns Slide">
                              <!-- MAIN IMAGE -->
                              <img src="{{asset('front/img/one-car/4.jpg')}}" alt="2" data-lazyload="{{asset('front/img/one-car/4.jpg')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                              <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130" data-hoffset="0" data-x="center" style="">
                                
                              </div>
                          </li>

                          
                          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on" data-title="Ken Burns Slide">
                              <!-- MAIN IMAGE -->
                              <img src="{{asset('front/img/one-car/3.jpg')}}" alt="2" data-lazyload="{{asset('front/img/one-car/3.jpg')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                              <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130" data-hoffset="0" data-x="center" style="">

                              </div>
                          </li>

                          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on" data-title="Ken Burns Slide">
                              <!-- MAIN IMAGE -->
                              <img src="{{asset('front/img/one-car/2.jpg')}}" alt="2" data-lazyload="{{asset('front/img/one-car/2.jpg')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                              <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130" data-hoffset="0" data-x="center" style="">

                              </div>
                          </li>

                          <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on" data-title="Ken Burns Slide">
                              <!-- MAIN IMAGE -->
                              <img src="{{asset('front/img/one-car/1.jpg')}}" alt="2" data-lazyload="{{asset('front/img/one-car/1.jpg')}}" data-bgposition="right top" data-kenburns="off" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                              <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130" data-hoffset="0" data-x="center" style="">

                              </div>
                          </li>

                          </ul>
                      <div class="tp-bannertimer"></div>
                  </div>
              </div>
          </div><!-- END REVOLUTION SLIDER -->











        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                        @foreach($last as $model)
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post vehicul-post">
                                

                                        <h1>Price : {{$model->price}} $</h1>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="vehicul-detail">

                                                    <div class="detail-field row" >
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Manufacturer  </span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{$model->brand->name}}</span>
                                                       

                                                        <span class="col-xs-6 col-md-5 detail-field-label">Model </span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"> {{$model->name}}</span>

                                                      
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Vehicle Type  </span>
                                                        <span class="col-xs-6 col-md-7 detail-field-label">{{$model->car->name}}</span>


                                                        <span class="col-xs-6 col-md-5 detail-field-label">Color </span>
                                                        <span class="col-xs-6 col-md-7 detail-field-label">{{$model->car->color}}</span>
           
                                                        
                                                        
                                                        <span class="col-xs-6 col-md-5 detail-field-label">fuel  </span>
                                                        <span class="col-xs-6 col-md-7 detail-field-label">{{$model->fuel_type}}</span>
                                                        
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Places </span>
                                                        <span class="col-xs-6 col-md-7 detail-field-label"> {{$model->seats}} </span>
                                         
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <p>  {{$model->car->description}} </p>
                                            </div>
                                        </div>

                                        <div class="vehicul-video">
                                            <div class="heading3">
                                                <h2>vehicul Video </h2> 
                                            </div>
                                            <iframe height="400" src="https://www.youtube.com/embed/rlasf0cUfzU" allowfullscreen></iframe>
                                        </div>

                                      

                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            @endforeach
                         
                        </div>

                        
                        <div class="related-vehiculs-">
                            <div class="heading3">
                                <h3>RELATED VEHICULS</h3>
                           
                                
                                
                            </div>
                            <div class="related">
                                <div class="related-vehiculs-items"> 
                                @foreach($latest as $model)
                            <div class="row">
                              <div class="col-md-3">
                                  <div class="vehiculs-sec">
                                      <div class="carousel-prop">
                                          <div class="vehiculs-box">
                                              <div class="vehiculs-thumb {{$model->car->slug}}">
                                                  <img src="{{$model->image_url}}" alt="" />
                                                  <span class="spn-status"> Damaged</span>
                                                  <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                  <div class="user-preview">
                                                      <a class="col" href="agent.html">
                                                          <img alt="Camilė" class="avatar avatar-small" src="{{asset('front/img/4.png')}}" title="Camilė">
                                                      </a>
                                                  </div>
                                                  <a class="proeprty-sh-more" href="{{route('vehicul')}}"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                  <p class="car-info-smal">
                                                  Registration {{$model->release_year}}<br>
                                                      3.0 {{$model->fuel_type}}<br>
                                                      {{$model->seats}}  seats<br>
                                                      {{$model->brand->name}} <br>
                                                      quantity{{$model->quantity}}
                                                  </p>
                                              </div>
                                              <h3><a href="vehicul.html" title="Mercedes-Benz">{{$model->name}}</a></h3>
                                              <span class="price">${{$model->price}}</span>
                                          </div>
                                      </div>


                                  </div>
                              </div>
                              @endforeach
                         
                                </div>
                             
                            </div>
                        </div><!-- Related Posts -->
                      
                    </div>
                </div>
            </div>
        </section>
                                            </x-front-layout>
