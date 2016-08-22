<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo BASE_URL;?>assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php if(isset($this->blog_posts)): ?>
                <?php foreach($this->blog_posts as $blog_post): ?>
                <div class="post-preview">
                    <a href="<?php echo BASE_URL;?>blog/view/<?php echo $blog_post['id'];?>">
                        <h2 class="post-title">
                            <?php echo $blog_post['title'];?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $blog_post['subtitle'];?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo $blog_post['firstname'].' '.$blog_post['lastname']?></a> on <?php echo date('F d, Y', strtotime($blog_post['create_date']));?></p>
                </div>
                <hr>
                <?php endforeach; ?>
            <?php endif;?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>