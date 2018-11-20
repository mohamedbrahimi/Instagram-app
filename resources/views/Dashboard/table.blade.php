@extends('layouts.dashboard')

@section('content')
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
 @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
<link href="{{ asset('template/upload/dist/css/bootstrap-imageupload.css') }}" rel="stylesheet">


<div class="container" style="width:100%">

<form id="upload-form" action="upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <br />
    
    <br /><br />
            <!-- bootstrap-imageupload. -->
            <div class="imageupload panel panel-default" id="espaceUploadImage">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Image</h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default active">File</button>
                        <button type="button" class="btn btn-default">URL</button>
                    </div>
                </div>
                <div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="photos[]" multiple>
                    </label>
                    <button type="button" class="btn btn-default" 
                    style=" max-height: 37px; margin-top: -5px;">Remove</button>
                </div>
                <div class="url-tab panel-body">
                    <div class="input-group">
                        <input type="text" class="form-control hasclear" placeholder="Image URL">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default"
                    style=" max-height: 37px; margin-top: -5px;">Remove</button>
                    <!-- The URL is stored here. -->
                    <input type="hidden" name="image-url">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="name" placeholder="Message" required 
                    style="width: 50%;margin-left: 16px;"></textarea>
                </div>
            </div>

            <!-- bootstrap-imageupload method buttons. -->
           
    <br /><br />
    <input id="upload-button" type="submit" class="btn btn-primary" value="Upload" />
</form>
        </div>
                                
                            </div>

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                             
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        
         <script type="text/javascript" src="{{ asset('template/login/js/index.js') }}"></script>
         <script type="text/javascript" src="{{ asset('template/upload/dist/js/bootstrap-imageupload.js') }}"></script>
          <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();


          </script>
@endsection
