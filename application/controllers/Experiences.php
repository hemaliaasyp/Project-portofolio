<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Experiences extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mexperiences");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['experiences'] = $this->Mexperiences->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('experiences/experiences', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('experiences/create');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('resign_date', 'resign_date', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == true) {
            $name = $this->input->post('name');
            $start_date = $this->input->post('start_date');
            $resign_date = $this->input->post('resign_date');
            $description = $this->input->post('description');
            $data = array(
                'name' => $name,
                'start_date' => $start_date,
                'resign_date' => $resign_date,
                'description' => $description,
            );
            $this->Mexperiences->save($data);
            if ($data) {
                set_pesan('Data berhasil ditambahkan');
                redirect('experiences');
            } else {
                set_pesan('Gagal menambahkan data');
                redirect('experiences/create');
            }
        } else {
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('experiences/create');
            $this->load->view('layout/footer');
        }
    }
    function edit($id)
    {
        $data['experiences'] = $this->Mexperiences->getById($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('experiences/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('resign_date', 'resign_date', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $start_date = $this->input->post('start_date');
            $resign_date = $this->input->post('resign_date');
            $description = $this->input->post('description');
            $data = array(
                'id' => $id,
                'name' => $name,
                'start_date' => $start_date,
                'resign_date' => $resign_date,
                'description' => $description,
            );
            $this->Mexperiences->update($data, $id);
            if ($data) {
                set_pesan('Data berhasil diedit');
                redirect('experiences');
            } else {
                set_pesan('Gagal mengedit data');
                redirect('experiences/create');
            }
        } else {
            $id = $this->input->post('id');
            $data['education'] = $this->Mexperiences->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('experiences/create');
            $this->load->view('layout/footer');
        }
    }
    function delete($id)
    {
        $this->Mexperiences->delete($id);
        if ($id) {
            set_pesan('Data berhasil dihapus');
            redirect('experiences');
        } else {
            set_pesan('Gagal menghapus data');
            redirect('experiences');
        }
    }
}
