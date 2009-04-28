<?php
/**
 * Logs the user out and revokes the cookie.
 */

// redirect to login
header('Location: ?action=login');