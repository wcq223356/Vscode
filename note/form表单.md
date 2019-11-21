## form表单
<from action="默认填写表单提交地址" 如果没有写就相当于从哪里获得数据就提交到哪
      methon="默认提交方式get" 还有一种是post

      HTTP请求方式（get、post）的区别：
      get方式：（querystring形式）url地址？参数名=参数值&参数名=参数值&

      post方式：用户登录、注册 （form date 形式）

      1、get是通过url地址来传递数据、post是通过form date提交
      2、get有数据的大小限制，一般是1KB；post数据一般是2M（数据大小可以修改）
      3、安全性：get方式一般是安全性要求不高的数据，post安全性相对get来说较高


####    form格式
<form action="" method="get">各种输入框放在这里面</form>
    
####    文本输入框   
    <input type="text" name="">
    文本输入框可以设置默认输入值，方法：value="默认信息"
    文本输入框中可以设置提示信息，方法：placeholder="提示的信息"

####    密码输入框
    <input type="password" name"">
    
####    数字：
    <input type="number" name"">

####    电话号码：
    <input type="tel" name"">

####    搜索：
    <input type="search" name"">
    
    
####    下拉列表：
    例子：
    <select name="city" size="10（下拉列表的大小）" >
        
        
        <option value="xm">厦门</option>
        <option value="qz">泉州</option>
        <option value="zz" selected>漳州</option>

#####    selected属性：添加在哪一个option里，当前添加这个option就会显示在下拉列表第一个
                （默认的选项是第一个option）
    </select>

####    单选框：
    例子：
    <input type="radio" name="sex" value="0" id="man">
    <label for="man">男</label>
     
 ##### label标签的作用，当鼠标点击 男 这个字，就选择了男这个选项（当用户选择该标签时，浏览器就会自动将焦点转到和标签相关的表单控件上）；标签的 for 属性应当与相关元素的 id 属性相同
    <label>
    <input type="radio" name="sex" value="1">女
    </label>
 #####  上述的label效果也可以用下面这个方法来实现，用label包裹着整个元素，不管点击到元素的哪个位置都相当于选中    
    
####    在单选框中，name值可以用一样的

    多选框：
    例子：
    <input type="checkbox" name="hobby" value="sing" checked>唱
    <input type="checkbox" name="hobby" value="dance">跳
    <input type="checkbox" name="hobby" value="rap">rap
    <input type="checkbox" name="hobby" value="basketball">篮球
    
    #####    checked属性:表示默认选择该项

    ####    多行文本框（多行文本域）
    <textarea name="text" cols=""(列) rows=""(行) style="width: ;height: ;">
    默认输入信息放在这里，也就是标签中间

    </textarea>
    #####  

 textarea中可以用cols（列）、rows（行）来设置宽高，但是通常是不使用这个方式，我们可以通过style属性来进行设置

    ####    按钮
     <input type="button" name="" value="普通按钮">

     <input type="submit" name="" value="提交按钮">（用来提交表单）

     <input type="reset" name="" value="重置">（点击重置会清空之前表单中输入的信息来进行复位）

     <input type="image" src="图片地址">（图片按钮，也用来提交表单，目前不常用了）

     <button type="">H5中的按钮</button> (h5中新的表单按钮，默认是submit（提交），可以在type中修改成reset（重置）或者button（普通）按钮)
