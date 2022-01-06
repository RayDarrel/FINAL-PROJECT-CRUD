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
                width: 1200px; height: 650px; border: 2px solid black; border-radius: 5px; margin: 0 auto;
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
   div {  background-color: white;
        color: black;
      }

  </style>
  <body>

    

    <div class="container" style="text-align: center;">
    <h1>MY FRIENDS - COLLEGE EDITION &nbsp; </h1> 
    <a style="text-align: right;" href="<?=base_url()?>index.php/home/add" class="btn btn-info">ADD FRIEND</a>
    <a style="text-align: right;" href="<?=base_url()?>index.php/home/hadoop" class="btn btn-info">HADOOP</a>
    <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">
    
 
      <div class="row">
      <div class="col-md-12">
      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari" class="form-control" placeholder="Search a Friend">
        <input type="submit" value="Search" class=" form-control btn btn-success">
        <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">
      </form>
    </div>
  </div>
  <br>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="max-width:115%; max-height:100%; height:180px" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->name?></h3>
              <p> <?php echo $data->alamat ?></p>
              <p>
                <a href="<?=base_url()?>index.php/home/edit/<?=$data->id?>" class="btn btn-warning" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/home/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Delete</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
