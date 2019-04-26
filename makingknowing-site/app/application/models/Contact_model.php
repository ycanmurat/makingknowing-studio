<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Contact_model extends Kodakil_Model
{
	function __construct(){
		parent::__construct();
	}

	public function writeMessage($getAllPosts){
		return $this->db->insert('contact',$getAllPosts);
	}
}
?>