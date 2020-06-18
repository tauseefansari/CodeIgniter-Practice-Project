<?php  
	class User_model extends CI_Model
	{
		public function login_user($username, $password)
		{

			$this->db->where('username',$username);
			$result = $this->db->get('users');
			$db_password = $result->row(2)->password;

			if(password_verify($password, $db_password))
			{
				return $result->row(0)->id;
			}
			else
			{
				return false;
			}
		}

		public function get_user_data($user_id)
		{
			$this->db->where('id', $user_id);
			$query = $this->db->get('users');
			return $query->row();
		}

		public function create_user()
		{
			$options = ['cost' => 12];
			$encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT,$options);
			$data = array(
				'first_name' => ucfirst($this->input->post('first_name')),
				'last_name' => ucfirst($this->input->post('last_name')),
				'username' => ucfirst($this->input->post('username')),
				'email' => $this->input->post('email'),
				'password' => $encrypted_pass
			);
			$insert_data = $this->db->insert('users',$data);
			return $insert_data;
		}

		public function edit_user($user_id)
		{
			$this->db->where('id', $user_id);
			$data = array(
				'first_name' => ucfirst($this->input->post('first_name')),
				'last_name' => ucfirst($this->input->post('last_name')),
				'username' => ucfirst($this->input->post('username')),
				'email' => $this->input->post('email')
			);
			$updated_data = $this->db->update('users',$data);
			return $updated_data;	
		}

		public function delete_user($user_id)
		{
			$this->db->where('id',$user_id);
			$this->db->delete('users');
		}

		public function get_project_id($user_id)
		{
			$this->db->where('project_user_id', $user_id);
			$query = $this->db->get('projects');
			return $query->row()->id;
		}
	}
?>