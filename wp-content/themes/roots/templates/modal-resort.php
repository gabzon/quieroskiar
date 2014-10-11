<?php
  $post_id = $_GET['ID'];
  $queried_post = get_post($post_id);
  $title = $queried_post->post_title;
?>
<div class="modal" id="my_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><?php the_title(); ?></h4>
      </div>
      <div class="modal-body">

      <?php get_template_part('templates/single','resort'); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href="<?php the_permalink(); ?>">Open</a>
      </div>
    </div>
  </div>
</div>
