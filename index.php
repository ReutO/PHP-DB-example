<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="site.js"></script>
        
    </head>
    <body>
        
        <table border="1" alighn="center">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>description</th>
                <th>TypeName</th>
            </tr>
        </table>
        <h1>insert</h1>
        <form action="API.php" method="post">
            <input type="text" name="name" placeholder="Name">
                <br>
                <br>                          
            <input type="text" name="description" placeholder="Description">
                <br>
                <br>
                <input type="number" name="typeID" placeholder="typeID">
                <br>
                <input type="hidden"  name="command" value="insert">
                <br>
                <input type="submit" value="ADD">
        </form>
        
         <h1>update</h1>
        <form action="API.php" method="post">
            <input type="number" name="id" placeholder="id">
                <br>
                <br> 
            <input type="text" name="name" placeholder="Name">
                <br>
                <br>                          
            <input type="text" name="description" placeholder="Description">
                <br>
                <br>
                <input type="number" name="typeID" placeholder="typeID">
                <br>
                <input type="hidden"  name="command" value="update">
                <br>
                <input type="submit" value="ADD">
        </form>
         
          <h1>delet</h1>
        <form action="API.php" method="post">
                <input type="number" name="id" placeholder="id">
                <br>
                <input type="hidden"  name="command" value="delete">
                <br>
                <input type="submit" value="ADD">
        </form>
          
          <h1>Show All</h1>
        <form action="API.php" method="get">
                <input type="hidden"  name="command" value="selectAll">
                <br>
                <input type="submit" value="Show All">
        </form>
    </body>
</html>
