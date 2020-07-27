const audios = document.querySelectorAll("audio");
let id = 0;
audios.forEach(audio =>{audio.id = String(id);id++;audio.addEventListener("timeupdate",currTime);});
const audio_players = document.querySelectorAll(".sound-player-container");
id = 0;
audio_players.forEach(audio_player =>{
    audio_player.id = String(id);
    id++;
    audio_player.addEventListener("click",controller);
});

// Titles
const audio_title = document.querySelector(".player-title");
const audio_subtitle = document.querySelector(".player-subtitle");

// Durations
const current_dur = document.querySelector(".curr-dur");
const total_dur = document.querySelector(".total-dur");

// buttons 
const play_btn = document.querySelector(".play-btn");

window.onload = () => {
    audio_title.innerText = audios[0].innerText;
    audio_subtitle.innerText = audios[0].getAttribute("aria-details");
    total_dur.innerText = time(audios[0].duration);
}

function controller(e){
    let el_id;
    switch (e.target.className) {
        case "fa fa-backward button":
            backward(e);
            break;
        case "fa fa-play button":
            play_audio(e);
            break;
        case "fa fa-forward button":
            forward(e);
            break;
        case "fa fa-pause button":
            pause_audio(e);
            break;
    }
}

function backward(e){
    audios[e.target.parentElement.parentElement.parentElement.id].pause();
    e.target.parentElement.parentElement.parentElement.id--;
    el_id = e.target.parentElement.parentElement.parentElement.id;
    if(el_id < 0){
        e.target.parentElement.parentElement.parentElement.id = 0;
        el_id = 0;   
    }
    audio_title.innerText = audios[el_id].innerText;
    audio_subtitle.innerText = audios[el_id].getAttribute("aria-details");
    total_dur.innerText = time(audios[el_id].duration);
    current_dur.innerText = time(audios[el_id].currentTime);
    play_btn.firstElementChild.className = "fa fa-play button";
}

function forward(e){
    audios[e.target.parentElement.parentElement.parentElement.id].pause();
    e.target.parentElement.parentElement.parentElement.id++;
    el_id = e.target.parentElement.parentElement.parentElement.id;
    if(el_id >= audios.length){
        e.target.parentElement.parentElement.parentElement.id = audios.length-1;
        el_id = audios.length -1;
    }
    audio_title.innerText = audios[el_id].innerText;
    audio_subtitle.innerText = audios[el_id].getAttribute("aria-details");
    total_dur.innerText = time(audios[el_id].duration);
    current_dur.innerText = time(audios[el_id].currentTime);
    play_btn.firstElementChild.className = "fa fa-play button";
}

function play_audio(e){
    audios[e.target.parentElement.parentElement.parentElement.id].play();
    e.target.className = "fa fa-pause button";
}

function pause_audio(e){
    audios[e.target.parentElement.parentElement.parentElement.id].pause();
    e.target.className = "fa fa-play button";
}

function currTime(e){
    current_dur.innerText = time(audios[e.target.id].currentTime);
}

function time(item){
    var min = Math.floor(item/60);
    var sec = Math.floor(item%60);
    if(sec < 10){
        sec = "0" + sec;
    }
    return min + ":" + sec;
}