<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Hash;
  
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }

    public function indexAfiliate()
    {
        return view('affiliate.profile.index');
    }

    public function indexAdmin()
    {
        return view('admin.profile.index');
    }
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'avatar' => 'image',
        ]);
    
        $input = $request->all();
    
        if ($request->hasFile('avatar')) {
            $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('avatars'), $avatarName);
    
            // Concatena la ruta completa antes de guardar en la base de datos
            $avatarPath = 'avatars/' . $avatarName;
            $input['avatar'] = $avatarPath;
        } else {
            unset($input['avatar']);
        }
    
        if ($request->filled('password')) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
    
        auth()->user()->update($input);
    
        return back()->with('success', 'Perfil actualizada exitosamente.');
    }
    
}