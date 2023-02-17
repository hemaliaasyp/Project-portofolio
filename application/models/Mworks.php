<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mworks extends CI_Model
{

    var $table = 'works';

    public function getAll()
    {
        $this->db->select([
            "w.id",
            "w.title",
            "w.year",
            "w.content",
            "w.featured_image",
            "w.created_at",
            "w.updated_at",
            "u.name as created_by",
            "u2.name as updated_by"
        ]);
        $this->db->join("users u", "u.id = w.created_by", "left");
        $this->db->join("users u2", "u2.id = w.updated_by", "left");
        $getAll = $this->db->get($this->table . ' w')->result();
        return $getAll;
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function getDetail($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->result();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
    public function ambildata($table)
    {
        return $this->db->get($table);
    }

    private function querydatatable($search, $start, $length, $filter)
    {
        $this->db->select([
            "w.id",
            "title",
            "year",
            "featured_image",
            "created_at",
            "u.name as created_by",
            "u2.name as updated_by",
            "updated_at",
        ]);

        if ($search["value"] != "") {
            $this->db->or_like([
                "title"        => $search["value"],
                "content"    => $search["value"]
            ]);
        }
        if ($filter["year"] != "") {
            $this->db->or_like([
                "year" => $filter["year"]
            ]);
        }
        if ($filter["category"] != "") {
            $this->db->or_where_in("category_id", $filter["category"]);
        }

        $this->db->order_by("created_at asc");
        $this->db->join("users u", "u.id = w.created_by", "left");
        $this->db->join("users u2", "u2.id = w.updated_by", "left");
        $this->db->join("work_categories wc", "wc.work_id = w.id", "left");
        $this->db->group_by("w.id");
        $this->db->limit($length, $start);

        $works = $this->db->get($this->table . " w");
        return $works;
    }

    public function getdatatable($search, $start, $length, $filter)
    {
        $works = $this->querydatatable($search, $start, $length, $filter)->result();
        return $works;
    }
    public function countTotal()
    {
        return $this->db->count_all($this->table);
    }

    public function countFiltered($search, $start, $length, $filter)
    {
        $works = $this->querydatatable($search, $start, $length, $filter);
        return $works->num_rows();
    }
}
