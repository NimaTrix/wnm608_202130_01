<? 
inclued_once "../lib/php/functions.php";

$filename = "../data/users.json";
$users = getFileData($filename);

Function showUserPage($user) {
	$classes = implode(",",$user->classes);
//heredoc

echo <<<HTML
<div><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type: </strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email: </strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes: </strong>
		<span>$classes</span>
	</div>
</div>


HTML;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin</title>
	<? include "parts/meta.php" ?>
</head>
<body>
	<header>
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>User Admin</h1>
			</div>
			<nav class="nav">
				<ul>
					<li><a href="{$_SERVER['PHP_SELF']}">List</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="card-basic">
			<?
			 	if(isset($_GET['id'])) {
			 		showUserPage($users[$_GET['id']])
			 	} else {
			 	?>
			 	<h2>User List </h2>
			 	<nav class="nav">
			 		<ul>
			 			<?
			 			foreach($users as $id=>$user) {
			 				echo"<li><a herf ='?id'>$user->name</a></li>";
			 			}
			 			?>
			 		</ul>
			 	</nav>
			 <? } ?>
		</div>
	</div>
</body>
</html>