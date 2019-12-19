<?php

class Student
{
    private $pdo;
    public $data;

    public function __construct($student = null)
    {
        $this->pdo = Db::connect();
        if($student) {
            $this->find($student);
        }
    }

    /**
     * Function to insert a record into student table
     * @param array $data
     * @throws Exception
     */
    public function create(array $data) {
        if (!$this->pdo->insert('student', $data)) {
            throw new Exception('Sorry, there was a problem creating student;');
        }
    }

    /**
     * @param null $student
     * @return mixed
     */
    public function find($student = null)
    {
        if (!is_numeric($student)) {
            $student = (int)$student;
        }
        $sql = "SELECT * FROM student s JOIN gender g ON s.gender_id = g.gender_id JOIN parent p ON s.student_id = p.student_id WHERE s.student_id = {$student}";
        return $this->pdo->query($sql)->results()->fetchObject();
    }

    /**
     * @return Db
     */
    public function findAll()
    {
        $sql = "SELECT * FROM student s JOIN gender g ON s.gender_id = g.gender_id";
        return $this->pdo->query($sql);
    }

    /**
     * @param int $id
     * @param int $match
     * @param array $columns
     * @throws Exception
     */
    public function edit(int $id, int $match, array $columns) {
        if (!$this->pdo->update('student', $id, $match, $columns)) {
            throw new Exception('Sorry, there was a problem updating student;');
        }
    }

    public function getAttendees(){
        try {
            $sql = "SELECT * FROM `student` a inner join gender s on a.gender_id = s.gender_id ";
            $result = $this->pdo->query($sql);
            return $result;
            //code...
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            //throw $e;
        }
    }

    public function getAttendeeDetails(int $id){

        try {
            $sql = " select * from student a inner join gender s on a.gender_id = s.gender_id where student_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt ->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            //code...
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            //throw $th;
        }
    }

    public function deleteAttendee($id){
        try{
            $sql = "delete from student where student_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt ->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getSpecialties(){
        try {$sql = "SELECT * FROM `gender`";
            $result = $this->pdo->query($sql);
            return $result;
            //code...
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            //throw $th;
        }
    }

    public function getSpecialtiesById($id){
        try {
            $sql = "SELECT * FROM `gender` where gender_id= :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt ->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
            //code...
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            //throw $th;
        }
    }

    /**
     * @return Db
     */
    public function getGenders()
    {
        return $this->pdo->query("SELECT * FROM gender");
    }
}