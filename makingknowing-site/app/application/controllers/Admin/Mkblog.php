<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Mkblog extends Kodakil_Controller{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Mkblog_model');
		}
		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'Mkblog';
			$data->subMenu 	= 'MkblogList';


			$data->getMenu 	= $this->Mkblog_model->getMenu();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/mkblog');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Mkblog';
			$data->subMenu 	= 'MkblogAdd';
			$data->menus 	= $this->Mkblog_model->getMenu();

			if ($this->input->post()) {
				$postData = $this->getAllPosts();
				$postData->menu_image = $this->session->userdata('productImage');
				if ($this->Mkblog_model->addMenu($postData)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Mkblog/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Mkblog/add'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/mkblok_add');
			$this->load->view('Admin/footer');
		}

		public function update($id)
		{
			$data = new StdClass;
			$data->mainMenu = 'Mkblog';
			$data->subMenu 	= 'MkblogList';
			if ($this->input->post()) {
				$data = $this->getAllPosts();

				if ($this->session->userdata('productImage')) {
					$data->menu_image = $this->session->userdata('productImage');
					$this->session->unset_userdata('productImage');
				}

				$this->Mkblog_model->update($data,$id);
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('Mkblog/update/'.$id));
			}else{
				$data->id = $id;
				$data->menus = $this->Mkblog_model->getMenuNotIn($id);
				$data->menu = $this->Mkblog_model->getMenuById($id);
				if ($data->menu == false) {
					redirect(admin_url('Mkblog'));
				}else{
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/mkblog_update');
					$this->load->view('Admin/footer');
				}
			}
		}

		public function menuStatusUpdate($Id,$newInfo){
			if($this->Mkblog_model->menuStatusUpdate($Id,$newInfo)){
				redirect(admin_url('Mkblog'));
			}else{
				redirect(admin_url('Mkblog'));
			}
		}
		public function deleteMenu($Id){
			if($this->Mkblog_model->deleteMenu($Id)){
				redirect(admin_url('Mkblog'));
			}else{
				redirect(admin_url('Mkblog'));
			}
		}
		public function menuSort(){
			$sort = $this->input->post('sort',true);
			$this->Mkblog_model->menuSort($sort);
			redirect(admin_url('Mkblog'));
		}
	}
?>