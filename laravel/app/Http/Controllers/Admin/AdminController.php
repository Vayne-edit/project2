<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = DB::table("admin")->get();
        $row = json_decode($res);
        foreach($row as $k=>$v){
            if($v->level == 0){
                $a = "超级管理员";
                $row[$k]->level = $a;
            }elseif($v->level == 1){
                $a = "用户管理员";
                $row[$k]->level = $a;
            }elseif($v->level == 2){
                $a = "音乐管理员";
                $row[$k]->level = $a;
            }
            $time = $v->time;
            $row[$k]->time = date('Y-m-d H:i:s',$time);
            if($v->status){
                $row[$k]->status = "正常";
            }else{
                $row[$k]->status = "已禁用";
            }
        }
        echo json_encode($row);
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
        $res = $request->all();
        $res['password'] = Hash::make($res['password']);
        $res['time'] = time();
        $res['level'] = intval($res['level']);
        $r = DB::table("admin")->insert($res);
        if($r){
            echo '{"code":"200","msg":"添加成功"}';
        }else{
            echo '{"code":"100","msg":"添加失败"}';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = $_GET;
        $res = DB::table("admin")->find($id);
        echo json_encode($res); 
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
        $res = $request->all();
        $id = $res['id'];
        if ($res['password']) {
            $res["password"] = Hash::make($res["password"]);
        } else {
            unset($res['password']);
        }
        $res['time'] = time();
        $r = DB::table('admin')->where("id", $id)->update($res);
        if($r){
            echo '{"code":"200","msg":"修改成功"}';
        }else{
            echo '{"code":"100","msg":"修改失败"}';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = $_GET;
        $res = DB::table("admin")->delete($id);
        if($res){
            echo '{"code":"200","msg":"修改成功"}';
        }else{
            echo '{"code":"100","msg":"修改失败"}';
        }
    }
}
