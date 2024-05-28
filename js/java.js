const time = document.querySelector('#time');

function showTime(){
    const date = new Date();
    const hours = date.getHours().toString().padStart(2, 0);
    const minutes = date.getMinutes().toString().padStart(2, 0);
    const clock = hours + ':' + minutes;
    time.innerHTML = clock;


    setTimeout(showTime, 1000);
}

showTime();


const todayTemp = document.querySelector('#todayTemp');
const todayIcon = document.querySelector('#todayIcon');




findCity();
function findCity(){
    fetch ('https://geocoding-api.open-meteo.com/v1/search?name=holb%C3%A6k&count=10&language=en&format=json')
        .then(req => req.json())
        .then(res => {
            const lat = res.results[0].latitude;
            const long = res.results[0].longitude;
            forecast(lat, long);
        })
}
    function forecast(lat, long){
        fetch('https://api.open-meteo.com/v1/forecast?latitude=55.7175&longitude=11.71279&hourly=temperature_2m,weather_code&forecast_days=1')
            .then(req => req.json())
            .then(res => {
                console.log(res);

                const date = new Date();
                const nowIndex = date.getHours();

                todayTemp.innerHTML = res.hourly.temperature_2m[nowIndex];
                todayIcon.src = 'img/'+ getWeatherIcon(res.hourly.weather_code[nowIndex]);
            })
    }


function getWeatherIcon(code) {
    switch(code) {
        case 0:
            return "0.webp";
        case 1:
        case 2:
            return "1-2.webp";
        case 3:
            return "3.webp";
        case 45:
        case 48:
            return "3.webp";
        case 51:
        case 53:
        case 55:
        case 56:
        case 57:
            return "51-53-55-56-57.webp";
        case 61:
        case 63:
        case 65:
        case 66:
        case 67:
        case 71:
        case 73:
        case 75:
        case 77:
        case 80:
        case 81:
        case 82:
        case 85:
        case 86:
            return "61-86.webp";
        case 95:
        case 96:
        case 99:
            return "95-96-99.webp";
        default:
            return "Ukendt vejrkode";
    }
}