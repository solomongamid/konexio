
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add article</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/article.css">
    <link href="../css/bootstrap3-wysihtml5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/material.min.css">
      <script src="../js/material.min.js"></script>

  </head>
  <body>
    
   <!--Start list  page -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Konexio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index_admin.php">Home</a></li>
      <li><a href="article_admin.php">Articles</a></li>
      <li><a href="add_article.php">Add articles</a></li>
  </ul>
  </div>
</nav>
    <!--End list page -->
    <h1>Add new article</h1>
    <article>
      <?php
      include("connect.php");
      
        
      $sql1= "SELECT * FROM article";
      $result1 = $conn->query($sql1);

      echo "<table align='center' class='mdl-data-table mdl-js-data-table'><thead><tr><th> ID </th><th>Name of article</th></tr></thead> ";
      while($row = $result1->fetch_assoc()){
      
           
      echo " <tbody><tr><td>" . $row['id']. "</td><td>" . $row['title']. "</td><td><a onclick=\"return confirm('Are you sure?')\" href=\"delete.php?id=".$row['id']."\">Delete</a></td><td><a href=\"update.php?id=".$row['id']."\">Update</a></td></tr></tbody>" ;  
   

        
      } 
      ?>

    <form method="post">
      <h5>The title : </h5><input type="text" name="title"><br>
      <h5>Write your article here :</h5> <textarea class="form-control" id="edittext" name="text" rows="30"></textarea> <br>
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="submit" value="add">
      Add
      </button>

      <?php
         include('connect.php');
        if (isset($_POST['submit'])) { 
  
  
          $title = $_POST['title'] ;
          $text = $_POST['text'] ;
         
                        
     $sql = "INSERT INTO article (title,text) VALUES ('$title','$text')";
     $result = $conn->query($query);
      if ($conn->query($sql) === TRUE) {
          echo "New article created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      }
             ?> 
    </form>

    
      
    </article>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="../js/bootstrap3-wysihtml5.min.js"></script>
    <script src="../js/custom_image_and_upload_wysihtml5.js"></script>
    <script src="../js/jqueryupload.js"></script>
    <script type="text/javascript">
      $('#edittext').wysihtml5();

    </script>
  </body>
</html>