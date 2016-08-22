<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo BASE_URL;?>assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Edit Blog</h1>
                        <hr class="small">
                        <span class="subheading">Edit your blog post</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
	<form action="<?php echo BASE_URL; ?>blog/save" method="post">
        <input type="hidden" name="blog_id" value="<?php echo $this->blog_post['id']?>" >
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $this->blog_post['title']?>" />
	  </div>
      <div class="form-group">
        <label for="subtitle">Sub-title</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter brief subtitle" value="<?php echo $this->blog_post['subtitle']?>" />
      </div>
	  <div class="form-group">
	  	<label for="content">Content</label>
	    <textarea class="form-control" id="body" name="body" placeholder="Type blog content" rows="10" />
          <?php echo $this->blog_post['body']?>   
        </textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Post</button>
	</form>
</div>