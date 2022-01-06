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
                        width: 1200px; height:6550px; border: 2px solid black;border-radius: 5px;margin: 0 auto;
        }

        .blocks {
                margin-left: 9px;
                margin-right: 500px;
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
        
        h2 {    
                color: black;
                font-family: "Courier New";
                font-size: 50px;
                font-weight: bold;
                text-align: left;
        }
        
        h3 {color: black;
                font-family: "Courier New";
                font-size: 25px;
                font-weight: 550;
                text-align: justify;
                text-justify: inter-word;
                
              }

        div {  	
                background-color: white;
                color: black;
                font-family: "Courier New";
                font-size: 25px;
                font-weight: 550;
                text-align: justify;
                text-justify: inter-word;
        } 
        
        img {
                border: 5px solid #009966;
                border-radius: 10px;
                margin-left: 30px; 
                margin-right: 20px;
                
                
        }

        p.fail {
                  
                  text-align: justify, center;
                  text-justify: inter-word;
                  margin-left: 15px;
                  margin-right:430px;
        }
        * {
  box-sizing: border-box;
}

.column {
  float: right;
  width: 150px;
  margin-left: 25px;
  margin-right: 20px;
}


  p{font-family: "Courier New";
                font-size: 25px;
                font-weight: 550;
                text-align: justify;
                text-justify: inter-word;
              }

.columns{
  float: left;
  padding: 10px;
 
}


.rows::after {
  content: "";
  clear: both;
  display: table;
}
      
}

        
</style>
  <body>

  
    <div class="container">
      <h1>WHAT I LEARNED OF HADOOP</h1>
      
      <h2>WHAT IS HADOOP?</h2>

        <img src="<?=base_url()?>assets/picture/hadoop.jpg" style="float: right; width: 340px; height:310px;">

      <p> Hadoop is a framework that could store and process vast amounts 
          of any data efficiently using a cluster of commodity hardware.
          It provides massive storage for any kind of data, enormous processing 
          power and the ability to virtually limitless concurrent tasks or jobs.
          <br><br>
          HADOOP consists of three components that were specifically 
          designed to work on big data.
          <br>
        </p>
      <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">

      <h2>COMPONENTS OF HADOOP</h2>

      <img src="<?=base_url()?>assets/picture/components.jpg" style="float: right; width: 340px; height:310px;">


      <ol>
          <li>Hadoop HDFS - Hadoop Distributed File System (HDFS) is the storage unit.</li><br>
          <li>Hadoop MapReduce - Hadoop MapReduce is the processing unit.</li><br>
          <li>Hadoop YARN - Yet Another Resource Negotiator (YARN) is a resource management unit</li>
      </ol> 

      <br><hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">

      <h2> HADOOP HDFS <h2>
      <img src="<?=base_url()?>assets/picture/hdfs.jpg" style="float: right; width: 340px; height:310px;">
      <p>Hadoop HDFS - is where data is distributed amongst many computers and stored in blocks. 
         HDFS splits the data into multiple blocks of data that are then stored on several data 
         nodes in the cluster. 
</p>
         <br>
         <h3>Features of HDFS</h3>

         <ul>
              
              <li>Provides distributed storage</li>
              <li>Can be implemented on commodity hardware</li>
              <li>Provides data security</li>
              <li>Highly fault-tolerant</li>
              
              </ul>  <br>
          
         <p>
         
         <div class="blocks">
         <img src="<?=base_url()?>assets/picture/blocks.jpg" style="center; width: 1087px; height:330px;">
