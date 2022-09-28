<?php

class M_user extends CI_MODEL {
    public function get_all_data() {
        return $this->db->get('users');
    }
}