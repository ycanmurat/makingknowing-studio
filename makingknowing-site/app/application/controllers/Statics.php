<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Statics extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Corporate_model','CM');
	}
	
	public function detail($url = ''){
		
		$data 				= new StdClass;
		$data->detail = $this->CM->getStatics($url);
		// prex($data->detail);

		$this->load->view('header',$data);
		$this->load->view('statikpage');
		$this->load->view('footer');
	}

}
?>