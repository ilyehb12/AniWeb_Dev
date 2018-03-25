var epsnum = 0 , recentepsnum = epsnum;
var animetitle = document.getElementById('seachanime').innerText;

function returnhome() {
    window.location.replace("http://localhost/AniWeb/index.php/awmain/loadmain");
 
}

function goanimelist() {
    window.location.replace("http://localhost/AniWeb/index.php/awmain/viewanimelist");
    
}

function gogenrelist() {
    window.location.replace("http://localhost/AniWeb/index.php/awmain/viewgenrelist");
    
}

function goabout() {
    window.location.replace("http://localhost/AniWeb/index.php/awmain/viewabout");
    
}

function watchanime_akamegakill() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_firstrow/watchakamegakill_eps1");
    
}

function watchanime_blends() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_firstrow/watchblends_eps1");
    
}

function watchanime_chaoshead() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_firstrow/watchchaoshead_eps1");
    
}

function watchanime_danmachi() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_firstrow/watchdanmachi_eps1");
    
}

function watchanime_eromangasensei() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_secondrow/watcheromangasensei_eps1");
    
}

function watchanime_fatezero() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_secondrow/watchfatezero_eps1");
    
}

function watchanime_gabrieldropout() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_secondrow/watchgabrieldropout_eps1");
    
}

function watchanime_himoutoumaruchan() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_secondrow/watchhimoutoumaruchan_eps1");
    
}

function watchanime_infinitestratos() {
    
    window.location.replace("http://localhost/AniWeb/index.php/awwatch_thirdrow/watchinfinitestratos_eps1");
    
}

function searchanime() {
    animetitle = document.getElementById('seachanime').value;
    if (animetitle == "Akame Ga Kill!") {
        watchanime_akamegakill();
    }
    else if (animetitle == "Blend S") {
        watchanime_blends();
    }
    else if (animetitle == "Chaos;Head") {
        watchanime_chaoshead();
    }
    else if (animetitle == "DanMachi") {
        watchanime_danmachi();
    }
    else if (animetitle == "Eromanga Sensei") {
        watchanime_eromangasensei();
    }
    else if (animetitle == "Fate/Zero") {
        watchanime_fatezero();
    }
    else if (animetitle == "Gabriel's Dropout") {
        watchanime_gabrieldropout();
    }
    else if (animetitle == "Himouto Umaruchan") {
        watchanime_himoutoumaruchan();
    }
    else if (animetitle == "IS: Infinite Stratos") {
        watchanime_infinitestratos();
    }
}



