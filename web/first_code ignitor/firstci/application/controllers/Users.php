<?php
    //how do i create a code igniter controller class. The actions are used for eg, to show register page by requesting the controller.
    //Actions are the functions in PHP.
    //http://localhost/firstci/index.php/users/show_register
    //Here, index.php is used to HIT CI framework. users instead of Users class in lower case. The action, show_register. 
    class Users extends CI_Controller {
        
		public function __construct(){
			parent::__construct();
			//loading the database only once
			$this->load->model("users_model");
			$this->load->model("country_model");
		}
		
		public function list_users(){
			$rows = $this->users_model->selectAllUsers();
			
			//the below "data" is an associative array available with every Controller's(Here User.php is controller) function.
			$data["result"] = $rows;
			$this->load->view("users/user_list", $data);
		}
		
        public function show_register() {
            //echo "Hello CI";
            //form helper
            $this->load->helper('form');//doing this will build the form tag's URL, you needn't write the entire URL in the action="" of the form tag
            $rows = $this->country_model->findAll();
			$data["countries"] = $rows;
            //viewer
            $this->load->view("users/register", $data);//by this, the view is sent to the browser
        }
		
		/*
		public function list_countries(){
					$rows = $this->users_model->getCountries();
					$data["result"] = $rows;
					$this->load->view("users/register", $data);
				}*/
		
		
		public function register()
		{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$gender = $this->input->post("gender");
			
			//loading the database before using it
			/*$this->load->database();*/
			$this->load->library("email");
			$this->load->library("upload");
			
			if(!$this->upload->do_upload("prof_pic")){
				show_error($this->upload->display_errors());
			}
			else {
				//success upload.
				//inserting the data should be the part of a model. 
				/*
				$data = array('username' => $username, 'password' => $password, 'gender' => $gender );
								$result = $this->db->insert('users',$data);*/
								
				// Model handles data related part, so Users_model.php is loaded into this Users.php controller				
				$this->load->model("users_model"); 
				// Writing the above code makes, "users_model" object available.
				$result = $this->users_model->insert($username, $password, $gender);
				
				if($result){
					/*
					$this->email->set_newline("\r\n");
										$this->email->from("admin@gmail.com","Admin");
										$this->email->to($username);
										$this->email->subject("Welcome Onboard");
										$this->email->message("Thank you for registering with us! Now fuck off bitch!");
										
										if(!$this->email->send()){
											show_error($this->email->print_debugger());
										}*/
					
					echo "Registered successfully";
					//echo $this->upload->data("full_path");
				}
				else {
					show_error($this->db->error());
				}
			//echo $username;
			//echo $gender;
			}
		}
    }
?>