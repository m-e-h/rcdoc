<?php
global $post;

    $children = wp_list_pages(array(
        'post_type'=> get_post_type(),
        'child_of'     => $post->ID,
        'echo' => 0,
        'depth' => 1,
        'title_li'=> ''
    ));

  //$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
  if ($children) { ?>
      <button id="menu-<?php the_ID(); ?>" class="btn btn--tiny round mdl-js-button">
          <i class="material-icons">more_vert</i>
      </button>
      <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" for="menu-<?php the_ID(); ?>">
          <?php echo $children; ?>
      </ul>
  <?php }
