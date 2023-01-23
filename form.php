<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="form.css" rel="stylesheet" type="text/css" media="screen"/> 

</head>
<body>


    
<div id="main">

<div>
    <?php
  
    ?>
</div>



    <form id="form" action="index_datatest.php" method="post">
        
    <table>

    <tr>
    <td id="regbutton">Registrieren</td>
    <br>
  </tr>
  <br>
  <tr>
    <td>Name</td>
    <td><input id="txtf" type="text" name="Surname"></td>
  </tr>

  <tr>
    <td>Vorname</td>
    <td><input id="txtf" type="text" name="Name"></td>    
  </tr>

  <tr>
    <td>Phone</td>
    <td><input id="txtf" type="text" name="Phone"></td>  
</tr>

    <td>EMail</td>
    <td><input id="txtf" type="text" name="EMail"></td>    
  </tr>  

  <tr>
    <td>Password</td>
    <td><input id="txtf" type="text" name="Password"></td>    
  </tr>

</table> 
<button id="sbutton" name="name" value="value" type="submit">Registrieren</button>
    </form>
    <a href= "loginform.php"><button id="sbutton">Anmeldung</button></a>
   

</div>

</body>
</html>