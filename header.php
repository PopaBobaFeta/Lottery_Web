<nav class="navbar nav_color navbar-expand-lg sticky-top">
  <a class="navbar-brand" href="#"><img src="logo.png" style="height: 45px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse pos_nav" id="#navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="games.php">GAMES</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn_nav_color" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 400; font-family: 'Rubik', sans-serif !important; ">
          LOG IN
          </button>
              <form class="dropdown-menu p-4">
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail2">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword2">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                      <label class="form-check-label" for="dropdownCheck2">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Log in</button>
              </form>
              <!-- <div class="dropdown-menu drp_dwn_color" aria-labelledby="dropdownMenuButton"> -->
            <!-- <a class="dropdown-item" href="#">My Profile</a> -->
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="#">Log Out</a> -->
              <!-- </div> -->
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="results.php">RESULTS</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="registration.php">REGISTRATION</a>
      </li>
    </ul>
  </div>
</nav>