</div>
         <br>
         128 MB (megabytes) is the default size of each block, if the data is 600 MB then HDFS splits 
         it into 128 MB into each block (A, B, C, D) with a total of 512 MB, and in block D where it
         is only 88 MB to equal the 600 MB size of the data.
      </p> <br>

      <div class="row">
            <div class="column">
            <img src="<?=base_url()?>assets/picture/replication.jpg" style="float: right; width: 170px; height:170px;">
      
            </div>
      <div class="column">
            <img src="<?=base_url()?>assets/picture/fail.jpg" style="float: right; width: 170px; height:170px;">
           
          </div>

          <p class="fail">If a data node crashes we don’t lose the data, HDFS makes copies 
            of the data and stores it across multiple systems. If block A is 
            created, it is replicated with a replication factor of 3 and stored 
            on different data nodes; this is termed the replication method.    </p>

            
      </div>
      

      <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">
      <h2> HADOOP MAPREDUCE<h2>
      <img src="<?=base_url()?>assets/picture/mapreduce.jpg" style="float: right; width: 340px; height:310px;">
      <p>After storing the data successfully, it needs to be processed 
        and this is called MapReduce. <br><br>MapReduce program work in 
        two phases, namely, Map and Reduce. Map tasks deal with splitting and mapping 
        of data while Reduce tasks shuffle and reduce the data. <br><br> Data is split into 
        parts and processes each of them separately on different data nodes, the individual 
        results are then aggregated to give the final output.
      </p><br>

      <div class="blocks">
         <img src="<?=base_url()?>assets/picture/mapreducee.jpg" style="center; width: 1087px; height:500px;">
</div>
      <br><p>Each part of big data is processed individually by MapReduce and sums the result at the end, this improves load balancing and saves time.</p>
      
      <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">

      <h2> HADOOP YARN<h2>
      <img src="<?=base_url()?>assets/picture/yarn.jpg" style="float: right; width: 340px; height:310px;">
      <p>When the MapReduce is ready, it is then run on the Hadoop Cluster 
        and this is done with the help of a set of resources (RAM, Network Bandwidth, and CPU). 
        These resources are needed for each multiple jobs that are run on Hadoop simultaneously.  
        <br><br>YARN (Yet Another Resource Manager) efficiently manages these resources.
        <br><br> Data is split into 
        parts and processes each of them separately on different data nodes, the individual 
        results are then aggregated to give the final output. 
      </p><br>

      <img src="<?=base_url()?>assets/picture/managers.jpg" style="float: right; width: 500px; height:310px;">
      <h3>YARN consists of:<h3>
      <ul>
          <li>Resource Manager - Assigns resources.</li><br>
          <li>Node Manager - Handle the nodes and monitors the resource usage in the node.</li><br>
          <li>Application Master - responsible for negotiating resources from the Resource Manager 
            and working with the Node Manager.</li><br>
          <li>Containers - Hold a collection of physical resourcesx/li>
      </ul> 
      <br>
      <p>If a MapReduce job is going to be processed, first the Application Master 
        requests the container from the Node Manager, once the Node Manager gets the 
        resources it sends them to the Resource Manager. YARN processes job requests 
        and manages cluster resources in Hadoop.

      </p>
      <img src="<?=base_url()?>assets/picture/cycle.jpg" style="center; width: 1087px; height:500px;">
      <hr style="height:5px;border: 2px solid black; border-radius: 5px; background-color:#009966">

      <h1>HADOOP INSTALLATION SCREENSHOTS<h1>

      <div class="rows">
  <div class="columns">
  <img src="<?=base_url()?>assets/picture/a.jpg" style="width: 500px; height:310px;">
  
  <img src="<?=base_url()?>assets/picture/b.jpg" style="width: 500px; height:310px;">
  </div>
<br>

<div class="columns"><br>
  <img src="<?=base_url()?>assets/picture/c.jpg" style="width: 500px; height:310px;">
  
  <img src="<?=base_url()?>assets/picture/d.jpg" style="width: 500px; height:310px;">
  </div>

  <div class="columns"><br>
  <img src="<?=base_url()?>assets/picture/hadoopp.jpg" style="width: 500px; height:310px;">
  
  <img src="<?=base_url()?>assets/picture/coresite.jpg" style="width: 500px; height:310px;">
  </div>

  <div class="columns"><br>
  <img src="<?=base_url()?>assets/picture/hdfss.jpg" style="width: 500px; height:310px;">
  
  <img src="<?=base_url()?>assets/picture/mapred.jpg" style="width: 500px; height:310px;">
  </div>



  
  
  
 
     

    
    </div>



    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
