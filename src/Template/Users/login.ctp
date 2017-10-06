<div class = "users form">
<?php $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('Por favor,insira seu nome de usuário e senha') ?> </legend>
		<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password'); 
		?>
	</fieldset>
	<?= $this->Form->button(__('Login')) ?>
	<?= $this->Form->end() ?>
</div>