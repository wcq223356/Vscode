# PHP基础语法

## 变量的定义

### 数据类型
+ 整形
+ 浮点型
+ 字符串
+ 布尔
+ null
+ 数组
+ 对象
+ 资源类型resource

### 定义变量
$开头，由字母、数字、下划线构成，且开头不能是数字。变量名区分大小写。	
```php
//单引号、双引号
$str = 'hello world';
$str2 = '$str'; //输出$str
$str3 = "$str"; //输出hello world

echo $str;
print $str;
print_r($str);
var_dump($str);
```

### hereDoc语法、nowDoc语法
```php
//hereDoc语法，解析出现的变量
$js = <<<JS
helloworld
{$str}
JS;

//nowDoc语法，不解析变量，原样输出
$js = <<<'JS'
$str
JS;
```
### 可变变量
```php
$a = 'b';
$b = 'c';
echo $$a;
```

### 静态变量
在定义变量前添加关键字static
```php
static $name = 'admin';
```

## 常量的定义
```php
//常量名不需包含$，由字母、数字、下划线构成
define(常量名, '常量值'); //常量一旦定义，该值无法重新赋值
```

## 函数的定义
function来声明，后面是函数名，参数放（）内
```php
function foo (参数,参数,参数)
{
    //函数体
}
```

### 全局变量、局部变量
在函数外部定义的变量，函数内部无法使用，如若要使用，必须转全局。
在函数内部定义的变量，函数外部无法使用；

```php
$num = 10;
function foo ()
{
	global $num; //方式1  若选择引用关系，该引用关系只在函数内部有效
	$GLOBALS['num']; //方式2 引用关系发生在全局
}
```
## 数组的定义
关联数组、索引数组、复合数组，一维、二维。。。

```php
//索引数组
$arr = array(10, 20, 30);
$arr2 = [100, 200, 300];

//关联数组
$arrs = ['id' => '1001', 'name' => 'admin', 'passwd' => '123123'];
$arrays = [
	['id' => '1001', 'name' => 'admin', 'passwd' => '123123'],
	['id' => '1002', 'name' => 'root', 'passwd' => '123123'],
	['id' => '1003', 'name' => 'sa', 'passwd' => '123123']
];

//数组遍历 索引
for($i = 0; $i < count($arr); $i++) {
	echo $arr[$i];
}

//foreach
foreach($array as $key => $val) {
	
}
```


### 逻辑控制语句
#### IF语句

```php
if (条件) {
    //当条件为真时
} elseif (条件2) {
    //当条件2为真时
} else {
    //否则
}
```

#### FOR循环

```php
for ($i = 0; $i<10; $i++) {
    //break;
    //continue;
}
```

#### WHILE DO...WHILE循环
```php
while(条件) {
	
}
do {
	
} while(条件)
```

#### SWITCH语句
```php
switch(判断条件) {
	case '情况1':
		//情况1的处理
		break;
	case '情况2':
		//情况2的处理
		break;
	default:
		//其他条件
}
```

#### 三元运算符
```php
(条件) ? '真的处理结果' : '假的处理结果';
```