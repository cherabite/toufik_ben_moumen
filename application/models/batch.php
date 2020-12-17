<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Batch extends CI_Model
{

    function batchInsert($data)
    {
        //get bill entries 
        /* $count = count($data['count']);
        
        for($i = 0; $i<$count; $i++){
            
            $entries[] = array(
                'date'=>$data['jdate'][$i],
                'type'=>$data['jtype'][$i],
                'passenger'=>$data['jpassanger'][$i],
                'from_'=>$data['jfrom'][$i],
                'to_'=>$data['jto'][$i],
                'ticket'=>$data['jticket_no'][$i],
                'amount'=>$data['jamount'][$i],
                );
        } */


        $this->db->insert('journey', $data);


        if ($this->db->affected_rows() > 0)
            return 1;
        else
            return 0;
    }
    function insert_emp($data)
    {

        $this->db->insert('cv', $data);

        return $this->db->insert_id();
    }
}
