// Задание 1 
var task_1 = document.querySelector("#task_1");
var arr = []

function random_list(arr, n){
    for(var i = 0; i < n; i++){
        arr[i] = Math.floor(Math.random() * (0, 100) - 0);
    }


}

random_list(arr, 10);
var str = "";
for(var i = 0; i< arr.length; i++){
    str += arr[i] + " ";

    
}

task_1.innerHTML = "Задание 1 на js <br>" + str + "<br>"; 


// задание 2
var str = 'HTML, CSS, PHP, BITRIX';
function words_count($str){
    var arr = str.split(', ');
    return arr.length
}

var task_2 = document.getElementById('task_2');

task_2.innerHTML = "Колличество слов в строке '" + str + "' равно = " + words_count(str) + "<br>";

// Задание 3

function words_revers(str){
    var new_str = ''
    for(var i = str.length-1; i>=0; i--){
        new_str += str[i];
    }
    return new_str
}

var new_str = words_revers(str);
var task_3 = document.getElementById('task_3');
task_3.innerHTML = new_str + "<br>";

// Задание 4
var task_4 = document.getElementById('task_4');
function str_length(str){
    return str.length;
}

task_4.innerHTML = "Длина строки '" + str + "' равна = " + str_length(str) + "<br>";

// Задание 5
var task_5  = document.getElementById('task_5');
function str_wrap(str){
    var new_str = ''
    for(var i = 0; i< str.length; i++){
        new_str += str[i] + "<br>";

    }
    return new_str;
}

task_5.innerHTML = str_wrap(str);