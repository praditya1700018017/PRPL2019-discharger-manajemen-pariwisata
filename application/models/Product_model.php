<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $Judul;
    public $Lokasi;
    public $image = "default.jpg";
    public $description;
    public $date;

    public function rules()
    {
        return [
            ['field' => 'Judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'Lokasi',
            'label' => 'Lokasi',
            'rules' => 'required'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = '';
        $this->Judul = $post["Judul"];
        $this->Lokasi = $post["Lokasi"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->date = $post["date"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->Judul = $post["Judul"];
        $this->Lokasi = $post["Lokasi"];
        $this->description = $post["description"];

        if (!empty($_FILES["image"]["name"])){
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->date = $post["date"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->product_id;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}
