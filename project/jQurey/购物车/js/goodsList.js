function addGoodsCar(gid, num=1) {

    
        let oldCookie = $.cookie('car')
        let nowGoodsId = gid;
        let nowGoodsNum = parseInt(num);
        // let newCookie = '';

        if (oldCookie === undefined) { //当购物车是空的时候，创建数组

            writeToCookie([

                {
                    gid: nowGoodsId,
                    num: nowGoodsNum
                }
            ]);

        } else {
            let oldCookieArray = stringToArray(oldCookie);
            for (var i = 0; i < oldCookieArray.length; i++) {
                if (oldCookieArray[i].gid == nowGoodsId) { //新增商品之前已经在之前的购物车上
                    oldCookieArray[i].num = parseInt(oldCookieArray[i].num) + nowGoodsNum;
                    break;
                }
            }

            if (i >= oldCookieArray.length) { //新增商品之前没有在购物车中
                oldCookieArray.push({
                    gid: nowGoodsId,
                    num: nowGoodsNum
                });
            }
            writeToCookie(oldCookieArray);
        }

        alert('添加购物车成功')
        console.log($.cookie('car'))
    
}



function arrayToString(array) {          //将数组转成字符串
    let str = '';
    if (!(array instanceof Array)) {     // 判断是否是数组，不是的话直接return str
        return str;
    }
    array.forEach(function (item) {
        let jsonStr = JSON.stringify(item);    //把数组序列转成字符串
        str += (str === '') ? jsonStr : '@' + jsonStr;
    });
    return str;
}

function stringToArray(string) {        //将字符串转成数组

    if(string == '') {
        return[]
    }
    let array = string.split('@');      //用"@"将字符串分割成数组
    let arr = []
    array.forEach(function (item) {
        arr.push(JSON.parse(item));     //从字符串中解析出对象，因为数组里是可以包含对象的
    });
    return arr;
}



function writeToCookie(newArrayObj) {     //添加cookie
    let newCookie = arrayToString(newArrayObj);   //将数组转成字符串存入cookie，因为cookie中存的是字符串
    $.cookie('car', newCookie, {
        expires: 7,
        path: '/'
    });
}