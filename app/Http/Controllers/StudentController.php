<?php
/**
 * Created by PhpStorm.
 * User: Eric-Hu
 * Date: 2017/9/13
 * Time: 14:43
 */

namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{
    //学生列表
    public function index()
    {
        $students = Student::get();
        return view('student.index', ['students' => $students]);
    }
}