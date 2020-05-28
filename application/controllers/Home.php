<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

    /*
    |-------------------------------------------------------------------
    | Construct
    |-------------------------------------------------------------------
    | 
    */
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    /*
    |-------------------------------------------------------------------
    | Index
    |-------------------------------------------------------------------
    | 
    */
	function index()
	{
        /* Original Room Data */
        $room_list = $this->home_model->get_rooms();

        /* New Room Data for Natural Sort */
        $natural_room_list = array();
        
        /* Add Original Room Data to New Array */
        foreach($room_list as $room) {
            $natural_room_list[] = array(
                'id' => $room['id'],
                'name' => $room['name']
            );
        }

        /* Split Array Data to New Single Array */
        foreach ($natural_room_list as $key => $row) {
            $id[]  = $row['id'];
            $name[] = $row['name'];
        }

        /* Separate Array Column Data */
        $id  = array_column($room_list, 'id');
        $name = array_column($room_list, 'name');

        /* Sort Rooms Multidimensional Array with Natural Sort */
        array_multisort($name, SORT_NATURAL, $natural_room_list);

        /* Data */
        $data['title'] = 'Codeigniter 3 - Natural Sort';    // Title
        $data['room_list'] = $room_list;                    // Original Sort Data
        $data['natural_room_list'] = $natural_room_list;    // Natural Sort Data

        /* Load Views */
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/content', $data);
        $this->load->view('frontend/footer', $data);
    }

    /*
    |-------------------------------------------------------------------
    | Add Room
    |-------------------------------------------------------------------
    | 
    */
	function add_room()
	{
        $this->form_validation->set_rules('roomName', 'Name', 'required');
        if($this->form_validation->run() != false){
			$this->home_model->insert_room();
            redirect('home');
		} else {
            echo validation_errors();
		}
    }

    /*
    |-------------------------------------------------------------------
    | Edit Room
    |-------------------------------------------------------------------
    | 
    */
	function edit_room($id)
	{
        $this->form_validation->set_rules('roomName', 'Name', 'required');
        if($this->form_validation->run() != false){
			if($this->home_model->update_room($id)) {
                redirect('home');
            } else {
                echo "Failed Edit Data";
            }
		} else {
            echo validation_errors();
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
        if($this->home_model->delete_room($id)) {
            redirect('home');
        } else {
            echo "Failed Remove Data";
        }
        
    }

}
