<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stony_Brook_Web
 */

?>

	</div><!-- #content -->

<div class="container">
  <footer>
    <div class="row">
      <hr>
      <div class="col-xs-12 footer">
        <p>
        <?php bloginfo( 'name' ); ?> <i class="fa fa-copyright" aria-hidden="true"></i>
        <a href="https://www.linkedin.com/in/alana-martin-84561233" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/stonybrookweb" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://github.com/stonybrookweb" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
        </p>
      </div>
    </div>
  </footer>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71018654-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
