<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\ListRs;
   
class HomeController extends Controller
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
        $rumah_sakit = ListRs::all();
        return view('home', ['rumah_sakit' => $rumah_sakit]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {   
        $rumah_sakit = ListRs::all();
        return view('adminHome', ['rumah_sakit' => $rumah_sakit]);
    }

    public function tambah()
    {
    	return view('tambah');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required'
        ]);

        ListRs::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi
        ]);
        return redirect('/admin/home');
    }

    public function edit($id){
        $rumah_sakit = ListRs::find($id);
        return view('edit', ['rumah_sakit' => $rumah_sakit]);
    }

    public function update(Request $request, $id){

        $rumah_sakit = ListRs::find($id);
        $rumah_sakit->nama = e($request->input('nama'));
        $rumah_sakit->alamat = e($request->input('alamat'));
        $rumah_sakit->provinsi = e($request->input('provinsi'));
        $rumah_sakit->save();
        return redirect('/admin/home');
    }

    public function delete($id){
        $rumah_sakit = ListRs::find($id);
        $rumah_sakit->delete();
        return redirect('/admin/home');
    }
}