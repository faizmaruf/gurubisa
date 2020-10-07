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
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'ajax/coba.txt', true);
    xhr.send();


})