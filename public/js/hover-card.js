var card9 = document.querySelector(".card--9");

card9.addEventListener('mousemove', function(e) {

    var wh = window.innerHeight / 2,
        ww = window.innerWidth / 2;
    card9.style.setProperty('--mouseX9', (e.clientX - ww) / 25);
    card9.style.setProperty('--mouseY9', (e.clientY - wh) / 25);

});

card9.addEventListener('mouseleave', function(e) {

    card9.style.setProperty('--mouseX9', 0);
    card9.style.setProperty('--mouseY9', 0);

});