<?php  
	class Users extends CI_Controller
	{
		public function login()
		{
			$this->form_validation->set_rules('username','Username', 'trim|min_length[3]');
			$this->form_validation->set_rules('password','Password', 'trim|min_length[8]');
			//$this->form_validation->set_rules('confirm_password','Confirm Password', 'trim|min_length[8]|matches[password]');

			if($this->form_validation->run() == FALSE)
			{
				$data = array('errors' => validation_errors('<p class="alert alert-danger alert-dismissible fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'));
				$this->session->set_flashdata($data);
				redirect('home');
			}
			else
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$user_id = $this->user_model->login_user($username, $password);
				$user_info = $this->user_model->get_user_data($user_id);


				if($user_id)
				{
					$user_data = array(
						'user_id' => $user_id,
						'username' => ucfirst($username),
						'first_name' => $user_info->first_name,
						'last_name' => $user_info->last_name,
						'email' => $user_info->email,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('login_success', "<strong>Login Success! </strong>Welcome ".ucfirst($username));
					
					$data['user'] = $this->user_model->get_user_data($user_id);
					$data['main_view'] = "users/login_view";
 					$this->load->view('layouts/main',$data);
					redirect('home/index');
				}
				else
				{
					$this->session->set_flashdata('login_failed',"<strong>Login failed!</strong> Invalid Username or Password");
					redirect('home/index');
				}
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('home/index');
		}

		public function register()
		{
			$this->form_validation->set_rules('first_name','First Name', 'trim|min_length[3]|max_length[50]|alpha');
			$this->form_validation->set_rules('last_name','Last Name', 'trim|min_length[3]|max_length[50]|alpha');
			$this->form_validation->set_rules('email','E-Mail', 'trim|min_length[3]|valid_email');
			$this->form_validation->set_rules('username','Username', 'trim|min_length[3]|alpha_numeric');
			$this->form_validation->set_rules('password','Password', 'trim|min_length[8]');
			$this->form_validation->set_rules('confirm_password','Confirm Password', 'trim|min_length[8]|matches[password]');

			if($this->form_validation->run() == FALSE)
			{
				$data['main_view'] = 'users/register_view';
				$this->load->view('layouts/main',$data);	
			}
			else
			{
				if($this->user_model->create_user())
				{
					$this->session->set_flashdata('user_registered', '<strong>'.ucfirst($this->input->post('first_name'))." ".ucfirst($this->input->post('last_name')).'</strong> Registered successfully');
					redirect('home/index');	
				}
				else
				{

				}
			}			
		}

		public function edit($user_id)
		{

			$this->form_validation->set_rules('first_name','First Name', 'trim|min_length[3]|max_length[50]|alpha');
			$this->form_validation->set_rules('last_name','Last Name', 'trim|min_length[3]|max_length[50]|alpha');
			$this->form_validation->set_rules('email','E-Mail', 'trim|min_length[3]|valid_email');
			$this->form_validation->set_rules('username','Username', 'trim|min_length[3]|alpha_numeric');

			if($this->form_validation->run() == FALSE)
			{
				$data['user_data'] = $this->user_model->get_user_data($user_id);
				$data['main_view'] = 'users/edit_view';
				$this->load->view('layouts/main',$data);	
			}
			else
			{
				if($this->user_model->edit_user($user_id))
				{
					$this->session->set_flashdata('user_edit', '<strong>'.ucfirst($this->input->post('first_name'))." ".ucfirst($this->input->post('last_name')).'</strong> Updated successfully');
					redirect('home/index');	
				}
				else
				{

				}
			}
		}

		public function view($user_id)
		{
			$data['user_data'] = $this->user_model->get_user_data($user_id);
			$data['main_view'] = 'users/profile_view';
			$this->load->view('layouts/main',$data);	
		}

		public function delete($user_id)
		{
			$project_id = $this->user_model->get_project_id($user_id);
			$this->project_model->delete_project_task($project_id);
			$this->project_model->delete_project($project_id);
			$this->user_model->delete_user($user_id);
			$this->session->sess_destroy();
			redirect('home/index');
		}
	}
?>