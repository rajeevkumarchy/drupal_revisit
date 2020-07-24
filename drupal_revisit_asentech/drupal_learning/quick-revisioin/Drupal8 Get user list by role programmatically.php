<?php

use Drupal\user\Entity\User;

$ids = \Drupal::entityQuery('user')
    ->condition('status', 1)
    ->condition('roles', 'administrator')
    ->execute();
$users = User::loadMultiple($ids);
foreach($users as $user){
    $username = $user->get('name')->getString();
    $mail =  $user->get('mail')->getString();
    $userlist[$mail] = $username;
}

?>