<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = DB::table("user")->get();
        foreach($res as $k=>$v){
            $time = $v->time;
            $res[$k]->time = date('Y-m-d H:i:s',$time);
            if($v->status){
                $res[$k]->status = "正常";
            }else{
                $res[$k]->status = "已禁用";
            }
        }
        echo json_encode($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = $_GET;
        $res = DB::table('userinfo')->where('uid',$id)->get();
        if($res==[]){
            if($res[0]->vip){
                $a = "会员";
                $res[0]->vip = $a;
            }else{
                $a = "非会员";
                $res[0]->vip = $a;
            }
            echo json_encode($res);
        }else{
            echo '{"code":"100","msg":"该用户还没有用户信息呢"}';
            die();
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
