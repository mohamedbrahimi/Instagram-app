@extends('layouts.dashboard_admin')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/gallery.css')}}">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Gallery</h3>
            <hr>
        <div class="row pt-md" style="    background: #ffffff">
         @foreach ($allImages as $element)
         <!-- col-lg-4 -->
          <div class="col-md-4  profile" >
          {{ csrf_field() }}
              <div class="img-box">
                <img src="../showImage/{{$element->id}}" alt="Lights" style="width:100%">
                <ul class="text-center">
                <!--
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                -->  
                  <div class="switch switch-square eventSwitch"
                       data-on-label="<i class=' fa fa-check'></i>"
                       data-off-label="<i class='fa fa-times'></i>"
                       data-media-id="{{$element->id}}"
                       >
                      @if($element->public)
                      <input type="checkbox" checked=""   />
                      @else
                      <input type="checkbox" />
                      @endif
                      
                
                  </div>

                  
                </ul>
              </div>
              <div>
                <h1>{{$element->user()->get()[0]->name}}</h1>
                <h2>{{$element->created_at}}</h2>
                @if($element->public)
                <img  src="{{asset('template/images/vali.jpg')}}" width="20"
                 style="margin-top: -16%; margin-left: 90%;" id="aut-{{$element->id}}">
                @else
                <img  src="{{asset('template/images/inva.png')}}" width="20"
                 style="margin-top: -16%; margin-left: 90%;" id="aut-{{$element->id}}">
                @endif
                <p>{{$element->description}}</p>
              </div>

          </div>

        @endforeach
       </div><!-- /row -->

    </section><! --/wrapper -->
@endsection   







    <!-- js placed at the end of the document so the pages load faster -->
    
   
    
  


  

    <!--script for this page-->
  



