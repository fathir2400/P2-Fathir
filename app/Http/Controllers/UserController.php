<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\UserRequest;
use App\Http\Requests\Request\UserRequestUpdate;

use App\Models\User;
use Exception;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function index(){
     $users = User::get();
     return view('user.index', compact('users'));
    }
    public function create(){
        $users = User::all();
       
        return view('user.create',[
            'users' => $users,
            
        ]);
        
    }

    public function store(UserRequest $request){
        $data = $request->validated();
        $user = Auth::user();
        DB::beginTransaction();

        try {
            if ($request->hasFile('foto_profile')){
                $checkingFile = $request->file('foto_profile');
                $filename = $checkingFile->getClientOriginalName();
                $path = $checkingFile->storeAs('public/foto-profile',$filename);
                $data ['foto_profile'] = $filename;
            }
            $data ['password'] = bcrypt($data['password']);
            $user = User::create($data);
            
            DB::commit();


            return redirect(url('Users'))->with('succes', 'user has been created');
        }catch(Exception $e){
            info($e->getMessage());
            DB::roleBack();

            return response()->json([
                "code" => 421,
                "status" => "Error",
                "message" => $e->getLine() . ' ' . $e->getMessage()
            ]);
        }

    }
    public function edit(string $id_user){
        $levels = User::distinct('level')->pluck('role');
        $users = User::find($id_user);
      

        return view('user.update', [
            'users' => $users,
            'levels' => $levels,
           
        ]);
    }
    public function update(UserRequestUpdate $request, $id_user){
        $data = $request->validated();

        try{
            if ($request->hasFile('foto_profile')){
                $checkingFile = $request->file('foto_profile');
                $filename = $checkingFile->getClientOriginalName();
                $path = $checkingFile->storeAs('public/foto-profile',$filename);
                $data ['foto_profile'] = $filename;
            }
        if($request->filled('password')){
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
            unset($data['password_confirmation']);
        }
        $user = User::find($id_user);
        $user->update($data);

        DB::commit();

        return redirect('/Users')->with('succes', 'user has been update');
        } catch(Exception $e) {
            info($e->getMessage());
            DB::rollBack();

            return response()->json([
                "code" => 421,
                "status" => "Error",
                "message" => $e->getLine() . ' ' . $e->getMessage()
            ]);
        }

    }
    public function destroy($id){
        $user = User::find($id);
        if($user) {
            $user->delete();
            return redirect('/Users')->with('succes', 'User deleted successfully');
        }else{
            return redirect('/Users')->with('error', 'User not found');
        }
    }

    
    public function pengguna(){
        $siswa = User::where('role', 'pengguna')->get();
        return view('pengguna.index', [
            'users' => $siswa
        ]);
    }
    
    
    public function show(Request $request){
        $users = User::get();      
        return view('user.invoice',compact('users'));
       }
}
