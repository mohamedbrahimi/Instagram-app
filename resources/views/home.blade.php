@extends('layouts.dashboard')

@section('content')

<style type="text/css">
    i{ margin-right: 10px;padding-left: 1px;cursor: pointer; }
</style>


<div class="gallery-container">

    <h1>Public Gallery</h1>

    <p class="page-description text-center">Home</p>
    
    <div class="tz-gallery">

        <div class="row">
          
           
            
           @foreach ($userP as $element)
                                    
                      
                      <div class="col-md-4">
                            <div class="thumbnail">
                                <a class="lightbox" href="showImage/{{$element->id}}">
                                    <img src="showImage/{{$element->id}}" alt="Park">
                                </a>
                                <div class="caption">
                                    <h3>{{$element->user()->get()[0]->name}}</h3>
                                    <h4>{{$element->created_at}}</h4>
                                    <p>{{$element->description}}.</p>
                                    
                                    <i class="fa fa-thumbs-up like" aria-hidden="true" style="color: blue" 
                                      data-user-id='{{Auth::id()}}' 
                                      data-ph-id='{{$element->id}}'></i>0
                                    <i class="fa fa-thumbs-down unlike" aria-hidden="true" style="color: red" 
                                      data-user-id='{{Auth::id()}}' 
                                      data-ph-id='{{$element->id}}'></i>0
                                </div>
                            </div>
                        </div>
            @endforeach
            
        </div>

    </div>y

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
 
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection
