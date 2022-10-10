// выбираем кнопку
document.getElementById('btn1').addEventListener('click', function()        {
    // Выбираем все элементы класса show
    let blocks =  document.querySelectorAll('.show');
    // скрываем их
    blocks.forEach(block => {
        block.style.display = "none";
    });
    // Выбираем все элементы нужного класса
    blocks =  document.querySelectorAll('.show_1');
    // отображаем их
    blocks.forEach(block => {
        block.style.display = "block";
    });
});

document.getElementById('btn2').addEventListener('click', function()        {
    let blocks =  document.querySelectorAll('.show');
    blocks.forEach(block => {
        block.style.display = "none";
    });
    blocks =  document.querySelectorAll('.show_2');
    blocks.forEach(block => {
        block.style.display = "block";
    });
});

document.getElementById('btn3').addEventListener('click', function()        {
    let blocks =  document.querySelectorAll('.show');
    blocks.forEach(block => {
        block.style.display = "none";
    });
    blocks =  document.querySelectorAll('.show_3');
    blocks.forEach(block => {
        block.style.display = "block";
    });
});

document.getElementById('btn4').addEventListener('click', function()        {
    let blocks =  document.querySelectorAll('.show');
    blocks.forEach(block => {
        block.style.display = "none";
    });
    blocks =  document.querySelectorAll('.show_4');
    blocks.forEach(block => {
        block.style.display = "block";
    });
});

document.getElementById('btn5').addEventListener('click', function()        {
    let blocks =  document.querySelectorAll('.show');
    blocks.forEach(block => {
        block.style.display = "none";
    });
    blocks =  document.querySelectorAll('.show_5');
    blocks.forEach(block => {
        block.style.display = "block";
    });
});

// кнопка all просто отображаем все элементы
document.getElementById('btnall').addEventListener('click', function()      {
    let blocks =  document.querySelectorAll('.show');
    blocks.forEach(block => {
        block.style.display = "block";
    });
});