<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use NunoMaduro\Collision\Adapters\Phpunit\Style;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $user = Student::all();
        return view('layout.student_manage',['user'=>$user]);
    }
    public function get_student_by_id($id)
    {
        $user = Student::find($id);
        return view('layout.student_manage',['user'=>$user]);
    }
    // public function get_add()
    // {
    //     return view('layout.add');
    // }
    public function showedit($id)
    {
        $user = Student::find($id);
        return view('layout.student_edit',['user'=>$user]);
    }
    public function edit(Request $request,$id)
    {
        $name = $request->fullname;
        $bd = $request->birthday;
        $ad = $request->address;
        $user = Student::find($id);
        $user->fullname = $name;
        $user->address = $ad;
        $user->birthday = $bd;
        $user->save();
        
        $user = Student::all();
        return view('layout.student_manage',['user'=>$user]);
    }
}
