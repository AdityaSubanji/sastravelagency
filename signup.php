<?php

 include("dbconnect.php");

if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = $_POST['password'];
	$cpassword= $_POST['cpassword'];
	
	
	$sql ="Select * from user_form where email ='$email' and password='$password'";
	
	$result = mysqli_query($conn,$sql);
	
		
	if(mysqli_num_rows($result) > 0)
	{
		$error[] = 'user already exists!';
		
	}
	else 
	{
		if($password!= $cpassword)
		{
		 $error[] = 'password not match!';
        }
	
		else
			
		{
				
		$insert="INSERT INTO `user_form`(`name`, `email`, `password`, `cpassword`) VALUES ('$name','$email','$password','$cpassword')";
		
		mysqli_query($conn,$insert);
		header('location:login.php');
	    }
	}
};

?>

<html lang="en">

<head>
   
    <style>
        *{
            margin: 0;
            padding: 0;
        }
		
       .heading
    {
        background-image:linear-gradient(rgba(4,9,35,0.4),rgba(4,9,35,0.2)), url(Aproject/bb.png);
        background-size: cover;
      
        background-position: center;
        padding-top: 8rem;
        padding-bottom:4rem; ;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .heading h1{
        font-size: 5rem;
        color:yellow;
       text-align: center;
    }
    /*----book section*/
    .heading1
    {
        text-align: center;
        padding: 1rem 0;
        margin-top: 3rem;
		margin-bottom: -4rem;
		
       
    }
    .heading1 span
    {
        font-size: 5rem;
       background:rgba(255, 165, 0,.2) ;
        color:orange;
        border-radius:0.5rem; 
        padding: 6px 6px;
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
    }
    .heading1 span.space
    {
        background: none;
    }
    /*--------body-----------------*/
    .book .row
    {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        align-items: center;
       
       
    }
    .book .row .img1
    {
        flex: 1 1 40rem;
       
      

    }
    .book .row .img1 img
    {
        width: 100%;
        
      
    }
    .book .row form
    {
        flex: 1 1 30rem;
        padding: 2rem;
        box-shadow: 0 1rem 2rem rgba(0, 0,0,.1);
        border-radius: .5rem;
       margin-top: 8rem;
	   margin-left:15rem;
        }
		
    .book .row form .inp-box{
        padding: .5rem 0;
       
    }
    .book .row form .inp-box input
    {
        width: 80%;
        padding: 1rem;      
        margin-right: 3rem;
        border-radius: .2rem;
        font-size: 1rem;
       transition: .6s;
    } 
    .book .row form .inp-box input:hover
    {
       box-shadow: 2px 2px 20px black;
    }
    .btn
    {
        background:orange;
        color: white;
        border-radius: 5px;
        width: 120px;
        padding:9px;
        cursor: pointer;
        border: 0;
        font-weight: bold;
        transition: .5s;
       margin-top: 1rem;
    }
    .btn:hover
    {
        background:white;
        color: orange;
    }
	
	.book .row form p a 
	{
	  color:crinson;	
	}
	
	.row form .error-msg
	{
		margin:10px 0;
		display:block;
		background:crimson;
		color:#fff;
		border-radius:5px;
		font-size:20px;		
	}
	
	
	
	
	
	
/*----------------------footer----------------*/
   .footer
{
    width:88.1%;
    height: 115px;
    padding: 30px 90px;
    margin: 0;
    background: #484872;
    text-align: center;
}
.footer p
{
    color: whitesmoke;
    margin-right: 15rem;
    padding: 25px auto;
	margin-left: 15rem;
}
.footer h2{
    color: whitesmoke;
    text-align: center;
    margin-right: 15rem;
	margin-left: 15rem;
}

    </style>
</head>
<body>

    <div class="heading">
        <h1>REGISTER HERE</h1>
        </div> 
        <!----------------------------------booking section-------------------------------------------->
        <section class="book">
            <h1 class="heading1">
                <span>R</span>
                <span>E</span>
                <span>G</span>
                <span>I</span>
                <span>S</span>
                <span>T</span>
                <span>R</span>
                <span>A</span>
				<span>T</span>
				<span>I</span>
				<span>O</span>
				<span>N</span>
				
            </h1>
            <!-------body section-->
            <div class="row">
             
             <form action="" method="post">
			 
			 <?php
			 
			 if(isset($error))
			 {
				 foreach($error as $error)
				 {
					 echo '<span class="error-msg">'.$error.'</span>';
				 };
			 };
			 
			 
			 ?>
			 
                <div class="inp-box">                    
                 <h3>Name</h3>
                    <input type="text" name="name" placeholder="Enter your Name">
                </div>
				
				
				<div class="inp-box">                    
                 <h3>Email</h3>
                    <input type="text" name="email" placeholder="Enter your Email">
                </div>
				
				
                <div class="inp-box">
                    <h3>Password</h3>
                    <input type="text"  name="password" placeholder="Password">
                </div>
                
				<div class="inp-box">
                    <h3>Confirm password</h3>
                    <input type="text" name="cpassword" placeholder="Confirm Password">
                </div>
				
				
				
                <input type="submit" name="submit" class="btn" value="REGISTER NOW">
				

             </form>

            </div>
            <div class="footer">
                <h2>ABOUT US</h2>
            <p>123 Fifth Avenue ,NY10106,GOKAK,INDIA|PHONE:800-123-456|Email:sas154@gmail.com</p>
            <p> COpyright@2023 Outdoor SAS</p>
            </div>
        </section>
</body>
</html>