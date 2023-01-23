<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="loginform.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="main">
        <form id="form" action="index_datatest.php" method="post">
            <table>
                <tr>
                    <td id="regbutton">Anmelden</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input id="txtf" type="email" name="EMail"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input id="txtf" type="password" name="Password"></td>    
                </tr>
            </table> 
            <button id="sbutton" type="submit">Anmelden</button>
        </form>
        <a href="form.php"><button id="sbutton">Registrieren</button></a>
    </div>
</body>
</html>