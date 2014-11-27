<div class="sTUDENTs index">
	<h2><?php echo __('S T U D E N Ts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('NetID'); ?></th>
			<th><?php echo $this->Paginator->sort('First_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Last_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Street_Address'); ?></th>
			<th><?php echo $this->Paginator->sort('ZIP'); ?></th>
			<th><?php echo $this->Paginator->sort('Phone'); ?></th>
			<th><?php echo $this->Paginator->sort('Created_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Modified_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Registration_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Degree'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sTUDENTs as $sTUDENT): ?>
	<tr>
		<td><?php echo h($sTUDENT['STUDENT']['NetID']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['First_Name']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Last_Name']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Street_Address']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['ZIP']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Phone']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Created_Date']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Modified_Date']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Registration_Date']); ?>&nbsp;</td>
		<td><?php echo h($sTUDENT['STUDENT']['Degree']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sTUDENT['STUDENT']['NetID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sTUDENT['STUDENT']['NetID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sTUDENT['STUDENT']['NetID']), null, __('Are you sure you want to delete # %s?', $sTUDENT['STUDENT']['NetID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New S T U D E N T'), array('action' => 'add')); ?></li>
	</ul>
</div>
