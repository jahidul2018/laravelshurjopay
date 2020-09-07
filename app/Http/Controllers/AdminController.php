<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
Use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }
    public function student_list()
    {
        return view('admin.student_list');
    }
    public function admin_admit($id)
    {
        // if(Auth::user()->sp_code =='001'){
            $student=User::find($id);
            return view('admit_card.admit_card')->with('student',$student);
        // }
        // else{
        //     return view('shurjopayment.pages.shurjopay');
        // }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentSyncTable()
    {
        $students=User::where('is_admin',0)->get();
        $data_table_render = DataTables::of($students)
            ->addColumn('action',function ($row){

                return 
                    '<a  href="/admin/admit/'.$row['id'].'" target="_blank" class="btn btn-light btn-sm delete_class">Admit</button>';
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        return $data_table_render;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }
}
