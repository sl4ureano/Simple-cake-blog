<!-- File: /app/View/Posts/view.ctp -->

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $post['Post']['title']?></h1>
              <h2 class="subheading"></h2>
              <span class="meta">Posted by
                <a href="#">Author</a>
                on <?php echo $post['Post']['created']?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $post['Post']['body']?>         
            </div>
        </div>
      </div>
    </article>

    <hr>