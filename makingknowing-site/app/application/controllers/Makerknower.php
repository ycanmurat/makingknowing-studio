<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Makerknower extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Corporate_model','CM');
	}
	
	public function index(){
		
		$data 				= new StdClass;

		$this->load->view('header',$data);
		$this->load->view('makerknower');
		$this->load->view('footer');
	}

	public function blog()
	{

		$data 				= new StdClass;
		$data->blog = $this->CM->getBlogs();
		// prex($data->blog);
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}

	public function podcast()
	{

		$data 				= new StdClass;
		$data->podcasts = $this->CM->getPodcasts();
		// prex($data->podcasts);

		$this->load->view('header',$data);
		$this->load->view('podcast');
		$this->load->view('footer');
	}

	public function channel()
	{
		$data 				= new StdClass;
		$data->channel = $this->CM->getChannels();
		// prex($data->channel);

		$this->load->view('header',$data);
		$this->load->view('channel');
		$this->load->view('footer');
	}

}
?>