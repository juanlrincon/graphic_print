<?php
$session->flash('auth');
echo $form->create('Usuario', array('action' => 'login'));
echo '
<div class="login_box">
	<div style="height:100px;"></div>
	<div style="height:70px;width:300px;">
		<div style="float:left;margin-top:8px;width:70px;">Usuario</div><div style="float:left;">'.$form->input('username', array('label' => false, 'div' => false)).'</div>
		<div style="float:left;margin-top:8px;width:70px;">Password</div><div style="float:left;">'.$form->input('password', array('label' => false, 'div' => false)).'</div>
	</div>
	<div style="width:100px;margin-left:200px;padding-top:-30px;">
		'.$html->submit2('Login','0').'
	</div>
</div>';



?>