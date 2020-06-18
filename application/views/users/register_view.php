<div class="wow animated bounceInUp" data-wow-delay="1.2s">
<div class="panel panel-success">
	<div class="panel-heading">
		<h2 align="center"> <strong> Register </strong> </h2>
	</div>
	<div class="panel-body">
		<?php 
			$attributes= array('id' =>'register_form', 'class'=>'form_horizontal');

			echo validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
			echo form_open('users/register', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('First Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'first_name',
				'placeholder' => 'Enter First Name',
				'value' => set_value('first_name'),
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>

		<div class="form-group">	
			<?php 	echo form_label('Last Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'last_name',
				'placeholder' => 'Enter Last Name',
				'value' => set_value('last_name'),
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>

		<div class="form-group">	
			<?php 	echo form_label('E-Mail'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'email',
				'placeholder' => 'example@gmail.com',
				'type' => 'email',
				'value' => set_value('email'),
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>
		<div class="form-group">	
			<?php 	echo form_label('Username'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'username',
				'placeholder' => 'Enter Username',
				'value' => set_value('username'),
				'required' => 'true'
			);
					echo form_input($data);

			?>
		</div>
		<div class="form-group">	
			<?php 	echo form_label('Password'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'password',
				'placeholder' => 'Enter Password',
				'required' => 'true'
			);
					echo form_password($data);

			?>
		</div>
		<div class="form-group">	
			<?php 	echo form_label('Confirm Password'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'confirm_password',
				'placeholder' => 'Confirm Password',
				'required' => 'true'
			);
					echo form_password($data);

			?>
		</div>
		<div class="form-group">	
			<?php	
			$data = array(
				'class' => 'btn btn-success',
				'name' => 'submit',
				'value' => 'Register'
			);
					echo form_submit($data);

			?>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>
</div>