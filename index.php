<html>
    <head>
        <title>Online voting system</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <center>
        <div id="headerSection">
        <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="bodySection">
        <form action="api/login.php" method="POST">
            <h2>Login</h2>
            <input type="number" name="mobile" placeholder="Enter mobile"><br><br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>
            <select id="dropbox" name="role" >
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button id="loginbutton" type="submit">Login</button><br><br>
            New user?<a href="routes/register.html">Register here</a>
        </form>
      </div>
      </center>
    </body>
</html>

