<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Galery extends Kodakil_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Galery_model');
		}

		public function index()
		{
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'GaleryList';
			$data->imageInfo 		= $this->Galery_model->getTitles();
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/galery',$data);
			$this->load->view('Admin/footer');
		}

		public function Add()
		{
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'GaleryAdd';
			if($this->input->post()){
				$title 	= $this->input->post('title',true);
				if($this->Galery_model->addTitle($title)){
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Galery/add'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Galery/add'));
				}
			}
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/galery_add',$data);
			$this->load->view('Admin/footer');	
		}

		public function GaleryEditStatus($id,$st)
		{
			if ($this->Galery_model->GaleryEditStatus($id,$st)) {
				redirect(admin_url('Galery'));
			} else {
				redirect(admin_url('Galery'));
			}
		}

		public function deleteGalery($id)
		{
			if ($this->Galery_model->deleteGalery($id)) {
				redirect(admin_url('Galery'));
			} else {
				redirect(admin_url('Galery'));
			}
		}

		public function ImageUpload()
		{	
			$sonuc = $this->Galery_model->GaleryImageUpload();
			if ($sonuc != false){
				$this->session->set_flashdata('galeryImage', $sonuc);
			}
		}

		public function photoAdd()
		{
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'photoAdd';
			if($this->input->post()){
				$data = $this->getAllPosts();
				$data->image = $this->session->flashdata('galeryImage');
				if($this->Galery_model->addImage($data)){
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Galery/photoAdd'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Galery/photoAdd'));
				}
			}
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/photoAdd',$data);
			$this->load->view('Admin/footer');	
		}

		public function photoList()
		{
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'photoList';
			$data->images = $this->Galery_model->getImages();
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/photoList',$data);
			$this->load->view('Admin/footer');	
		}

		public function pdfAdd()
		{
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'pdfAdd';
			if($this->input->post()){
				$data = $this->getAllPosts();
				$data->image = $this->session->flashdata('galeryImage');
				if($this->Galery_model->addPdf($data)){
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Galery/pdfAdd'));
				}else{
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Galery/pdfAdd'));
				}
			}
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/pdfadd',$data);
			$this->load->view('Admin/footer');	
		}

		public function pdfList()
		{
			$data 					= new stdClass;
			$header_data 			= new stdClass;
			$header_data->mainMenu 	= 'Galery';
			$header_data->subMenu 	= 'pdfList';
			$data->images = $this->Galery_model->getPdfs();
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/pdflist',$data);
			$this->load->view('Admin/footer');	
		}

		public function referacesStatusUpdate($id,$newInfo)
		{
			if ($this->Galery_model->referacesStatusUpdate($id,$newInfo)) {
				redirect(admin_url('Galery/photoList'));
			} else {
				redirect(admin_url('Galery/photoList'));
			}
		}

		public function deleteReferances($id)
		{
			if ($this->Galery_model->deleteReferances($id)) {
				redirect(admin_url('Galery/photoList'));
			} else {
				redirect(admin_url('Galery/photoList'));
			}
		}

		public function pdfstatusChange($id,$newInfo)
		{
			if ($this->Galery_model->pdfstatusChange($id,$newInfo)) {
				redirect(admin_url('Galery/pdfList'));
			} else {
				redirect(admin_url('Galery/pdfList'));
			}
		}

		public function deletepdf($id)
		{
			if ($this->Galery_model->deletepdf($id)) {
				redirect(admin_url('Galery/pdfList'));
			} else {
				redirect(admin_url('Galery/pdfList'));
			}
		}
	}
?>