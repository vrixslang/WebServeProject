<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function login(Request $request)
    {
        
        $lastname= $request->lastname;
        $registration_code= $request->code;
        $response = DB::table('attendees')->where('lastname',$lastname)->where('registration_code',$registration_code)->first();
        
        if($response){

            $token = md5($response->username);
            
            

            $attendees = DB::table('attendees')
            ->where('registration_code', $response->registration_code)
            ->update(['login_token' => $token]);
            Session::put('token',$token);
            // dd(Session::get('token'));
            
            // print_r($token);
            return redirect('/api/v1/events');
        }
        // $attendee_token = $request->_token;
        // $lastname = $request->lastname;
        // $code = $request->code;

        // $cheking = DB::table('attendees')
        //       ->where('registration_code', $code)->get();
        // $count = $cheking->count();
        // if( $count==0 ){
        //     return redirect()->back()->with('success', 'Data deleted');
        // }
        // if( $count>0 ){
        // $attendees = DB::table('attendees')
        //       ->where('registration_code', $code)
        //       ->update(['login_token' => $attendee_token]);

        // $users = DB::table('attendees')
        //       ->where('registration_code', $code)
        //       ->get();
        // foreach($users as $user){
        //     $lastnamedb = $user->lastname;
        //     $login_tokendb = $user->login_token;
        // }
        
        // if($lastname != $lastnamedb AND $code != $login_tokendb){
        //     return redirect()->back()->with('success', 'Data deleted');
        // }else{
        //     return redirect('/api/v1/events')->with('success', 'Data deleted');
        // }
        // }


        // return redirect('/api/v1/events');
    }



    public function logout(Request $request)
    {
        $attendees = DB::table('attendees')
        ->where('login_token', '!=','')->get();
        foreach($attendees as $attendee){
            $login_tokendestroy = $attendee->login_token;
            $ID = $attendee->id;
        }

        $affected = DB::table('attendees')
              ->where('id', $ID)
              ->update(['login_token' => '']);

              return redirect('/');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
