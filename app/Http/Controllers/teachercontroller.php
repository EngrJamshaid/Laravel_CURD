<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teachercontroller extends Controller
{
    //
    public function ShowAllTeacher()
    {
        $result= DB::table('teachers')->get();
        // return $result;
        return view('AllTeachers',['data'=>$result]);
    }


    // single user data fetch

    public function SingleTeacher(string $id)
    {
        $result=DB::table('teachers')->find($id);
        return view('singleuser',['data'=>$result]);
    }


    // add teacher
    public function AddTeacherTable(Request $req)
    {
        $result=DB::table('teachers')->insert([
              'name'=>$req->teachername,
              'email'=>$req->teacheremail,
              'age'=>$req->teacherage,
              'city'=>$req->teachercity
        ]);

        if($result)
        {
            return redirect()->route('ReadTeacher');
        }else{
            echo "Insertion fail";
        }
    }



//update works

public function upform(string $res)
{
    $result=DB::table('teachers')->find($res);
    return view('teacherUPform',['data'=>$result]);
}


public function update(Request $req, $id){
    $result=DB::table('teachers')->where('id',$id)->update([
        'name'=>$req->teachername,
        'email'=>$req->teacheremail,
        'age'=>$req->teacherage,
        'city'=>$req->teachercity

    ]);
    if($result){
        return redirect()->route('ReadTeacher');
    }else{
        echo "Updation failed";
    }
}



//delete

public function delee(string $id)
{
$result=DB::table('teachers')->where('id',$id)->delete();
if($result)
{
    return redirect()->route('ReadTeacher');
}else{
    echo "Not Deleted";
}
}

}
