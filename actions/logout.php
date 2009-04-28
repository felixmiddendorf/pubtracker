<?php
/**
 * Logs the user out and revokes the cookie.
 */

// revoke the cookie
setcookie('token','',-3600);
// redirect to login
header('Location: ?action=login');