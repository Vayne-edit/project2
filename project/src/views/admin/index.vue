<template>
    <div>
        <div class="top">
            <el-breadcrumb separator-class="el-icon-arrow-right">
                <el-breadcrumb-item><a href="/admin/index">管理员管理</a></el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <el-input class="search" v-model="input" placeholder="请输入内容"></el-input>
        <el-button class="btn" type="primary" icon="el-icon-search">搜索</el-button>
        <el-table :data="list" tooltip-effect="dark" style="width: 100%">
            <el-table-column type="selection" width="55"></el-table-column>
            <el-table-column prop="id" label="序号" width="120">
            </el-table-column>
            <el-table-column prop="username" label="管理员名" width="120">
            </el-table-column>
            <el-table-column prop="level" label="权限"  show-overflow-tooltip>
            </el-table-column>
            <el-table-column prop="time" label="加入时间" show-overflow-tooltip>
            </el-table-column>
            <el-table-column prop="status" label="状态" show-overflow-tooltip>
            </el-table-column>
            <el-table-column label="操作">
                <template slot-scope="scope">
                    <el-button size="mini" @click="edit(scope.row)">编辑</el-button>
                    <el-button size="mini" type="danger" @click="del(scope.row)">删除</el-button>
                </template>
            </el-table-column>
        </el-table>
        <el-pagination
            background
            layout="prev, pager, next"
            :total="1000">
        </el-pagination>
    </div>
</template>

<script>
import {getShow,adminedit,admindel} from "../../request/api.js"
export default {
    data() {
        return {
            input: '',
            list:[],
        }
    },

    methods: {
        edit(b){
            let id = b['id'];
            adminedit({id:id}).then(res=>{
                this.$router.push("/admin/edit/"+id); 
                // console.log(res);
            })
        },
        del(a){
            let id = a['id'];
            admindel({id:id}).then(res=>{
                if(res.code == '200') {
                        alert('删除成功');
                        this.list.pop(a,1);
                    }else{
                        alert('删除失败');
                        return;
                    }
            })
        }
    },

    created(){
        getShow().then(res=>{
            // console.log(res);
            this.list = res;
        })   
    },
}
</script>

<style>
    .top{
        width: 100%;
        height: 40px;
        background-color: rgb(255, 255, 255);
    }
    .top span{
        margin-left: 10px;
        line-height: 40px;
        font-size: 14px;
        color: #333;
    }
    .search{
        width: 200px !important;
        float: left;
        margin: 30px;
    }
    .btn{
        float: left;
        margin-top: 30px;
        margin-left:-30px ;
    }
</style>