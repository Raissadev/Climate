var lat = document.getElementById('lat');
var long = document.getElementById('long');

function getLocation(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }else{
        alert('Seu navegador não aceita a geolocalização!');
    }
}
function showPosition(position){
    lat.value=position.coords.latitude;
    long.value=position.coords.longitude; 
}