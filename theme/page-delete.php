<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php

    $wpdb->delete('wp_teammembers', array('id' => $_POST['team_id']));

    ?>
    <h2>RIP team member!</h2>
    <a href="../team/">Go back.</a>
  </main><!-- #main -->
</div><!-- #primary -->
