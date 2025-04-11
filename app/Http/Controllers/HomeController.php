<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterStudent;


class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function goto_add_info(){
        // return view('add_info');
        return view('test_form');
    }


    public function add_info(Request $request){
        // dd($request->all());
        $std_details = new MasterStudent();
        $std_details->roll_no = $request->input('roll_no');
        $std_details->pr_no = $request->input('pr_no');
        $std_details->name = $request->input('std_name');
        $std_details->course = $request->input('course');
        $std_details->email = $request->input('std_email');
        $std_details->ph_no = $request->input('ph_no');
        $std_details->address = $request->input('address');
        $std_details->current_status = $request->input('current_status');
        $std_details->school_10th_name = $request->input('school_10th_name');
        $std_details->school_10th_address = $request->input('school_10th_address');
        $std_details->school_10th_percentage = $request->input('school_10th_percentage');
        $std_details->school_12th_name = $request->input('school_12th_name');
        $std_details->school_12th_address = $request->input('school_12th_address');
        $std_details->school_12th_percentage = $request->input('school_12th_percentage');
        $std_details->bachelor_college_name = $request->input('bachelor_college_name');
        $std_details->bachelor_college_address = $request->input('bachelor_college_address');
        $std_details->bachelor_percentage = $request->input('bachelor_percentage');
        $std_details->final_year_passed = $request->input('final_year_passed');

        if($std_details->save()){
            return redirect()->back()->with('success', 'Data added successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Data couldnt be added');
        }
    }

    public function show_students(){
        $students = MasterStudent::orderBy('pr_no', 'desc')->paginate(5);
        return view('studentDisplay', compact('students'));
    }

    public function show_students_details($id){
        // dd($id);
        $student = MasterStudent::find($id);
        return view('update_info', compact('student'));
    }


    public function update_students_details(Request $request){
        $student = MasterStudent::find($request->input('roll_no'));
        // dd($student);
        $student->pr_no = $request->input('pr_no');
        $student->name = $request->input('std_name');
        $student->course = $request->input('course');
        $student->email = $request->input('std_email');
        $student->ph_no = $request->input('ph_no');
        $student->address = $request->input('address');
        $student->current_status = $request->input('current_status');
        $student->school_10th_name = $request->input('school_10th_name');
        $student->school_10th_address = $request->input('school_10th_address');
        $student->school_10th_percentage = $request->input('school_10th_percentage');
        $student->school_12th_name = $request->input('school_12th_name');
        $student->school_12th_address = $request->input('school_12th_address');
        $student->school_12th_percentage = $request->input('school_12th_percentage');
        $student->bachelor_college_name = $request->input('bachelor_college_name');
        $student->bachelor_college_address = $request->input('bachelor_college_address');
        $student->bachelor_percentage = $request->input('bachelor_percentage');
        $student->final_year_passed = $request->input('final_year_passed');
        $student->is_alumni = $request->input('is_alumni');

        if($student->save()){
            return redirect()->back()->with('success', 'Data updated successfully!');
        }
        else{
            return redirect()->back()->with('error', 'Data couldnt be updated');
        }
    }

    public function search_student(Request $request){
        // dd($request->all());
        $search = $request->input('query');
        $students = MasterStudent::where('name', 'LIKE', "%{$search}%")
            ->orWhere('roll_no', 'LIKE', "%{$search}%")
            ->orWhere('pr_no', 'LIKE', "%{$search}%")
            ->paginate(5);
            // dd($students);
        return view('studentDisplay', compact('students','search'));
    }


    public function show_alumni(){
        $alumni = MasterStudent::where('is_alumni', 'yes')->orderBy('pr_no', 'desc')->paginate(5);
        return view('alumniDisplay', compact('alumni'));
    }

    public function search_alumni(Request $request){
        // dd($request->all());
        $search = $request->input('query');
        $alumni = MasterStudent::where('is_alumni', 'yes')
            ->where(function($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                      ->orWhere('roll_no', 'LIKE', "%{$search}%")
                      ->orWhere('pr_no', 'LIKE', "%{$search}%");
            })
            ->paginate(5);
        return view('alumniDisplay', compact('alumni','search'));
    }
}
