<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class JobApp extends Kodakil_Controller
	{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/JobApp_model');
			$this->load->helper('jobapp_helper');
		}

		public function index(){
			$data 			= new StdClass;
			$data->mainMenu = 'JobApp';
			$data->subMenu	= 'JobAppList';

			$data->list 	= $this->JobApp_model->getJobApp();

			//prex($data->list);

			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/jobapp');
			$this->load->view('Admin/footer');
		}

		public function delete($id)
		{
			$this->JobApp_model->delete($id);
			redirect(admin_url('JobApp'));
		}

		public function PositionDelete($id)
		{
			$this->JobApp_model->PositionDelete($id);
			redirect(admin_url('JobApp/positions'));
		}

		public function positions()
		{

			$data 			= new StdClass;
			$data->mainMenu = 'JobApp';
			$data->subMenu	= 'JobAppPositions';
			
			$data->list 	= $this->JobApp_model->getPositions();

			//prex($data->list);

			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/jobpositions');
			$this->load->view('Admin/footer');
		}

		public function addPosition()
		{
			$this->JobApp_model->setPositions($this->input->post('name',true));

			redirect(admin_url('JobApp/positions'));
		}

	}
?>