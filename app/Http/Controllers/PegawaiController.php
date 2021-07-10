<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_peg = DB::table('pegawai')->get();
        return view('content.pegawai',compact('ar_peg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.newform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //upload file
            if(!empty($request->foto)){
                $request->validate(
                    ['foto'=>'image|mimes:png,jpg|max:2048']
                );
                $filename = $request->nama.'.'.$request->foto->extension();
                $request->foto->move(public_path('images'),$filename);
            }else{
                $filename = '';
            }

        //menyimpan data
        DB::table('pegawai')->insert(
            [
                'nip'=>$request->nip,
                'nama'=>$request->nama,
                'alamat'=>$request->alamat,
                'no_hp'=>$request->no_hp,
                'tempat_lahir'=>$request->tempat_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'kelamin_id'=>$request->kelamin_id,
                'agama_id'=>$request->agama_id,
                'jabatan_id'=>$request->jabatan_id,
                'golongan_id'=>$request->golongan_id,
                // 'foto'=>$request->foto,
                'foto'=>$filename
            ]
        );
        return redirect('/pegawai'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ar_pegawai = DB::table('pegawai')->where('id',$id)->get();
        return view('content.detail',compact('ar_pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            //mengarahkan ke form edit
            $data = DB::table('pegawai')->where('id',$id)->get();
            return view('content.editform',compact('data'));
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
            //upload file
            if(!empty($request->foto)){
                $request->validate(
                    ['foto'=>'image|mimes:png,jpg|max:2048']
                );
                $filename = $request->nama.'.'.$request->foto->extension();
                $request->foto->move(public_path('images'),$filename);
            }else{
                $filename = '';
            }
            //update data
            DB::table('pegawai')->where('id',$id)->update(
                [
                    'nip'=>$request->nip,
                    'nama'=>$request->nama,
                    'alamat'=>$request->alamat,
                    'no_hp'=>$request->no_hp,
                    'tempat_lahir'=>$request->tempat_lahir,
                    'tgl_lahir'=>$request->tgl_lahir,
                    'kelamin_id'=>$request->kelamin_id,
                    'agama_id'=>$request->agama_id,
                    'jabatan_id'=>$request->jabatan_id,
                    'golongan_id'=>$request->golongan_id,
                    'foto'=>$filename
                ]
            );
            return redirect('/pegawai'.'/'.$id);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            //hapus data
            DB::table('pegawai')->where('id',$id)->delete();
            return redirect('/pegawai');
    }
}

