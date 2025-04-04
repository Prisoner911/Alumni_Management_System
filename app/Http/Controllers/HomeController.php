<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChildStudent;
use App\Models\StudentManagement;



class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function goto_add_info(){
        // return view('add_info');
        return view('test_form');
    }

    // public function add_info(Request $request){
    //     // dd($request->all());
    //     $std_details = new ChildStudent();
    //     $std_details->roll_no = $request->input('roll_no');
    //     $std_details->pr_no = $request->input('pr_no');
    //     $std_details->name = $request->input('std_name');
    //     $std_details->ph_no = $request->input('ph_no');
    //     $std_details->email = $request->input('email');
    //     $std_details->alumni_status = $request->input('alumni_status');
    //     $std_details->current_status = $request->input('current_status');

    //     if($std_details->save()){
    //         return redirect()->back()->with('success', 'Data added successfully!');
    //     }
    //     else{
    //         return redirect()->back()->with('error', 'Data couldnt be added');
    //     }
    // }





    public function add_info(Request $request){
        // dd($request->all());
        $std_details = new StudentManagement();
        $std_details->roll_no = $request->input('roll_no');
        $std_details->pr_no = $request->input('pr_no');
        $std_details->name = $request->input('std_name');
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

    public function show_child_students(){
        $students = ChildStudent::paginate(10);
        return view('show_child_student', compact('students'));
    }
}
