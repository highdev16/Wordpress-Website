<div class="news index">
	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('teaser'); ?></th>
			<th><?php echo $this->Paginator->sort('article'); ?></th>
			<th><?php echo $this->Paginator->sort('expires'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($news as $news): ?>
	<tr>
		<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['teaser']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['article']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['expires']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['updated']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), null, __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?></li>
	</ul>
</div>
