<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo BASE_URL;?>assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Login</h1>
                        <hr class="small">
                        <span class="subheading">Login to get started posting</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
	<form action="<?php echo BASE_URL; ?>login/auth" method="post">
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username"/>
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"/>
	  </div>
	  
	  <button type="submit" class="btn btn-default">Login</button>
	</form>
</div>