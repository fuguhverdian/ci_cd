<div class="popup" id="loginPopup">
    <!-- Konten pop-up login -->
    <button class="login-popup-close">&times;</button>
    <h1>Login</h1>
    <form  action="{{ route('login') }}" method="POST">
        @csrf
        @if (session()->has('LoginEror'))
        <div>
            <script>alert("You haven't registered yet, please register first!")</script>
        </div>
        @endif

      <label for="Email">Email:</label>
      <input type="text" id="username" name="loginusername" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="loginpassword" required><br><br>
      <a href="#">Forgot Password?</a><br>
      <input id="sumbit" type="submit" value="Login">
      <div class="link">Not a member? <a href="{{ route('register') }}">Sign Up Here</a></div>
    </form>
  </div>

  <div class="blur-background" id="blurBackground"></div>
