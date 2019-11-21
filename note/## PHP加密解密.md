## PHP加密解密

+ md5加密
单向加密
md5(string[,raw]);
raw: true  //原始16字节二进制的格式字符串
	false //默认值  32位十六进制数
	
+ url转码、解码
	urlencode();
	urldecode();

+ base64转码
将任意二进制的数据进行编码，结果为64位字符

base64_encode(二进制数据);
base64_decode(字符串);

+ crypt加密
单向加密
crypt(string[,$salt]); //$salt加密时产生的干扰串

+ sha1加密
单向加密
sha1(string[,raw]);
	raw:true 20字符二进制
		false 40字符16进制数