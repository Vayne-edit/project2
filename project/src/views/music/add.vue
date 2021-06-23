<template>
  <div>
    
      <div class="top">
        <el-breadcrumb separator-class="el-icon-arrow-right">
          <el-breadcrumb-item :to="{ path: '/music/index' }">查看音乐</el-breadcrumb-item>
          <el-breadcrumb-item>音乐添加</el-breadcrumb-item>
        </el-breadcrumb>
      </div>
    
        <el-form :label-position="labelPosition" label-width="80px" :model="formLabelAlign">
            <el-form-item label="歌名" >
              <el-input v-model="formLabelAlign.name" style="width:45%;"></el-input>
            </el-form-item>
            <el-form-item label="歌手">
              <el-input v-model="formLabelAlign.region" style="width:45%;"></el-input>
            </el-form-item>
            <!-- <el-form-item label="活动形式">
              <el-input v-model="formLabelAlign.type" style="width:30%;"></el-input>
            </el-form-item> -->
               
            <el-form-item label="流派"  class="guan" >
                  <el-select v-model="value" placeholder="请选择">
                    <el-option
                    v-for="item in options"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                    </el-option>
             </el-select>
            </el-form-item>
            <el-form-item label="专辑"  class="guan">
                  <el-select v-model="value" placeholder="请选择">
                    <el-option
                    v-for="item in options"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                    </el-option>
             </el-select>
            </el-form-item>
            <el-form-item label="歌曲内容"  class="guan">
            <el-input
              type="textarea"
              :rows="2"
              placeholder="请输入内容"
              v-model="textarea">
            </el-input>
            </el-form-item>
          </el-form>
          音乐上传
          <el-upload
              class="upload-demo"
              drag
              action="https://jsonplaceholder.typicode.com/posts/"
              multiple>
              <i class="el-icon-upload"></i>
              <div class="el-upload__text">将音乐拖到此处，或<em>点击上传</em></div>
              
          </el-upload>
          封面上传
           <el-upload
              class="upload-demo"
              drag
              action="https://jsonplaceholder.typicode.com/posts/"
              multiple>
              <i class="el-icon-upload"></i>
              <div class="el-upload__text">将图片拖到此处，或<em>点击上传</em></div>
              
          </el-upload>
          <el-row>
          
            <el-button type="primary">添加音乐</el-button>
          
          </el-row>
         
          <div style="margin: 10px;"></div>
        </div>

</template>

<script>
export default {
 data() {
      return {
        labelPosition: 'top',
        formLabelAlign: {
          name: '',
          region: '',
          type: ''
          
        },
         textarea: '',
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

      };
  
     
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