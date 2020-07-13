<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('User_model','User_');
    $this->load->model('auth_model','auth_');
  }
  //kecamatan
public function index()
{
  $data['user']= $this->User_->getUser($this->session->userdata('email'));
  if ($data['user']['akses'] != 1) {
  redirect('auth/login');
  }
  $data['kecamatan']=  $this->db->get('kecamatan')->result_array();
  $this->form_validation->set_rules('kecamatan','kecamatan','required|trim');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Data pelaksanan kontruksi';
      $this->load->view('Templates/header', $data);
      $this->load->view('Templates/sidebar', $data);
      $this->load->view('Templates/topbar', $data);
      $this->load->view('kecamatan/index', $data);
      $this->load->view('Templates/footer', $data);
      $data['js'] = 'kecamatan.js';
      $this->load->view('Templates/javascript', $data);
    }else {
      $this->db->insert('kecamatan', ['kecamatan' => htmlspecialchars($this->input->post('kecamatan', true))]);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Berhasil ditambahkan
          </div>');
        redirect('kecamatan');
    }
}

public function update()
{
  $this->form_validation->set_rules('kecamatan','kecamatan','required|trim');
  if ($this->form_validation->run() == false) {
    redirect('kecamatan');
  }else {
    $data = [
      'id_kecamatan' => htmlspecialchars($this->input->post('id_kecamatan', true)),
      'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true))
    ];
    $this->db->where('id_kecamatan', $data['id_kecamatan']);
    $this->db->update('kecamatan', $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
          Berhasil di Update
        </div>');
      redirect('kecamatan');
  }
}

public function dataKec()
{
  $id = $this->input->post('id');

  $data= $this->db->get_where('kecamatan', ['id_kecamatan' => $id])->row_array();
  echo json_encode($data);
}
public function hapus($id)
{
  $this->db->where('id_kecamatan', $id);
  $this->db->delete('kecamatan');
  $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    Terhapus
    </div>');
    redirect('kecamatan');
}

}
