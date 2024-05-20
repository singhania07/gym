<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitness</title>
    <script src="gymscript.js" type="text/javascript">
      </script>
</head>
 <style>
        body{
        margin: 0px;
        padding: 0px;
        background-image: url(bg3.jpg);
        background-size: cover;
        overflow: hidden;
     }
     .left{
        left: 34px;
        top:20px;
     }
     header{
      display: flex;
      flex-direction: row;
      justify-content: center;
      background-color: rgba(0,0,0, 0.8);
     }
     .mid{
        margin: 20px auto;
        font-family: 'Trebuchet MS';
     }

     .right{
      margin-right:20px;
      margin-left:30px;
      margin-top: 28px;
     }

     .right button{
      border: none;
     }
   
     .navbar{
        display: flex;
        flex-direction: row;
     }

     .navbar li{
        display: flex;
        font-size: 15px;
     }

     .navbar li a{
        color: white;
        text-decoration: none;
        margin-left: 20px;
        margin-right: 20px;
        font-size: medium;
        font-size: large;
        font-weight: bold;

     }
     .navbar li a:hover, .navbar li a.active{
        text-decoration: none;
        color : grey;
        
     }
     .btn{
      font-family: 'Trebuchet MS';
      background-color: black;
      color: white;
      padding: 3px 4px;
      border: 2px solid grey;
      border-radius: 10px;
      font-size: 20px;
      cursor: pointer;
     }
     .btn:hover{
      background-color: grey;
     }
      h2{
         color: white;
      }

     .container{
      text-align: center;
      border: 2px solid white;
      margin: 106px 80px;
      padding: 75px;
      width: 33%;
      border-radius: 28px;
      float:right;
      background: rgba(0,0,0, 0.8);/* for background opacity */
     }

     
     .form-group input{
      font-family: 'Trebuchet MS';
      text-align: left;
      display: block;
      width: 508px;
      padding: 5px;
      border: 2px solid black;
      margin: 3px auto;
      font-size: 25px;
      border-radius: 0px;
     }

     
    </style>
<body>
     <header class="header" >
        <div class="left">
         <h1 style="margin: 20px; color: grey;">Fitness | Gym</h1>
        </div>
        <div class="mid">
            <ul class="navbar">
              <li><a href="#" class ="active">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Fitness Calculator</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>

        </div>
        <div class="right">
          <button class="btn">Call us now</button>
          <button class="btn">Email us</button>
        </div>
     </header>
     <div class="container">

      <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">JOIN THE BEST GYM NOW</h2>

      <form  method="POST" action="action.php" style="margin-top: 20px">
         <div class="form-group">
            <input type="text" name="username"  placeholder="Enter your name" required /> 
         </div>
         <div class="form-group">
           <input type="number" name="age" placeholder="Your age" required />
         </div>
         <div class="form-group">
            <input type="text" name="gender" placeholder="Gender" required />
          </div>
          <div class="form-group">
            <input type="text" name="locality" placeholder="Your Locality"  />
          </div>
          <div class="form-group">
            <input type="email" name="mail_id" placeholder="Email-ID" required/>
          </div>
         <button type="submit" class="btn" style="width: 100%;margin-left:5px ;margin-right: 5px;" >
            Apply for Membership
         </button>
      </form>

     </div>
</body>
</html>