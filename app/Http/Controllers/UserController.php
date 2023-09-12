<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = UserDetail::all();
        return response()->json($data);

    }
    public function getUsersInMumbai()
    {
        $users = UserDetail::where('city', 'Mumbai')->get();
        return response()->json(['data' => $users], 200);
    }
    //Api to fetch the list of users who lives in Mumbai
    public function showMumbaiUsers(){
        $response = $this->getUsersInMumbai();
        $mumbaiUser = json_decode($response->getContent(), true);
        return view('user_city_mumbai', ['mumbaiUser' => $mumbaiUser['data']]);
    }

    //function to fetch users salary
    public function getUserBysalary(){
        $users=UserDetail::orderBy('salary','desc')->get();
        return response()->json(['data'=>$users],200);
    }
    public function showUserSalary(){
        $response = $this->getUserBysalary();
        $Usersalary = json_decode($response->getContent(), true);
        return view('user_salary', ['Usersalary' => $Usersalary['data']]);
    }

    //Api to fetch User data who join this Week
    public function UserJoinedWeek(){
        $startOfWeek=now()->startOfWeek();
        $endOfWeek=now()->endOfWeek();
        $users = UserDetail::whereBetween('joining_date',[$startOfWeek,$endOfWeek])->get();
        return response()->json(['data'=>$users],200);
    }
    public function showUserJoinedThisWeek(){
       $response=$this->UserJoinedWeek();
       $userthisWeek = json_decode($response->getContent(), true);
       return view('user_joining_date',['userthisWeek'=>$userthisWeek['data']]);

    }
    //to store form date into database
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|unique:userDetail|max:255',
            'email' => 'required|email|unique:userDetail|max:255',
            'password' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'joining_date' => 'required|date',
        ]);


        UserDetail::create($validData);

        //return redirect()->route('/add-user')->with('success', 'User Created successfully');
        return redirect()->route('add-user')->with('success', 'User Created successfully');

    }

}
