<?php
/**
 * Created by PhpStorm.
 * User: op122
 * Date: 2/24/2017
 * Time: 1:29 PM
 */
class Blog extends CI_Controller{
    public function index()
    {
        //Connect to database and table
        $this->load->database();


        //Insert data into table
        $sql = "INSERT INTO WishList (firstname,lastname,product,quantity,unit_price) VALUES (".$this->db->escape(firstname).", ".$this->db->escape(lastname).",".$this->db->escape(product).",".$this->db->escape(quantity).",".$this->db->escape(unit_price).")";
        $this->db->query($sql);
        echo $this->db->affected_rows();








        //Query data from database
        $query=$this->db->query('SELECT id,firstname,lastname FROM WishList');

        foreach($query->result() as $row)
        {
            echo $row->id;
            echo $row->firstname;
            echo $row->lastname;
        }

        echo 'Total Results: '.$query->num_rows();

    }

}
?>