//导入http模块
let http = require('http');

//创建http服务器
let app = http.createServer((req,res)=>{
    
    //url处理
    let url = req.url;
    console.log('url ==>',url);


    //不同路径响应不同数据
    if(url == '/'){
        //200是正常响应码
        res.writeHead(200,{'Content-Type':'text/plain;charset=utf-8'});
        res.end('在根');
    }else if(url == '/study'){
        res.writeHead(200,{'Content-Type':'text/plain;charset=utf-8'});
        res.end('在study');
    }else{
        res.writeHead(200,{'Content-Type':'text/plain;charset=utf-8'});
        res.end('找不到资源');
    }
})

app.listen(65535,()=>{
    console.log('The server running at http:localhost:65535');
})