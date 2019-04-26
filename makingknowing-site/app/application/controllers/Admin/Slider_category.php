<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Slider_category extends Kodakil_Controller {
		
		function __construct() {
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Slider_category_model');
		}

		public function index() {
			$data = new StdClass;
			$data->mainMenu = 'Slider_category_main';
			$data->subMenu = 'SliderCategoryList';
			$data->categoryInformation = $this->Slider_category_model->categoryInformation();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/slider_category',$data);
			$this->load->view('Admin/footer');
		}

		public function editCategory($id) {
			$data = new StdClass;
			$data->mainMenu = 'Slider_category_main';
			$data->subMenu = 'SliderCategoryList';
			$data->getCategoryInformation = $this->Slider_category_model->getCategoryInformation($id);

			if ($this->input->post()) {

				if (empty($this->session->flashdata('image'))) {
					$image = $data->getCategoryInformation->category_image;
				} else {
					$image = $this->session->flashdata('image');
				}

				$category_name = $this->input->post('category_name',true);
				$category_content = $this->input->post('category_content',true);
				$categoryInformation = array('category_name' => $category_name,
											 'category_content' => $category_content,
										   	 'category_slug' => url_seo($category_name),
										   	 'category_image' => $image);
				if ($this->Slider_category_model->updateCategory($categoryInformation,$id)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Slider_category/editCategory/'.$id));
				} else {
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Slider_category/editCategory/'.$id));
				}
			}
			$data->getCategoryInformation = $this->Slider_category_model->getCategoryInformation($id);
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/slider_category_update',$data);
			$this->load->view('Admin/footer');
		}

		public function add() {
			$data = new StdClass;
			$data->mainMenu = 'Slider_category_main';
			$data->subMenu = 'sliderCategoryAdd';

			if ($this->input->post()) {
				$category_name = $this->input->post('category_name',true);
				$category_content = $this->input->post('category_content',true);
				$image = $this->session->flashdata('image');
				$CategoryInformation = array('category_name' => $category_name,
										   	 'category_content' => $category_content,
										   	 'category_slug' => url_seo($category_name),
										   	 'category_image' => $image);
				if ($this->Slider_category_model->addCategory($CategoryInformation)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Slider_category/add'));
				} else {
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Slider_category/add'));
				}
			}

			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/slider_category_add',$data);
			$this->load->view('Admin/footer');
		}

		public function ImageUpload(){	
			$information = $this->Slider_category_model->ImageUpload();
			if ($information != false) {
				$this->session->set_flashdata('image', $information);
			}
		}

		public function categoryStatusUpdate($id,$newInfo) {
			if ($this->Slider_category_model->categoryStatusUpdate($id,$newInfo)) {
				redirect(admin_url('Slider_category'));
			} else {
				redirect(admin_url('Slider_category'));
			}
		}

		public function deleteCategory($id) {
			if ($this->Slider_category_model->deleteCategory($id)) {
				redirect(admin_url('Slider_category'));
			} else {
				redirect(admin_url('Slider_category'));
			}
		}

		public function categoryHomeUpdate($id,$newMenuInfo){
			if ($this->Slider_category_model->categoryHomeUpdate($id,$newMenuInfo)) {
				redirect(admin_url('Slider_category'));
			} else {
				$this->session->set_flashdata('hata','1');
				redirect(admin_url('Slider_category'));
			}
		}

		public function contentAdd(){
			$data = new StdClass;
			$PostData = new StdClass;
			$data->mainMenu = 'Slider_category_main';
			$data->subMenu = 'sliderContentAdd';
			$data->categories = $this->Slider_category_model->getCategories();
			if ($this->input->post()) {
				$PostData = $this->getAllPosts();
				$PostData->title_image = $this->session->flashdata('image');
				$PostData->content_image = $this->session->userdata('thirdImage');
				$PostData->category_slug = url_seo($PostData->category_name);
				if ($this->Slider_category_model->addContent($PostData)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Slider_category/contentAdd'));
				} else {
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Slider_category/contentAdd'));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/slider_content',$data);
			$this->load->view('Admin/footer');
		}

		public function thirdImage(){	
			$thirdimage = $this->Slider_category_model->thirdImageUpload();
				if ($thirdimage != false){
					$this->session->set_userdata('thirdImage', $thirdimage);
				}
		}

		public function contents(){
			$data = new StdClass;
			$data->mainMenu = 'Slider_category_main';
			$data->subMenu = 'sliderContent';
			$data->contents = $this->Slider_category_model->getContent();
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/contents');
			$this->load->view('Admin/footer');
		}

		public function deleteContent($id){
			if ($this->Slider_category_model->deleteContent($id)) {
				redirect(admin_url('Slider_category/contents'));
			} else {
				redirect(admin_url('Slider_category/contents'));
			}
		}

		public function contentStatusUpdate($id,$newInfo) {
			if ($this->Slider_category_model->contentStatusUpdate($id,$newInfo)) {
				redirect(admin_url('Slider_category/contents'));
			} else {
				redirect(admin_url('Slider_category/contents'));
			}
		}

		public function editContent($id){
			$data = new StdClass;
			$PostData = new StdClass;
			$data->mainMenu = 'Slider_category_main';
			$data->subMenu = 'sliderContentAdd';
			$data->content = $this->Slider_category_model->getContentRow($id);
			$data->categories = $this->Slider_category_model->getCategories();
			if ($this->input->post()) {
				$PostData = $this->getAllPosts();
				if (empty($this->session->flashdata('image'))) {
					$PostData->title_image = $data->content->title_image;
				} else {
					$PostData->title_image = $this->session->flashdata('image');
				}
				if (empty($this->session->userdata('thirdImage'))) {
					$PostData->content_image = $data->content->content_image;
				} else {
					$PostData->content_image = $this->session->userdata('thirdImage');
				}
				$PostData->category_slug = url_seo($PostData->category_name);
				if ($this->Slider_category_model->UpdateContent($PostData,$id)) {
					$this->session->set_flashdata('onay','1');
					redirect(admin_url('Slider_category/editContent/'.$id));
				} else {
					$this->session->set_flashdata('hata','1');
					redirect(admin_url('Slider_category/editContent/'.$id));
				}
			}
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/update_slider_content',$data);
			$this->load->view('Admin/footer');
		}
	}
?>