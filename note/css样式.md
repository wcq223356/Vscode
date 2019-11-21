### 基本结构语法
<style type="text/css">
        选择器 { 
                        属性名：属性值;
                        属性名：属性值；
                         ……
                     } 
        </style>

#### 行内样式
     <p style=“font-size:14px; color:red;”>行内样式</p>

#### 内部样式表
     <style type="text/css">
	   body{background-color:green;}
     </style>

#### 外部样式表
     <head>
         <link rel="stylesheet" type="text/css" href="style.css" />
     </head>

优先级：行内样式>内部样式>外部样式
##### 但是通常都把样式写入外部样式中，因为可以做到多个页面共同使用，实现内容和样式的分离

#### 选择器
类选择器：
<标签 class="class的名字（这个名字是自己取）">
.class的名字｛属性名： 属性值；
        属性名： 属性值；
｝

id.选择器
<标签 id="id的名字（这个名字是自己取）">

#id的名字 ｛属性名： 属性值；
｝
id和class的命名规范：字母、数字、下划线、- ；开头必须是字母 减号可以用来连接两个英文单词，并且-号只出现在class命名中。

##### 值得注意的是一个网页中 class标签 是可以重复的，但是 id标签 是独特的不重复

后代选择器：
<标签1><标签2><标签3> </标签3></标签2></标签1>
标签1 标签2 标签3｛
                  属性名： 属性值；
｝

子选择器：
<标签1><标签2> </标签2></标签1>
标签1>标签2｛
            属性名： 属性值；
｝

##### 后代选择器只要是其后代都可以选择，可以选多个元素中间用 空格 选择；子代选择器只能选择其子代元素，用符号 > 进行选择

伪类选择器：
以a标签为例子
a:link	    未单击访问时超链接样式	        a:link{color:red;}  Chrom浏览器中有时无法正常看到效果，IE可以正常显示
a:visited	单击访问后超链接样式	        a:visited {color:purple;}
a:hover	    鼠标悬浮其上的超链接样式	    a:hover{color:blue;}	
a:active	鼠标单击未释放的超链接样式	    a:active {color:green;}



通用选择器：
*｛属性名： 属性值；
｝

群组选择器：
以h标签为例
h1, h2, h3, h4 ｛
             属性名： 属性值；
｝
标签之间用，隔开，逗号右边有一个空格

相邻元素选择器：
两个元素拥有同一个父元素，中间用+号隔开

属性选择器：
[属性] ｛｝
[属性=属性值] ｛｝
[属性^=属性值] ｛｝
[属性&=属性值] ｛｝
[属性*=属性值] ｛｝
##### 属性选择器表示如果该元素中有这个属性就都会被选中;"="表示该属性只要等于这个属性值就会被选中，“=^”表示该属性等于的属性值中只要开头有这个值就会被选中，$表示结尾，*表示只要有这个值就可以






#### 参考样式
#username {
	   background-color: pink;        /*背景颜色*/
       width:500px;                   /*宽度*/
	   height:50px;                   /*高度*/
	   font-size: larger;             /*字体大小*/
	   color:red;                     /*字体颜色*/
	   font-style: italic;	          /*斜体*/	
	   text-align: center;	          /*文本居中*/
	   border-color: purple;          /*边框的颜色*/	
	   border-style: none;            /*不显示边框*/
	   outline: medium;               /*鼠标单击时去掉边框线*/
	   outline-color: red;            /*边框颜色*/
	   outline-style: dashed;         /*边框样式*/		
}

