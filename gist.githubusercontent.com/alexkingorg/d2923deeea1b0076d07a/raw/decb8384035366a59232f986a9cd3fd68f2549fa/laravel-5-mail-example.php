<?php

// note, to use $subject within your closure below you have to pass it along in the "use (...)" clause.
$subject = 'Welcome!';

Mail::send('emails.welcome', ['key' => 'value'], function($message) use ($subject) {
  // note: if you don't set this, it will use the defaults from config/mail.php
  $message->from('bar@example.com', 'Sender Name');
  $message->to('foo@example.com', 'John Smith')
    ->subject($subject);
});