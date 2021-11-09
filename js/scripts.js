//ICON ACTIVE
feather.replace();

//Menu
var toggleMenu = document.querySelectorAll('.toggle');
var menu = document.querySelector('nav.menu');

for(i = 0; i < toggleMenu.length; i++){
    toggleMenu[i].addEventListener('click', menuAction);
}

function menuAction(){
    if(menu.classList.contains('hide')){
        menu.classList.remove('hide');
        menu.animate([
            { opacity: '0' },
          ], {
            duration: 100,
          });
    }else{
        menu.classList.add('hide');
    }
}