<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Contact extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Contact_model');
	}
	
	public function index(){
		
		$data 				= new StdClass;
		$data->Lang 		= $this->Constract_model->getLangStatics();
		
		$this->load->view('header',$data);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->form_validation->set_rules('name', 'İsim Soyisim', 'required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('number', 'Telefon', 'required|min_length[10]|max_length[14]');
		$this->form_validation->set_rules('email', 'E-Posta', 'required|min_length[5]|max_length[250]|valid_email');
		$this->form_validation->set_rules('message', 'Mesajınız', 'required|min_length[7]');
		if ($this->form_validation->run() == FALSE){
			print validation_errors('<div class="alert alert-danger">', '</div>');
		}else{
			$getAllPosts = $this->GetAllPosts();
			if ($this->Contact_model->writeMessage($getAllPosts)) {
				print "success";
			}else{
				print "error";
			}
		}
	}

	public function careers()
	{
		$data 				= new StdClass;
		$data->Lang 		= $this->Constract_model->getLangStatics();
		$content = $data->Lang->careersContent;
		$data->content = str_replace('{', '<a href="javascript:void(0)" class="careerButton">', str_replace('}', '<img src="'.site_url('assets/Front/images/arrow.svg').'"></a> ', $content ));
		$this->load->view('header',$data);
		$this->load->view('careers');
		$this->load->view('footer');
	}

	public function careerdetail($name = '')
	{
		$data 				= new StdClass;
		$data->name = urldecode($name);
		$this->load->view('header',$data);
		$this->load->view('careers-form');
		$this->load->view('footer');
	}
}
?>