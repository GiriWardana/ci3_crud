<?php
class Employee_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_employees() {
    // Selecting and formatting date fields using MySQL's DATE_FORMAT function
    $this->db->select('No, NIP, Nama, Jenis_Kelamin, Jabatan, DATE_FORMAT(Tanggal_Aktif_Jabatan, "%d %M %Y") AS Tanggal_Aktif_Jabatan, DATE_FORMAT(Tanggal_Masuk, "%d %M %Y") AS Tanggal_Masuk, Status_Karyawan');
    return $this->db->get('employees')->result_array();
    }


    public function get_employee($id) {
        return $this->db->get_where('employees', array('No' => $id))->row_array();
    }

    public function add_employee($data) {
        $this->db->insert('employees', $data);
        return $this->db->insert_id();
    }

    public function update_employee($id, $data) {
        $this->db->where('No', $id);
        $this->db->update('employees', $data);
    }

    public function delete_employee($id) {
        $this->db->where('No', $id);
        $this->db->delete('employees');
    }
}
