// import foo from './ajax.js';
import funAjax from "./ajax.js";

window.onload = function () {

    document.getElementById('send').onclick = function () {

        let user = document.getElementById('username').value;
        let txt = document.getElementById('txt').value;

        if(user == ''|| txt == '') {
            return false;

        }

        funAjax('addchatcontent.php', 'POST', {
                user,
                txt
            })
                .then(
                    res => {

                        res = JSON.parse(res);
                        // res = eval("("+res+")");
                        if(res.stateCode == 200) {
                           document.getElementById('chatContent').innerHTML +=`
                           <p>${res.data.user}: ${res.data.txt} ${res.data.time}</p>    
                           `                                                        //将获取到的内容显示到消息框
                            document.getElementById('txt').value = '';  //清空输入框内容
                        }
                    },
                    err => {
                        console.log(err);
                    }
                );

    }



    //定时轮询聊天内容
      function getCharTxt() {

            funAjax('getTxt.php', 'GET')
                .then(
                    res => {
                        document.getElementById('chatContent').innerHTML = '';
                        res = JSON.parse(res);
                        // console.log(res)
                        res.forEach(function (item) {
                            console.log(res);
                            document.getElementById('chatContent').innerHTML += `
                            <p>
                            ${item.user}: ${item.txt} ${item.time}
                            </p>       
                            `

                        });
                    },
                    err => {
                        console.log(err);
                    }
                )
            setTimeout(getCharTxt, 3000);
    }

    getCharTxt()

}