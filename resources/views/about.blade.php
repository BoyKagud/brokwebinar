<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>ABOUT US</h1>
	<div>
		<div>
			Posts:
		</div>
		<?php foreach($posts as $post) : ?>
			<div style="background-color: #e0e0e0; width: 50%; padding: 12px; margin: 8px;">
				<center>
					<div>
						{{ $post["user"] }}
					</div>
					<div>
						{{ $post["created_at"] }}
					</div>
				</center>
				<div>
					{{ $post['content'] }}
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>