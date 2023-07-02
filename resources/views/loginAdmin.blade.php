<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/form.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Account</title>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//cnova.github.io/jquery-lock/release/jquery.lock.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".kunci").lock();
      });
    </script>
  </head>
  <body oncontextmenu="return false">
      {{-- @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}
    <div class="container">
      <div class="forms-container">
      <div class="signin-signup">
          <form action="/loginAdmin" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in Admin</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" id='email' name='email' placeholder="email" class="@error('email') is-invalid @enderror" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" required/>
            </div>
            <div class="hidden">
              <input type="hidden" class="kunci" value="1" name="is_admin" id="id_admin">
            </div>
            {{-- <div class="tbl-biru"> --}}
              <input type="submit" id="login" name="login" value="Login" class="btn solid" />
            {{-- </div> --}}
            <div>
              <a href="/form">
                <p>Login as user?</p>
              </a>
            </div>
            <p class="google-text">Or Sign in with Google</p>
            <div class="google">
              <a href="#" class="google-icon">
                <i class="fab fa-google"></i>
            </a>
            </div>
          </form>
        </div>
      </div>
    <script src="js/form.js"></script>
  </body>
</html>