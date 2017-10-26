<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="png" href="car.png" />

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="Assets/css/normalize.css">
        <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <div class="jumbotron">
    <h1 class="display-3">CARHANDLE</h1>
    <p class="lead">Shop.</p>
    <hr class="my-4">


      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">New Cars</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form action="" method="post">

                <div class="form-group">
                  <label for="recipient-name" name="mark" class="col-form-label">Mark:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                  <label for="message-text1" name="km" class="col-form-label">Km:</label>
                    <input type="number" class="form-control" id="message-text1">
                </div>

                <div class="form-group">
                  <label for="message-text2"  name="whell" class="col-form-label">Whell:</label>
                  <input type="number" class="form-control" id="message-text2">
                </div>

                <div class="form-group">
                  <label for="message-text3"  name="power" class="col-form-label">Power:</label>
                  <input type="number" class="form-control" id="message-text3">
                </div>

                <div class="form-group">
                  <label for="message-text4" name="helmet" class="col-form-label">Helmet:</label>
                  <input type="text" class="form-control" id="message-text4">
                </div>

                <div class="form-group">
                  <label for="message-text5" name="food" class="col-form-label">Food:</label>
                  <input type="text" class="form-control" id="message-text5">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" data-dismiss="modal">Envoyer</button>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
