
    <!-- navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/HomeHamka">Home</a>
            <a class="nav-link" href="/ListCarHamka">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="/AddCarHamka">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
          <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             {{Auth::user()->name}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="/ProfileHamka">Profile</a></li>
              <li><a class="dropdown-item" href="/Logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
