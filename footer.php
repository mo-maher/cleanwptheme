</main>
</div>

</div>

<?php get_sidebar(); ?>
<footer id="footer" role="contentinfo">
  <div id="copyright">
    &copy; <?php echo esc_html(date_i18n(__('Y', 'cleanwptheme'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
  function menuFunction() {
    var x = document.getElementById("menu-toggle");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>


</body>

</html>