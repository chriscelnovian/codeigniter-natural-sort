<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model 
{
    
    /*
    |-------------------------------------------------------------------
    | Fetch Rooms
    |-------------------------------------------------------------------
    | 
    */
    function get_rooms() 
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('tbl_room');
        return $query -> result_array();
    }

    /*
    |-------------------------------------------------------------------
    | Insert Room
    |-------------------------------------------------------------------
    | 
    */
    function insert_room() 
    {
        $room['name'] = $this->input->post('roomName');

        $this->db->insert('tbl_room', $room);
        return ($this->db->affected_rows() > 0);
    }

    /*
    |-------------------------------------------------------------------
    | Update Room
    |-------------------------------------------------------------------
    | 
    */
    function update_room($id) 
    {
        $room['name'] = $this->input->post('roomName');

        $this->db->trans_start();
        $this->db->where('id', $id);
        $this->db->update('tbl_room', $room);
        $this->db->trans_complete();

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            if ($this->db->trans_status() === false) {
                return false;
            }
            return true;
        }
    }

    /*
    |-------------------------------------------------------------------
    | Delete Room
    |-------------------------------------------------------------------
    | 
    */
    function delete_room($id) 
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_room');
        return ($this->db->affected_rows() > 0);
    }

}