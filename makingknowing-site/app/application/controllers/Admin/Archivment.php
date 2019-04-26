<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Archivment extends Kodakil_Controller{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Archivment_model');
		}
		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'Archivment';
			$data->subMenu 	= 'ArchivmentList';


			$data->getMenu 	= $this->Archivment_model->getMenu();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/archivment');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Archivment';
			$data->subMenu 	= 'ArchivmentAdd';
			$data->menus 	= $this->Archivment_model->getMenu();

			if ($this->input->post()) {
				$postData = $this->getAllPosts();
				$postData->menu_image = $this->session->userdata('productImage');
				if ($this->Archivment_model->addMenu($postData)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Archivment/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Archivment/add'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/menu_add');
			$this->load->view('Admin/footer');
		}

		public function update($id)
		{
			$data = new StdClass;
			$data->mainMenu = 'Archivment';
			$data->subMenu 	= 'ArchivmentList';
			if ($this->input->post()) {
				$data = $this->getAllPosts();

				if ($this->session->userdata('productImage')) {
					$data->menu_image = $this->session->userdata('productImage');
					$this->session->unset_userdata('productImage');
				}

				$this->Archivment_model->update($data,$id);
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('Archivment/update/'.$id));
			}else{
				$data->id = $id;
				$data->menus = $this->Archivment_model->getMenuNotIn($id);
				$data->menu = $this->Archivment_model->getMenuById($id);
				if ($data->menu == false) {
					redirect(admin_url('Archivment'));
				}else{
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/archivment_update');
					$this->load->view('Admin/footer');
				}
			}
		}

		public function menuStatusUpdate($Id,$newInfo){
			if($this->Archivment_model->menuStatusUpdate($Id,$newInfo)){
				redirect(admin_url('Archivment'));
			}else{
				redirect(admin_url('Archivment'));
			}
		}
		public function deleteMenu($Id){
			if($this->Archivment_model->deleteMenu($Id)){
				redirect(admin_url('Archivment'));
			}else{
				redirect(admin_url('Archivment'));
			}
		}
		public function menuSort(){
			$sort = $this->input->post('sort',true);
			$this->Archivment_model->menuSort($sort);
			redirect(admin_url('Archivment'));
		}
	}
?>