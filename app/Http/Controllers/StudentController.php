<?php
/**
 * Created by PhpStorm.
 * User: Eric-Hu
 * Date: 2017/9/13
 * Time: 14:43
 */

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //学生列表
    public function index(Request $request)
    {
        $page = 0;
        if ($request->has('page')) {
            $page = $request->get('page');
        }
        echo 'currentPage'.$page;
        $students = Student::paginate(5, ['*'], 'page', $page);
        return view('student.index', ['students' => $students]);
    }
}