// Show and Hide our Menu-Bar....

var ShowMenu = document.getElementById('menu-bar');
var CloseMenu = document.getElementById('close-menu');
var nav = document.getElementById('navbar');

if (ShowMenu){
    ShowMenu.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (CloseMenu){
    CloseMenu.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}


// changing Image.....
var MainImg = document.getElementById('Main-Img');
var SmallImg = document.getElementsByClassName('small-img');

SmallImg[0].onclick = function(){
    MainImg.src = SmallImg[0].src; 
}
SmallImg[1].onclick = function(){
    MainImg.src = SmallImg[1].src; 
}
SmallImg[2].onclick = function(){
    MainImg.src = SmallImg[2].src; 
}
SmallImg[3].onclick = function(){
    MainImg.src = SmallImg[3].src; 
}