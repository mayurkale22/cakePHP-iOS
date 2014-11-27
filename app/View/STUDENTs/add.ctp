<div class="sTUDENTs form">
<?php echo $this->Form->create('STUDENT'); ?>
	<fieldset>
		<legend><?php echo __('Add S T U D E N T'); ?></legend>
	<?php
		echo $this->Form->input('First_Name');
		echo $this->Form->input('Last_Name');
		echo $this->Form->input('Street_Address');
		echo $this->Form->input('ZIP');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Created_Date');
		echo $this->Form->input('Modified_Date');
		echo $this->Form->input('Registration_Date');
		echo $this->Form->input('Degree');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List S T U D E N Ts'), array('action' => 'index')); ?></li>
	</ul>
</div>
