<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">napollux.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link <?= checkActive('index.php'); ?>" aria-current="page" href="index.php">Home</a>
              <a class="nav-link <?= checkActive('about.php'); ?>" href="about.php">About</a>
              <a class="nav-link" href="#">Products</a>
              <a class="nav-link" href="#">Contact</a>
              <!-- <a class="nav-link disabled">Disabled</a> -->
            </div>
          </div>
        </div>
      </nav>