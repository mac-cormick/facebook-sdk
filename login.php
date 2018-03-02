<?php

if (!session_id()) {
    session_start();
}

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
  'app_id' => '271084516759358', // Replace {app-id} with your app id
  'app_secret' => 'c69d6b3a4da740a9bb6c9e1ccbc32b47',
  'state' => '{"param":"value"}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://facebook-sdk.ru/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';