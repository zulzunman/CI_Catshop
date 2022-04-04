<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth038_model extends CI_Model {

    public function getuser($username)
    {
        $this->db->where('username_038',$username);
        return $this->db->get('users038')->row();
    }

    public function changepass()
    {
        $this->db->set('password_038', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_038',$this->session->userdata('username'));
        return $this->db->update('users038');
    }
    public function changephoto($photo)
    {
        if($this->session->userdata('photo') !== 'default.png')
            unlink('./uploads/users/'.$this->session->userdata('photo'));
        
        $this->db->set('photo_038', $photo);
        $this->db->where('username_038',$this->session->userdata('username'));
        return $this->db->update('users038');
    }
}
