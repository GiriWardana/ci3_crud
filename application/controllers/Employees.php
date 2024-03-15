<?php
class Employees extends CI_Controller {
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('employee_model');
    // }

    // public function index() {
    //     $data['employees'] = $this->employee_model->get_employees();
    //     $this->load->view('employees_view', $data);
    // }



    public function __construct() {
        parent::__construct();
        $this->load->model('employee_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['employees'] = $this->employee_model->get_all_employees();
        $this->load->view('employees_view', $data);
    }

    public function add() {
        // Handle form submission to add employee
        if ($_POST) {
            $data = array(
                'NIP' => $this->input->post('NIP'),
                'Nama' => $this->input->post('Nama'),
                'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
                'Jabatan' => $this->input->post('Jabatan'),
                'Tanggal_Aktif_Jabatan' => $this->input->post('Tanggal_Aktif_Jabatan'),
                'Tanggal_Masuk' => $this->input->post('Tanggal_Masuk'),
                'Status_Karyawan' => $this->input->post('Status_Karyawan')
            );
            $this->employee_model->add_employee($data);
            redirect('index.php/employees');
        } else {
            // Load add employee form view
            $this->load->view('add_employee_view');
        }
    }

    public function edit($id) {
        // Handle form submission to edit employee
        if ($_POST) {
            $data = array(
                'NIP' => $this->input->post('NIP'),
                'Nama' => $this->input->post('Nama'),
                'Jenis_Kelamin' => $this->input->post('Jenis_Kelamin'),
                'Jabatan' => $this->input->post('Jabatan'),
                'Tanggal_Aktif_Jabatan' => $this->input->post('Tanggal_Aktif_Jabatan'),
                'Tanggal_Masuk' => $this->input->post('Tanggal_Masuk'),
                'Status_Karyawan' => $this->input->post('Status_Karyawan')
            );
            $this->employee_model->update_employee($id, $data);
            redirect('index.php/employees');
        } else {
            // Load edit employee form view
            $data['employee'] = $this->employee_model->get_employee($id);
            $this->load->view('edit_employee_view', $data);
        }
    }

    public function delete($id) {
        $this->employee_model->delete_employee($id);
        redirect('index.php/employees');
    }
}
