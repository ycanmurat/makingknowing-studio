<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Referances extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Referances_model');
	}
	
	public function index(){
		$data 				= new StdClass;
		$data->menu = $this->Constract_model->menu();
		$data->Lang 		= $this->Constract_model->getLangStatics();
		$data->Lang = $this->Constract_model->getLangStatics();
		$data->referances = $this->Referances_model->getReferances();
		$data->productMenu = $this->Constract_model->productMenu();
		$this->load->view('header',$data);
		$this->load->view('referances');
		$this->load->view('footer');
	}
}
?>