<template>
    <div>
        <div class="top">
            <el-breadcrumb separator-class="el-icon-arrow-right">
                <el-breadcrumb-item><a href="/music/index">音乐管理</a></el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <div class="main">
                   <el-table
                   :data="tableData"
                    stripe
                    style="width: 100% "
                    fit:false
                    >
                    <el-table-column
                    prop="date"
                    label="歌曲封面"
                    width="160">
                     <el-avatar src="https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png" ></el-avatar>
                    </el-table-column>
                    <el-table-column
                    prop="name"
                    label="歌曲名"
                    width="200">
                    </el-table-column>
                    <el-table-column
                    prop="phone"
                    label="歌手"
                    width="160">
                    </el-table-column>
                      <el-table-column
                    prop="guan"
                    label="专辑"
                    width="160">
                    </el-table-column>
                      <el-table-column
                    prop="fen"
                    label="是否收费"
                    width="160">
                    <el-switch
                    v-model="value"
                    active-color="#13ce66"
                    inactive-color="#ff4949">
                    </el-switch>
                    </el-table-column>
                    <el-table-column
                    prop="shou"
                    label="操作"
                    width="160">
                    <el-button-group>
                        <el-button type="primary" icon="el-icon-circle-plus-outline"  @click="handleAdd()"></el-button>
                        
                        <el-button type="primary" icon="el-icon-delete"></el-button>
                    </el-button-group>
                    </el-table-column>
                  
                </el-table>  
           
       
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        goBack() {
            this.$router.push("/user/index");
        },
         handleAdd() {
       
            this.$router.push("/music/Add");
        },
    },
    data() {
      return {
        tableData: [{
      
          name: '王小虎',
          phone: '15004184921',
          guan:'12',
          fen:"0",
          shou:"120首",
         
        }, ],
        value: "",
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
        margin-left:1%;
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