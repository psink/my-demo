<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function view(){
    	echo 'wkdhaskdhkj';

    }
    public function register(request $req){
    	$name = $req->input('firstname');
    	$lname = $req->input('lastname');
    	$grade = $req->input('grade');
    	$faculty = $req->input('faculty');
    	$rollno = $req->input('rollno');
    	$mobno = $req->input('mobileno');

    	$data = array('firstname'=>$name, 'lastname'=>$lname, 'grade'=>$grade, 'faculty'=>$faculty, 'rollno'=>$rollno, 'mobileno'=>$mobno);
    	db::table('student')->insert($data);
    	return "sucess";
    }

        // Returns List of Users
    public function getUsers(){
        $data = db::table('student')->get();
        return $data;
    }

    public function deleteUsers($id){
        return DB::table('student')->where('id', $id)->delete();

    }

    public function showall(){
    	$data = db::table('student')-> select('lastname')->get();
    	return view('login', ['name' => $data]);
    }
}
