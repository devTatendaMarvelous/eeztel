<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;




class EmployeesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function create(){
        return view('employees.create');
    }

    /**
     * Create a new employee instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\employee
     */
    protected function store(Request $request)
    {
            

            $employee=$request->validate([

                'name'=>'required',
                'surname'=>'required',
                'email'=> ['required', 'string', 'email', 'max:255', 'unique:employees'],
                'empId'=> ['required', 'string', 'max:255', 'unique:employees'],
                'role'=>'required',
                'dob'=>'required',
                'phone'=>'required',
                'idnum'=>'required'
                
            ] );

            $user['name']=$employee['name'].' '.$employee['surname'];
             $user['email']=$employee['email'];  
              $user['role']=$employee['role'];    
            Employee::create($employee);
            
            User::create($user);
            
            return redirect('/employees');
  

    }


    public function edit($id){
        $employee=Employee::find($id);
        return view('employees.edit')->with('employee',$employee);

    }

    public function index()
    {

        try{
       $employees=Employee::all();

       return view('employees.index')->with('employees',$employees);
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function updateemployee(Request $request,$id)
    {

        try {
        
        
        $employee =  Employee::find($id);
   
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->role=$request->input('role');
            $employee->photo='nomedia.png';
            $employee->save();
      return redirect('/employees');
    }
    catch (\Exception $exception){
         return $exception->getMessage();
    }
    
    }
    public function deleteUser($id)
    {
       try {
              $employee = Employee::findOrFail($id);
              $employee ->delete();
               
              return back();
         }catch (\Exception $exception){
          return redirect()->back()->with('error', 'An error occured while processing your request',$exception);
         }
    }
}
