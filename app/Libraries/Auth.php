<?php

namespace App\Libraries;

define('SESSION_CUSTOMER_ID_TOKEN', 'uit');

class Auth
{


    /**
     *
     * @var \CodeIgniter\Database\MySQLi\Connection
     */
    private $db;



    private $session;

    private $user;

    public function __construct()
    {
        $this->db = \Config\Database::connect('default');
        $this->session = \Config\Services::session();

        $this->user = null;

        if (!empty($_SESSION[SESSION_CUSTOMER_ID_TOKEN])) {
            $customer_id = $_SESSION[SESSION_CUSTOMER_ID_TOKEN];

            $sql = "
            select 
                customer_id, 
                fullname,
                custom_template_id
            from customers
            where customer_id = ?";
            $row = $this->db->query($sql, [$customer_id])->getRow();

            if (!empty($row)) {
                $this->user = $row;
            } else {
                unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);    
            }
        } else {
            unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
        }
    }

    public function isSignedIn()
    {
        return ($this->user === null) ? false : true;
    }


    public function signin(string $signinname, string $password): bool
    {
        $sql = "
        select customer_id, 
            fullname,
            password,
            custom_template_id
        from customers 
        where signinname = ?";

        $row = $this->db->query($sql, [$signinname])->getRow();
        
        if ($row && $row->password && (password_verify($password, $row->password))) {
            unset($row->password);
            $this->user = $row;
            $_SESSION[SESSION_CUSTOMER_ID_TOKEN] = $row->customer_id;
            return true;
        }

        $this->user = null;
        unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
        return false;
    }

    public function signout()
    {
        $this->user = null;
        unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
    }
}
