<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Home extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}
	
	public function index(){
		$data 				= new StdClass;
		$data->mainMenu 	= 'Home';
		$data->Lang 		= $this->Constract_model->getLangStatics();
		// prex($data->Lang);
		
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function eBulletin(){
		$this->form_validation->set_rules('email', '', 'required|min_length[2]|max_length[250]|valid_email|is_unique[bulletin.user_email]');
		if ($this->form_validation->run() != FALSE){
			$email = $this->input->post('email', true);
			$data = array('user_email'=>$email,'user_ip'=>$_SERVER['REMOTE_ADDR']);
			if ($this->Home_model->eBulletin($data)) {
				echo 1;
			}else{
				echo 0;
			}
		}
		else{
			echo 2;
		}
	}
}
?>