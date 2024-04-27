
<link rel="stylesheet" type="text/css" href="formstyle.css">  
<label>
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    </label>
<form action="{{ route('login') }}" method="POST" class="login-form">
@csrf
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="email" name="email" class="login-username" autofocus="true" required="true" id="email" placeholder="Email" />
  <input type="password" name="password" class="login-password" required="true" id="password" placeholder="Password" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
  <button class='glowing-btn' onclick="window.location.href = '/Register';"><span class='glowing-txt'>R<span class='faulty-letter'>E</span>GISTER</span></button>
</form>


            
      
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
