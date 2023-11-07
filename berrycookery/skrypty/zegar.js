function zegar(){
    let czas = new Date();
    
    let godzina = czas.getHours();
    let minuta = czas.getMinutes();
    let sekunda = czas.getSeconds();
    
    document.getElementById("zegar").innerHTML = mniejszy_10(godzina) + " : " + mniejszy_10(minuta) + " : " + mniejszy_10(sekunda);
    }
    function mniejszy_10(argument){
        if(argument < 10){
            return "0" + argument;
        }
        else{
            return argument;
        }
    }

    var interwal = setInterval(zegar, 1000);
