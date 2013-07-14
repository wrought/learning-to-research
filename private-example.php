<?php

/**
 * Copy this file to `private.php` and change the values below
 */

/**
 * Credentials for p2-by-email plugin
 *
 * Instructions:
 * 1. Register a Gmail or similar email account that supports IMAP.
 * 2. Add the code snippet below with account details to your theme's functions.php file.
 *    It tells P2 By Email that you're set up to use post or reply by email.
 * 3. Install wp-cli and set up a system cron job to regularly call wp p2-by-email ingest-emails.
 *
 */

$p2be_details['host'] = '{imap.gmail.com:993/imap/ssl/novalidate-cert}';
$p2be_details['username'] = 'USERNAME@gmail.com';
$p2be_details['password'] = 'PASSWORD';

?>
