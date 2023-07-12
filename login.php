<html> 
    <style>
         body{
            /* background-image:url("final2.png");   */
            /* background-color:rgb(53, 51, 51); */
            background-repeat: no-repeat
            background-color:white;
/* background: -webkit-linear-gradient(to right, #33001b, #ff0084);  
background: linear-gradient(to right, #33001b, #ff0084);  */

         } 
        img{
           max-width:100%;
           max-height:100%;
        }
        .design{
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            /* opacity:0.5; */
            z-index:30;
            border:2px solid black;
            margin-top:4rem; 
            /* margin-right:28rem; */
            height:30rem;
            width:25rem;
            padding-top:4rem;
            border-radius:10%;
            background-color: lightcoral;

        }
        input{

            background-color:white;
            color:black;
            font-size:20px;
            padding: 0.5rem;
            /* border:none; */
            /* border-radius:50%; */
        }
        .signup{
            /* background-color:black; */
            color:aliceblue;
            height:2rem;
            width:4.8rem;
            font-size:20px;
            margin-left:15rem;
            /* padding-top:rem; */
        }
     </style>

 <body>
    
 <basefont face="Cambria" size="4"> <br> 
 <center> 
 <!-- <img src="img.jpg" width="585" height="335" /><br />  -->
     
    <div class="design">
 <b>Login:</b> 
 <br><br><br>
 <form name="f1" method="post" action="match.php"> 
 <!-- <table align="center" width="100" height="150" cellspacing=”15”>  -->
 <!-- <tr><td> -->
    <b><font color="black" size="5.5px">Login ID:</font></b>
<!-- </td>  -->
 <!-- <td> -->
    <input type="text" name="t1" placeholder="username"><br><br><br>
<!-- </td>  -->
 
 <b><font color="black" size="5.5px">Password:</font></b> 
 <input type="password" name="t2" placeholder="password"> <br><br><br>
  
 
 <b><input type="submit" name="b1" value="Submit" ></font></b>
 <div class="signup">
     <a href="registration.php">Sign up</a>
 </div>
 <!-- <input type="submit" name="b3" value=<a href="registration.php" >sign up</a>> -->
 <br><br>

 <!-- <input type="reset" name="b2" value="forget password"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
 <b><font color="black" size="4px"><a href="registration.php"><p>forget password?</p></a></font></b>
    
 
      </form>
    </div>
    </center> 
 </basefont>
 </body> 
 </html> 

 <!-- <?php
// if(isset($_POST["b1"]))
// {
    
//     else{
//         echo "<script>alert('You are not our daily customer plz first signup')</script>";
//     }
// }
//     else if(isset($_POST["b3"]))
//     {
//         header("Location: registration.php");
//     } -->



//  ?>