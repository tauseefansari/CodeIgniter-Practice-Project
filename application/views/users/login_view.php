<?php if($this->session->userdata('logged_in')): ?>
<div class="wow animated bounceInDown" data-wow-delay="1.2s">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3><?php echo "Welcome ".$this->session->userdata('username'); ?></h3>	
		</div>
		<div class="panel-body">
			<center>
				<a href="<?php echo base_url(); ?>users/view/<?php echo $this->session->userdata('user_id'); ?>" class="btn-lg btn-info btn-hover"> <span class="glyphicon glyphicon-eye-open"> </span> View Profile</a> <br><br>
				<a href="<?php echo base_url(); ?>users/edit/<?php echo $this->session->userdata('user_id'); ?>" class="btn-lg btn-warning btn-hover"> <span class="glyphicon glyphicon-edit"> </span> Edit Profile</a> <br><br>
				<a href="<?php echo base_url(); ?>users/delete/<?php echo $this->session->userdata('user_id'); ?>" class="btn-lg btn-danger btn-hover"> <span class="glyphicon glyphicon-trash"> </span> Delete Account</a>
			</center>
		</div>	
	</div>
</div>
<?php endif; ?>

<?php 	if($this->session->userdata('logged_in')): 
			/*echo form_open('users/logout'); ?>
			<h2>Logout</h2>
			<p>
			<?php
				if($this->session->userdata('username')):
					echo "You are logged in as ".ucfirst($this->session->userdata('username'));
				endif; ?>
			</p>
			<?php
				
				$data=array(
					'class' => 'btn btn-danger',
					'name' => 'submit',
					'value' => 'Logout'
				);
				echo form_submit($data);

			echo form_close();*/
		else:
	?>
<div class="wow animated rotateIn" data-wow-delay="1.2s">
<div class="panel panel-primary" >
		<div class="panel-heading"> 
			<h2 align="center"> <strong> Login </strong> </h2>
		</div>
		<div class="panel-body">
			<?php $attributes= array('id' =>'login_form', 'class'=>'form_horizontal');
			if($this->session->flashdata('errors')):
				echo $this->session->flashdata('errors');
			endif;
			echo form_open('users/login', $attributes);
		?>
		<div class="form-group">	
			<?php 	echo form_label('Username'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'username',
				'placeholder' => 'Enter Username',
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
		<!-- <div class="form-group">	
			<?php 	/*echo form_label('Confirm Password'); ?> 
			<?php	

			$data = array(
				'class' => 'form-control',
				'name' => 'confirm_password',
				'placeholder' => 'Confirm Password',
				'required' => 'true'
			);
					echo form_password($data);*/

			?>
		</div> -->
		<div class="form-group">	
			<?php	
			$data = array(
				'class' => 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Login'
			);
					echo form_submit($data);

			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>
<?php endif; ?> 
