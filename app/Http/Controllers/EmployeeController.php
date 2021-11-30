<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(){
        return view('employees.addEmployee');
    }

    public function insertEmployee(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'experience' => 'required',
            'n_id' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
            'photo' => 'required',
        ]);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'experience'=>$request->experience,
            'n_id'=> $request->n_id,
            'salary'=>$request->salary,
            'vacation'=>$request->vacation,
            'city'=>$request->city,

        ];
        $img =$request-> file('photo');
        if($img){
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;
            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            $employee = Employee::create($data);
            return redirect()->back()->with('message','Employee add successfull');
        }else{
            return redirect()->back()->with('error','Error');
        }
    }
    public function allEmployee(){
        $employee = Employee::all();
        return view('employees.allEmployee', compact('employee'));
    }
        public function deleteEmployee($id){
        $deleteEmployee = Employee::find($id);
        $delete = $deleteEmployee->delete();
        if($delete){
            $notification = array(
                'message'=>'Data Delete Successfull!',
                'alert-type'=>'success',
            );
            return Redirect()->route('allEmployee')->with($notification);
        }
    }
    public function viewEmployee($id){
        $viewEmployee = Employee::find($id);
        return view('employees.viewEmployee', compact('viewEmployee'));
    }
    public function editEmployee($id){
        $editEmployee = Employee::find($id);
        return view('employees.editEmployee',compact('editEmployee'));
    }
    public function updateEmployee(Request $request,$id){
        $updateEmployee = Employee::find($id);
        $photo = $updateEmployee->photo;
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'experience'=>$request->experience,
            'n_id'=> $request->n_id,
            'salary'=>$request->salary,
            'vacation'=>$request->vacation,
            'city'=>$request->city,
        ];
        $img =$request-> file('photo');
        if($img){
            @unlink($photo);
            $img_name = uniqid();
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.'.'.$ext;

            $img_path = 'upload/';
            $img_url = $img_path.$img_full_name;
            $img->move($img_path,$img_full_name);
            $data['photo']=$img_url;
            $update = $updateEmployee->update($data);
            return Redirect()->route('allEmployee');
        }else{
            return redirect()->back();
        }
    }

}
