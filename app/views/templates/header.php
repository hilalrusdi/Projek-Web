<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?=$data['judul']?></title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <link rel="stylesheet" href="<?= BASEURL?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/anung.css">
  </head>

  <body class="labib-chan">
  <div class="container" id="home">
      <div class="col-12 text-center">
        <div class="tm-page-header">
            <img src="img/your-logo.png" alt="">
        </div>
      </div>
    </div>
    <div class="tm-nav-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#tmMainNav"
                aria-controls="tmMainNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="tmMainNav">
                <ul class="navbar-nav mx-auto tm-navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= BASEURL; ?>"
                      >Home <span class="sr-only"></span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL?>/gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL?>/contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL?>/donate">Donate</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <section class="tm-banner-section" id="tmVideoSection">
        <img style="display:block; width:100%;" src="img/panda_img.jpg" alt="">
    </section>
    <div><br><br></div>