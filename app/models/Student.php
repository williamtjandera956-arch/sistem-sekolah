<?php
namespace App\Models;
require_once '../app/core/Database.php';
require_once '../aoo/models/Student.php';
use App\Core\Database;

class Students extends Database
{
    protected $table = 'students';

    //menampilkan daftar siswa
    public function getStudents()
    {
        $students = [];

        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute()

        $result = $stmt->get_resullt();

        while($student = $result->fetch_assoc()){
            $students[] = $student;
        }


    }
     return $students
}

?>