<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Menu2 extends Kodakil_Controller{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Menu_model2');
		}
		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'Menu2';
			$data->subMenu 	= 'MenuList2';


			$data->getMenu 	= $this->Menu_model2->getMenu();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/menu2');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Menu2';
			$data->subMenu 	= 'MenuAdd2';
			$data->menus 	= $this->Menu_model2->getMainMenu();

			if ($this->input->post()) {
				$menu = $this->input->post('menu',true);
				$sort = $this->input->post('sort',true);
				$main_menu = $this->input->post('main_menu',true);
				if ($this->Menu_model2->addMenu($menu,$sort,$main_menu)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Menu2/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Menu2/add'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/menu_add2');
			$this->load->view('Admin/footer');
		}

		public function update($id)
		{
			$data = new StdClass;
			$data->mainMenu = 'Menu2';
			$data->subMenu 	= 'MenuList2';
			$data->id = $id;
			if ($this->input->post()) {
				$data = $this->getAllPosts();
				$this->Menu_model2->update($data,$id);
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('Menu2/update/'.$id));
			}else{
				$data->menus = $this->Menu_model2->getMenuNotIn($id);
				$data->menu = $this->Menu_model2->getMenuById($id);
				if ($data->menu == false) {
					redirect(admin_url('Menu2'));
				}else{
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/menu_update2');
					$this->load->view('Admin/footer');
				}
			}
		}

		public function menuStatusUpdate($Id,$newInfo){
			if($this->Menu_model2->menuStatusUpdate($Id,$newInfo)){
				redirect(admin_url('Menu2'));
			}else{
				redirect(admin_url('Menu2'));
			}
		}
		public function deleteMenu($Id){
			if($this->Menu_model2->deleteMenu($Id)){
				redirect(admin_url('Menu2'));
			}else{
				redirect(admin_url('Menu2'));
			}
		}
		public function menuSort(){
			$sort = $this->input->post('sort',true);
			$this->Menu_model2->menuSort($sort);
			redirect(admin_url('Menu2'));
		}
	}
?>