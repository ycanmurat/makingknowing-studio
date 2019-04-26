<?if(!defined('BASEPATH'))exit('No direct script access allowed');
class Offer_model extends Kodakil_Model
{	
	function __construct(){
		parent::__construct();
	}

	public function AddDate($data){
		return $this->db->insert('date_offer',$data);
	}
	
}
?>