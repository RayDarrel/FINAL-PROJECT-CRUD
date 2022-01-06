<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY FRIENDS - COLLEGE EDITION</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>

  <style>
    .container {
              width: 1200px; height: 649px; border: 2px solid black; border-radius: 5px; margin: 0 auto;
        }
          body{
                  background-color: #009966
          }
        h1 {
      	border-style: outset;
	      border: 2px solid black;
      	border-radius: 5px;
        background-color: #009966;
        color: white;
        font-family: "Courier New";
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        text-shadow: 6px 6px black;
        }

        div {  background-color: white;
        color: black;
      }
         
         
  </style>
  <body>

    <div class="container" style="text-align: center;">
      <h1>MY FRIENDS - COLLEGE EDITION</h1>
      
     
 

      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari" class="form-control" placeholder="Search Friend">
        <input type="submit" value="Search" class="form-control btn btn-success">
      </form>
     
    
    <br>
    
    <div class="alert alert-warning" role="alert">
  Friend not updated, insufficient data. <a href="<?=base_url()?>index.php/home/edit/21" class="alert-link">Go back</a>.
</div>
    </div>
      </div>
      </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
