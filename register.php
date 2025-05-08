<?php
session_start();
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.145.0">
  <title>Signin Template · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

  <script src="assets/js/color-modes.js"></script>

  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="assets/img/favicons/favicon.ico">
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

  <!-- Custom styles for this template -->
  <link href="assets/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>


  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
      id="bd-theme"
      type="button"
      aria-expanded="false"
      data-bs-toggle="dropdown"

      aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" aria-hidden="true">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50" aria-hidden="true">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" aria-hidden="true">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50" aria-hidden="true">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" aria-hidden="true">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50" aria-hidden="true">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" aria-hidden="true">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>

  </div>


  <main class="form-signin w-100 m-auto">

    <form action="handle_register.php" method="post">
      <img class="mb-4" src="data:image/jpeg;base64,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" alt="" width="150" height="60">
      <h1 class="h5 mb-3 fw-normal"> <samp style="font-style: italic;">welcome sign up and join us</samp></h1>


      <?php
      if (!empty($_GET["msg"]) && $_GET["msg"] == 'ar') {
      ?>
        <div
          class="alert alert-warning"
          role="alert">
          <strong> Alert Heading </strong> you are aleardy Registed ,please <a href="index.php">login</a>!
        </div>





      <?php
      }
      ?>

      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput" style="font-style: oblique;">Name</label>
        <small style="color: red;"> <?php if (isset($_SESSION["errors"]["name"])) echo $_SESSION["errors"]["name"] ?> </small>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput" style="font-style: oblique;">Email address</label>
        <small style="color: red;"> <?php if (isset($_SESSION["errors"]["email"])) echo $_SESSION["errors"]["email"] ?> </small>
      </div>
      <div class="form-floating">
        <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput" style="font-style: oblique;">phone</label>
        <small style="color: red;"> <?php if (isset($_SESSION["errors"]["phone"])) echo $_SESSION["errors"]["phone"] ?> </small>
      </div>
      <div class="form-floating">
        <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword" style="font-style: oblique;">Password</label>
        <small style="color: red;"> <?php if (isset($_SESSION["errors"]["pw"])) echo $_SESSION["errors"]["pw"] ?> </small>
      </div>
      <div class="form-floating">
        <input type="password" name="pc" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword" style="font-style: oblique;">Password confirmation</label>
        <small style="color: red;"> <?php if (isset($_SESSION["errors"]["pc"])) echo $_SESSION["errors"]["pc"] ?> </small>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
        <label class="form-check-label" for="checkDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit" style="font-weight: 700s;">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2019–2025</p>
    </form>
  </main>
  <script defer src="assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"></script>

</body>

</html>

<?php

$_SESSION["errors"] = null;

?>