<?php  
	if($this->session->flashdata('project_created')):
		echo '<p class="alert alert-success alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('project_created').'</p>';
	endif;

	if($this->session->flashdata('project_updated')):
		echo '<p class="alert alert-info alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('project_updated').'</p>';
	endif;

	if($this->session->flashdata('project_deleted')):
		echo '<p class="alert alert-warning alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('project_deleted').'</p>';
	endif;
?>

<div class="wow animated wobble" data-wow-delay="1.2s">
<div class="panel panel-warning">
	<div class="panel-heading">
		<a class="btn btn-info pull-right" href="<?php echo base_url(); ?>projects/create" style="margin: 20px;"><span class="glyphicon glyphicon-plus"> </span> Create Project</a>
		<h1> <strong> All Projects </strong></h1>
	</div>
	<div class="panel-body">
	<?php 	
		foreach($projects as $project): ?>
		<ul class="list-group">
			<?php
				echo "<div class='wow animated tada' data-wow-delay='2.3s'>
				<div class='panel panel-primary'>
							<div class='panel-heading'>
								<h4>".$project->project_name."
								</h4>
								</div>
								<div class='panel-body'>
								<h5> <strong> Created By : ".$project->first_name." ".$project->last_name."
								</strong> </h5>	
								"; 
						echo $project->project_body."
						<a class='btn-lg text-danger pull-right glyphicon glyphicon-trash' href='".base_url()."projects/delete/".$project->project_user_id."'>  </a>
						<a class='btn btn-lg pull-right' href='".base_url()."projects/display/".$project->id."'> <span class='glyphicon glyphicon-eye-open'> </span> </a>
						</div> </div>"; 
			?>
					<td>  </td>
		</ul>
		<?php endforeach; ?>
	</div>
</div>
</div>