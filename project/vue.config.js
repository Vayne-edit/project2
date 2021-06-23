module.exports = {
    devServer:{
        //设置端口号
        
        //设置代理
        proxy:{
            "/":{
                target:"http://haha.com"
            }
        }
    }
}