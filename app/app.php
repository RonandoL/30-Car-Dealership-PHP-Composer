<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Suzie's Car Pavillion</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <div class='jumbotron'>
              <h1>Suzie's Car Pavillion</h1>

              <form action='pingpong.php'>
                <div class='form-group'>
                  <label for='price'>Enter how much money chew gots for a car bro</label>
                  <input type='number' name='price' id='price'>
                </div>

                <button type='submit' class='btn btn-sm btn-danger'>Find my car!</button>

              </form>
              </div>
            </div>
          </body>
        </html>";
    });

    return $app;
?>
