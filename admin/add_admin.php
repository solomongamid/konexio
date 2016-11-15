
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin page</title>
  <link rel="stylesheet" href="../css/article.css">
 	<link rel="stylesheet" href="../css/material.min.css">
    <script src="../js/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>

   <?php
    include 'connect.php';
      // define variables and set to empty values
      $passErr = $emailErr = "";
      $password = $email = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["password"])) {
            $nameErr = "password is required";
          } else {
            $password = test_input($_POST["password"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
              $passErr = "Only letters and white space allowed";
            }
          }
          
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }
        
    
      // email and password sent from form 
      
      $email = $conn->real_escape_string($_POST['email']);
      $password = $conn->real_escape_string($_POST['password']); 

      $sql = "INSERT INTO login (email,password) VALUES ('$email' ,'$password')";
      
      if ($conn->query($sql) === TRUE) {
    $error = "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Konexio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index_admin.php">Home</a></li>
  </ul>
  </div>
</nav>

 	 <div class="mdl-layout mdl-js-layout">
     <main class="mdl-layout__content">
      <div class="mdl-card mdl-shadow--6dp">
         <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">Konexio</h2>
         </div>
         <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
           <h2 class="mdl-card__title-text">Admin Page</h2>
         </div>
      <div class="mdl-card__supporting-text">
            <form action = "" method = "post">
               <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="text" name="email" value="<?php echo $email;?>"/>
                  <label class="mdl-textfield__label" for="email">Email</label>
                  <span class="error">* <?php echo $emailErr;?></span>
               </div>
               <div class="mdl-textfield mdl-js-textfield">
                  <input class="mdl-textfield__input" type="password" id="userpass" name = "password" value="<?php echo $name;?>" />
                  <label class="mdl-textfield__label" for="password">Password</label>
                  <span class="error">* <?php echo $passErr;?></span>
               </div>
            
         </div>
         <div class="mdl-card__actions mdl-card--border">
            <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="submit" value=" Submit">Sumbit</button>

            </form>
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
         </div>
      </div>
     </main>
   </div>
 
 </body>
 </html>