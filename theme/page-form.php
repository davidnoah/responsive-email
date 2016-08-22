

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php
			if ($_POST['team_action'] == 'team_insert') {
	      $wpdb->insert('wp_teammembers', array(
	        'name' => $_POST["member_name"],
	        'title' => $_POST["member_title"],
	        'photo' => $_POST["member_photo"],
	        'description' => $_POST["member_description"]
	      ));
		 } elseif ($_POST['team_action'] == 'summary_change' ) {
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

		} else {
			 $wpdb->delete('wp_teammembers', array('id' => $_POST['team_id']));
		 }


	    ?>
      <h2>Success!</h2>
      <a href="../team/">Go back.</a>
		</main><!-- #main -->
	</div><!-- #primary -->
