<link rel="stylesheet" type="text/css" href="formstyle.css">   
<label>
  @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
</label>
<form class="login-form" action="{{ route('register') }}" method="POST" >
  @csrf
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="name" name="name" class="login-username" autofocus="true" required="true" placeholder="Full name" id="name" required  />
  <input type="email" name="email" class="login-username" autofocus="true" required="true" placeholder="Email" id="email" required />
  <input type="password" name="password" class="login-password" required="true" placeholder="Password" id="password" required />
  <input type="submit" name="Register" value="Register" class="login-submit" />
  <button class='glowing-btn' onclick="window.location.href = '/login';"><span class='glowing-txt'>L<span class='faulty-letter'>O</span>GIN</span></button>
</form>
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 