<div class="wow animated shake" data-wow-delay="1.2s">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 align="center"> <strong> Edit Task </strong> </h2>
	</div>
	<div class="panel-body">	
		<?php 
			$attributes= array('id' =>'edit_form', 'class'=>'form_horizontal');

			echo validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
			echo form_open('tasks/edit/'.$this->uri->segment(3).'', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('Task Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'task_name',
				'value' => $the_task->task_name,
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
				'value' => $the_task->task_body,
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
				'value' => $the_task->due_date,
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
				'value' => 'Update Task'
			);
					echo form_submit($data);

			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>