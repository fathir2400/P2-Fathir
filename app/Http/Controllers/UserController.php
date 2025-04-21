<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\UserRequest;
use App\Http\Requests\Request\UserRequestUpdate;

use App\Models\Outlet;
use App\Models\User;
use Exception;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('outlet')->paginate(10); // Ambil user & outlet-nya
        return view('user.index', compact('users'));
    }


    public function create()
{   $user = auth()->user();
    $outles = $user->outlet;  // ambil semua outlet dari database
    return view('user.create', compact('outlets'));
}
private function getUsersByRoleAndOutlet($role)
{
    $currentUser = auth()->user();

    return User::with('outlet')
        ->where('role', $role)
        ->where('outlet_id', $currentUser->outlet_id)
        ->orderBy('name')
        ->paginate(10);
}

public function listAdmins()
{
    $currentUser = auth()->user();

    $admins = $this->getUsersByRoleAndOutlet('admin');
    $outlets = Outlet::all();
    return view('user.list_admin', compact('admins', 'outlets'));
}

public function listSupervisor()
{
    $currentUser = auth()->user();

    $supervisors = $this->getUsersByRoleAndOutlet('supervisor');


    $outlets = Outlet::all();
    return view('user.list_supervisor', compact('supervisors', 'outlets'));

}

public function listKasir()
{
    $currentUser = auth()->user();
    $kasirs = $this->getUsersByRoleAndOutlet('kasir');

    // Jika admin, tampilkan semua kasir, kalau bukan hanya yang satu cabang

    $outlets = Outlet::all();
    return view('user.list_kasir', compact('kasirs', 'outlets'));
}

public function listKitchen()
{
    $currentUser = auth()->user();

    $kitchens = $this->getUsersByRoleAndOutlet('kitchen');


    $outlets = Outlet::all();
    return view('user.list_kitchen', compact('kitchens', 'outlets'));
}
public function listWaiters()
{
    $currentUser = auth()->user();

    $waiters = $this->getUsersByRoleAndOutlet('waiters');


    $outlets = Outlet::all();
    return view('user.list_waiters', compact('waiters', 'outlets'));
}
public function listPelanggan()
{
    $currentUser = auth()->user();

    $pelanggans = $this->getUsersByRoleAndOutlet('pelanggan');


    $outlets = Outlet::all();
    return view('user.list_pelanggan', compact('pelanggans', 'outlets'));
}


public function store(UserRequest $request)
{
    $data = $request->validated();
    $data['outlet_id'] = $request->outlet_id;

    DB::beginTransaction();

    try {
        if ($request->hasFile('foto_profile')) {
            $checkingFile = $request->file('foto_profile');
            $filename = $checkingFile->getClientOriginalName();
            $request->file('foto_profile')->storeAs('public/foto-profile', $filename);
            $data['foto_profile'] = $filename;
        }

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        DB::commit();
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
    }
}
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $outlets = Outlet::all();
        return view('user.update', compact('user', 'outlets'));

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

        return back()->with('success', 'User has been updated successfully');
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

        return back()->with('success', 'User has been delete successfully');
        }else{
            return back()->with('error', 'User not found');
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
       public function showAdmin(Request $request)
       {
        $currentUser = auth()->user();

        $admins = $this->getUsersByRoleAndOutlet('admin');
        //    $admins = User::where('role', 'admin')->get();
           return view('user.invoice_admin', compact('admins'));
       }
       public function showKasir(Request $request)
       {
        $currentUser = auth()->user();
        $kasirs = $this->getUsersByRoleAndOutlet('kasir');
        //    $kasirs = User::where('role', 'kasir')->get();
           return view('user.invoice_kasir', compact('kasirs'));
       }
       public function showSupervisor(Request $request)
       {
        $currentUser = auth()->user();

        $supervisors = $this->getUsersByRoleAndOutlet('supervisor');
        //    $supervisors = User::where('role', 'supervisor')->get();
           return view('user.invoice_supervisor', compact('supervisors'));
       }
       public function showKitchen(Request $request)
       {
        $currentUser = auth()->user();

        $kitchens = $this->getUsersByRoleAndOutlet('kitchen');

        //    $kitchens = User::where('role', 'kitchen')->get();
           return view('user.invoice_kitchen', compact('kitchens'));
       }
       public function showWaiters(Request $request)
       {
        $currentUser = auth()->user();

        $waiters = $this->getUsersByRoleAndOutlet('waiters');

        //    $waiters = User::where('role', 'waiters')->get();
           return view('user.invoice_waiters', compact('waiters'));
       }
       public function showPelanggan(Request $request)
       {
        $currentUser = auth()->user();

        $pelanggans = $this->getUsersByRoleAndOutlet('pelanggan');

        //    $pelanggans = User::where('role', 'pelanggan')->get();
           return view('user.invoice_pelanggan', compact('pelanggans'));
       }


}
