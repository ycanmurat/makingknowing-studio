<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class About extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Corporate_model','CM');
		$this->load->model('About_model');
	}
	
	public function index(){
		
		$data 				= new StdClass;

		$this->load->view('header',$data);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function us()
	{
		$data 				= new StdClass;
		$data->Lang 		= $this->Constract_model->getLangStatics();

		$this->load->view('header',$data);
		$this->load->view('about-detail');
		$this->load->view('footer');
	}

	public function whatwedo()
	{
		$data 				= new StdClass;
		$data->data = $this->About_model->getWhatWeDo();
		$this->load->view('header',$data);
		$this->load->view('whatwedo');
		$this->load->view('footer');
	}

	public function whatwedoDetail($id)
	{
		$data 				= new StdClass;
		$data->data = $this->About_model->getWhatWeDoWithId($id);

		$this->load->view('header',$data);
		$this->load->view('whatwedo-detail');
		$this->load->view('footer');
	}

	public function achievement()
	{
		$data 				= new StdClass;

		$data->archivment = $this->About_model->getArchivment();
		
		$this->load->view('header',$data);
		$this->load->view('achievement');
		$this->load->view('footer');
	}
}
?>