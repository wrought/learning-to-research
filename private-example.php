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

add_filter( 'p2be_email_replies_enabled', '__return_true' );
add_filter( 'p2be_emails_reply_to_email', function( $email ) {
    return 'YOURACCOUNT@gmail.com';
});
add_filter( 'p2be_imap_connection_details', function( $details ) {

    $details['host'] = '{imap.gmail.com:993/imap/ssl/novalidate-cert}';
    $details['username'] = 'YOURACCOUNT@gmail.com';
    $details['password'] = 'PASSWORD';

    return $details;
} );

?>
