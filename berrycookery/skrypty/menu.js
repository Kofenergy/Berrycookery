var klikniecia = 0;
function rozwin(){
    klikniecia++;

    if(klikniecia % 2 == 1){
        document.getElementById('lista').style.animationName = 'rozwijanie';
        document.getElementById('lista').style.animationPlayState = 'running';

        document.getElementsByClassName('menu').style.animationName = 'rozwijanie_tekst';
        document.getElementsByClassName('menu').style.animationPlayState = 'running';

    }else{
        document.getElementById('lista').style.animationName = 'none';
        document.getElementById('lista').style.animationName = 'zwijanie';
        document.getElementById('lista').style.animationPlayState = 'running';
    }
}