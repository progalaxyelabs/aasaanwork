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

    private $customer;

    public function __construct()
    {
        $this->db = \Config\Database::connect('default');
        $this->session = \Config\Services::session();

        $this->customer = null;

        if (!empty($_SESSION[SESSION_CUSTOMER_ID_TOKEN])) {
            $customer_id = $_SESSION[SESSION_CUSTOMER_ID_TOKEN];
            $row = $this->db->query(Queries::GetCustomerById, [$customer_id])->getRow();

            if (!empty($row)) {
                $this->customer = $row;
            } else {
                unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
            }
        } else {
            unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
        }
    }

    public function isSignedIn()
    {
        return ($this->customer === null) ? false : true;
    }


    public function signin(string $signinname, string $password): bool
    {
        $row = $this->db->query(Queries::GetCustomerBySigninName, [$signinname])->getRow();

        if ($row && $row->customer_password && (password_verify($password, $row->customer_password))) {
            unset($row->customer_password);
            $this->customer = $row;
            $_SESSION[SESSION_CUSTOMER_ID_TOKEN] = $row->customer_id;
            return true;
        }

        $this->customer = null;
        unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
        return false;
    }

    public function signout()
    {
        $this->customer = null;
        unset($_SESSION[SESSION_CUSTOMER_ID_TOKEN]);
    }

    public function getCustomerId() {
        if($this->customer !== null) {
            return $this->customer->customer_id;
        }

        return -1;
    }
}
