<div class="wow animated bounceInRight" data-wow-delay="1.2s">
<div class="panel panel-info">
	<div class="panel-heading">
		<h2 align="center"> <strong> <?php echo $this->session->userdata('username'); ?> Profile </strong> </h2>
	</div>
	<div class="panel-body">
		<?php 
			$attributes= array('id' =>'view_form', 'class'=>'form_horizontal');
			echo form_open(''.base_url().'', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('First Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'first_name',
				'placeholder' => 'Enter First Name',
				'readonly' => true, 
				'value' => $user_data->first_name,
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
				'readonly' => true, 
				'value' => $user_data->last_name,
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
				'readonly' => true, 
				'value' => $user_data->email,
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
				'value' => $user_data->username,
				'readonly' => true, 
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
				'readonly' => true, 
				'value' => $user_data->password,
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
				'readonly' => true, 
				'value' => $user_data->password,
				'required' => 'true'
			);
					echo form_password($data);

			?>
		</div>
		<div class="form-group">	
			<?php	
			$data = array(
				'class' => 'btn btn-info',
				'name' => 'submit',
				'value' => 'Back'
			);
					echo form_submit($data);

			?>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>
</div>