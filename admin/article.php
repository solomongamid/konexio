<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konexion</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <!--Start first page -->
    <div class="cont">
          <img src="../images/logo2.png" width="300" height="100" alt="logo" class="img-responsive center-block"/>
          <h1 align="center">Connecting the world together through code</h1>
          <h3 align="center">Welcoming refugees into the community through tech</h3>
        </div>
      <!--End first page -->
    <!--Start list  page -->
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ><img style="max-width:100px; margin-top: -11px;" src="../images/logo3.png" alt="logo" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
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