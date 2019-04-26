<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Content extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Content_Model');
	}

	public function index($slug = '')
	{
		$data = new StdClass;
		$product = $this->Content_Model->getContentBySlug($slug);
		$data->productMenu = $this->Constract_model->productMenu();
		$data->Lang 		= $this->Constract_model->getLangStatics();
		if ($product == false) {
			$data->menu = $this->Constract_model->menu();
			$data->productMenu = $this->Constract_model->productMenu();

       	 	$this->output->set_status_header('404');

			$this->load->view('header',$data);
			$this->load->view('404');
			$this->load->view('footer');
		}else{
			$data->product = $product;
			//prex($data);
			$data->menu = $this->Constract_model->menu();
			$data->productMenu = $this->Constract_model->productMenu();


			$this->load->view('header',$data);
			$this->load->view('altpage');
			$this->load->view('footer');
		}
	}
}
?>