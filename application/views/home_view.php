<?php  
	if($this->session->flashdata('login_success')):
		echo '<p class="alert alert-success alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('login_success').'</p>';
	endif;
 
	if($this->session->flashdata('user_registered')):
		echo '<p class="alert alert-success alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('user_registered').'</p>';
	endif;

	if($this->session->flashdata('user_edit')):
		echo '<p class="alert alert-info alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('user_edit').'</p>';
	endif;

	if($this->session->flashdata('login_failed')):
		echo '<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('login_failed').'</p>';
	endif;
	
	if($this->session->flashdata('no_access')):
		echo '<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('no_access').'</p>';
	endif;

?>
<?php if(!$this->session->userdata('logged_in')): ?>
	<div class="jumbotron wow animated flipInY" data-wow-delay="1.2s">
		<h2 class="text-center"> <strong> Welcome to the Project TaskLister </strong> </h2>
	</div>
	<div class="description animated flipInX">
		<h2><strong> About Project </strong> </h2>
		<p style="font-size: 15px;"> This Project is developed for storing project information and their task related information. This include create project and create its respective tasks. It also has ability to mark complete and incomplete tasks.</p>
	</div>
<?php endif; ?>
<?php if(isset($projects)): ?>
	<div class="wow animated slideInDown" data-wow-delay="1.2s">
	<div class="panel panel-success">
		<div class="panel-heading">	<h1> <strong>My Projects </strong> </h1>
	</div>
	<div class="panel-body">
		<ul class="list-group">	
			<?php
				foreach($projects as $project): ?>
				<li class="list-group-item">
					<a href="<?php echo base_url(); ?>projects/display/<?php echo $project->id; ?>">
						<?php echo $project->project_name; ?>
					</a>
				</li>
				<?php endforeach; ?>
<?php endif; ?>
		</ul>
	</div>
</div>
</div>

<?php if(isset($tasks)): ?>
	<div class="wow animated slideInLeft" data-wow-delay="1.2s">
	<div class="panel panel-info">
		<div class="panel-heading">	<h1> <strong>My Tasks </strong> </h1>
	</div>
	<div class="panel-body">
		<ul class="list-group">	
			<?php
				foreach($tasks as $task): ?>
				<li class="list-group-item">
					<a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->id; ?>">
						<?php echo $task->task_name; ?>
					</a>
				</li>
				<?php endforeach; ?>
<?php endif; ?>
		</ul>
	</div>
</div>
</div>