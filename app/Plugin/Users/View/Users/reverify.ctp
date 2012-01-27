<h1><?php echo __('Resend Verification'); ?></h1>
<div class="users form" id="reverify">
<?php
    echo $this->Form->create('User');
    echo $this->Form->input('username', array('label' => 'Username or Email'));
    echo $this->Form->end('Submit');
?>
</div>

<?php 
// set the contextual menu items
$this->set('context_menu', array('menus' => array(
	array(
		'heading' => 'Users',
		'items' => array(
			$this->Html->link(__('Register', true), array('plugin' => 'users', 'controller' => 'users', 'action' => 'add', 'admin' => 0)),
			)
		),
	))); ?>