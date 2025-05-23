<!DOCTYPE html>

<html>
  <head>
    <title> Login </title>
  </head>

  <body>
    <h1> Welcome to the Login Page for Assignment 1 !</h1>
  
    <form action="/validate.php" method="post">
      <label> Username: </label>
      <input type="text" id="username" name="username" placeholder="Username..."> </input>
      
      <br>
      
      <label> Password :</label>
      <input type="password" id="password" name="password" placeholder="Password..."> </input>
    
      <br>
      
      <input type="submit" value="submit"/>
    </form>
  </body>
</html>