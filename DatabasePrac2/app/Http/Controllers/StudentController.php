<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function addStudent(Request $request){
        $student=new Student();
        $student->name= $request->name;
        $student->email= $request->email;
        $student->phone= $request->phone;
        $result=$student->save();

        if($result){
            return redirect('list');
        }else{
            return "Student not Added";
        }
      }
      public function listStudents() {
        $studentdata = Student::all();
        return view("List-Students", ["students" => $studentdata]);
    }
    function delete($id){
        $isDeleted= Student::destroy($id);
        if($isDeleted){
            return redirect("list");
        }else{
            echo "not deleted";
        }
    }
    function edit($id){
        $student=Student::find($id);
        return view("edit-students",["data"=> $student]);
    }
    function update(Request $request, $id){
        $student=Student::find($id);
        $student->name= $request->name;
        $student->email= $request->email;
        $student->phone= $request->phone;
        if($student->save()){
        return redirect('list');
     }else{
        echo "Not Updated";
     }
    }

    function search(Request $request){
        $studentData=Student::where('name','like',"%$request->search%")->get();
        return view("List-Students",["students"=> $studentData,'search'=>$request->search]);
    }

    function deleteMultiple(Request $request){
        $result=Student::destroy( $request->ids );
        if($result){
            return redirect('list');
        }else{
            echo 'Not Deleted';
        }
    }

}
