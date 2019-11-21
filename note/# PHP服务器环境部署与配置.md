# PHP服务器环境部署与配置

## 服务端环境
WAMPServer\XAMPP\PHPStudy（集成包：Apache2.4\PHP7*\MySQL5.6）

#### 服务端软件
Apache\Nginx\IIS\Tomcat

#### 虚拟主机与（云）服务器
虚拟主机是指在网络服务器上分出一定的磁盘空间，用户可以租用此部分空间，以提供用户放置站点及应用组件，提供必要的数据存放和传输功能。

Apache的vhosts配置：

    <VirtualHost *:80>
        DocumentRoot "F:\test"
        ServerName "test.com"
        ##ServerAlias www.dummy-host.example.com
        ##ErrorLog "logs/dummy-host.example.com-error.log"
        ##CustomLog "logs/dummy-host.example.com-access.log" common
        ##ErrorDocument 404 /missing.html
        <Directory "F:\test">
            Options Indexes FollowSymLinks Includes ExecCGI
            ##Options FollowSymLinks  禁止显示目录结构
            AllowOverride All
            <RequireAll>
                Require all granted
                ##Require host www.example.com
                ##Require all denied  拒绝所有访问请求
                ##Require not ip 192.168.6.100
                ##Require not ip 192.120 192.168.100
            </RequireAll>
        </Directory>
    </VirtualHost>

#### PHP配置

Windows下运行PHP脚本程序的方法：
+ 借助Apache的CGI运行；
+ 借助php.exe可执行文件运行；
+ 借助PHP自带WebServer运行：`php -S localhost:8088`

PHP错误等级：
+ notice - 提示

+ warning -  警告

+ error  - 错误


	//报错等级：
	error_reporting=E_ALL & ~E_NOTICE
	//时区：
	date.timezone=PRC
	
	echo date('Y-m-d H:i:s', time()); //输出当前系统时间

#### MySQL配置

修改root用户密码：

```sql
mysqladmin -u root -p PASSWORD 新密码

进入mysql：
	mysql -u root -p
查看库：
	show databases;
使用库：
	use 库名;
创建库：
	create database 库名;
查看表：
	show tables;
创建表：create table 表名 (
	字段名 类型(长度) primary key auto_increment  not null,
	字段名 类型 not null,
	...
)
查看表结构：
	show columns from 表名;

添加数据：
	Insert into 表名 (字段名，字段名...) values(值，值，值);
查询数据：
	select 字段名,字段名[*] from 表名 where 条件;
修改数据：
	update 表名 set 字段名=字段值，字段名=字段值，...  where 条件;
删除数据：
	delete from 表名  where 条件;
```


##### 修改my.ini

	[client]
	default-character-set=utf8
	
	[mysqld]
	character-set-server = utf8
	
	[mysql]
	default-character-set = utf8