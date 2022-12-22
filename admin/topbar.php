<style>
	.logo {
    margin: auto;
    font-size: 200px;
    background: #ff7300;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #ff7300;
}
</style>

<nav class="navbar navbar-light fixed-top bg-success" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<!-- <div class="logo">
  				<span class="fa fa-plane-departure"></span>
  			</div> -->
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>Online Flight Booking System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>