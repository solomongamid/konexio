<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
      .artc{
        height: auto;
        color: black;
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <!--Start first page -->
    <div class="cont">
          <h2 align="center">Connecting the world together through code</h2>
          <h4 align="center">Welcoming refugees into the community through tech</h4>
          <img src="images/backg.jpg" width="100" height="100" alt="logo" class="img-responsive center-block"/>
        </div>
      <!--End first page -->
    <!--Start list  page -->
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Konexio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
  </div>
</nav>
    <!--End list page -->
   <article>
      <?php
      include("connect.php");
      
        
      $sql1= "SELECT title,text FROM article";
      $result1 = $conn->query($sql1);

      if($result1->num_rows >0) {
      while($row = $result1->fetch_assoc()){
      
        
        echo "<div class='artc'>". $row['title'] . "<br>" . "<br>" .$row['text'] . "</div><hr>";
       }
        
      } 
      ?>
   </article>   
    </body>
    </html>