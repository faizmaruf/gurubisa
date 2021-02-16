'use strict';

var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach((elm) => {
    elm.addEventListener('click', () => {
        elm.previousElementSibling.value = '';
    });
});

var keyword = document.getElementById('keyword');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function () {
    //object ajax
    // console.log(keyword.value);
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    // xhr.open('GET', '../Gurubisa/assets/ajax/kelas.php?keyword=' + keyword.value, true);
    xhr.open('GET', '../Gurubisa/application/views/kelas.php?keyword=' + keyword.value, true);
    //  xhr.open('GET', '../Gurubisa/controllers/Carikelas.php/index?keyword=' + keyword.value, true);
    xhr.send();


})

