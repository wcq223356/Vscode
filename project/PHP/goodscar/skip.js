window.onload = function () {
    let gid = document.getElementById('gid');
    let num = document.getElementById('num');
    document.getElementById('add').onclick = function () {
        window.location.href = 'goodsCar.php?gid=' + gid.value + '&num=' + num.value
    }
}