<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Educations extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Meducations");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['educations'] = $this->Meducations->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('educations/educations', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('educations/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('graduated_date', 'graduated_date', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $start_date = $this->input->post('start_date');
            $graduated_date = $this->input->post('graduated_date');
            $description = $this->input->post('description');
            $data = array(
                'name' => $name,
                'start_date' => $start_date,
                'graduated_date' => $graduated_date,
                'description' => $description,
            );
            $this->Meducations->save($data);
            if ($data) {
                set_pesan('Data berhasil ditambahkan');
                redirect('educations');
            } else {
                set_pesan('Gagal menambahkan data');
                redirect('educations/create');
            }
        } else {
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('educations/create');
            $this->load->view('layout/footer');
        }
    }
    function edit($id)
    {
        $data['educations'] = $this->Meducations->getById($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('educations/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('graduated_date', 'graduated_date', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $start_date = $this->input->post('start_date');
            $graduated_date = $this->input->post('graduated_date');
            $description = $this->input->post('description');
            $data = array(
                'id' => $id,
                'name' => $name,
                'start_date' => $start_date,
                'graduated_date' => $graduated_date,
                'description' => $description,
            );
            $this->Meducations->update($data, $id);
            if ($data) {
                set_pesan('Data berhasil diedit');
                redirect('educations');
            } else {
                set_pesan('Gagal mengedit data');
                redirect('educations/create');
            }
        } else {
            $id = $this->input->post('id');
            $data['education'] = $this->Meducations->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('educations/create');
            $this->load->view('layout/footer');
        }
    }
    function delete($id)
    {
        $this->Meducations->delete($id);
        if ($id) {
            set_pesan('Data berhasil dihapus');
            redirect('educations');
        } else {
            set_pesan('Gagal menghapus data');
            redirect('educations');
        }
    }
}
