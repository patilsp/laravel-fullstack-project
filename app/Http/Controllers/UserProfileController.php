<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Datatables;
use DB;
use Validator;
use DateTime;
use Auth;
use App\Role;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('userprofiles.index', compact('users','roles'));
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

        $validation = Validator::make($request->all(), [            
            // 'name' => 'required',
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {

            if ($request->get('button_action') == 'update') {
                $input = $request->all();
                $users = User::find($request->get('user_profile_id'));
                $users->update($input);
            }
            if ($request->hasFile('profile_pic')) {
                $user = Auth::user();
        
                // Validate the uploaded file
                $request->validate([
                    'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
        
                // Handle the image upload and update
                if ($request->hasFile('profile_pic')) {
                    // Delete the previous profile picture if exists
                    if ($user->profile_pic) {
                        Storage::delete('assets/media/avatars/profile_pics/' . $user->profile_pic);
                    
        
                    $profilePicPath = $request->file('profile_pic')->store('assets/media/avatars/profile_pics');
                    $user->profile_pic = $profilePicPath;
                    $user->save();
                }
            }

            

        }

        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
       
    }
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


    public function getall(Request $request) {
       $id = $request->input('id');
       $data = UserProfile::get();

        return Datatables::of($data)->addColumn('action', function ($data) {
            return '<a href="#" class="btn btn-info edit" id="' . $data->id . '"><i class="bi bi-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-danger delete" id="' . $data->id . '"><i class="bi bi-trash"></i></a>';
        })->make(true);
    }

    public function getdata(Request $request) {
        $id = $request->input('id');
        $output = Role::find($id);
        echo json_encode($output);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $id = $request->input('id');
        UserProfile::find($id)->delete();
        echo 'Data Deleted';
    }


    public function updateProfile(Request $request){
        $user = Auth::user();
        $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/assets/profile_images', $imageName);
            $user->profile_image = $imageName;
            $user->save();
        }
        

        return redirect()->back()->with('success', 'Profile image updated successfully.');
    }


    
}
