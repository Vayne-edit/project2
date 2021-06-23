<template>
    <div>
       
      <div class="top">
        <el-breadcrumb separator-class="el-icon-arrow-right">
          <el-breadcrumb-item :to="{ path: '/type/index' }">类别查看</el-breadcrumb-item>
          <el-breadcrumb-item>类别添加</el-breadcrumb-item>
        </el-breadcrumb>
      </div>
            <el-form :model="ruleForm" status-icon :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
            <el-form-item label="类别名" class="guan">
                <el-input type="text"  autocomplete="off"></el-input>
            </el-form-item>
            <el-form-item label="类别"  class="guan">
                  <el-select v-model="value" placeholder="请选择">
                    <el-option
                    v-for="item in options"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                    </el-option>
             </el-select>
            </el-form-item>
             <!-- <el-form-item label="管理员权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="管理员查看" name="type"></el-checkbox>
                        <el-checkbox label="管理员修改" name="type"></el-checkbox>
                        <el-checkbox label="管理员添加" name="type"></el-checkbox>
                        <el-checkbox label="管理员删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item>
            <el-form-item label="管理员权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="歌曲查看" name="type"></el-checkbox>
                        <el-checkbox label="歌曲修改" name="type"></el-checkbox>
                        <el-checkbox label="歌曲添加" name="type"></el-checkbox>
                        <el-checkbox label="歌曲删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item>
            <el-form-item label="管理员权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="用户查看" name="type"></el-checkbox>
                        <el-checkbox label="用户修改" name="type"></el-checkbox>
                        <el-checkbox label="用户添加" name="type"></el-checkbox>
                        <el-checkbox label="用户删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item>
            <el-form-item label="管理员权限" class="guan">
                    <el-checkbox-group v-model="form.type">
                        <el-checkbox label="类别查看" name="type"></el-checkbox>
                        <el-checkbox label="类别修改" name="type"></el-checkbox>
                        <el-checkbox label="类别添加" name="type"></el-checkbox>
                        <el-checkbox label="类别删除" name="type"></el-checkbox>
                    </el-checkbox-group>
            </el-form-item> -->
            <el-form-item>
                <el-button type="primary" @click="submitForm('ruleForm')">提交</el-button>
               
            </el-form-item>
            </el-form>
                    
        
       
    </div>

</template>

<script>
 export default {
    data() {
      var checkAge = (rule, value, callback) => {
        if (!value) {
          return callback(new Error('年龄不能为空'));
        }
        setTimeout(() => {
          if (!Number.isInteger(value)) {
            callback(new Error('请输入数字值'));
          } else {
            if (value < 18) {
              callback(new Error('必须年满18岁'));
            } else {
              callback();
            }
          }
        }, 1000);
      };
      var validatePass = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('请输入密码'));
        } else {
          if (this.ruleForm.checkPass !== '') {
            this.$refs.ruleForm.validateField('checkPass');
          }
          callback();
        }
      };
      var validatePass2 = (rule, value, callback) => {
        if (value === '') {
          callback(new Error('请再次输入密码'));
        } else if (value !== this.ruleForm.pass) {
          callback(new Error('两次输入密码不一致!'));
        } else {
          callback();
        }
      };
        return {
        options: [{
          value: '选项1',
          label: '黄金糕'
        }, {
          value: '选项2',
          label: '双皮奶'
        }, {
          value: '选项3',
          label: '蚵仔煎'
        }, {
          value: '选项4',
          label: '龙须面'
        }, {
          value: '选项5',
          label: '北京烤鸭'
        }],
        value: ''
      }
      return {
        ruleForm: {
          
          checkPass: '',
          age: ''
        },
         form: {
         
          type: [],
         
        },
        rules: {
          pass: [
            { validator: validatePass, trigger: 'blur' }
          ],
          checkPass: [
            { validator: validatePass2, trigger: 'blur' }
          ],
          age: [
            { validator: checkAge, trigger: 'blur' }
          ]
        }
      };
      
    },
    methods: {
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            alert('submit!');
          } else {
            console.log('error submit!!');
            return false;
          }
        });
      },
      resetForm(formName) {
        this.$refs[formName].resetFields();
      }
    }
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
    line-height: 40px;
    font-size: 14px;
    color: #333;
  }
</style>