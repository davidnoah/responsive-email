

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php
      $results = $wpdb->get_results( 'SELECT * FROM wp_teamsummary' );
      if (count($results) == 0) {
        $wpdb->insert('wp_teamsummary', array(
          'summary' => $_POST["team_summary"],
          'name' => "eaze"
        ));
      } else {
        $wpdb->update('wp_teamsummary', array(
          'summary' => $_POST["team_summary"]),
          array('name' => 'eaze'));
      }

      ?>
      <h2>You have successfully changed the team summary!</h2>
      <a href="../team/">Go back</a>

		</main><!-- #main -->
	</div><!-- #primary -->
