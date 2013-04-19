<?php
require_once '../lib/auth.php';
Auth::do_logout();
header('Location: ../');
exit;
