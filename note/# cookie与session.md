# cookie与session

## cookie

保存的数据（字符串），始终都是在客户端

~~~php
	//存cookie
	setcookie('cookie名', 'cookie值', 有效期(秒), 保存路径, 域, httponly);
	
	//取cookie
	$_COOKIE['名']; //字符串
	
	//修改
	setcookie();
	
	//删除cookie
	setcookie('名', null, time()-1);
~~~

## session

通过唯一的PHPSESSID（会话标识）来区分不同的用户，会话标识默认是以cookie形式保存在客户端，而且这个数据是唯一、加密的、PHP自动生成的；还可以通过url地址的形式传递PHPSESSID。

#### 工作流程
> 开始会话
	session_start();

> 写入数据
	$_SESSION['名'] = '值';

> 读取数据
	$_SESSION['名'];

> 清空session
	unset($_SESSION['名']);

> 销毁会话
	session_destory();

## session与cookie的区别

+ 保存位置不同，session保存在服务端，cookie保存在客户端；
+ 跨域问题，session无法跨域，cookie不做区别；（单点登录）
+ 安全性；
+ 生命周期；
+ 网络传输量（占用带宽量）；
+ 访问限制；