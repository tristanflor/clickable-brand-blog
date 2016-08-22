<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo BASE_URL;?>assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>User Registration</h1>
                        <hr class="small">
                        <span class="subheading">Create your account to get started</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
	<form action="<?php echo BASE_URL; ?>login/save" method="post">
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" name="username" placeholder="Enter desired username"/>
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"/>
	  </div>
	  <div class="form-group">
	    <label for="password">Confirm Password</label>
	    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password"/>
	  </div>
	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" id="username" name="email" placeholder="Enter email"/>
	  </div>
	  <div class="form-group">
	    <label for="first_name">First Name</label>
	    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name"/>
	  </div>
	  <div class="form-group">
	    <label for="last_name">Last Name</label>
	    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name"/>
	  </div>
	  
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>