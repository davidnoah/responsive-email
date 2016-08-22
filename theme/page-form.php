

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php

      $wpdb->insert('wp_teammembers', array(
        'name' => $_POST["member_name"],
        'title' => $_POST["member_title"],
        'photo' => $_POST["member_photo"],
        'description' => $_POST["member_description"]
      ));

      ?>
      <h2>You have successfully added a team member!</h2>
      <a href="../team/">Go back.</a>
		</main><!-- #main -->
	</div><!-- #primary -->
