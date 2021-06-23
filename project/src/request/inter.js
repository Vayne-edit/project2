import axios from "axios"
//封装以下准备工作和劫持

const axi = axios.create({
    timeout:2000,
    baseURL:"/index.php/"
})

axi.interceptors.request.use(succ=>{
    //统一的公共验证
    return succ;
},err=>{
    return Promise.reject();
})



axi.interceptors.response.use(succ=>{
    
    return succ.data;
},err=>{
    return Promise.reject();
})

export default axi;