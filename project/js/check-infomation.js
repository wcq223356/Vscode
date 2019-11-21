
function  MyDate () {


    /** 
     * 验证字符串的长度
     * @param str    需要验证的参数
     * @returns {boolean}   空：false ； 非空： true       返回的结果
     */
    this.exist = function (str) {
         if (str.trim() == '') {     // trim()是去首尾空格的方法或者可以采用str.length > 0的方法来判断
             return false;
         }  
         return true;           //不写else是因为一旦验证的信息有内容就会返回true，一旦为空就满足判断条件返回false；
         
    }


    /**
     * 验证字符串长度是否符合要求
     * @param str 
     * @param min [0]   默认值
     * @param max [0]
     * @returns {boolean}    符合：true ；   不符合： false
     */
    this.strLength = function (str, min = 0, max = 0) {           //这里的最大值和最小值可以使用数组的方式来定义length[10,20]
        if (str.Length >= min && str.Length <= max) {
            return true;
        }
        return false;
    }


    /**
     * 验证是否为手机号
     * @param str
     * @returns {boolean}  是：true     不是： false
     */
    this.phone = function (str) {
        if (
            !isNaN(str)                    //判断是否为非数字，取反表示是否为数字
            && str.length == 11
            && str.substr(0, 1) == 1       //substr(start,length) 方法可在字符串中抽取从 start 下标开始的指定数目的字符。
            && str.substr(1, 1) > 2        //这两行代码目的是确定第一位是否为1.第二位是否大于2；
            // && str[0] == 1
            // && str[1] > 2
            
        ) {
            return true;

        }
        return false;
    }

    /**
     * 验证是否为正确的邮箱地址
     * @param str
     */
    this.Email = function (str) {
        if (
            str.indexOf('@') > 0            //indexOf 是判断某字符第一次出现在字符串中的位置
            && str.indexOf('.') > 0
            && str.indexOf('@') < str.indexOf('.') 
            && Str.indexOf('@') === str.lastIndexOf('@')  //因为邮箱中不能同时出现两个@，因此需要判断，
                                                          //lastIndexOf是某字符最后出现的位置，第一次
                                                          //和最后一次相等就表示该字符中只有一个@
            
        ) {
            return true;
        }
    }
    return false;
    //if条件还没有完善，还少了‘@’前面部分不能有非法字符，‘.’后面只能有字母


    /**
     * 验证两个字符串是否相等
     */
    this.equal = function (str1, str2) {
        if (str1 === str2) {
            return true;
        }
    }
    return false;
} 