<div class="wow animated shake" data-wow-delay="1.2s">
<div class="panel panel-primary">
	<div class="panel-heading">		
		<h2 align="center"> <strong> Create Project </strong> </h2>
	</div>
	<div class="panel-body">	
		<?php 
			$attributes= array('id' =>'create_form', 'class'=>'form_horizontal');

			echo validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
			echo form_open('projects/create', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('Project Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'project_name',
				'placeholder' => 'Enter Project Name',
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
				'placeholder' => 'Enter Project Description (Max 500 characters) ',
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
				'value' => 'Create Project'
			);
					echo form_submit($data);

			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>