<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Comment extends Kodakil_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->checkLogin();
		$this->load->model('Admin/Comment_model');
	}

	public function index(){
		$data 			= new stdClass;
		$data->mainMenu = 'Comment';
		$data->subMenu 	= 'CommentList';

		$data->list = $this->Comment_model->getAllComment();

		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/comment_list');
		$this->load->view('Admin/footer');
	}

	public function editStatus($id,$status)
	{
		$this->Comment_model->editStatus($id,$status);
		redirect(admin_url('Comment'));
	}


	public function editMainPage($id,$status)
	{
		$this->Comment_model->editMainPage($id,$status);
		redirect(admin_url('Comment'));
	}


	public function add(){
		$data 			= new stdClass;
		$data->mainMenu = 'Comment';
		$data->subMenu 	= 'CommentAdd';

		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/comment_add');
		$this->load->view('Admin/footer');
	}

	public function setAdd()
	{	
		$data = $this->GetAllPosts();

		$data->img = $this->session->userdata('Comment_img');
		
		if ($this->Comment_model->setAdd($data)) {
			$this->session->set_flashdata('onay',1);
		}else{
			$this->session->set_flashdata('hata',1);
		}

		redirect(admin_url('Comment/Add'));
	}

	public function delete($id)
	{
		$this->Comment_model->delete($id);
		redirect(admin_url('Comment'));
	}

	public function ImageUpload(){	
		$sonuc = $this->Comment_model->ImageUpload();
		if ($sonuc != false){
			$this->session->set_userdata('Comment_img', $sonuc);
		}
	}

	public function updateComment(){

		$data = $this->GetAllPosts();
		if ($this->Comment_model->setAddUpdate($data)) {
			$this->session->set_flashdata('onayUpdate',1);
		}else{
			$this->session->set_flashdata('hataUpdate',1);
		}

		redirect(admin_url('Comment/Add'));
	}

	public function editComment($Id)
	{
		$data 			= new stdClass;
		$postData = new stdClass;
		$data->mainMenu = 'Comment';
		$data->subMenu 	= 'CommentList';

		$data->commentInfo = $this->Comment_model->getCommentById($Id);

		if ($this->input->post()) {
			$postData = $this->GetAllPosts();
			if (empty($this->session->userdata('Comment_img'))) {
				$postData->img = $data->commentInfo->img;
			} else {
				$postData->img = $this->session->userdata('Comment_img');
			}
			if ($this->Comment_model->update($postData,$Id)) {
				$this->session->set_flashdata('onay',1);
			}else{
				$this->session->set_flashdata('hata',1);
			}
		}

		$data->commentInfo = $this->Comment_model->getCommentById($Id);
		
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/comment_edit');
		$this->load->view('Admin/footer');
	}

}
?>