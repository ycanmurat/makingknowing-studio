<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Podcast extends Kodakil_Controller{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Podcast_model');
		}
		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'Podcast';
			$data->subMenu 	= 'PodcastList';


			$data->getMenu 	= $this->Podcast_model->getMenu();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/podcast');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Podcast';
			$data->subMenu 	= 'PodcastAdd';
			$data->menus 	= $this->Podcast_model->getMenu();

			if ($this->input->post()) {
				$postData = $this->getAllPosts();
				$postData->menu_image = $this->session->userdata('productImage');
				if ($this->Podcast_model->addMenu($postData)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Podcast/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Podcast/add'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/podcast_add');
			$this->load->view('Admin/footer');
		}

		public function update($id)
		{
			$data = new StdClass;
			$data->mainMenu = 'Podcast';
			$data->subMenu 	= 'PodcastList';
			if ($this->input->post()) {
				$data = $this->getAllPosts();

				if ($this->session->userdata('productImage')) {
					$data->menu_image = $this->session->userdata('productImage');
					$this->session->unset_userdata('productImage');
				}

				$this->Podcast_model->update($data,$id);
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('Podcast/update/'.$id));
			}else{
				$data->id = $id;
				$data->menus = $this->Podcast_model->getMenuNotIn($id);
				$data->menu = $this->Podcast_model->getMenuById($id);
				if ($data->menu == false) {
					redirect(admin_url('Podcast'));
				}else{
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/podcast_update');
					$this->load->view('Admin/footer');
				}
			}
		}

		public function menuStatusUpdate($Id,$newInfo){
			if($this->Podcast_model->menuStatusUpdate($Id,$newInfo)){
				redirect(admin_url('Podcast'));
			}else{
				redirect(admin_url('Podcast'));
			}
		}
		public function deleteMenu($Id){
			if($this->Podcast_model->deleteMenu($Id)){
				redirect(admin_url('Podcast'));
			}else{
				redirect(admin_url('Podcast'));
			}
		}
		public function menuSort(){
			$sort = $this->input->post('sort',true);
			$this->Podcast_model->menuSort($sort);
			redirect(admin_url('Podcast'));
		}
	}
?>