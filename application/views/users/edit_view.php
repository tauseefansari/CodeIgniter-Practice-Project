<div class="wow animated bounceInLeft" data-wow-delay="1.2s">
<div class="panel panel-warning">
	<div class="panel-heading">
		<h2 align="center"> <strong> Edit Information </strong> </h2>
	</div>
	<div class="panel-body">
		<?php 
			$attributes= array('id' =>'edit_form', 'class'=>'form_horizontal');
			
			echo validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
			if($this->session->flashdata('email_check'))
			{
				echo '<p class="alert alert-warning alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('email_check').'</p>';
			}
			echo form_open('users/edit/'.$this->session->userdata('user_id').'', $attributes);
		?>

		<div class="form-group">	
			<?php 	echo form_label('First Name'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'first_name',
				'placeholder' => 'Enter First Name',
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
			<?php	
			$data = array(
				'class' => 'btn btn-info',
				'name' => 'submit',
				'value' => 'Update Details'
			);
					echo form_submit($data);

			?>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>
</div>