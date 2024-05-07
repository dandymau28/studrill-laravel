<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_no',
        'name',
        'phone',
        'birthplace',
        'birthdate',
        'institution',
        'address'
    ];

    public function add($student_data) {
        try {
            // $student = new Student();
            $this->student_no = $this->generateStudentNo();
            $this->user_id = $student_data["user_id"];
            $this->name = $student_data["name"];
            $this->birthplace = $student_data["birthplace"];
            $this->birthdate = $student_data["birthdate"];
            $this->institution = $student_data["institution"];
            $this->address = $student_data["address"];
            $this->phone = $student_data["phone"];

            $this->save();
        } catch(\Throwable $e) {
            \Log::error("error on add function Student Model: " . $e->getMessage());
            throw $e;
        }
    }

    private function generateStudentNo() {
        $student_no = "";

        $student_no .= date('Ymd');

        $last_no = $this->getLastStudentByJoinDate();

        $student_no .= str_pad($last_no + 1, 5, "0", STR_PAD_LEFT);

        return $student_no;
    }

    public function getLastStudentByJoinDate() {
        $lastNo = Student::select('student_id')->whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d H:i:s')])->get()->count();

        return $lastNo;
    }
}
