<template>
    <div>
        <div class="top">
            <el-page-header class="tou" @back="goBack" content="用户详情"></el-page-header>
        </div>
        <div class="main">
            <el-table :data="list" tooltip-effect="dark" style="width: 100%">
                <el-table-column prop="pic" label="头像" width="160">
                <el-avatar src="https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png" ></el-avatar>
                </el-table-column>
                <el-table-column prop="tname" label="用户名" width="160">
                </el-table-column>
                <el-table-column prop="phone" label="手机号" width="160">
                </el-table-column>
                <el-table-column prop="gz" label="关注" width="160">
                </el-table-column>
                <el-table-column prop="fans" label="粉丝" width="160">
                </el-table-column>
                <el-table-column prop="vip" label="VIP" width="160">
                </el-table-column>
            </el-table>  
        </div>
    </div>
</template>

<script>
import {getUinfo} from "../../request/api.js"
export default {
    data() {
        return {
            list:[]
        }
    },
    created(){
        let id = this.$route.params.id;
        getUinfo({id:id}).then(res=>{
            this.list = res;
        })     
    },
    methods: {
        goBack() {
            this.$router.push("/user/index");
        }
    },
}
</script>

<style>
    .top{
        width: 100%;
        height: 40px;
        background-color: rgb(255, 255, 255);
    }
    .tou{
        line-height: 40px;
    }
    .main{
        float: left;
        margin-left:10%;
        margin-top: 2%;
    }
    .main li{
        float: left;
        margin: 60px;
    }
    .main li img{
        width: 80px;
        height: 80px;
    }
    .t{
        border-radius: 50%;
    }
</style>