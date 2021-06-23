<template>
    <div>
      <div class="top">
        <el-breadcrumb separator-class="el-icon-arrow-right">
          <el-breadcrumb-item :to="{ path: '/admin/show' }">首页</el-breadcrumb-item>
        </el-breadcrumb>
      </div>
        <el-card class="box-card">
          <template #header>
            <div class="card-header">
              <el-avatar icon="el-icon-user-solid"></el-avatar><br />
              <span>欢迎xxx管理员登录</span>
              <span></span>
            </div>
          </template>
            <div class="demo-type">
              <div>
                <span>上次登陆时间:</span><br />
                <span>登录次数:</span>
              </div>
            </div>
        </el-card>
        <div class="xx">
          <div class="tx">
            <el-avatar icon="el-icon-user-solid"></el-avatar>
          </div>
          <div class="sl">
            <ul>
              <li>1234</li>
              <li>用户访问量</li>
            </ul>
          </div>
        </div>
    </div>
</template>

<script>
export default {
  data () {
　　return {};
　},
　methods: {
　
　}
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
  .box-card{
    float: left;
    width: 350px;
    height: 200px;
    margin: 20px;
  }
  .xx{
    float: left;
    width: 200px;
    height: 100px;
    margin: 20px;
    text-align: center;
    background-color: rgb(255, 255, 255);
  }
  .tx{
    float: left;
    width: 30% ;
    height: 100px;
  }
  .sl{
    float: left;
  }
</style>


