function readCookie(cookieKey) {
    return $.cookie(cookieKey);
}

function writeCookie(cookieKey, content) {
    $.cookie(cookieKey, content, {expires:7, path: '/'});
}


function inArray(array, one) {
    if (!(array instanceof Array)) {
        return false;
    }
    let flag = true;
    array.forEach((item) => {
        if (item === one) {
            flag = false;
        }
    });
    return flag;
}


// export const readCookie = readCookie
// export const writeCookie = writeCookie
export default {readCookie, writeCookie, inArray}