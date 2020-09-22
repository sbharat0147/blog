<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cont extends Controller
{

    public function list (){

        $data['result']=DB::table('contacts')->orderBy('id', 'desc')->get();

        return view('admin/cont/list', $data);
    }

    public function edit(Request $request, $id){

        $data['result']=DB::table('contacts')->where('id', $id)->get();

        return view('admin/cont/edit', $data);

    }

    public function add(){

        return view('admin/cont/add');


    }
    public function submit(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile_no'=>'required',
            'address'=>'required',
//            'img'=>'required'
        ]);
//        $image=$request->file('img')->store('public/admin_asset/images');
//            $image=$request->file('img');
//            $ext=$image->extension();
//            $ifile=time().'.'.$ext;
//            $image->storeAs('public/admin_asset/images', $ifile);

        $data=array(
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile_no'=>$request->input('mobile_no'),
            'address'=>$request->input('address'),
            'status'=>1,
            'added_on'=>date('y-m-d h:i:s'),
        );

        DB::table('contacts')->insert($data);
        $request->session()->flash('msg', 'contacts Saved !!');
        return redirect(route('listcont'));

    }

    public function delete(Request $request, $id){
        DB::table('contacts')->where('id', $id)->delete();

        $request->session()->flash('msg', 'contacts Deleted !!');
        return redirect(route('listcont'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile_no'=>'required',
            'address'=>'required',
//            'img'=>'required'
        ]);
//        $image=$request->file('img')->store('public/admin_asset/images');
//            $image=$request->file('img');
//            $ext=$image->extension();
//            $ifile=time().'.'.$ext;
//            $image->storeAs('public/admin_asset/images', $ifile);

        $data=array(
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile_no'=>$request->input('mobile_no'),
            'address'=>$request->input('address'),
            'status'=>1,
            'added_on'=>date('y-m-d h:i:s'),
        );

        x
        DB::table('contacts')->where('id',$id)->update($data);
        $request->session()->flash('msg', 'contacts Updated !!');
        return redirect(route('listcont'));

    }


}
