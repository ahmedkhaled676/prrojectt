
<?php
// session_start();
// require_once('../../classes.php');
//  $User = unserialize($_SESSION["user"]);
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.145.0">
    <title>Album example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    <script src="../../assets/js/color-modes.js"></script>

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="../../assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="../../assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="../../assets/img/favicons/manifest.json">
<link rel="mask-icon" href="../../assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="../../assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check2" viewBox="0 0 16 16">
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
  <symbol id="circle-half" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
  </symbol>
  <symbol id="moon-stars-fill" viewBox="0 0 16 16">
    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
  </symbol>
  <symbol id="sun-fill" viewBox="0 0 16 16">
    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
  </symbol>
</svg>


    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
        id="bd-theme"
        type="button"
        aria-expanded="false"
        data-bs-toggle="dropdown"
        
        aria-label="Toggle theme (auto)">
  <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#circle-half"></use></svg>
  <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
</button>
<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
  <li>
    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#sun-fill"></use></svg>
      Light
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
  </li>
  <li>
    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>
      Dark
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
  </li>
  <li>
    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>
      Auto
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
  </li>
</ul>

    </div>

    
<header data-bs-theme="dark">
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php">profile</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
                <a name=""id=""class ="btn btn-danger
        
        " href="../../handel_logout.php" role="button" >Logout</a>
      </form>
    </div>
  </div>
</nav>
</header>

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">welcom dear customers</h1>
          <a href="../../main_action.php" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row">
        <div class="col-8 offset-2">

              <div class="col">
          <div class="card shadow-sm my-3">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="title ">
            <div class="card-body">
              <p class="card-text" style="color: blue;">this is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">View</small> </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">Edit</small></button>
                </div>
                <small class="text-body-secondary">1 mins</small>
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">
  <div class="progress-bar" style="width: 90%">34%</div>
</div>
              </div>
            </div>
          </div>
        </div>
         <div class="col">
          <div class="card shadow-sm my-3">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="title ">
            <div class="card-body">
              <p class="card-text" style="color: blue;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">View</small> </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">Edit</small></button>
                </div>
                <small class="text-body-secondary">2 mins</small>
              </div>
            </div>
          </div>
        </div>
         <div class="col">
          <div class="card shadow-sm my-3">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="title ">
            <div class="card-body">
              <p class="card-text" style="color: blue;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">View</small> </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">Edit</small></button>
                </div>
                <small class="text-body-secondary">3 mins</small>
              </div>
            </div>
          </div>
        </div> <div class="col">
          <div class="card shadow-sm my-3">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="title ">
            <div class="card-body">
              <p class="card-text" style="color: blue;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">View</small> </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">Edit</small></button>
                </div>
                <small class="text-body-secondary">5 mins</small>
              </div>
            </div>
          </div>
        </div>
         <div class="col">
          <div class="card shadow-sm my-3">
            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Alluvial_fan%2C_Taklimakan_Desert%2C_XinJiang_Province%2C_China%2C_NASA%2C_ASTER.jpg/500px-Alluvial_fan%2C_Taklimakan_Desert%2C_XinJiang_Province%2C_China%2C_NASA%2C_ASTER.jpg" alt="title ">
            <div class="card-body">
              <p class="card-text" style="color: blue;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">View</small> </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">Edit</small></button>
                </div>
                <small class="text-body-secondary">7 mins</small>
              </div>
            </div>
          </div>
        </div>
         <div class="col">
          <div class="card shadow-sm my-3">
            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Crater_Lake_winter_pano2.jpg/1212px-Crater_Lake_winter_pano2.jpg" alt="title ">
            <div class="card-body">
              <p class="card-text" style="color: blue;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">View</small> </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"><small style="color:red">Edit</small></button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script defer src="../../assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"></script>

    </body>
</html>
