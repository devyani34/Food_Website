<html>
    <head>
        <style>
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
            margin-left: 35rem;
            padding-left: 1rem;

        }
        input{

            background-color:white;
            color:black;
            font-size:20px;
            padding: 0.5rem;

        }
        
        </style>
    </head>
    <body>
       <center> <h1>ORDER DETAILS</h1></center>
        <div class="design">
        <form name="form1" method="POST"  action="insertuser.php">
   <b>First name:<input type="text" name="name1" value=""><br></b><br>
   <b>Last name:<input type="text" name="name2" value=""><br></b><br>
   <b>Contact no.:<input type="number" name="phoneno" value=""><br></b><br>
   <b>item bought:<input type="text" name="selecteditemle" value=""><br></b><br>
   <b> price:<input type="number" name="pricele" value=""><br></b><br>
   <center><input type="submit" name="submit" value="pay"></center>
      </div>
</form>

</body>
    </html>









   
