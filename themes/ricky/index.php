<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title> Ricky's Theme </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <font face="Source Sans Pro">
    <?php wp_head(); ?>
  </head>
  <div id="theMenu">
    <?php wp_nav_menu(array(
        'HOME' => 'my-custom-menu'
    )); ?>
  </div>


  <body>
    <div class="container col-sm-12" id="firstContainer">
      <?php get_header(); ?>
    </div>

    <div class="container col-sm-9" id="secondContainer">
      <?php
        if(have_posts()) : while(have_posts()) : the_post();
          get_template_part('content', get_post_format());
          $haveComments = have_comments();
          echo $haveComments;
          echo '#########';
          // if(comments_open() || get_comments_number()) :
          //   comments_template();
          // endif;
        endwhile; endif;
        echo '<br><br>';
      ?>
      <?php get_footer(); ?>
    </div>



    <div class="container col-sm-3" id="thirdContainer">
      <div class="blog-sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>

  </body>
</html>
