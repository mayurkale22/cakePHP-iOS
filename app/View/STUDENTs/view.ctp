<div class="sTUDENTs view">
<h2><?php  echo __('S T U D E N T'); ?></h2>
	<dl>
		<dt><?php echo __('NetID'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['NetID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['First_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Last_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Street_Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ZIP'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['ZIP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Created_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Modified_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Date'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Registration_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degree'); ?></dt>
		<dd>
			<?php echo h($sTUDENT['STUDENT']['Degree']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit S T U D E N T'), array('action' => 'edit', $sTUDENT['STUDENT']['NetID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete S T U D E N T'), array('action' => 'delete', $sTUDENT['STUDENT']['NetID']), null, __('Are you sure you want to delete # %s?', $sTUDENT['STUDENT']['NetID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List S T U D E N Ts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New S T U D E N T'), array('action' => 'add')); ?> </li>
	</ul>
</div>
