<?php

class Works  extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model("Mworks");
        $this->load->library('form_validation');
    }

    public  function index()
    {
        $data['categories'] = $this->mcategory->getAll();
        $data['works'] = $this->Mworks->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('works/works', $data);
        $this->load->view('layout/footer');
    }
    public  function detail($id)
    {

        $data['works'] = $this->Mworks->getDetail($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('works/detail', $data);
        $this->load->view('layout/footer');
    }
    public  function create()
    {
        $data['categories'] = $this->mcategory->getAll();
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('works/create', $data);
        $this->load->view('layout/footer');
    }
    public function save()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('year', 'year', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');
        // $this->form_validation->set_rules('content', 'Content', 'required');
        // $this->form_validation->set_rules('content', 'Content', 'required');
        // $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == true) {
            $title = $this->input->post('title');
            $year = $this->input->post('year');
            $content = $this->input->post('content');
            $category_id = $this->input->post('category_id');
            $featured_image = $this->input->post('featured_image');


            $data = array(
                'title' => $title,
                'year' => $year,
                'content' => $content,
                'featured_image' => $featured_image,
                'created_by' => $this->session->userdata('id'),
                // 'updated_by' => $this->session->userdata('id'),
            );
            $this->Mworks->save($data);
            $work_id = $this->db->insert_id();
            foreach ($category_id as $category) {
                $dt = array(
                    'work_id' => $work_id,
                    'category_id' => $category
                );
                // $this->Mworks->save($dt);
                $this->db->insert('work_categories', $dt);
            }
            if ($data) {
                set_pesan('Data berhasil ditambahkan');
                redirect('works');
            } else {
                set_pesan('Gagal menambahkan data');
                redirect('works/create');
            }
        } else {
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('works/create');
            $this->load->view('layout/footer');
        }
    }
    function edit($id)
    {
        $data['categories'] = $this->mcategory->getAll();
        $data['works'] = $this->Mworks->getById($id);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('works/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('featured_image', 'Featured Image', 'required');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $year = $this->input->post('year');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $featured_image = $this->input->post('featured_image');

            $data = array(
                'id' => $id,
                'title' => $title,
                'year' => $year,
                'content' => $content,
                'featured_image' => $featured_image,
                'updated_by' => $this->session->userdata('id'),
            );
            $this->Mworks->update($data, $id);
            if ($data) {
                set_pesan('Data berhasil diedit');
                redirect('works');
            } else {
                set_pesan('Gagal mengedit data');
                redirect('works/create');
            }
        } else {
            // $id = $this->input->post('id');
            // $data['works'] = $this->Mworks->getById($id);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/navbar');
            $this->load->view('works/create');
            $this->load->view('layout/footer');
        }
    }

    function delete($id)
    {
        $this->mworks->delete($id);
        if ($id) {
            set_pesan('Data berhasil dihapus');
            redirect('works');
        } else {
            set_pesan('Gagal menghapus data');
            redirect('works');
        }
    }

    public function datatable()
    {
        $search = $this->input->post("search");
        $draw  = intval($this->input->post("draw"));
        $start  = intval($this->input->post("start"));
        $length  = intval($this->input->post("length"));
        // $works = $this->Mworks->getdatatable($search, $start, $length);
        $no = $start + 1;
        $filter = [
            "year" => $this->input->post("year"),
            "category" => $this->input->post("category")
        ];
        $works = $this->mworks->getdatatable($search, $start, $length, $filter);
        $no = $start + 1;

        foreach ($works as $i => $work) {
            $work->no = $no++;
        }

        $countAll = $this->Mworks->countTotal();
        $countFiltered = $this->Mworks->countFiltered($search, $start, $length, $filter);

        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                "draw"                => $draw,
                "recordsTotal"        => $countAll,
                "recordsFiltered"    => $countFiltered,
                "data"                => $works
            ]));
    }
}
