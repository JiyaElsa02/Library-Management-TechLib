<?php
 include "connection.php";
 include "navbar.php";
 ?>  

<!DOCTYPE html>
<html>
<head>
   <title>Books</title>
   <script>
    table, th,td{
      border:1px solid;
    }
    table{
      border-collapse: seperate;
      border-spacing: 50px 0;
      width:100%;
    }
    td{
      padding: 10px 0;
    }
  </script>
   <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  width: 100%;
  height: 100%;
}

    .container {
      position: absolute;
  margin: 500;
  top: 500;
  left: ;
  right: 0;
  bottom: 500;
  width: 300px;
  height: 100px;
  .search {
    margin: auto;
    position: absolute;
  
    top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 300px;
  height: 100px;
    
    background: crimson;
    border-radius: 50%;
    transition: all 1s;
    z-index: 4;
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
    // box-shadow: 0 0 25px 0 crimson;
    &:hover {
      cursor: pointer;
    }
    &::before {
      content: "";
      position: absolute;
      margin: auto;
      top: 22px;
      right: 0;
      bottom: 0;
      left: 22px;
      width: 12px;
      height: 2px;
      background: white;
      transform: rotate(45deg);
      transition: all .5s;
    }
    &::after {
      content: "";
      position: absolute;
      margin: auto;
      top: -5px;
      right: 0;
      bottom: 0;
      left: -5px;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      border: 2px solid white;
      transition: all .5s;
    }
  }
  input {
    font-family: 'Inconsolata', monospace;
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 50px;
    outline: none;
    border: none;
    // border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    background: crimson;
    color: white;
    text-shadow: 0 0 10px crimson;
    padding: 0 80px 0 20px;
    border-radius: 30px;
    box-shadow: 0 0 25px 0 crimson,
                0 20px 25px 0 rgba(0, 0, 0, 0.2);
    // box-shadow: inset 0 0 25px 0 rgba(0, 0, 0, 0.5);
    transition: all 1s;
    opacity: 0;
    z-index: 5;
    font-weight: bolder;
    letter-spacing: 0.1em;
    &:hover {
      cursor: pointer;
    }
    &:focus {
      width: 300px;
      opacity: 1;
      cursor: text;
    }
    &:focus ~ .search {
      right: -250px;
      background: #151515;
      z-index: 6;
      &::before {
        top: 0;
        left: 0;
        width: 25px;
      }
      &::after {
        top: 0;
        left: 0;
        width: 25px;
        height: 2px;
        border: none;
        background: white;
        border-radius: 0%;
        transform: rotate(-45deg);
      }
    }
    &::placeholder {
      color: white;
      opacity: 0.5;
      font-weight: bolder;
    }
  }
}
button{
    margin-top: 50px;
    width: 25%;
    align-items: center;
    background-color: #505050;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.center{
  display=flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  top: 30%;
  left: 30%;
  -ms-transform: translate(-80%,+25%);
  transform: translate(-200%,+70%);
  border: 3px burlywood;
}
    </style>
   </head>
<body>
  <h1 style="color:black; text-align: center; font-size:48px;">Find your books here!</h1> 
  <div class="srch">
    <form class="" method="post" name="form1">
  <div class="container">
  <div class="center">
<label for="Search">Search :</label>
        <input type="search" name="search" placeholder="Search books" required ="">
        &nbsp;&nbsp;&emsp;&emsp;
        <button type="submit" name="submit">Search</button>
</div></div>
</form>
</div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <h2>List of Books</h2><br>
  <?php
/*search*/
    if(isset($_POST['submit']))
    {
       $q=mysqli_query($conn,"SELECT * from libdata1 where Title like '$_POST[search]%' ");
  

    if(mysqli_num_rows($q)==0)
    {
      echo "Sorry! No book found.";
    }
    else
    {
      echo "<table border='2' >

<tr>
<th>BID</th>
<th>Title</th>
<th>Author</th>
<th>Genre</th>
<th>Publisher</th>
<th>AvailableCount</th>
</tr>";

 while($row = mysqli_fetch_assoc ($q))
  {
  echo "<tr>";
  echo "<td>" . $row['BID'] . "</td>";
  echo "<td>" . $row['Title'] . "</td>";
  echo "<td>" . $row['Author'] . "</td>";
  echo "<td>" . $row['Genre'] . "</td>";
  echo "<td>" . $row['Publisher'] . "</td>";
  echo "<td>" . $row['AvailableCount'] . "</td>";

  echo "</tr>";
  }

  echo "</table>";
    }
  }/*end search*/


    /*button not pressed*/
  else
  {
    $res=mysqli_query($conn,"SELECT * FROM `libdata1`ORDER BY `libdata1`.`Title`ASC;;");

  echo "<table border='2' >

 <tr>
 <th>BID</th>
 <th>Title</th>
 <th>Author</th>
 <th>Genre</th>
 <th>Publisher</th>
 <th>AvailableCount</th>
 </tr>";

 while($row = mysqli_fetch_assoc ($res))
  {
  echo "<tr>";
  echo "<td>" . $row['BID'] . "</td>";
  echo "<td>" . $row['Title'] . "</td>";
  echo "<td>" . $row['Author'] . "</td>";
  echo "<td>" . $row['Genre'] . "</td>";
  echo "<td>" . $row['Publisher'] . "</td>";
  echo "<td>" . $row['AvailableCount'] . "</td>";
  echo "</tr>";
  }

  echo "</table>";

 }

?>
</body>
</html>



