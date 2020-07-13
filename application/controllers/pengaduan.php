<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('User_model','User_');
    $this->load->model('Image_model','Image_');
    $this->load->model('auth_model','auth_');
  }
  //kecamatan
public function index()
{
  $data['user']= $this->User_->getUser($this->session->userdata('email'));
  if ($data['user']['akses'] != 1) {
  redirect('auth/login');
  }
  $data['pengaduan']=  $this->auth_->getPengaduan();
  $data['title'] = 'Data Pengaduan Masyarakat';
  $this->load->view('Templates/header', $data);
  $this->load->view('Templates/sidebar', $data);
  $this->load->view('Templates/topbar', $data);
  $this->load->view('pengaduan/index', $data);
  $this->load->view('Templates/footer', $data);
  $data['js'] = 'pengaduan.js';
  $this->load->view('Templates/javascript', $data);
}
public function desa()
{
  $data['user']= $this->User_->getUser($this->session->userdata('email'));
  if ($data['user']['akses'] != 3) {
  redirect('auth/login');
  }
  $data['desa'] = $this->db->get_where('desa', ['id_user' => $data['user']['id_user']])->row_array();
  $data['pengaduan']=  $this->auth_->getPengaduanDesa($data['desa']['id_desa']);
  $data['title'] = 'Data Pengaduan Masyarakat';
  $this->load->view('Templates/header', $data);
  $this->load->view('Templates/desa_sidebar', $data);
  $this->load->view('Templates/topbar', $data);
  $this->load->view('pengaduan/index', $data);
  $this->load->view('Templates/footer', $data);
  $data['js'] = 'pengaduan.js';
  $this->load->view('Templates/javascript', $data);
}
public function dataKontruksi()
{
  $id = $this->input->post('id');
  $data= $this->db->get_where('kontruksi', ['id_kontruksi' => $id])->row_array();
  echo json_encode($data);
}
}
