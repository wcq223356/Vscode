function funAjax (url, method, data= {}, async = true) {
    const promise = new Promise(function (resolve, reject) {
        const xhr = new XMLHttpRequest();
        const handler = function () {
            if (this.readyState != 4) {
                return;
            }
            if (this.status == 200) {
                resolve(this.response);
            } else {
                reject(this.statusText);
            }

        }
        xhr.open(method, url, async);
        if (method != 'GET') {
            xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded")
        }
        let datastr = '';
        for (let x in data) {
            let tmp = x + '= ' + data[x];
            datastr += (datastr == '') ? tmp : '&'+ tmp;
        }


        xhr.send(datastr);
        xhr.onreadystatechange = handler;
    });

    return promise;
}

export default funAjax;