// Задание 1 
var str = prompt("Введите строку");
var task_1 = document.getElementById('task_1');



if(str.length > 5){

    text = "Обрезанная строка: " + str.slice(0, 5) + '...';
    task_1.innerHTML = text;
}
else{
    task_1.innerHTML = str;
}


// Задание 2
var task_2 = document.getElementById('task_2');

var arr = str.split('');
for(var i = 0; i< arr.length; i++){
    switch(arr[i]){
        case 'a':
            arr[i] ='1';
            break;
        case 'b':
            arr[i] = '2';
            break;
        case "c":
            arr[i] = '3';
            break
    }
}

task_2.innerHTML = arr.join('');

// Задание 3

var task_3 = document.getElementById('task_3');
var str = 'abc abc abc';
var num = null;
for(var i = 0; i< str.length; i++){
    if(str[i] == 'b'){
        num = i;
    }
}

task_3.innerHTML = "Последняя буква b находится под индексов " + num;
// Задание 4
var task_4 = document.getElementById('task_4');
var str = 'html css php';
console.log(str.split(' '));

// Задание 5
var task_5 = document.getElementById('task_5');
var button = document.getElementById('button');
button.addEventListener('click', dateDiff);
var date_1 = document.getElementById('date_1');
var date_2 = document.getElementById('date_2');
console.log(date_1.value);
function dateDiff() {
  var d0 = date_1.value;
  var d1 = date_2.value;

  var msPerDay = 8.64e7;

  // Copy dates so don't mess them up
  var x0 = new Date(d0);
  var x1 = new Date(d1);

  // Set to noon - avoid DST errors
  x0.setHours(12,0,0);
  x1.setHours(12,0,0);

  // Round to remove daylight saving errors
  task_5.innerHTML = 'Колличество дней между датами ' + Math.round( (x1 - x0) / msPerDay );
}
