<footer class="content-info" role="contentinfo">
    <div class="col-lg-12 text-center">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <small>&copy; <?php echo date('Y'); ?> <span class="glyphicon glyphicon-globe"></span> <?php bloginfo('name'); ?></small> <br>
      <small><?php wp_loginout(); ?>. SF</small>
    </div>
</footer>

<?php wp_footer(); ?>
