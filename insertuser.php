<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link rel="stylesheet" href="paymentstyle.css">
</head>
    <body>
<?php
    if(isset($_POST['submit'])) {
        $link = mysqli_connect('localhost', 'root', '', 'project');
        
        if($link === false) {
            die("Failed to connect: " . mysqli_connect_error());
        }
        
        $first = $_POST["name1"];
        $last = $_POST["name2"];
        $contact = $_POST["phoneno"];
        $thing = $_POST["selecteditemle"];
        $rate = $_POST["pricele"];
        
        $sql = "INSERT INTO userinfo (firstname, lastname, MobileNo, selectditem, price) VALUES('$first', '$last', '$contact', '$thing', '$rate')";
        
        // if(mysqli_query($link, $sql)) {
        //     $username = $_POST["name1"];
        //     $namelast = $_POST["name2"];
        
        //     $ret = "SELECT * FROM userinfo WHERE firstname='$username' AND lastname='$namelast'";
        //     $retval = mysqli_query($link, $ret);
            
        //     if ($retval) {
        //         if (mysqli_num_rows($retval) > 0) {
        //             echo "<table border='2px'>";
        //             while ($row = mysqli_fetch_array($retval)) {
        //                 echo "<tr>";
        //                 echo "<td>" . $row['firstname'] . "</td>";
        //                 echo "<td>" . $row['lastname'] . "</td>";
        //                 echo "<td>" . $row['MobileNo'] . "</td>";
        //                 echo "<td>" . $row['selectditem'] . "</td>";
        //                 // $sum=$sum+ $row['price'] ;
        //                 echo "<td>" . $row['price'] . "</td>";
        //                 echo "</tr>";
        //             }
        //             echo "</table>";
        //             // echo"Total=".$sum;
        //             mysqli_free_result($retval);
        //         } else {
        //             echo "No records matching your query were found.";
        //         }
        //     } else {
        //         echo "ERROR: Could not execute $ret. " . mysqli_error($link);
        //     }
        
            
        
        // } else {
        //     echo "Not inserted: " . mysqli_error($link);
        // }
        mysqli_close($link);
    }
?>
 <form action="order.html">
      <header><h1>Payment Details</h1></header>
        
        
  <h2>Payment information</h2>
  <p>Card type:
    <select name = "card_type" id= "card_type" required>  
    <option value="select"> ---select card</option>
    <option value="visa">visa</option>
    <option value="master card">master card</option>
    <option value="rupay">rupay</option>
  </select>
</p> 
<p>
    Card number : <input type="number" name="card_number" id="card_number"> <br>
    Expiration: <input type="date" name="date" id="date"><br>
    CVV: <input type="password" name="CVV" id="CVV"><br>  
</p>
<input type = "submit" value="Pay now">

    </form>
<!-- <script> -->
    <!-- alert("Ordered Successfully"); -->
    <!-- </script> -->
    </body></html>
