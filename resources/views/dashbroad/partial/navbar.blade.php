<div class="navbar">
    <nav>
      <div id="menu-button">
        <input type="checkbox" id="menu-chekbox" />
        <label for="menu-chekbox" id="menu-label">
          <div id="hamburger"></div>
        </label>
      </div>
      <div id="account-button">
        <input type="checkbox" id="account-chekbox">
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="logout">
      <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="btn btn-danger" type="submit" >Logout</button>
      </form>
  </div>
    </nav>
  </div>
