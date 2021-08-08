    
      <x-front-layout>
   
        <div class="inner-head overlap">
            <div style="background: url(front/img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-bolt"></i></span>
                    <h2>VEHICULS - LIST STYLE 3 </h2>
                    <ul>
                        <li><a href="{{route('home')}}" title="">HOME</a></li>
                        <li><a href= "{{route('vehiculs3')}}"  title="">VEHICULS- LIST STYLE 3 </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- inner Head -->

     
    
      <section class="block remove-top ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-sec">
                            <div class="row">
                               
                              @foreach($latest as $model)
                                <div class="col-md-6">
                                    <div class="vehicul-post">
                                        <div class="vehicul-thumb {{$model->car->name}}">
                                            <img src="{{$model->image_url}}" alt="" />
                                            <div class="vehicul-post-detail">
                                         
                                         
                                                <h2><a href="#" title=""> Brand: {{$model->brand->name}}</a></h2>
                                                <h2>  car: {{$model->car->slug}}  </h2>
                                                <h2> Model:  {{$model->slug}}  </h2>
                                                <h2 class="price">   {{$model->price}} $  </h2>
                                                <span><i class="fa fa-calendar-o"></i>   {{$model->release_year}}</span>
                                                <p> {{$model->Specifications}}</p>

                                                <a href="{{route('vehicul')}}"  title="" class="vehicul-more">Details </a>
                                            </div>
                                        </div>
                                        <div class="vehicul-agent">
                                            <a href="agent3.html" title="">
                                                <img src="{{asset('img/3.png')}}" alt="" />
                                                <h3>KwitaraCars y</h3>
                                                <span>Posted by <i>Agent Flwo</i></span>
                                            </a>
                                        </div>
                                    </div><!-- Blog Post -->
                                </div> 
@endforeach
              
                            </div>
                            <ul class="pagination">
                                <li class="disabled"><a href="{{route('vehiculs3')}}"  title=""><span>NEXT</span></a></li>
                                <li><a href="{{route('vehiculs3')}}"  title="">1</a></li>
                                <li class="active"><a href="{{route('vehiculs')}}"  title="">2</a></li>
                                <li><a href="{{route('vehiculs')}}" title=""><span>PREV</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-front-layout>
     