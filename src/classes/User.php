<?php

class User
{
    private $pdo;
    private $data;
    private $loggedIn;

    public function __construct()
    {
        $this->pdo = Db::connect();
    }

    public function data(){
        return $this->data;
    }
    
    public function exists() {
        return (!empty($this->data)) ? true : false;
    }
    
    public function loggedIn() {
        return $this->loggedIn;
    }

    /**
     * @param array $data
     * @throws Exception
     */
    public function create(array $data)
    {
        $username = escape($data['username']);
        if (!$this->pdo->getOne('username', 'users', ['username', '=', $username])->count()) {
            if (!$this->pdo->insert('users', $data)) {
                throw new Exception('Sorry, there was a problem creating user;');
            }
        } else {
            throw new Exception('The user you are trying to create already exists');
        }
    }

    /**
     * @param null $user
     * @return bool
     */
    public function find($user = null): bool
    {
        if ($user) {
            $desc = (is_numeric($user)? 'id' : 'username');
            $data = $this->pdo->select('users', [$desc, '=', $user]);
            if($data->count()) {
                $this->data = $data->first();
                return true;
            }
        }
        return false;
    }

    /**
     * @param int $id
     * @param int $match
     * @param array $columns
     * @throws Exception
     */
    public function edit(int $id, int $match, array $columns) {
        if (!$this->pdo->update('users', $id, $match, $columns)) {
            throw new Exception('Sorry, there was a problem updating user;');
        }
    }

    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login($username = null, $password = null) {
        if (!$username && !$password && $this->exists()) {
        } else {
            if ($this->find($username)) {
                $dbPassword = $this->data()->password;
                if(!$this->verify($password, $dbPassword)) {
                    $this->data = null;
                }
            }
        }
        return false;
    }

    /**
     * @param string $password
     * @param $dbPassword
     * @return boolean
     */
    public function verify($password, $dbPassword) {
        if(password_verify($password, $dbPassword)) {
            // login user and establish session
            return true;
        }
        return false;
    }
}