<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($User_id)
    {
        $user = User::find($User_id);
        return view('profile.edit')->with('user',$user);
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
        $this ->validate($request, [
            'name' => 'required',
            'contactno' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]); 
        
        

        //Handle File Upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just file extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            
        }

        
        //update user
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->contactno = $request->input('contactno');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->postcode = $request->input('postcode');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->bankname = $request->input('bankname');
        $user->bankaccount = $request->input('bankaccount');
        $user->bankswiftcode = $request->input('bankswiftcode');
        $user->bankaddress = $request->input('bankaddress');
        if ($user->role != 'admin'){
        $user->role = 'user';   
        }
        $user->activestatus = 'yes';
        if($request->hasFile('cover_image')){
            if($user->cover_image != 'noimage.jpg'){
                //Delete image
                Storage::delete('public/cover_images/'.$user->cover_image);
            }
            $user->cover_image = $fileNameToStore;
        }
        $user ->save();

        return redirect('/dashboard')->with('success','Profile Updated');
    }


}
