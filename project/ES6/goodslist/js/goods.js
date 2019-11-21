import getJson from './getJson.js'
import myCookie from './myCookie.js'

$(function () {

    getJson('json/goods.json').then(
        res => {
            if (res instanceof Array) {
                res.forEach(function (item) {
                   $("#list").append(`
                        <p>Id: ${item.gid}, 名称：${item.gname} <a class="look" data-gid="${item.gid}">关注</a></p>
                   `);
                });
            }
        }
    );

    $("#list").on('click', 'a.look', function () {

        let oldCookie = myCookie.readCookie('look');

        if (oldCookie === undefined) { //当前没有关注商品
            myCookie.writeCookie('look', $(this).attr('data-gid'));
        } else {
            let oldCookieArr = oldCookie.split('@');
            console.log(myCookie.inArray(oldCookieArr, $(this).attr('data-gid')));
            if (myCookie.inArray(oldCookieArr, $(this).attr('data-gid'))) {
                myCookie.writeCookie(
                    'look',
                    oldCookie + '@' + $(this).attr('data-gid')
                    );
            } else {
                alert('提示：该商品已关注！');
                return false;
            }
        }
        alert('关注成功！');


    });


});