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