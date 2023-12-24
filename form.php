<?php
include("connection.php");

if(isset($_POST['btn1']))

{
   $fname = $_POST['name'];
   $fname1= $_POST['phone'];
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = $_POST['password'];
   $fname2= $_POST['pnmae'];
   $fname3= $_POST['guest'];
   $fname4= $_POST['date'];
   $fname5= $_POST['dt2'];

   
	
	$select ="SELECT * FROM user_form WHERE email ='$email' && password='$password'";
	
	$result = mysqli_query($conn, $select);
	
		
	if(mysqli_num_rows($result) > 0)
	{
	  $qury ="INSERT INTO `sas`(`fname`, `fname1`, `email`, `password`, `fname2`, `fname3`, `fname4`, `fname5`) VALUES ('$fname','$fname1','$email','$password','$fname2','$fname3','$fname4','$fname5')";
       mysqli_query($conn,$qury);
	   header('location:pdf.php');
	}
	else
	{
	  $error[]='make sure that you are Registered...!';
	}

  
  
 

}

?>
<style>
        *{
            margin: 0;
            padding: 0;
        }
		
       .heading
    {
        background-image:linear-gradient(rgba(4,9,35,0.4),rgba(4,9,35,0.2)), url(bb.png);
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
        color:red;
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
}   </style>
</head>
<body>
    <div class="heading">
        <h1>BOOK YOUR JOURNEY WITH SAS</h1>
        </div> 
        <!----------------------------------booking section-------------------------------------------->
        <section class="book">
            <h1 class="heading1">
                <span>B</span>
                <span>O</span>
                <span>O</span>
                <span>K</span>
                <span class="space"></span>
                <span>N</span>
                <span>O</span>
                <span>W</span>
            </h1>
		
            <!-------body section-->
            <div class="row">
             <div class="img1">
                <img src="aa1.png" alt="">
             </div>
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
                    <h3>Phone </h3>
                    <input type="" name="phone" placeholder="Mobile number">
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
                    <h3>Where to</h3>
                    <input type="text" name="pnmae" placeholder="Place Name">
                </div>
                <div class="inp-box">
                    <h3>How many</h3>
                    <input type="text" name="guest" placeholder="number of guest">
                </div>
                <div class="inp-box">
                    <h3>Arrivals</h3>
                    <input type="date" name="date">
                </div>
                <div class="inp-box">
                    <h3>Leaving</h3>
                    <input type="date" name="dt2">
                </div>
                <input type="submit" class="btn" value="BOOK NOW" name="btn1">
                
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
<!--------------------------PHP------------>
