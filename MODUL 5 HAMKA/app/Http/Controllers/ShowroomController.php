<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShowroomController extends Controller
{
    public function RegisterHamka(){
        return view('RegisterHamka');
    }
    public function HomeHamka(){
        return view('HomeHamka');
    }
    public function ListCarHamka(){
        $ListCar = Showroom::all();
        $CountLC = Showroom::count();
        return view('ListCarHamka', compact(['ListCar'], 'CountLC'));
    }
    public function DetailHamka($id){
        $DetailCar = Showroom::find($id);
        return view('DetailHamka', compact(['DetailCar']));
    }
    public function AddCarHamka(){
        return view('AddCarHamka');
    }
    public function ProfileHamka(){
        return view('ProfileHamka');
    }
    public function CreateRegister(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);

        $RegisterUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password)
        ]);
        if($RegisterUser){
            return redirect('/LoginHamka');
        }
    }
    public function InsertCar(Request $request){
        $ekstensi = $request->file('image')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('image')->storeAs('images', $nama);
        $request['image'] = $nama;
        $InsertCar = Showroom::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'owner' => $request->owner,
            'brand' => $request->brand,
            'purchase_date' => $request->purchase_date,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $nama,
        ]);
        if($InsertCar){
            return redirect('/ListCarHamka');
        }
    }
    public function DeleteCar($id){
        $ListCar = Showroom::find($id);
        $ListCar->delete();
        return redirect('/ListCarHamka');
    }
    public function EditCar(Request $request, $id){
        $EditCar = Showroom::find($id);
        $EditCar->update($request->except('_token'));
        return redirect('/ListCarHamka');
    }
    public function EditProfile(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);
        $EditProfile = User::find(Auth::user()->id);
        DB::table('users')->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password)
        ]);
        if($EditProfile){
            return redirect('/ProfileHamka');
        }
    }
}
