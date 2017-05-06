<?php
  echo '@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@';
  get_template_part('content', get_comments());
    if($post -> comment_count != 0) :
      foreach (get_comments() as $comment) :
        echo $comment -> comment_content;
        echo $comment -> comment_author;
        echo apply_filters('comment_text', $comment -> comment_content);
      endforeach;
    else :
      echo "<b>";
      echo 'There are no comments to display here.';
      echo "</b>";
    endif;
    echo "<br>";
    echo "<br>";

?>
