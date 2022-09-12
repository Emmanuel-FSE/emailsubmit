<?php
/* ------------------------------------------------------------------
   STUFF YOU NEED TO CHANGE FOR YOUR SPECIFIC FORM
--------------------------------------------------------------------*/

// Specify the form field names your form will accept
$whitelist = array( 'name', 'email', 'message');

// Set the email address submissions will be sent to
$email_address = 'emmanuelmutisya254@gmail.com';

// Set the subject line for email messages
$subject = 'New Contact Form Submission';

// Table name
$table = 'PersonalData';

// Database name
define( 'DB_NAME', 'email' );

// Database username
define( 'DB_USERNAME', 'root' );

// Database password
define( 'DB_PASSWORD', 'Bornchamp30' );

// Database host
define( 'DB_HOST', 'localhost' );
