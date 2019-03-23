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

				echo "<div>
								<h6><span class='w3-opacity'>Posted: $post_date</span> | <span class='w3-text-orange'>By: $post_author<span><h6></div>
							<p>$post_content</p>";
			}
		}
	}


?>
