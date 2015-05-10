<?php
$session->flash('auth');
echo $form->create('Usuario', array('action' => 'login'));
echo $form->inputs(array(
'legend' => __('Login', true),
'username',
'password'
));
echo $form->end('Login');
?>
