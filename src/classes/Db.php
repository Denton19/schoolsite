<?php

class Db
{
    private static $connection = null;
    private $count = 0;
    private $error = false;
    private $pdo;
    private $query;
    private $results;
    // Development database connection
    private $host = '127.0.0.1';
    private $db = 'school_db';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';

    // Remote database connection
    //private $host = 'remotemysql.com';
    //private $db = '4LZHNWIMfa';
    //private $user = '4LZHNWIMfa';
    //private $pass = 'vBzOJp8SGh';
    //private $charset = 'utf8mb4';

    /**
     * Db constructor.
     */
    private function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e){
            throw new PDOException($e->getMessage());
        }
    }

    /**
     * @return Db
     */
    public static function connect(): self
    {
        if (!self::$connection) {
            self::$connection = new self();
        }
        return self::$connection;
    }

    /* Helper Functions */ 

    /**
     * @return int
     */
    public function count()
    {
        return $this->count;
    }

    /**
     * @param $table
     * @param $where
     * @return bool|Db
     */
    public function delete($table, $where)
    {
        return $this->action('DELETE ', $table, $where);
    }

    /**
     * @return bool
     */
    public function error()
    {
        return $this->error;
    }

    /**
     * @return mixed
     */
    public function errorCode()
    {
        return $this->pdo->errorCode();
    }

    /**
     * @return array
     */
    public function errorInfo()
    {
        return $this->pdo->errorInfo();
    }

    /**
     * @param string $sql
     * @return int
     */
    public function exec(string $sql)
    {
        return $this->pdo->exec($sql);
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->results()[0];
    }

    /**
     * @return string
     */
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }

    /**
     * @return mixed
     */
    public function results()
    {
        return $this->results;
    }

    /**
     * @param string $string
     * @return string
     */
    public function quote(string $string)
    {
        return $this->pdo->quote(trim($string));
    }

    /**
     * @param string $table
     * @param array $where
     * @return object
     */
    public function get(string $table, array $where) {
        return $this->action('SELECT * FROM', $table, $where);
    }

    /**
     * @param string $column
     * @param string $table
     * @param array $where
     * @return object
     */
    public function getOne(string $column, string $table, array $where) {
        return $this->action("SELECT {$column} FROM", $table, $where);
    }

    /**
     * @param string $sql
     * @return $this
     */
    public function query(string $sql)
    {
        $this->results = $this->pdo->query($sql,PDO::FETCH_OBJ);
        $this->count = $this->pdo->query($sql)->rowCount();
        return $this;
    }

    /**
     * @param string $table
     * @param array $where
     * @return bool|Db
     */
    public function select(string $table, array $where)
    {
        return $this->action('SELECT * FROM', $table, $where);
    }

    /**
     * @param string $sql
     * @param array|null $params
     * @return Db
     */
    public function act(string $sql, array $params = null): self
    {
        $this->query = $this->pdo->prepare($sql);
        if ($this->query) {
            $x = 1;
            foreach($params as $param) {
                $this->query->bindValue($x, $param);
                $x++;
            }
            if ($this->query->execute()) {
                $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
                $this->count = $this->query->rowCount();
            } else {
                $this->error = true;
            }
        }
        return $this;
    }

    /**
     * @param string $action
     * @param string $table
     * @param array $where
     * @return self|bool
     */
    public function action(string $action, string $table, array $where)
    {
        if (count($where) === 3) {
            $operators = ['=', '>', '<', '>=', '<='];
            $field      = quote($where[0]);
            $operator   = $where[1];
            $value      = escape($where[2]);
            if (in_array($operator, $operators)) {
                $sql = "{$action} {$table} WHERE {$field} {$operator} ?";
                if (!$this->act($sql, [$value])->error()) {
                    return $this;
                }
            }
        }
        return false;
    }

    /**
     * @param string $table
     * @param array $fields
     * @return bool
     */
    public function insert(string $table, array $fields): bool
    {
        $columns = null;
        $values = null;
        $x = 1;
        foreach ($fields as $name => $value) {
            $data[$name] = escape($value);
            $columns .= quote($name);
            $values .= '?';
            if ($x < count($fields)) {
                $columns .= ', ';
                $values .= ', ';
            }
            $x++;
        }
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        if (!$this->act($sql, $fields)->error()) {
            return true;
        }
        return false;
    }

    /**
     * @param string $table
     * @param int $id
     * @param int $match
     * @param array $columns
     * @return bool
     */
    public function update(string $table, int $id, int $match, array $columns)
    {
        $set = null;
        $x = 1;
        foreach ($columns as $name => $value) {
            $data[$name] = escape($value);
            $set .= quote($name)." = ?";
            if ($x < count($columns)) {
                $set .= ', ';
            }
            $x++;
        }
        $sql = "UPDATE {$table} SET {$set} WHERE {$id} = '{$match}'";
        if (!$this->act($sql)->error()) {
            return true;
        }
        return false;
    }
}