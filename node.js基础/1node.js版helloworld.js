//导入HTTP模块
let http = require('http');

let app  = http.createServer((req,res)=>{
    /*req:请求对象，包含一些参数，请求体，请求路径，cookie，请求域
    res:  相应对象*/

    //设置响应头，否则中文乱码
    res.setHeader('Content-Type','text/palin;charset=utf-8');
    res.end('你好node.js');

    


})
//监听端口（端口范围是0-65535）
app.listen(65535,()=>{
    console.log('The server running at http://localhost:65535');

})