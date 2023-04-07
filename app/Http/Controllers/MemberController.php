<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
class MemberController extends Controller
{
  function DataTableIndex()
  {
      $datauser = User::paginate(10);
      return view('home2', ['datauser' => $datauser]);
  }





 function delete($id) //ลบตรางข้อความ
{   
  $datauser = User::find($id); 
  $datauser->delete();
  return redirect('/datauser');
}


function showdata($id)
{
  $datauser= User::find($id);
  return view('edit', ['datauser' => $datauser]);
}

function update(Request $req)
{
  $datauser=User::find($req->id);
  $datauser->name=$req->name;
  $datauser->id=$req->id;
  $datauser->email=$req->email;
  $datauser->password=$req->password;
  $datauser->save();
  return redirect('/datauser');

}

public function search(Request $request)
{
  $query = $request->input('query');
 

  $datauser = User::where('name', 'LIKE', "%$query%")
                  ->orWhere('email', 'LIKE', "%$query%")
                  ->orWhere('id', 'LIKE', "%$query%")
                  ->paginate(15);
                  $datauser->appends($request->all());//&page=num
  return view('home2', ['datauser' => $datauser]);
}

public function __construct()
{
    $this->middleware('auth');
}


function adddata(Request $req)
{
  $datauser = new User;
  $datauser->name = $req->name;
  $datauser->email = $req->email;
  $datauser->password = bcrypt($req->password);
  $datauser->save();

  return redirect('/datauser');
}

}




