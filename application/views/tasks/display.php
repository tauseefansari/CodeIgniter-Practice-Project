<?php  
	if($this->session->flashdata('task_created')):
		echo '<p class="alert alert-success alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('task_created').'</p>';
	endif;
?>
<div class="col-xs-9">
	<div class="wow animated flipInX" data-wow-delay="1.2s">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h1> <strong> <?php echo $task->task_name; ?> </strong> </h1>
		</div>
		<div class="panel-body">
			<p> <strong> Project Name : </strong> <?php echo $project_name; ?> </p>
			<p> <strong> Created : </strong> <?php echo $task->date_created; ?> </p>
			<p> <strong> Due on : </strong> <?php echo $task->due_date; ?> </p>
			<h4> <strong> Description </strong> </h4>
			<p class="description"> <?php echo $task->task_body; ?> </p>
		</div>
	</div>
</div>
</div>


<div class="col-xs-3 pull-right wow animated slideInRight" data-wow-delay="1.2s">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4 align="center"> <strong> Task Actions </strong> </h4>
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>"> <span class="glyphicon glyphicon-edit"></span> Edit Task</a></li>
				<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>"> <span class="glyphicon glyphicon-trash"></span> Delete Task</a></li>
				<?php  if(!$status): ?>
				<li class="list-group-item"> <a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>"> <span class="glyphicon glyphicon-ok"></span> Mark as Complete </a> </li>
				<?php else: ?>
				<li class="list-group-item"> <a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>"> <span class="glyphicon glyphicon-remove"></span> Mark as Incomplete </a> </li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>