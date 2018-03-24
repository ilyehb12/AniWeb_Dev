
<body class="body">
    <div class="head">
        <div class="headlogo">
                <img class="aniweblogo" src="<?php echo base_url(); ?>public/SRC/fapmirallogo.png">
        </div>
        <div class="headlogin">
                <button class="btnheadlogin">LOGIN</button>

                <div class="headsearch">
                        <input type="text" name="searchanime" id="seachanime" class ="txtsearchanime"list="animes">
                        <datalist id="animes">
                            <option value="Akame Ga Kill!">
                            <option value="Blend S">
                            <option value="Chaos;Head">
                            <option value="DanMachi">
                            <option value="Eromanga Sensei">
                            <option value="Fate/Zero">
                            <option value="Gabriel's Dropout">
                            <option value="Himouto Umaru-chan">
                            <option value="IS: Infinite Stratos">
                            <option value="Log Horizon">
                            <option value="Made In Abyss">
                            <option value="No Game No Life">
                            <option value="Rakudai Kishi no Cavalry">
                            <option value="S.A.O. : Sword Art Online">
                            <option value="Tokyo Ghoul">
                            <option value="Re:Zero Hajimeru Isekatsu">
                        </datalist>

                        <button class="btnheadsearch">Search</button>
                </div>
        </div>
      

    </div>

    <div class="headnav">
            <button class="btnheadnavhome" id="btnHome" onclick="returnhome()">HOME</button>
            <button class="btnheadnavanimelist" id="btnAnimeList" onclick="goanimelist()">Anime List</button>
            <button class="btnheadnavgenres" onclick="gogenrelist()">Genres</button>
            <button class="btnheadnavabout" onclick="goabout()">About</button>
    </div>

    <div class="promotionnote">
        <img class="prompic" src="<?php echo base_url(); ?>public/SRC/prompicleft.png">
        <p class="promnote">Watch Anime and Enjoy Fast Updates and High Quality videos. We have completed series of Anime for Online streaming. If this is your first visit, be sure to bookmark us.</p>
        <img class="prompic" src="<?php echo base_url(); ?>public/SRC/prompicright.png">
    </div>

    <div class="animeviewtile">
    <div class="animewatchtile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/akame_ga_kill.jpg">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Akame Ga Kill!</h3>
                                <div>
                                        <p class="genre">Genres : Action , Adventure , Fantasy</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> In a fantasy world, fighter Tatsumi sets out for the Capitol to earn money for his starving village, and finds a world of unimaginable corruption, all spreading from the depraved Prime Minister who controls the child Emperor's ear. After nearly becoming a victim of this corruption himself, Tatsumi is recruited by Night Raid, a group of assassins dedicated to eliminating the corruption plaguing the Capitol by mercilessly killing those responsible.</p>    
                                </div>
                        </div>       
                </div>


    </div>

    <div class="videoarea">
                        <select class="episodenum" id="episodenum" onchange="playepisodes()">
                                <option value="1">Episode 1</option>
                                <option value="2">Episode 2</option>
                                <option value="3">Episode 3</option>
                                <option value="4">Episode 4</option>
                                <option value="4">Episode 5</option>
                                <option value="4">Episode 6</option>
                                <option value="4">Episode 7</option>
                                <option value="4">Episode 8</option>
                                <option value="4">Episode 9</option>
                                <option value="4">Episode 10</option>
                                <option value="4">Episode 11</option>
                                <option value="4">Episode 12</option>
                                <option value="4">Episode 13</option>
                                <option value="4">Episode 14</option>
                                <option value="4">Episode 15</option>
                                <option value="4">Episode 16</option>
                                <option value="4">Episode 17</option>
                                <option value="4">Episode 18</option>
                                <option value="4">Episode 19</option>
                                <option value="4">Episode 20</option>
                                <option value="4">Episode 21</option>
                                <option value="4">Episode 22</option>
                                <option value="4">Episode 23</option>
                                <option value="4">Episode 24</option>
                        </select>
        <video controls controlsList="nodownload" class="videoplayarea">
                <source src="<?php echo base_url(); ?>public/SRC/VIDEOS/samplevid.mp4" type="video/mp4" >
                Your browser does not support HTML5 video.
        </video>

        <!-- <button class="btndownload"><a href="<?php echo base_url(); ?>public/SRC/VIDEOS/samplevid.mp4" download>DOWNLOAD</a></button> -->
        <hr style="margin-top: 3%;">
    <!-- <h3 style="color:beige; margin: 0% 44%;">Episode List</h3>
    <hr>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 1</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 2</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 3</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 4</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 5</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 6</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 7</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 8</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 9</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 10</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 11</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 12</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 13</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 14</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 15</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 16</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 17</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 18</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 19</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 20</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 21</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 22</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 23</h2>
    <h2 style="color:beige; margin: 0% 5%; cursor:pointer;" onclick="playepisodes()" id="epsbtn">Episode 24</h2> -->
    </div>
    
   
   

    
    <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>


</body>
