<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Works extends Kodakil_Controller{
	function __construct(){
		parent::__construct();
		$this->checkLogin();
		$this->load->model('Admin/Works_model');
	}

	public function index(){
		$data 			= new StdClass;
		$data->mainMenu = 'Works';
		$data->subMenu 	= 'WorksList';


		$data->getMenu 	= $this->Works_model->getMenu();
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/works');
		$this->load->view('Admin/footer');
	}

	public function add(){
		$data 			= new StdClass;
		$data->mainMenu = 'Works';
		$data->subMenu 	= 'WorksAdd';
		$data->menus 	= $this->Works_model->getMenu();

		if ($this->input->post()) {
			$postData = $this->getAllPosts();
			$postData->menu_image = $this->session->userdata('productImage');
			$postData->background_image = $this->session->userdata('productImage2');
			$postData->video_image = $this->session->userdata('productImage3');
			if ($this->Works_model->addMenu($postData)) {
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('works/add'));
			}else{
				$this->session->set_flashdata('hata','1');
				redirect(admin_url('works/add'));
			}
		}
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/works_add');
		$this->load->view('Admin/footer');
	}

	public function update($id)
	{
		$data = new StdClass;
		$data->mainMenu = 'Works';
		$data->subMenu 	= 'WorksList';
		if ($this->input->post()) {
			$data = $this->getAllPosts();

			if ($this->session->userdata('productImage')) {
				$data->menu_image = $this->session->userdata('productImage');
				$this->session->unset_userdata('productImage');
			}
			if ($this->session->userdata('productImage2')) {
				$data->background_image = $this->session->userdata('productImage2');
				$this->session->unset_userdata('productImage2');
			}
			if ($this->session->userdata('productImage3')) {
				$data->video_image = $this->session->userdata('productImage3');
				$this->session->unset_userdata('productImage3');
			}

			$this->Works_model->update($data,$id);
			$this->session->set_flashdata('onay','1');
			redirect(admin_url('works/update/'.$id));
		}else{
			$data->id = $id;
			$data->menus = $this->Works_model->getMenuNotIn($id);
			$data->menu = $this->Works_model->getMenuById($id);
			if ($data->menu == false) {
				redirect(admin_url('Works'));
			}else{
				$this->load->view('Admin/header',$data);
				$this->load->view('Admin/works_update');
				$this->load->view('Admin/footer');
			}
		}
	}

	public function menuStatusUpdate($Id,$newInfo){
		if($this->Works_model->menuStatusUpdate($Id,$newInfo)){
			redirect(admin_url('Works'));
		}else{
			redirect(admin_url('Works'));
		}
	}

	public function deleteMenu($Id){
		if($this->Works_model->deleteMenu($Id)){
			redirect(admin_url('Works'));
		}else{
			redirect(admin_url('Works'));
		}
	}

	public function menuSort(){
		$sort = $this->input->post('sort',true);
		$this->Works_model->menuSort($sort);
		redirect(admin_url('Works'));
	}

	public function detail($id)
	{
		$data 			= new StdClass;
		$data->mainMenu = 'Works';
		$data->subMenu 	= 'WorksList';
		$data->id = $id;

		$data->getMenu 	= $this->Works_model->getDetails($id);

		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/works_detail');
		$this->load->view('Admin/footer');
	}


	public function detail_add($id){
		$data 			= new StdClass;
		$data->mainMenu = 'Works';
		$data->subMenu 	= 'WorksAdd';

		$data->id = $id;

		if ($this->input->post()) {
			$postData = $this->getAllPosts();
			$postData->menu_image = $this->session->userdata('productImage');
			$postData->main_menu = $id;
			if ($this->Works_model->detailAddMenu($postData)) {
				$this->session->set_flashdata('onay','1');
				redirect(admin_url('works/detail/'.$id));
			}else{
				$this->session->set_flashdata('hata','1');
				redirect(admin_url('works/detail/'.$id));
			}
		}
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/works_detail_add');
		$this->load->view('Admin/footer');
	}


	public function detailMenuStatusUpdate($Id,$newInfo,$rt){
		if($this->Works_model->detailMenuStatusUpdate($Id,$newInfo)){
			redirect(admin_url('Works/detail/'.$rt));
		}else{
			redirect(admin_url('Works/detail/'.$rt));
		}
	}

	public function detailDeleteMenu($Id,$rt){
		if($this->Works_model->detailDeleteMenu($Id)){
			redirect(admin_url('Works/detail/'.$rt));
		}else{
			redirect(admin_url('Works/detail/'.$rt));
		}
	}

	public function detailMenuSort($id){
		$sort = $this->input->post('sort',true);
		$this->Works_model->detailMenuSort($sort);
		redirect(admin_url('Works/detail/'.$id));
	}


	public function detail_update($id)
	{
		$data = new StdClass;
		$data->mainMenu = 'Works';
		$data->subMenu 	= 'WorksList';
		if ($this->input->post()) {
			$data = $this->getAllPosts();

			if ($this->session->userdata('productImage')) {
				$data->menu_image = $this->session->userdata('productImage');
				$this->session->unset_userdata('productImage');
			}

			$this->Works_model->detailIpdate($data,$id);
			$this->session->set_flashdata('onay','1');
			redirect(admin_url('works/detail/'.$id));
		}else{
			$data->id = $id;
			$data->menu = $this->Works_model->getMenuDetailById($id);

			if ($data->menu == false) {
				redirect(admin_url('Works'));
			}else{
				$this->load->view('Admin/header',$data);
				$this->load->view('Admin/works_detail_update');
				$this->load->view('Admin/footer');
			}
		}
	}
}
?>