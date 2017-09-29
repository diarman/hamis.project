<?php $this->layout = 'AdminLTE.login'; ?>

<?= $this->Form->create() ?>
	<div class="form-group has-feedback">
		<?= $this->Form->input('login', ['class' => 'form-control', 'placeholder' => 'login']); ?>    
    	<span class="glyphicon glyphicon-user form-control-feedback"></span>
  	</div>
  	<div class="form-group has-feedback">
		<?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'password']); ?> 
    	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
  	</div>
    <div class="box-footer">
        <?= $this->Form->button(__('sign in')) ?>
    </div>
<?= $this->Form->end() ?>