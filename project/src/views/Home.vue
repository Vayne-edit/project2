<template>
  <div>
    <el-container>
      <el-header>
        <i class="el-icon-dish"></i>&nbsp;&nbsp;&nbsp;QQ音乐后台管理中心
      </el-header>
      <el-container>
        <el-aside>
          <el-container class="el-container">
            <el-aside class="el-aside" style="background-color: rgb(238, 241, 246)">
              <el-menu :default-openeds="['0', '5']">
                <el-submenu index="0">
                  <template slot="title">
                    <router-link to="/admin/show">
                      首页
                    </router-link> 
                  </template>
                </el-submenu>
                <el-submenu index="1">
                  <template slot="title">
                    <i class="el-icon-user-solid"></i>管理员模块
                  </template>
                  <router-link to="/admin/index">
                    <el-menu-item index="1-1">查看管理员</el-menu-item>
                  </router-link>
                  <router-link to="/admin/add">
                    <el-menu-item index="1-1">添加管理员</el-menu-item>
                  </router-link>
                </el-submenu>
                <el-submenu index="2">
                  <template slot="title">
                    <i class="el-icon-s-custom"></i>用户模块
                  </template>
                  <router-link to="/user/index">
                    <el-menu-item index="1-1">查看用户</el-menu-item>
                  </router-link>
                </el-submenu>
                <el-submenu index="3">
                  <template slot="title">
                    <i class="el-icon-menu"></i>类别模块
                  </template>
                  <router-link to="/type/index">
                    <el-menu-item index="1-1">查看类别</el-menu-item>
                  </router-link>
                  <router-link to="/type/add">
                    <el-menu-item index="1-1">添加类别</el-menu-item>
                  </router-link>
                </el-submenu>
                <el-submenu index="4">
                  <template slot="title">
                    <i class="el-icon-headset"></i>音乐模块
                  </template>
                  <router-link to="/music/index">
                    <el-menu-item index="1-1">查看音乐</el-menu-item>
                  </router-link>
                  <router-link to="/music/add">
                    <el-menu-item index="1-1">添加音乐</el-menu-item>
                  </router-link>
                </el-submenu>
                <el-submenu index="5">
                  <template slot="title">
                    <i class="el-icon-video-camera-solid"></i>MV模块
                  </template>
                  <router-link to="/mv/index">
                    <el-menu-item index="1-1">查看MV</el-menu-item>
                  </router-link>
                  <router-link to="/mv/add">
                    <el-menu-item index="1-1">添加MV</el-menu-item>
                  </router-link>
                </el-submenu>
              </el-menu>
            </el-aside>
          </el-container>
        </el-aside>
        <el-main>
          <router-view />
        </el-main>
      </el-container>
    </el-container>
  </div>
</template>

<script>
export default {
  
};
</script>

<style>
@charset "utf-8";
/* 初始化 */
body,
ul,
li,
ol,
h1,
h2,
h3,
h4,
h5,
h6,
input,
textarea,
select,
p,
dl,
dt,
dd,
a,
img,
button,
form,
table,
th,
tr,
td,
tbody,
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  margin: 0;
  padding: 0;
}
body {
  overflow-x: hidden;
  font: normal 14px/1.5 "Microsoft Yahei", Tahoma, "Lucida Grande", Verdana,
    STXihei, hei;
}
em,
i {
  font-style: normal;
}
strong {
  font-weight: normal;
}
a {
  text-decoration: none;
  color: #333;
}
ul,
ol {
  list-style: none;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: 100%;
  font-weight: normal;
}
/*专门清除浮动的 */
.clearfix:after {
  content: "";
  display: block;
  visibility: hidden;
  height: 0;
  clear: both;
}
.el-header {
  font-size: 20px;
  background-color: #111111;
  color: #ffffff;
  text-align: left;
  line-height: 60px;
}

.el-aside {
  width: 200px !important;
  height: 100%;
  background-color: #d3dce6;
  color: #333;
  text-align: center;
  line-height: 100%;
}

.el-main {
  width: 20%;
  height: 660px;
  background-color: #e9eef3;
  color: #333;
  text-align: center;
  padding: 0 !important;
}

body > .el-container {
  margin-bottom: 40px;
}

.el-container:nth-child(5) .el-aside,
.el-container:nth-child(6) .el-aside {
  line-height: 260px;
}

.el-container:nth-child(7) .el-aside {
  line-height: 320px;
}
</style>
