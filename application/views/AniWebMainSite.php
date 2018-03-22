
<body class="body">
    <div class="head">
        <div class="headlogo">
                <img class="aniweblogo" src="<?php echo base_url(); ?>public/SRC/fapmirallogo.png">
        </div>
        <div class="headlogin">
                <button class="btnheadlogin">LOGIN</button>

                <div class="headsearch">
                        <input type="text" name="searchanime" id="seachanime" class ="txtsearchanime" autocomplete="on">
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

    <div class="animelisttiles">
        <div class="animetile">

            <div class="animpictile">
                 <img class="animpic" src="<?php echo base_url(); ?>public/SRC/akame_ga_kill.jpg" onclick="watchakamegakill()">
                 <p class="animtitle" onclick="watchakamegakill()">Akame Ga Kill!</p>
            </div>
               
            <div class="animpictile">
                 <img class="animpic" src="<?php echo base_url(); ?>public/SRC/blend_s.jpg" onclick="watchblends()">
                 <p class="animtitle" onclick="watchblends()">Blend S</p>
            </div>
               
            <div class="animpictile">
                  <img class="animpic" src="<?php echo base_url(); ?>public/SRC/chaos_head.jpg" onclick="watchchaoshead()">
                  <p class="animtitle" onclick="watchchaoshead()">Chaos;Head</p>
            </div>
              
            <div class="animpictile">
                <img class="animpic" src="<?php echo base_url(); ?>public/SRC/dan_machi.jpg" onclick="watchdanmachi()">
                <p class="animtitle" onclick="watchdanmachi()">DanMachi</p>
            </div>
                

        </div>
        
        <div class="animetile">
                <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/eromanga_sensei.jpg" onclick="watcheromangasensei()">
                        <p class="animtitle" onclick="watcheromangasensei()">Eromanga Sensei</p>
                   </div>
                      
                   <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/fate_zero.jpg" onclick="watchfatezero()">
                        <p class="animtitle" onclick="watchfatezero()">Fate/Zero</p>
                   </div><map name=""></map>
                      
                   <div class="animpictile">
                         <img class="animpic" src="<?php echo base_url(); ?>public/SRC/gabriel_dropout.jpg" onclick="watchgabrieldropout()">
                         <p class="animtitle" onclick="watchgabrieldropout()">Gabriel Dropout</p>
                   </div>
                     
                   <div class="animpictile">
                       <img class="animpic" src="<?php echo base_url(); ?>public/SRC/himouto_umaruchan.jpg" onclick="watchhimoutoumaruchan()">
                       <p class="animtitle" onclick="watchhimoutoumaruchan()">Himouto Umaru-chan</p>
                   </div>
        </div>

        <div class="animetile">
                <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/infinite_stratos.jpg" onclick="watchinfinitestratos()">
                        <p class="animtitle" onclick="watchinfinitestratos()">Infinite Stratos</p>
                   </div>
                      
                   <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/log_horizon.jpg" onclick="watchloghorizon()">
                        <p class="animtitle">Log Horizon</p>
                   </div>
                      
                   <div class="animpictile">
                         <img class="animpic" src="<?php echo base_url(); ?>public/SRC/made_in_abyss.jpg" onclick="watchmadeinabyss()">
                         <p class="animtitle" onclick="watchloghorizon()">Made in Abyss</p>
                   </div>
                     
                   <div class="animpictile">
                       <img class="animpic" src="<?php echo base_url(); ?>public/SRC/nogame_nolife.jpg" onclick="watchnogamenolife()">
                       <p class="animtitle" onclick="watchnogamenolife()">No Game No Life</p>
                   </div>
        </div>

        <div class="animetile">
                <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/rakudai_kishi.jpg" onclick="watchrakudaikishi()">
                        <p class="animtitle" onclick="watchrakudaikishi()">Rakudai Kishi</p>
                   </div>
                      
                   <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/sao.jpg" onclick="watchsao()">
                        <p class="animtitle" onclick="watchsao()">S.A.O.</p>
                   </div>
                      
                   <div class="animpictile">
                         <img class="animpic" src="<?php echo base_url(); ?>public/SRC/tokyo_ghoul.jpg" onclick="watchtokyoghoul()">
                         <p class="animtitle" onclick="watchtokyoghoul()">Tokyo Ghoul</p>
                   </div>
                     
                   <div class="animpictile">
                       <img class="animpic" src="<?php echo base_url(); ?>public/SRC/re_zero.jpg" onclick="watchrezero()">
                       <p class="animtitle" onclick="watchrezero()">Re:Zero</p>
                   </div>
        </div>

       



    </div>

    
        <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>


</body>
