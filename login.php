<?php

 include("dbconnect.php");

if(isset($_POST['submit']))
{
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = $_POST['password'];
	
	
	$select ="SELECT * FROM user_form WHERE email ='$email' && password='$password'";
	
	$result = mysqli_query($conn, $select);
	
		
	if(mysqli_num_rows($result) > 0)
	{
	  header('location:package.html');
	}
	else
	{
	  $error[]='inncorrect email or password!';
	}
}
?>
<head>
  
    <title>Log-in Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        section {
            background-image:linear-gradient(rgba(4,9,30,0.2),rgba(4,9,30,0.7)),url('loginb.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 500px;
            padding: 60px;
            margin: 20px auto;
            transform: translate(-50%, -55%);
            background: transparent;
            backdrop-filter: blur(7px);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 20px;
        }

        .login-box .b:first-child
		{
           
            margin: 0 0 30px;
            padding: 0;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color:white;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid orange;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
           
            font-style:italic;
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16p;
            color: white;
            pointer-events: none;
            transition: .5s;
        }

      
  .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label
    {
            top: -20px;
            left: 0;
            color:white;
            font-size: 12px;
        }

        
		
		.a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            color: orange;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 3px;
        }

        .a:hover {
            transform: scale(1.1);
            box-shadow: 0 0 24px 0;
        }
		
		
		
		.login-box form form p a 
	{
	  color:crinson;	
	}
	
	
	.login-box form .error-msg
	{
		margin:10px 0;
		display:block;
		background:crimson;
		color:#fff;
		border-radius:5px;
		font-size:20px;		
	}
    </style>
</head>

<body>
                     
    <section>
	
        <div class="login-box">
		<div class="b">Login</div>
		
		<?php
			 
			 if(isset($error))
			 {
				 foreach($error as $error)
				 {
					 echo '<span class="error-msg">'.$error.'</span>';
				 };
			 };
			 
			 
			 ?>
			 
           
			
            <form action="" method="post" >
                <div class="user-box">
                    <input required="true" name="email" type="text">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input required="true" name="password" type="text">
                    <label>Password</label>
                </div>
                  <input name="submit" type="submit" class="a">   
				<div></div>
                 
				 
            </form>
        </div>
    </section>


</body>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap'); 
</style>
</html>