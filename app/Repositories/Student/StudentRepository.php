<?php
namespace App\Repositories\Student;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Student\StudentInterface;
use App\Models\User;

class StudentRepository implements StudentInterface{
    protected $user=null;
    
    public function getAllStudent(){
        return User::with('department')->where('role','student')->orderBy('id','desc')->get();
    }

    
    public function show($id){
        $User=User::find($id);
        $class = '';
        if($User->status == 0) {
            $User->status = 1;
            $text = 'Block';
            $removeClass = 'btn-success';
            $class = 'btn-danger';
        } else {
            $User->status = 0;
            $text = 'Active';
            $removeClass = 'btn-danger';
            $class = 'btn-success';
        }
        if($User->save()) {
            $st = 1;
            $msg = 'Status Updated Successfully';
        } else {
            $st = 0;
            $msg = 'Unable to disable Text';
        }
        return response()->json([
            'status' => $st,
            'text' => $text,
            'msg' => $msg,
            'class' => $class,
            'removeClass' => $removeClass
        ]);
    }

    public function edit($id){
        return User::find($id);
    }
    public function store(array $data){
        $data['password']=Hash::make($data['password']);
        return User::create($data);

    }

    
    public function Update(array $data, $id){
        if ($data['password']) {
            $data['password']=Hash::make($data['password']);
        }else{
            $data['password']=User::find($id)->password;
        }
        return User::where('id',$id)->update($data);

    }
}