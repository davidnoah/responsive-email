<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
  <?php if( current_user_can( 'manage_options' ) ) { ?>
    <form class='summary-form' action="../form/" method="post">
			<input type="hidden" name="team_action" value="summary_change">
      Create or Change the Team Summary <textarea class="input" id="summary-change" type="textarea" name="team_summary"></textarea>

      <input class='summary-button' type="submit">
    </form>
    <?php  } ?>
		<main id="main" class="site-main" role="main">
      <div class='summary-container'>
        <h2 class="summary-title">Summary</h2>
        <?php $summary = $wpdb->get_results("SELECT * FROM wp_teamsummary WHERE name = 'eaze'" );?>
        <p class="summary"><?php echo $summary[0]->summary; ?></p>
      </div>
      <form class="member-form" action='../form/' method="post">
        Name <input class="input" type="text" name="member_name" >
        Title <input class="input" type="text" name="member_title" >
        Photo URL <input class="input" type="text" name="member_photo" >
        Description <input id="lower-input" class="input" type="text" name="member_description" >

				<input type="hidden" value="team_insert" action="team_action">

        <input type='submit' value="Create">
      </form>

      <div class="team-list-container">
      <?php $team = $wpdb->get_results("SELECT * FROM wp_teammembers"); ?>
          <?php foreach ($team as $member) { ?>
            <div class=team-member>
              <div class="member-container">
                <img class="team-pic" src=<?php echo $member->photo;?> height=50 width=50>
                <div class="inner-member">
                  <h3 class="member"><?php echo $member->name;?></h3>
                  <p class="member"><?php echo $member->title;?></p>
                </div>
              </div>
              <div class="right">
                <p class="member"><?php echo $member->description; ?></p>
                <form class="delete" method="post" action='../form/'>
                  <input type="hidden" value=<?php echo $member->id;?> name="team_id" />
									<input type="hidden" value='team_delete' name="team_action">

                  <input class="delete-button" type="submit" value="Delete">
                </form>
              </div>
            </div>
          <?php } ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
