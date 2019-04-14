<?php
	// connect to mysql
	require "config.php";

	//getting all posts
	function getPosts() {
		global $db;
		$get_posts = mysqli_query( $db, "SELECT author, content, created_at FROM posts ORDER BY id DESC" );
		if ( mysqli_num_rows( $get_posts ) > 0 ) {
			while ( $row_posts = mysqli_fetch_array($get_posts) ) {
				$post_author = $row_posts['author'];
				$post_content = $row_posts['content'];
				$post_date = $row_posts['created_at'];
				$post_length = strlen($post_content);

				echo "<div class='post-wrapper'>
								<div>
									<h3 class='w3-text-blue'>TITLE HEADING</h3>
									<h6><span class='w3-opacity'>Posted: $post_date</span> | <span class='w3-text-orange'>By: $post_author<span><h6>
								</div>";

				if ($post_length > 402) {
					echo "<div class='short-post'>
									<p>$post_content</p>
									<div class='gradientback'></div>
								</div>
								<p class='w3-text-blue'>
									<a href=''#'>[Read More]</a>
								</p>
							</div>
								<hr>";
				} else {
					echo "<p>$post_content</p>
							</div>
									<hr>";
				}
			}
		}
	}


?>
