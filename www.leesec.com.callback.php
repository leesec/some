

<?php
$callback=htmlspecialchars($_GET['callback']);
echo '<script>'.$callback.'();'.'</script>';
?>
