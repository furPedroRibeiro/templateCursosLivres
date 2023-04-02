
      <?php
      get_header();
  ?>
  <main class="main">
      <div class="posts">
          <?php
              if(have_posts()){
                  while(have_posts()){
                      the_post();
          ?>
              <h2><?php the_title();?></h2>
              <h3><?php the_category();?></h3>
              <div class="img">
                  <?php the_post_thumbnail();?>
              </div>
              <p><?php the_content();?></p>
          <?php
                  }//fim do while
              }//fim do if loop wordpress
          ?>
      </div>
  <footer>

  </footer>
  
  <?php
      get_footer();
  ?>
