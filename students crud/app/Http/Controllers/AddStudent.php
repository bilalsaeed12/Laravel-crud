<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class AddStudent extends Controller
{
    function addData(Request $req)
    {
        $student = new Student;
        $student->name = $req->name;
        $student->regno = $req->regno;
        $student->degree = $req->degree;
        $student->save();
        return redirect('home');
    }
    function showData()
    {
        $data = Student::all();
        return view('home', ['students' => $data]);
    }
    function delete($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect('home');
    }

    function show($id)
    {
        $data = Student::find($id);
        return view('edit', ['data' => $data]);
    }

    function update(Request $req)
    {
        $data = Student::find($req->id);
        $data->name = $req->name;
        $data->regno = $req->regno;
        $data->degree = $req->degree;
        $data->save();
        return redirect("home");
    }
}
