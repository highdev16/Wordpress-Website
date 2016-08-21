<div class="null">
	<h2><?php echo __('Wars'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($wars as $war): ?>
	<tr>
		<td><?php echo h($war['War']['id']); ?>&nbsp;</td>
		<td><?php echo h($war['War']['name']); ?>&nbsp;</td>
		<td><?php echo h($war['War']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $war['War']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $war['War']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $war['War']['id']), null, __('Are you sure you want to delete # %s?', $war['War']['id'])); ?>
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
