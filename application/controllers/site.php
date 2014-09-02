<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Site extends CI_Controller 
{
	public function __construct() {
		parent:: __construct();
 
		$this->load->helper("url");
		$this->load->model("News_model");
		$this->load->library("pagination");
	}
 
	public function index() {
		$config["base_url"] = base_url()."/index.php/site/index";
		$config["total_rows"] = $this->News_model->record_count();//$this->db->get('news')->num_rows();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
 		$config['full_tag_open']='<div id="pagination">';
		$config['full_tag_close']='</div>';
 		$choice = $config["total_rows"] / $config["per_page"];
   		$config["num_links"] = round($choice);
		
		$config['next_link'] = '下一頁';
		
		$config['prev_link'] = '上一頁';
		
		
		$this->pagination->initialize($config);
 
		$page = $this->uri->segment(3);
		$data["results"] = $this->News_model
			->fetch_news($config["per_page"], $page);
		
		//$this->db->get('news',$config["per_page"],$this->uri->segment(3));
		
		/**/
		$data["links"] = $this->pagination->create_links();
 
		$this->load->view("pagination_view", $data);
	}
}