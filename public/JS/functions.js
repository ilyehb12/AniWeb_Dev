var epsnum = 0 , recentepsnum = epsnum;

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
    
    window.location.replace("http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps1");
    
}



function playepisodes(epsnum) {
    
    epsnum = document.getElementById('episodenum').selectedIndex;
    epsnum +=1;
    if (epsnum == 1) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps1";
        document.getElementById('episodenum').selectedIndex = 0;
       
    }
    else if (epsnum == 2) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps2";
        document.getElementById('episodenum').selectedIndex = 1;
    }
    else if (epsnum == 3) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps3";
        document.getElementById('episodenum').selectedIndex = 2;
    }
    else if (epsnum == 4) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps4";
        document.getElementById('episodenum').selectedIndex = 3;
    }
    else if (epsnum == 5) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps5";
        document.getElementById('episodenum').selectedIndex = 4;
    }
    else if (epsnum == 6) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps6";
        document.getElementById('episodenum').selectedIndex = 5;
    }
    else if (epsnum == 7) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps7";
        document.getElementById('episodenum').selectedIndex = 6;
    }
    else if (epsnum == 8) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps8";
        document.getElementById('episodenum').selectedIndex = 7;
    }
    else if (epsnum == 9) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps9";
        document.getElementById('episodenum').selectedIndex = 8;
    }
    else if (epsnum == 10) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps10";
        document.getElementById('episodenum').selectedIndex =9;
    }
    else if (epsnum == 11) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps11";
        document.getElementById('episodenum').selectedIndex = 10;
    }
    else if (epsnum == 12) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps12";
        document.getElementById('episodenum').selectedIndex = 11;
    }
    else if (epsnum == 13) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps13";
        document.getElementById('episodenum').selectedIndex = 12;
    }
    else if (epsnum == 14) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps14";
        document.getElementById('episodenum').selectedIndex = 13;
    }
    else if (epsnum == 15) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps15";
        document.getElementById('episodenum').selectedIndex = 14;
    }
    else if (epsnum == 16) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps16";
        document.getElementById('episodenum').selectedIndex = 15;
    }
    else if (epsnum == 17) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps17";
        document.getElementById('episodenum').selectedIndex = 16;
    }
    else if (epsnum == 18) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps18";
        document.getElementById('episodenum').selectedIndex = 17;
    }
    else if (epsnum == 19) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps19";
        document.getElementById('episodenum').selectedIndex = 18;
    }
    else if (epsnum == 20) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps20";
        document.getElementById('episodenum').selectedIndex = 19;
    }
    else if (epsnum == 21) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps21";
        document.getElementById('episodenum').selectedIndex = 20;
    }
    else if (epsnum == 22) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps22";
        document.getElementById('episodenum').selectedIndex = 21;
    }
    else if (epsnum == 23) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps23";
        document.getElementById('episodenum').selectedIndex = 22;
    }
    else if (epsnum == 24) {
        window.location.href = "http://localhost/AniWeb/index.php/awmain/watchakamegakill_eps24";
        document.getElementById('episodenum').selectedIndex = 24;
    }
}