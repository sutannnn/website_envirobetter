
{{--  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/form.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <title>Account</title>
  </head>
  <body>
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    <div class="container">
      <div class="forms-container">
      <div class="signin-signup">
          <form action="/register" method="POST" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name='name' id='name' placeholder="Nama Lengkap" class="@error('name') is-invalid @enderror" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" required/>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="is_admin" type="checkbox" value="0" id="flexCheckChecked" checked required>
              <label class="form-check-label" for="flexCheckChecked">
                Saya setuju dengan syarat yang berlaku
              </label>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with Google</p>
            <div class="google">
              <a href="#" class="google-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't have an account yet?</h3>
            <p>
              Click Sign up to create an Account.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
        <div class="content">
            <h3>Already have an Account?</h3>
            <p>
              If you already have an account, please click sign in.
            </p>
            <a href="/form">
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="js/form.js"></script>
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/form.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <title>Account</title>
  </head>
  <body>
      {{-- @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}
    <div class="container">
      <div class="forms-container">
      <div class="signin-signup">
        <form action="/register" method="POST" class="sign-in-form">
          @csrf
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name='name' id='name' placeholder="Name" class="@error('name') is-invalid @enderror" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" required/>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="is_admin" type="checkbox" value="0" id="flexCheckChecked" checked required>
            <label class="form-check-label" for="flexCheckChecked">
              I agree with the terms of use.
            </label>
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with Google</p>
          <div class="google">
            <a href="#" class="google-icon">
              <i class="fab fa-google"></i>
            </a>
          </div>
        </form>
        </div>
      </div>

      <div class="panels-container">
      <div class="panel left-panel">
          <div class="content">
            <h3>Already have an Account?</h3>
            <p>
              If you already have an account, please click sign in.
            </p>
            <a href="/form">
              <button class="btn transparent" id="sign-up-btn">
                Sign in
              </button>
            </a>
          </div>
        </div>
        {{-- <div class="panel right-panel">
          <div class="content">
            <h3>Already have an Account?</h3>
            <p>
              If you already have an account, please click sign in.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
        </div> --}}
      </div>
    </div>

    {{-- <script src="js/form.js"></script> --}}
  </body>
</html>