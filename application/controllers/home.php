<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private function getAllCategory() {
		$q = $this->db->query("SELECT * FROM kategori_resto");
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else {
			return false;
		}
	}

	private function getDetailByID($id) {
		$q = $this->db->query("SELECT * FROM resto WHERE id = ?", array($id));
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data = $row;
			}
			return $data;
		}
		else {
			return false;
		}
	}

	private function getRestoByCategoryID($id) {
		$q = $this->db->query("SELECT * FROM resto WHERE id_kategori = ?", array((int)$id));
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data['resto'][] = $row;
			}
			$q = $this->db->query("SELECT * FROM kategori_resto WHERE id_kategori = ?", array((int)$id));
			foreach ($q->result() as $row) {
				$data['category'] = $row;
			}
			return $data;
		}
		else {
			return false;
		}
	}


	public function index()
	{
		$data['category'] = $this->getAllCategory();
		$data['content'] = 'home';
		$this->load->view('template',$data);
	}

	public function category($id) {
		$result = $this->getRestoByCategoryID($id);
		if($result) {
			$data['category'] = $result['category'];
			$data['resto_list'] = $result['resto'];
			$data['content'] = 'category';
			$this->load->view('template',$data);
		}
		else {
			redirect(base_url());
		}
	}

	public function detail($id) {
		$result = $this->getDetailByID($id);
		if($result) {
			$data['resto'] = $result;
			$data['content'] = 'category_detail';
			$this->load->view('template',$data);
		}
		else {
			redirect(base_url());
		}
	}
}
