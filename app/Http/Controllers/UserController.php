<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function profile($nama = '', $kelas = '', $npm = '')
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create(){ 
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $fotoPath = $foto->move(('upload/img'), $filename);
        } else {
            $filename = null;
        }

        $this->userModel->create([ // Perbaikan di sini
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $filename,
        ]);

        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
    }

    public function __construct(){
        $this->userModel = new UserModel(); // Perbaikan di sini
        $this->kelasModel = new Kelas();    // Perbaikan di sini
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function show($id){
        $user = $this->userModel->getUser($id);
        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
    }
}