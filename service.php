<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "../New folder (2)/Air logo/2.png" type = "image/x-icon">
    <title>Online Flight Booking Management System</title>
   
</head>
<style>
	*{
    margin: 0;
    padding: 0;
}
.main{
    background-image:url(C:\xampp\htdocs\Online Flight Booking Management System\IMG\3.jpg);
}

body{
		width: 100%;
		background-image:url(C:\xampp\htdocs\Online Flight Booking Management System\IMG\3.jpg);
		background-position: center;
        background-size: cover;
        height: 100vh;
	}

.navbar{
    width: 1910px;
    height: 70px;
    margin: auto;
}
.icon{
    width: 600px;
    float: left;
    height: 70px;
}
.logo{
    color: #ff7200;
    font-size: 20px;
    font-family: serif;
    padding-left: 10px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}
.menu{
    width: 450px;
    float: left;
    height: 70px;
}
ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}
ul li{
    list-style: none;
    margin-left: 110px;
    margin-top: 25px;
    font-size: 17px;
}
ul li a{
    text-decoration: none;
    color: #ff7300;
    font-family: Georgia;
    font-weight: bold;
    transition: 0.9s ease-in-out;
}
ul li a:hover{
    color: #ffffff;
}
.search{
    width: 300px;
    float: left;
    margin-left: 550px;
}
.srch{
    font-family: 'Times New Roman';
    width: 150px;
    height: 30px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 20px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}
.btn{
    width: 80px;
    height: 30px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 20px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}
.btn:focus{
    outline: none;
}
.srch:focus{
    outline: none;
}
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #000;
    position: relative;
}
.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}
.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}
.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-family: Georgia;
    font-weight: bold;
    font-size: 20px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}
.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}
.cn:hover{
    background-color: rgb(255, 255, 255);
}
.content span{
    color: #00ccff;
    font-size: 65px
}

</style>

<body>
<div class="main">

     <div class="navbar">
        <div class="icon">
            <h2 class="logo">Online Flight Booking <br> Management System</h2>
        </div>

        <div class="menu">
            <ul>
                <li><a href="./Index.html">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="../Online Flight Booking Management System/admin/login.php">ADMIN </a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type To text">
            <a href="#"> <button class="btn">Search</button></a>
        </div>

        </div>
    <div class="content">
        <h1><span>Welcome To, </span><br>Online Flight Booking<br> Management System</h1><br><br>
        <p class="par"><h3>Online Flight Booking Management System can save time and money for both the user
            <br> and the airline company by creating a more user-friendly environment.<br> This project
            attempts to recreate the fundamental concepts of the booking system for airlines.<br><br></h3></p>

            <button class="cn"><a href="./Registration.php">JOIN US</a></button>

</div>

</body>
</html>