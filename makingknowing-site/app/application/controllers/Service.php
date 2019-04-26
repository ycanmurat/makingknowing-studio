<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Service extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Service_model','SM');
	}
	
	public function index(){
		
		$data 				= new StdClass;
		$data->menu = $this->Constract_model->menu();
		$data->Lang 		= $this->Constract_model->getLangStatics();
		$data->productMenu = $this->Constract_model->productMenu();
		$data->images = $this->SM->getImages();
		$data->pdf = $this->SM->getPdf();
		$data->contents = $this->SM->getTitleAndContents();
		$this->load->view('header',$data);
		$this->load->view('services');
		$this->load->view('footer');
	}
}
?>