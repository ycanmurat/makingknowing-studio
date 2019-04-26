<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Service_model extends Kodakil_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getImages()
	{
		$this->db->from('service_images');
		$this->db->where(array('deleted'=>0,'status'=>1));
		$return = $this->db->get();
		if ($return->num_rows()>0) {
			return $return->result();
		} else {
			return array();
		}
	}

	public function getTitleAndContents()
	{
		$returnArray = array();
		$this->db->from('service_titles');
		$this->db->where(array('status'=>1,'deleted'=>0));
		$listTitle = $this->db->get();
		if (!$listTitle->num_rows() > 0) 
		{
			return array();
		}
		$getTitle = $listTitle->result();
		foreach ($getTitle as $key => $titleVal) 
		{
			$this->db->from('service_content');
			$this->db->where(array('status'=>1,'deleted'=>0,'title_id'=>$titleVal->id));
			$getContent = $this->db->get();
			if ($getContent->num_rows()>0) 
			{
				$titleVal->contents = $getContent->result();
			}
			else
			{
				$titleVal->contents = array();
			}
			$returnArray[] = $titleVal;
		}
		return $returnArray;
	}

	public function getPdf()
	{
		$this->db->from('pdf');
		$this->db->where(array('deleted'=>0,'status'=>1));
		$return = $this->db->get();
		if ($return->num_rows()>0) {
			return $return->result();
		} else {
			return array();
		}
	}
}
?>