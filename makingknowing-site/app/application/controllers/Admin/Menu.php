<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Menu extends Kodakil_Controller{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Menu_model');
		}
		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'Menu';
			$data->subMenu 	= 'MenuList';


			$data->getMenu 	= $this->Menu_model->getMenu();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/menu');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Menu';
			$data->subMenu 	= 'MenuAdd';
			$data->menus 	= $this->Menu_model->getMenu();

			if ($this->input->post()) {
				$postData = $this->getAllPosts();
				$postData->menu_image = $this->session->userdata('productImage');
				if ($this->Menu_model->addMenu($postData)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Menu/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Menu/add'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/menu_add');
			$this->load->view('Admin/footer');
		}

		public function update($id)
		{
			$data = new StdClass;
			$data->mainMenu = 'Menu';
			$data->subMenu 	= 'MenuList';
			if ($this->input->post()) {
				$data = $this->getAllPosts();

				if ($this->session->userdata('productImage')) {
					$data->menu_image = $this->session->userdata('productImage');
					$this->session->unset_userdata('productImage');
				}

				$this->Menu_model->update($data,$id);
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('Menu/update/'.$id));
			}else{
				$data->id = $id;
				$data->menus = $this->Menu_model->getMenuNotIn($id);
				$data->menu = $this->Menu_model->getMenuById($id);
				if ($data->menu == false) {
					redirect(admin_url('Menu'));
				}else{
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/menu_update');
					$this->load->view('Admin/footer');
				}
			}
		}

		public function menuStatusUpdate($Id,$newInfo){
			if($this->Menu_model->menuStatusUpdate($Id,$newInfo)){
				redirect(admin_url('Menu'));
			}else{
				redirect(admin_url('Menu'));
			}
		}
		public function deleteMenu($Id){
			if($this->Menu_model->deleteMenu($Id)){
				redirect(admin_url('Menu'));
			}else{
				redirect(admin_url('Menu'));
			}
		}
		public function menuSort(){
			$sort = $this->input->post('sort',true);
			$this->Menu_model->menuSort($sort);
			redirect(admin_url('Menu'));
		}
	}
?>