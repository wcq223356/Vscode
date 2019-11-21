import getJson from './getJson.js'
import myCookie from './myCookie.js'

$(function () {

    getData();



    async function getData() {
        let jsonData = await getJson('json/goods.json');
        let looks = myCookie.readCookie('look');
        if (looks !== undefined) {
            let looksArr = looks.split('@');
            looksArr.forEach(function (item) {

                jsonData.forEach(function (it) {
                    if (it.gid == item) {
                        $("#list").append(`
                            <p>Id:${it.gid}, 名称：${it.gname} <a class="del">删除</a></p>
                        `);
                    }
                })

            });

        }

    }



});