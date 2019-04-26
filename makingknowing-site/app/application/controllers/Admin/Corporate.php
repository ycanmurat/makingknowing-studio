<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Corporate extends Kodakil_Controller
	{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Corporate_model');
		}

		public function index(){
			$data 					= new StdClass;
			$header_data 			= new StdClass;
			$header_data->mainMenu 	= 'Corporate';
			$header_data->subMenu  	= 'CorporateUpdate';
			if ($this->input->post()) {
				$postInfo = $this->GetAllPosts();
				if ($this->Corporate_model->updateCorporate($postInfo)) {
					$this->session->set_flashdata('onay',1);
				}else{
					$this->session->set_flashdata('hata',1);
				}
			}
			$data->corporateInfo    = $this->Corporate_model->getCorporate();
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/corporate',$data);
			$this->load->view('Admin/footer');	
		}

		public function statik(){
			$data 					= new StdClass;
			$header_data 			= new StdClass;
			$header_data->mainMenu 	= 'Corporate';
			$header_data->subMenu  	= 'StatikCorporateUpdate';

			$data->about = $this->Corporate_model->about();
			$data->services = $this->Corporate_model->services();

			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/statikCorporate',$data);
			$this->load->view('Admin/footer');
		}

		public function about(){
			if ($this->input->post()) {
				$data = $this->GetAllPosts();
				if ($this->Corporate_model->updateAbout($data)) {
					$this->session->set_flashdata('onay',1);
					redirect(admin_url('Corporate/statik'));
				}else{
					$this->session->set_flashdata('hata',1);
					redirect(admin_url('Corporate/statik'));
				}
			}
		}

		public function services(){
			if ($this->input->post()) {
				$data = $this->GetAllPosts();
				if ($this->Corporate_model->updateServices($data)) {
					$this->session->set_flashdata('onayy',1);
					redirect(admin_url('Corporate/statik'));
				}else{
					$this->session->set_flashdata('hataa',1);
					redirect(admin_url('Corporate/statik'));
				}
			}
		}

		public function ImageUpload(){	
			$result = $this->Corporate_model->ImageUpload();
			if ($result != false){
				$this->session->set_flashdata('Image', $result);
			}
		}
	}
?>