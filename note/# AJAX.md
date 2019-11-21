# AJAX

异步处理web请求的一种方式（技术）。

在JavaScript中实现AJAX主要是通过XMLHttpRequest(xhr)，与后端服务器进行数据交互，进而达到异步处理方式。

async function （） {
	await ***；
}

xhr.open(type, url, true, user, password);
xhr.send();

type：get、post、put(更新)、delete(删除)、options(验证)
url：请求路径
true/false：异步/同步

属性readyState：
	0 => 请求未初始化
	1 => 与服务端已建立连接
	2 => 服务端已接收请求
	3 => 服务端处理请求中
	4 => 请求已完成

属性status：
	200 "ok"
	404 "未找到"
	301 "永久重定向"
	302 "临时重定向"
	500 "服务端有误"
	
	
AJAX请求成功的标志：
xhr.readyState == 4  && xhr.status == 200
