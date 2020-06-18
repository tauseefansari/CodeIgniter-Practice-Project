<div class="wow animated swing" data-wow-delay="1.2s">
<div class="panel panel-warning">
	<div class="panel-heading">		
		<h2 align="center"> <strong> Create Task </strong> </h2>
	</div>
	<div class="panel-body">
		<?php 
			$attributes= array('id' =>'create_form', 'class'=>'form_horizontal');

			echo validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
			echo form_open('tasks/create/'.$this->uri->segment(3).'', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('Task Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'task_name',
				'placeholder' => 'Enter Task Name',
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>

		<div class="form-group">	
			<?php 	echo form_label('Task Description'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'task_body',
				'placeholder' => 'Enter Task Description (Max 500 characters) ',
				'required' => 'true'
			);
					echo form_textarea($data);

			?>
		</div>

		<div class="form-group">	
			<?php 	echo form_label('Due Date'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'due_date',
				'type' => 'date',
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>

		<div class="form-group">	
			<?php	
			$data = array(
				'class' => 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Create Task'
			);
					echo form_submit($data);

			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>