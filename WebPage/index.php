<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Trainopia - Game Tracks</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
  </style>
  <style type="text/css">
    body {
      background: #eee;
      margin-top: 20px;
    }

    .hori-timeline .events {
      border-top: 3px solid #e9ecef;
    }

    .hori-timeline .events .event-list {
      display: block;
      position: relative;
      text-align: center;
      padding-top: 70px;
      margin-right: 0;
    }

    .hori-timeline .events .event-list:before {
      content: "";
      position: absolute;
      height: 36px;
      border-right: 2px dashed #dee2e6;
      top: 0;
    }

    .hori-timeline .events .event-list .event-date {
      position: absolute;
      top: 38px;
      left: 0;
      right: 0;
      width: 75px;
      margin: 0 auto;
      border-radius: 4px;
      padding: 2px 4px;
    }

    @media (min-width: 1140px) {
      .hori-timeline .events .event-list {
        display: inline-block;
        width: 24%;
        padding-top: 45px;
      }

      .hori-timeline .events .event-list .event-date {
        top: -12px;
      }
    }

    .bg-soft-primary {
      background-color: rgba(64, 144, 203, .3) !important;
    }

    .bg-soft-success {
      background-color: rgba(71, 189, 154, .3) !important;
    }

    .bg-soft-danger {
      background-color: rgba(231, 76, 94, .3) !important;
    }

    .bg-soft-warning {
      background-color: rgba(249, 213, 112, .3) !important;
    }

    .card {
      border: none;
      margin-bottom: 24px;
      -webkit-box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
      box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
    }
  </style>

</head>

<body>

  <header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="icon.png" alt="Responsive image" class="img-thumbnail">
          <strong>Trainopia</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background
                  context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
                  to some social networking sites or contact information.</p>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                  <li><a href="https://www.facebook.com/TrainopiaT.D" class="text-white">Like on Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-5">Trainopia Game Tracks</h4>

          <div class="hori-timeline" dir="ltr">
            <ul class="list-inline events">
              <?php include("gamesFetcher.php");
              getTracks();
              ?>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <class class="album py-5 bg-ligh">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="GamesContainer">

        </div>

      </div>
      </div>
      </div>
      </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function ShowGames(trackNumber) {
      document.getElementById('GamesContainer').style.visibility = "visible";
    }

    function addDiv(Game) {

      $.ajax({
        type: "POST",
        url: "linker.php",
        data: {
          ID: Game
        }
      }).done(function(msg) {
        $("#GamesContainer").html(msg)
      });
    }
  </script>

</body>

</html>