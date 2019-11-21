### PHP补充函数

explode('分隔符', 字符串); //字符串 =》 数组
implode('连接符', 数组); // 数组 =》字符串

json_encode(数组); //数组 =》 JSON
json_decode(json字符串, bool); //JSON =》 object、array

isset()  //判断变量是否存在
unset() //手动销毁

count() //返回数据个数
strlen() //字符串长度

is_array()  //是否为数组

array_key_exists()  //按键判断是否存在
isset($array['键'])

in_array()  判断值是否存在于数组

reset()  //重置数组指针指向第一个元素
key() //取当前指针指向的键名
end() //取数组最后一个键对应值
current() //取当前数组指针指向的键值

array_merge()  //合并数组


+ header()函数
  向客户端发送HTTP头信息
  //注意：在header()前不能有任何的html输出，一般情况header都在页面的头部出现
  
  ~~~php
  //输出文档类型、编码方式
  header("content-type:text/html;charset=utf-8");
  
  //输出图片：
  header("content-type:image/jpeg"); //输出jpeg格式的图片
  header("content-type:image/gif"); //输出gif格式的图片
  header("content-type:application/pdf"); //输出pdf格式的文件
  
  //跳转：
  header("location:url地址");
  //刷新：
  header("Refresh:10; url=url地址");
  
  //输出状态码：200 、301、302、404、403、5**
  header("HTTP/1.1 404 NOT Found");
  ~~~
  
+ 包含函数
include（包含）  require（需要）  include_once  require_once

if (条件1) {
	include  '文件1';
} else {
	include '文件2';
}


+ 缓存操作
ob_start(); //开启缓存，一旦开启了缓存，内容就不会立即输出，直到程序运行结束或者调用
ob_flush();//清空缓存，直接输出

ob_get_contents(); //获取缓存的内容
ob_clean(); //清除缓存的内容，并将缓存区关闭，内容也将从缓存区删除

+ iconv  php_iconv.dll
iconv('gbk', 'utf-8', '字符串'); //将字符串从gbk转为utf-8

+ 截取字符串
$string = 'hello';
$string[0];
substr(待截取的字符串, 开始位置, 长度); 截取英文
mb_substr()截取中文

搜索字符串在另一字符串中是否存在
strstr(); //有大小写区分
stristr(); //大小写不敏感

strpos(); //第一次出现的位置
strrpos(); //最后一次出现的位置


+ 随机数
rand(min, max);
mt_rand(min, max);




