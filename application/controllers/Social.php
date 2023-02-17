<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Social extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Msocial");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['social_medias'] = $this->Msocial->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('social/social', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('social/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $url = $this->input->post('url');
            $icon = $this->input->post('icon');
            $data = array(
                'name' => $name,
                'url' => $url,
                'icon' => $icon,
            );
            $this->Msocial->save($data);
            if ($data) {
                set_pesan('Data berhasil ditambahkan');
                redirect('social');
            } else {
                set_pesan('Gagal menambahkan data');
                redirect('social/create');
            }
        } else {
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('social/create');
            $this->load->view('layout/footer');
        }
    }
    function edit($id)
    {
        $data['social_medias'] = $this->Msocial->getById($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('social/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $url = $this->input->post('url');
            $icon = $this->input->post('icon');
            $data = array(
                'id' => $id,
                'name' => $name,
                'url' => $url,
                'icon' => $icon,
            );
            $this->Msocial->update($data, $id);
            if ($data) {
                set_pesan('Data berhasil diedit');
                redirect('social');
            } else {
                set_pesan('Gagal mengedit data');
                redirect('social/edit');
            }
        } else {
            $id = $this->input->post('id');
            $data['social_medias'] = $this->Msocial->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar', $data);
            $this->load->view('social/create');
            $this->load->view('layout/footer');
        }
    }
    function delete($id)
    {
        $this->Msocial->delete($id);
        if ($id) {
            set_pesan('Data berhasil dihapus');
            redirect('social');
        } else {
            set_pesan('Gagal menghapus data');
            redirect('social');
        }
    }
}
