<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Products extends Kodakil_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}
	
	public function index($slug = '',$slug2 = '')
	{
		$data = new StdClass;
		$data->Lang 		= $this->Constract_model->getLangStatics();

		$data->menu = $this->Constract_model->menu();
		$data->productMenu = $this->Constract_model->productMenu();

		$data->leftMenu = $this->Product_model->getCategoryList();

		$data->products = $this->Product_model->getListBySlug($slug,$slug2);
		if ($data->products == false) {
			
			$data->menu = $this->Constract_model->menu();
			$data->productMenu = $this->Constract_model->productMenu();

       	 	$this->output->set_status_header('404');

			$this->load->view('header',$data);
			$this->load->view('404');
			$this->load->view('footer');
		}elseif ($data->products == 3) {
			$data->menu = $this->Constract_model->menu();
			$data->productMenu = $this->Constract_model->productMenu();

			$this->load->view('header',$data);
			$this->load->view('productlist');
			$this->load->view('footer');
		} else{
			$this->load->view('header',$data);
			$this->load->view('productlist');
			$this->load->view('footer');
		}
	}

	public function detail($slug = '')
	{
		$data = new StdClass;
		$data->Lang 		= $this->Constract_model->getLangStatics();

		$data->menu = $this->Constract_model->menu();
		$data->productMenu = $this->Constract_model->productMenu();

		$data->product = $this->Product_model->getProductByProductSlug($slug);
		//prex($data->product);

		if ($data->product == false) {
			
			$data->menu = $this->Constract_model->menu();
			$data->productMenu = $this->Constract_model->productMenu();

       	 	$this->output->set_status_header('404');

			$this->load->view('header',$data);
			$this->load->view('404');
			$this->load->view('footer');
		}else{
			$this->load->view('header',$data);
			$this->load->view('productalt');
			$this->load->view('footer');
		}
	}
}
?>