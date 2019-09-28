<?php
if ($_POST['ok'] = 1){
setcookie("user", '', time()-999999, "/");
echo 'Успешно <meta http-equiv="refresh" content="0">';
exit();
}
