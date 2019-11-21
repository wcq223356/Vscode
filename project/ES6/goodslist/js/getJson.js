function getJson(url) {

    return new Promise(function (resolve, reject) {

        $.get(url).then(
            res => {
                resolve(res);
            },
            err => {
                reject(err);
            }
        )


    });


}

export default getJson