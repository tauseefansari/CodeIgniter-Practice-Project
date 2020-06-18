<div class="wow animated wobble" data-wow-delay="1.2s">
<div class="panel panel-warning">
	<div class="panel-heading">				
		<h2 align="center"> <strong> Edit Project </strong></h2>
	</div>
	<div class="panel-body">	
		<?php 
			$attributes= array('id' =>'edit_form', 'class'=>'form_horizontal');

			echo validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
			echo form_open('projects/edit/'.$project_data->id.'', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('First Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'project_name',
				'value' => $project_data->project_name,
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>

		<div class="form-group">	
			<?php 	echo form_label('Project Description'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'project_body',
				'value' => $project_data->project_body,
				'required' => 'true'
			);
					echo form_textarea($data);

			?>
		</div>

		<div class="form-group">	
			<?php	
			$data = array(
				'class' => 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Update Project'
			);
					echo form_submit($data);

			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>