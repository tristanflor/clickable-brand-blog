<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo BASE_URL;?>assets/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $this->blog_post['title'];?></h1>
                        <h2 class="subheading"><?php echo $this->blog_post['subtitle'];?></h2>
                        <span class="meta">Posted by <a href="#"><?php echo $this->blog_post['firstname'].' '.$this->blog_post['lastname']?></a> on <?php echo date('F d, Y', strtotime($this->blog_post['create_date']));?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php echo $this->blog_post['body'];?>
                    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $this->blog_post['creator_id']):?>
                    <p><a class="btn btn-default mt-15" href="<?php echo BASE_URL?>blog/edit/<?php echo $this->blog_post['id']?>">Edit Blog</a></p>
                    <?php endif; ?>
                </div>
            </div>
            <hr/>
            <?php if(isset($this->comments)): ?>
                <?php foreach($this->comments as $comment): ?>
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 comment-row">
                        <strong><?php echo $comment['comment']?></strong><br/>
                        <span class="meta comment-meta"><em><a href="#"><?php echo $comment['firstname'].' '.$comment['lastname']?></a> on <?php echo date('F d, Y H:i:s', strtotime($comment['create_date']));?></em></span>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): ?>
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <form action="<?php echo BASE_URL?>/blog/comment" method="post">
                    <input type="hidden" name="blog_id" value="<?php echo $this->blog_post['id'];?>">
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" id="comment" name="comment" placeholder="Type comment" rows="6" /></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Post Comment</button>
                    </form>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </article>

    <hr>