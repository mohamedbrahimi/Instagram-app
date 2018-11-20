@extends('layouts.dashboard')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">My Images</h4>
                                <p class="category">You can see all your images</p>
                            </div>
                            <div class="content" id="ImageUser"  >
                           
        
                                <div class="row">
      
                                @foreach ($userP as $element)
                                    
                                 
                                
                                  <div class="col-md-4">
                                    <div class="thumbnail">
                                      <a href="showImage/{{$element->id}}">
                                        <img src="showImage/{{$element->id}}" alt="Lights" style="width:100%">
                                        <div class="caption">
                                          <p>{{$element->description}}</p>
                                        </div>
                                      </a>
                                    </div>
                                  </div> 
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection