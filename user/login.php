<?php
require_once '../lib/auth.php';
if(Auth::is_login()):
    header('Location: ./');
    exit;
endif;

$user_id    = '';
$error      = null;
if($_SERVER['REQUEST_METHOD'] === 'POST'):
    if($_POST['user_id']   === 'sample' && $_POST['password'] === 'sample'):
        Auth::do_login();
        header('Location: ./');
        exit;
    else:
        $user_id    = htmlspecialchars($_POST['user_id'], ENT_QUOTES, 'utf-8');
        $error      = 'id か passwordが間違ってます';
    endif;
endif;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>HelloWorld</title>

<!-- Le styles -->
<link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../assets/css/login.css" rel="stylesheet">
<link href="../assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#login").popover({
            placement:"right",
            trigger:"hover",
            title:"id:sample",
            content:"pass:sampe"
        });
    });
</script>
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
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>

<div class="container">
    <form class="form-signin" id="login" action="./login.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="user_id" class="input-block-level" placeholder="your account" value="<?php echo $user_id ?>">
        <input type="password" name="password" class="input-block-level" placeholder="password">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <br />
        <span class="text text-error"><?php echo $error;?></span>
    </form>
</div>
</body>
</html>
