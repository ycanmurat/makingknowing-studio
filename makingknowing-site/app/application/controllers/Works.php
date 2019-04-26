<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Works extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Corporate_model','CM');
	}
	
	public function index(){
		
		$data 				= new StdClass;
		$data->works = $this->CM->getWorks();
		// prex($data->works);

		$this->load->view('header',$data);
		$this->load->view('works');
		$this->load->view('footer');
	}

	public function sub($id = 0)
	{
		
		$data 				= new StdClass;
		$data->works = $this->CM->getSubWorks($id);

		$this->load->view('header',$data);
		$this->load->view('work-categories');
		$this->load->view('footer');
	}

	public function detail($id = 0){
		
		$data 				= new StdClass;
		$data->detail = $this->CM->getWorkDetail($id);
		
		prex($data->detail);

		$this->load->view('header',$data);
		$this->load->view('works-detail');
		$this->load->view('footer');
	}

}
?>