<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>HelloWorld</title>

<!-- Le styles -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<style>
body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
<link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
<a class="brand" href="/">Regacy</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li class="active"><a href="/">Home</a></li>
<?php if(false): ?>
<li><a href="/user">My Page</a></li>
<?php else:?>
<li><a href="/user/login.php">Login</a></li>
<?php endif;?>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>

<div class="container">

<h1>ようこそレガシーなphpサイトへ</h1>
<p>さっさとフレームワークを使いな！</p>
<p>ログインは<a href="/user/login.php">こちら</a></p>

</div> <!-- /container -->
</body>
</html>
