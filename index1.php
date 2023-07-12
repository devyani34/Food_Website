<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
      <!-- <link rel="stylesheet" href="style1.css"> -->
      <style>
       
 .navbar{
    display: flex;
    /* background:dark-brown; */
     padding:1rem; 
    color:black;
    justify-content:end;
    background-color:darkred ;
    margin: 0%;
}
.nav-items{
    flex-basis: 50%;
    padding-left:36rem;
    display:flex;
    justify-content: flex-end;
    color:white;
    gap:1rem;
   
    /* background-color: blueviolet; */
}
.nav-items >*
{
    margin-top: 1rem;
    /* background-color: brown; */
}
.nav-items a{
    margin-top: 1.4rem;
    text-align: right;
    text-decoration: none;
    color:black;
    /* text-decoration-style: solid; */

    /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;    text-transform: uppercase; */
    font-size: 1.2rem;
    padding-left:1rem;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
.btn{
    color:black;
    padding:0.3rem 0.5rem;
    background: none;
    cursor: pointer;
    border-radius: 16px;
    border:2px solid  rgb(3, 3, 103);
}
.btn:hover{
    color:white;
    background-color: rgb(3, 3, 103);
}
.nav-items a:hover{
    /* text-decoration: underline; */
}
.n{
    color:chocolate;
    font-size:25;

}
.m{
    color:chocolate;
    font-size:25;
}
.t{
    display:flex;
    width:100%;
    margin-top: 1rem;
    gap:2rem;
    flex-wrap: wrap;
    font-style: italic;
    font-size:25px;
    /* background-color: red; */
}
.rightnav{
    width : 20%;
    background-color: rgb(222, 237, 22);
    /* width : 50%; */
    text-align: right;
}
 body{ 
    /* background-image:url("final2.png");   */
      /* background-color: rgb(141, 133, 133); */
      background-color:white;
    


 } 
 h1{
    font-size: 250px;
     opacity: 0.5; 
    margin-left: 8rem;
    margin-top: 0;
    margin-bottom: 2rem;
    color:black;
 }
 .veg{
      /* border: 2px solid black; 
    height: 200px;*/
    width: 1000px;  
    margin-left: 15rem;
    margin-right: 4rem;
    margin-top: 4rem;
    background-color: brown;
 }
 .non-veg{
     /* border: 2px solid black;
    height: 200px;*/
    width: 1000px;  
    margin-left: 15rem;
    margin-right: 4rem;
    margin-top: 4rem;
    background-color: brown;
 }
 .veg a,.non-veg a{
    
    font-size: 4rem;
    text-decoration: none;
    color: black;
 }
 .type{
    /* display: flex; */
 }
 .copyright{
    width:100%;
    text-align:center;
    /* padding:25px 0; */
    font-weight: 400;
     height:0.5rem;
     margin-top:12rem;
}
.copyright {
    color:brown;
}

  @media(max-width:998px){
         html{
            font-size: 55%;
         }
  }
 
      </style>
</head>

    <body>
    <nav class="navbar">
        <!-- <div class="logo">
            <img src="logo.jpg">
        </div> -->
        <img  src="logo22.png" height="80"></img>
        <div class="nav-items">
            <a href="index1.php">Home</a>
            <a href="catalogue2.html">catalogue</a>
            <a href="login.php">Login</a>
            <a href="registration.php">sign up</a>
            <a href="mycart.php">My cart</a>
      </div>
      </nav>
      <h1 id="type"></h1>
      <script>
        let name=['T','a','s','t','y',' ',' ','B','i','t','e','s'];
        var index=0;
        typeBody= document.getElementById("type");
        function addLetter()
        {
            span=document.createElement("span");
            span.textContent=name[index];
            index++;
            typeBody.appendChild(span);
            if(index>name.length)
            {
                clearInterval(interval);
            }
        }
        interval=setInterval(addLetter,100);
      </script>


    <div class="type">
      <div class="veg">
        <a href="dishlist.html">VEGETARIAN</a>
      </div>
      <div class="non-veg">
        <a href="dishlist2.html">NON-VEGETARIAN</a>
    </div>

    <div class="copyright">
        <p>Copyright © 2023 All rights reserved </p>
     </div>


      <!-- <div class="rest"></div> -->
      </body>
      </html>