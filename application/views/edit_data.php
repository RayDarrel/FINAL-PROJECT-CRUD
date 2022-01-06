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
body {
		    background-color: #009966;
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

   div {  	
        background-color: white;
        color: black;
        font-family: "Courier New";
        font-size: 20px;
        font-weight: bold;
   } 

   h2 {    
                color: black;
                font-family: "Courier New";
                font-size: 30px;
                font-weight: bold;
                text-align: left;
   }
</style>
  <body>

    <div class="container">
      <h1>MY FRIENDS - COLLEGE EDITION</h1>
      <h2>EDIT INFORMATION</h2>
      <div class="row">
        <div class="col-md-6">
        <form action="<?=base_url()?>index.php/home/updatedata" method="post" enctype="multipart/form-data">
          <label>Full Name</label>
          <input type="text" name="name" class="form-control" value="<?=$data->name?>">
          <label>Description</label>
          <textarea name="alamat" rows="8" class="form-control" cols="80"><?=$data->alamat?></textarea>
          <label>Upload Photo</label><br>
          <input type="file" name="fotopost" class="form-control"><br>

          
          <input type="hidden" name="filelama" value="<?=$data->foto?>">
         
          <input type="hidden" name="id" value="<?=$data->id?>">

          <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
        </div>
      </div>
      <br>
      <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">
    </div>




    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
