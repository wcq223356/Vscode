# Linux基本操作

### 文件目录操作

	pwd  ##查看当前所在位置
	cd   ##到哪层目录
		cd ~  ##回到家目录
		cd    ##回到家目录
		cd /root  ##回到root家目录
		
	vim 编辑器（记事本）
	vim 要打开的文件名（相对路径、绝对路径）
	
	搜索内容：  ?搜索内容  /搜索内容   [n]
	清楚高亮：:noh
	临时显示行号：   :set nu  或 :set number
	永久显示：  修改系统配置文件 vim /etc/vimrc  在末尾添加:   set number
	
	touch 文件名  ##新建文件
	
	echo ##输入内容至文件
	echo 'hello world' > aaa.html  (擦除原文件内容，新增内容)
	echo 'hello world' >> aaa.html (追加新内容)
	
	cat  文件名   ##查看当前文件的内容
	
	mkdir  ##创建目录
	mkdir 要创建的目录名
	mkdir -p 目录名/目录名
	
	rm  ##删除文件和目录
		-r 目录   -f提示
	rm -rf  文件或目录
	
	cp 源文件或目录  目标文件或目录   [备份]
	mv 源文件或目录   目标文件或目录  [剪切、重命名] 


​	
​	
### 用户、用户组相关操作
	useradd tester ##创建用户tester
	passwd tester ##修改tester账号的密码
	
	创建用户，且不需要登录
	useradd -s /sbin/nologin  www2
	
	创建用户，且家目录自定义
	useradd -d /var/ftp/public -M ftpadmin
	
	创建用户组：
	groupadd test  ##创建用户组test
	创建用户时，同时创建用户组
	useradd -g test tester
	
	修改用户组
	usermod -G 工作组名 用户名
	
	##删除用户
	userdel tester ##删除用户tester
	##删除用户组
	groupdel test  ##删除用户组


​	
	/etc/passwd   #该文件记录当前系统的所有用户信息
	/etc/group    #用户组


​	
​	
	#修改文件、目录的所有者
	chown -R <用户名><所属组>  <文件或目录名称>
	
	#修改文件、目录的权限
	chmod 权限数字 <目录或文件>
	chmod a+w <文件或目录>

### MySQL(RDBMS)相关操作：

	##进入mysql的命令：
	mysql -u root -p
	
	##查看mysql现有数据库：
	show databases;
	
	##修改mysql的root账号密码：
	##方式1：
		use mysql;
		update user set password=password('新密码') where user='root';
		flush privileges;
	##方式2：
		cd /usr/local/mysql/bin
		./mysqladmin -u root -p PASSWORD 新密码
		
		
	##创建库：
    	create database if not exists 库名 default character set utf8 collate utf8_general_ci;