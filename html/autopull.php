<?php
if ( $_POST['payload] ) {
shell_exec( 'cd /var/www/ && git pull origin master' );
}
?>
