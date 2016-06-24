'use strict'

// Плохо спроектированный код, сначало планировалось несколько простых функций, ООП не применялось.
// На середине пути обратной дороги уже небыло.
function get_location() {

    if (Modernizr.geolocation) {
        navigator.geolocation.getCurrentPosition(show_map);
    } else {
        console.log('Нет встроенной поддержки геолокации');
    }
};

function show_map(position) {

    let latitude = position.coords.latitude,
        longitude = position.coords.longitude;

    geocode(latitude, longitude);
};

function geocode(lat, lon) {

    let XHR = ('onload' in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;
    let xhr = new XHR();

    xhr.open('GET', 'https://maps.google.com/maps/api/geocode/json?latlng=' + lat + ',' + lon + '&sensor=false', true);

    xhr.onload = function() {
        let jsonRes = JSON.parse(this.responseText);
        jsonParser(jsonRes);
    }

    xhr.onerror = function() {
        console.log("Ошибка" + this.status);
    }
    
    xhr.send();
    
};

get_location();

function jsonParser(json) {
    
    let adress = json.results[0].formatted_address;
    
    renderAdress(adress);
};

function renderAdress(adr) {
    
    let geo = document.getElementsByClassName('geo');

        for (let i = 0; i < geo.length; i++) {
            geo[i].value = adr;
        }
};