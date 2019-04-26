<?php 
/**
 * 
 */
class Campaign_model extends Kodakil_model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getMenus()
	{
		$this->db->where(array('deleted' => 0));
		$q = $this->db->get('campaign_menu');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function getContentListByFirst()
	{
		$this->db->order_by('id', 'ASC');
		$this->db->select('c.*,m.name menu_name');
		$this->db->join('campaign c','c.menu_id = m.id');
		$q = $this->db->get('campaign_menu m');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function getContentListByMenuSlug($slug)
	{
		$this->db->where(array('m.slug' => $slug));
		$this->db->select('c.*,m.name menu_name');
		$this->db->join('campaign c','c.menu_id = m.id');
		$q = $this->db->get('campaign_menu m');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function getCampaignDetail($slug)
	{
		$this->db->where(array('deleted' => 0,'slug' => $slug));
		$q = $this->db->get('campaign');
		if ($q->num_rows()>0) {
			$campaign = $q->row();
			unset($q);
			$this->db->where('campaign_id',$campaign->Id);
			$q = $this->db->get('campaign_images');
			if ($q->num_rows()>0) {
				$campaign->images = $q->result();
			}else{
				$campaign->images = array();
			}
			return $campaign;
		}else{
			return false;
		}
	}

}
?>