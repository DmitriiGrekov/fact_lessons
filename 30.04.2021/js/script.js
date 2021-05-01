document.addEventListener('DOMContentLoaded', function() {

    // Начало задания 1
    var elem = document.getElementById('generate');
    elem.addEventListener('click', generate_numbers);
    var container = document.getElementById('container');
    function generate_numbers(){
        var n = prompt('Введите колличество элементов в массиве');
        var arr = [];
        for(var i = 0; i < n; i++){
            arr.push(Math.floor(Math.random() * (100 - 0) + 0));
        }

        var str = 'Все четные элементы выделенны жирным шрифтом<br>';
        for(var i = 0; i< arr.length; i++){
            if(arr[i]%2 == 0){
                str += "<b>" + arr[i] + "</b> ";
            }
            else{
                str += arr[i] + " ";
            }


        }
        container.innerHTML = str;
        

    }
    // Конец задания 1

    // Начало задания 2
    var task_2 = document.getElementById('task_2');

    var arr_2 = [
        ['and', 'me', 'new', 'andy'],
        ['my', 'zmb', 'add', 'am', 'my', 'hello'],
        ['n', 'art']
    ]

    var str = "<b>Элементы массива начинающиеся с буквы А</b> <br>";
    for(var i = 0; i < arr_2.length; i++){
        for(var j = 0; j < arr_2[i].length; j++){
            if(arr_2[i][j][0] == 'a'){
                str += arr_2[i][j] + " ";
            }
        }
    }
    task_2.innerHTML = str;

    // Конец задания 2


    // Начало задания 3
    var task_3 = document.getElementById('task_3');
    var arr_3 = [
        [1, 5, 23, 54, 65, 12, 43],
        [1, 5, 32, 2],
        [54, 129, 299, 129, 34, 12, 543, 123]
    ]

    var all_nums = 0;
    var str = "";
    for(var i = 0; i < arr_3.length; i++){
        str += "Колличество элементов под индексом " + i +" равно " + arr_3[i].length + "<br>";
        for(var j = 0; j < arr_3[i].length; j++){
            all_nums += 1;
        }
    }

    task_3.innerHTML = "Всего элементов в массиве arr_3 = " + all_nums + "<br>" + str;

    

    
}, false);
