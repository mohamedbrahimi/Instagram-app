<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}>
<head>
  <meta charset="UTF-8">
  <title>AlgTlm Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
      <link rel="stylesheet" href="{{ asset('template/login/css/style.css') }}">

  
</head>

<body>
  <div class="wrapper">
   <div class="container">
      <h1>Welcome</h1>
      <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
         <input type="email" placeholder="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
         @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
         @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
         <input id="password" type="password" placeholder="password" class="form-control" name="password" required>

           @if ($errors->has('password'))
               <span class="help-block">
                   <strong>{{ $errors->first('password') }}</strong>
               </span>
           @endif
      </div>
         <button type="submit" id="login-button">Login</button><br>
         <button id="login-button-Facebook">Login with Facebook</button><br>
         <a href="register" id="register">No, I don't have account</a>

      </form>
       
   </div>
   
   <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
   </ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript" src="{{ asset('template/login/js/index.js') }}"></script>
    
</body>
</html>
