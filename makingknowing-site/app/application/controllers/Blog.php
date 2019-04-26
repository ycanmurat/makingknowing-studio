<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Blog extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Blog_model','BM');
	}
	
	public function index()
	{
		$data 				= new StdClass;
		$data->menu = $this->Constract_model->menu();
		$data->Lang 		= $this->Constract_model->getLangStatics();
		$data->productMenu = $this->Constract_model->productMenu();
		$data->news = $this->BM->getList();
		$this->load->view('header',$data);
		$this->load->view('news');
		$this->load->view('footer');
	}

	public function detail($slug='')
	{
		$data 				= new StdClass;
		$data->menu = $this->Constract_model->menu();
		$data->Lang 		= $this->Constract_model->getLangStatics();
		$data->productMenu = $this->Constract_model->productMenu();
		if ($data->blogDetail = $this->BM->getSecurityAndResult($slug)) {
			$this->load->view('header',$data);
			$this->load->view('altnews',$data);
			$this->load->view('footer');	
		}else{
			$data->title = "404 - Arg Grup";
			$data->description = "Aradığınız Sayfa Bulunamadı.";
			$this->output->set_status_header('404');
			$this->load->view('header');
			$this->load->view('404');
			$this->load->view('footer');
		}
	}
}
?>