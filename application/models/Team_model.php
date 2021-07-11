<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "team";

    public $id;
    public $nama;
    public $ketua;
	public $anggota1;
	public $anggota2;
	public $anggota3;
	public $anggota4;
	public $coach;
	public $kategori;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByid($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = null;
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
		$this->usia = $post["usia"];
		$this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
        $this->id = null;
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
		$this->usia = $post["usia"];
		$this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }    
   
}
