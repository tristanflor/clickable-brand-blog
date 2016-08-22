<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo BASE_URL;?>assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Post Blog</h1>
                        <hr class="small">
                        <span class="subheading">Create a blog post</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
	<form action="<?php echo BASE_URL; ?>blog/create" method="post">
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Title"/>
	  </div>
      <div class="form-group">
        <label for="subtitle">Sub-title</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter brief subtitle"/>
      </div>
	  <div class="form-group">
	  	<label for="content">Content</label>
	    <textarea class="form-control" id="body" name="body" placeholder="Type blog content" rows="10" /></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Post</button>
	</form>
</div>