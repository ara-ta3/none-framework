<?php
require_once '../lib/auth.php';
/* ログイン状態でないならredirect */
if(!Auth::is_login()):
    header('Location: ../');
    exit;
endif;
/* ここでDBから呼び出し */
$username   = 'sample_user';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>HelloWorld</title>

<!-- Le styles -->
<link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<style>
body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
<link href="../assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="../">Regacy</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li><a href="../">Home</a></li>
<li class="active"><a href="./">My Page</a></li>
<li><a href="./logout.php">Logout</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>

<div class="container">

<div class="hero-unit">
<h2>こんにちは、<?php echo $username?>さん</h2>
</div>
<div class="row">
</div>

</div>
</body>
</html>
