<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Carhandle</title>
        <meta name="description" content="Location cars">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="png" href="car.png" />

        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="Assets/css/normalize.css">
        <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="Assets/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>


    <body>
        <header>
        <section class="container">
          <div class="jumbotron">
            <h3 class="display-3">CARHANDLE</h3>
            <p class="lead">Shop.</p>
            <hr class="my-4">


      <button type="button" class="btn btn-danger env" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Create</button>

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

              <form action="index.php" method="post">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Mark:</label>
                  <input type="text" name="mark"  class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                  <label for="message-text1"  class="col-form-label">Km:</label>
                    <input type="number" name="km" class="form-control" id="message-text1">
                </div>

                <div class="form-group">
                  <label for="message-text2"   class="col-form-label">Whell:</label>
                  <input type="number"  name="whell" class="form-control" id="message-text2">
                </div>

                <div class="form-group">
                  <label for="message-text3"   class="col-form-label">Power:</label>
                  <input type="number" name="powwer" class="form-control" id="message-text3">
                </div>

                <div class="form-group">
                  <label for="message-text4"  class="col-form-label">Helmet:</label>
                  <input type="text" name="helmet" class="form-control" id="message-text4">
                </div>

                <div class="form-group">
                  <label for="message-text5"  class="col-form-label">Food:</label>
                  <input type="text" name="food" class="form-control" id="message-text5">
                </div>

                <div class="form-group">
                  <label for="message-text6"  class="col-form-label">Sunroof:</label>
                  <input type="text" name="sunroof" class="form-control" id="message-text6">
                </div>


                  <div class="form-group">
                    <label for="exampleSelect1">Select</label>
                    <select class="form-control" name="type" id="exampleSelect1">
                      <option value="Moto">Moto</option>
                      <option value="Car">Car</option>
                      <option value="Truc">Truc</option>
                    </select>
                  </div>




                <div class="modal-footer">
                  <button type="button " class=" btn close " data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-danger env"  value="Envoyer">
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  </header>
