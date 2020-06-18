<div class="col-xs-9">

	<?php  
		if($this->session->flashdata('task_created')):
		echo '<p class="alert alert-success alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('task_created').'</p>';
		endif;

		if($this->session->flashdata('task_updated')):
			echo '<p class="alert alert-info alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('task_updated').'</p>';
		endif;

		if($this->session->flashdata('task_deleted')):
			echo '<p class="alert alert-warning alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('task_deleted').'</p>';
		endif;

		if($this->session->flashdata('task_completed')):
		echo '<p class="alert alert-success alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('task_completed').'</p>';
		endif;

		if($this->session->flashdata('task_incompleted')):
			echo '<p class="alert alert-warning alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('task_incompleted').'</p>';
		endif;
	?>

	<div class="wow animated lightSpeedIn" data-wow-delay="1.2s">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h1> <strong> Project Name : <?php echo $project_data->project_name; ?> </strong> </h1>
		</div>
		<div class="panel-body">
			<p> <strong> Date Created : </strong> <?php echo $project_data->date_created; ?></p>
			<p> <strong> Created By : </strong> <?php echo $project_data->first_name." ".$project_data->last_name; ?></p>
			<h3> <strong> Description </strong></h3>
			<p class="description"><?php echo $project_data->project_body; ?></p>
		</div>	
	</div>
</div>

	<div class="wow animated rotateInDownLeft" data-wow-delay="1.2s">
	<div class="panel panel-warning">
		<div class="panel-heading"> 
			<h3> <strong> Active Tasks </strong></h3>
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<?php  
					if($completed_tasks):
						foreach($completed_tasks as $task): ?>
							<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id; ?>">
				<?php
							echo $task->task_name; ?>
							</a></li>
				<?php
						endforeach;
					else: ?>
						<h4 align="center">No task to show!</h4>
				<?php
					endif;
				?>
			</ul>
		</div>
	</div>
</div>

	<div class="wow animated rotateInDownRight" data-wow-delay="1.2s">
	<div class="panel panel-success">
		<div class="panel-heading"> 
			<h3> <strong> Completed Tasks </strong></h3>
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<?php  
					if($not_completed_tasks):
						foreach($not_completed_tasks as $task): ?>
							<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id; ?>">
				<?php
							echo $task->task_name; ?>
							</a></li>
				<?php
						endforeach;
					else: ?>
						<h4 align="center">No task to show!</h4>
				<?php
					endif;
				?>
			</ul>
		</div>
	</div>
</div>
</div>

<div class="col-xs-3 pull-right wow animated slideInRight" data-wow-delay="1.2s">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4 align="center"> <strong> Project Actions </strong> </h4>
		</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->id; ?>"> <span class="glyphicon glyphicon-plus"></span> Create Task</a></li>
				<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>"> <span class="glyphicon glyphicon-edit"></span> Edit Project</a></li>
				<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>"> <span class="glyphicon glyphicon-remove"></span> Delete Project</a></li>
			</ul>
		</div>
	</div>
</div>