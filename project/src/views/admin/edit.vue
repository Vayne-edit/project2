<template>
    <div>
        <div class="top">
            <el-page-header class="tou" @back="goBack" content="管理员修改"></el-page-header>
        </div>
            <el-form label-width="100px" class="demo-ruleForm">
            <el-form-item label="管理员名" class="guan">
                <el-input type="text" autocomplete="off" v-model="list.username" name="username"></el-input>
            </el-form-item>
            <el-form-item label="密码"  class="guan">
                <el-input type="password" autocomplete="off" v-model="pass" name="password"></el-input>
            </el-form-item>
            <el-form-item label="管理员权限" class="guan">
                    <el-checkbox-group>
                        <el-radio v-model="list.level" label="1">用户管理员</el-radio>
                        <el-radio v-model="list.level" label="2">音乐管理员</el-radio>
                        <!-- <el-checkbox label="管理员添加" name="type"></el-checkbox>
                        <el-checkbox label="管理员删除" name="type"></el-checkbox> -->
                    </el-checkbox-group>
            </el-form-item>
            <!-- <el-form-item label="歌曲权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="歌曲查看" name="type"></el-checkbox>
                        <el-checkbox label="歌曲修改" name="type"></el-checkbox>
                        <el-checkbox label="歌曲添加" name="type"></el-checkbox>
                        <el-checkbox label="歌曲删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item>
            <el-form-item label="用户权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="用户查看" name="type"></el-checkbox>
                        <el-checkbox label="用户修改" name="type"></el-checkbox>
                        <el-checkbox label="用户添加" name="type"></el-checkbox>
                        <el-checkbox label="用户删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item>
            <el-form-item label="类别权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="类别查看" name="type"></el-checkbox>
                        <el-checkbox label="类别修改" name="type"></el-checkbox>
                        <el-checkbox label="类别添加" name="type"></el-checkbox>
                        <el-checkbox label="类别删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item> -->

            <el-form-item>
                <el-button type="primary" @click="editdo()">提交</el-button>
            </el-form-item>
          </el-form>
    </div>

</template>

<script>
import {adminedit,admineditdo} from "../../request/api.js";
export default {
    data() {
      return {
        list:{username:"",level:""},
        pass:""
      };
      
    },
    methods: {
      goBack() {
          this.$router.push("/admin/index");
      },
      editdo(){
        this.list.password = this.pass;
        admineditdo(this.list).then(res=>{
          console.log(res);
            if(res.code == "200"){
                  alert('修改成功');
                  this.$router.push('/admin/index');
              }else{
                    alert("修改失败")
              }
        })
      }
    },
    created () {
        let id = this.$route.params.id;
        adminedit({id:id}).then(res=>{
            this.list = res;
        })
    },
  }
</script>

<style>
  .guan{
      width: 45%;
      margin-left: 30%;
      margin-top: 3%;
  }

  .top{
    width: 100%;
    height: 40px;
    background-color: rgb(255, 255, 255);
  }

  .top span{
    margin-left: 10px;
    font-size: 14px;
    color: #333;
  }

  .tou{
    line-height: 40px;
  }
</style>