<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Video extends Kodakil_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Video_model');
		}

		public function index(){
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'VideoList';
			$data->imageInfo 		= $this->Video_model->imageInfo();

			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/video',$data);
			$this->load->view('Admin/footer');
		}

		public function Add(){
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'VideoAdd';
			$data->category = $this->Video_model->getCategory();
			if($this->input->post()){
				$data = $this->getAllPosts();
				if($this->Video_model->addVideo($data)){
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Video/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Video/add'));
				}
			}
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/video_add',$data);
			$this->load->view('Admin/footer');	
		}

		public function ImageUpload(){	
		$sonuc = $this->Video_model->VideoImageUpload();
			if ($sonuc != false){
				$this->session->set_flashdata('videoImage', $sonuc);
			}
		}

		public function VideoEditStatus($id,$st){
			if($this->Video_model->VideoEditStatus($id,$st)){
				redirect(admin_url('Video'));
			}else{
				redirect(admin_url('Video'));
			}
		}

		public function deleteVideo($id){
			if($this->Video_model->deleteVideo($id)){
				redirect(admin_url('Video'));
			}else{
				redirect(admin_url('Video'));
			}
		}
	}
?>