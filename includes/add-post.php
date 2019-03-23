<?php
	// connect to mysql
	require_once('config.php');

	if (isset($_POST['formSubmit'])) {

		$name = test_input($_POST['name']);
		$content = test_input($_POST['content']);

		$post_author = mysqli_real_escape_string($db, $name);
		$post_content = mysqli_real_escape_string($db, $content);

		$post_query = "INSERT INTO posts (author, content, created_at, updated_at) VALUES ('$post_author', '$post_content', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

		$insert_post = mysqli_query($db, $post_query) or die( mysql_error());

		if ( $insert_post ) {
			echo "<script>alert('新規投稿を保存しました。')</script>";
			echo "<script>window.open('../index.php','_self')</script>";
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
