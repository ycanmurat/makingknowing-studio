<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Channel extends Kodakil_Controller{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Channel_model');
		}
		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'Channel';
			$data->subMenu 	= 'ChannelList';


			$data->getMenu 	= $this->Channel_model->getMenu();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/channel');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Channel';
			$data->subMenu 	= 'ChannelAdd';
			$data->menus 	= $this->Channel_model->getMenu();

			if ($this->input->post()) {
				$postData = $this->getAllPosts();
				$postData->menu_image = $this->session->userdata('productImage');
				if ($this->Channel_model->addMenu($postData)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Channel/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Channel/add'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/chanell_add');
			$this->load->view('Admin/footer');
		}

		public function update($id)
		{
			$data = new StdClass;
			$data->mainMenu = 'Channel';
			$data->subMenu 	= 'ChannelList';
			if ($this->input->post()) {
				$data = $this->getAllPosts();

				if ($this->session->userdata('productImage')) {
					$data->menu_image = $this->session->userdata('productImage');
					$this->session->unset_userdata('productImage');
				}

				$this->Channel_model->update($data,$id);
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('Channel/update/'.$id));
			}else{
				$data->id = $id;
				$data->menus = $this->Channel_model->getMenuNotIn($id);
				$data->menu = $this->Channel_model->getMenuById($id);
				if ($data->menu == false) {
					redirect(admin_url('Channel'));
				}else{
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/channel_update');
					$this->load->view('Admin/footer');
				}
			}
		}

		public function menuStatusUpdate($Id,$newInfo){
			if($this->Channel_model->menuStatusUpdate($Id,$newInfo)){
				redirect(admin_url('Channel'));
			}else{
				redirect(admin_url('Channel'));
			}
		}
		public function deleteMenu($Id){
			if($this->Channel_model->deleteMenu($Id)){
				redirect(admin_url('Channel'));
			}else{
				redirect(admin_url('Channel'));
			}
		}
		public function menuSort(){
			$sort = $this->input->post('sort',true);
			$this->Channel_model->menuSort($sort);
			redirect(admin_url('Channel'));
		}
	}
?>