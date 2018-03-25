
<body class="body">
    <div class="head">
        <div class="headlogo">
                <img class="aniweblogo" src="<?php echo base_url(); ?>public/SRC/fapmirallogo.png">
        </div>
        <div class="headlogin">
                <button class="btnheadlogin">LOGIN</button>

                <div class="headsearch">
                        <input type="text" name="searchanime" id="seachanime" class ="txtsearchanime" autocomplete="on" list="animes">
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
                        <button class="btnheadsearch" onclick="searchanime()">Search</button>
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
                 <img class="animpic" src="<?php echo base_url(); ?>public/SRC/akame_ga_kill.jpg" onclick="watchanime_akamegakill()">
                 <p class="animtitle" onclick="watchanime_akamegakill()">Akame Ga Kill!</p>
            </div>
               
            <div class="animpictile">
                 <img class="animpic" src="<?php echo base_url(); ?>public/SRC/blend_s.jpg" onclick="watchanime_blends()">
                 <p class="animtitle" onclick="watchanime_blends()">Blend S</p>
            </div>
               
            <div class="animpictile">
                  <img class="animpic" src="<?php echo base_url(); ?>public/SRC/chaos_head.jpg" onclick="watchanime_chaoshead()">
                  <p class="animtitle" onclick="watchanime_chaoshead()">Chaos;Head</p>
            </div>
              
            <div class="animpictile">
                <img class="animpic" src="<?php echo base_url(); ?>public/SRC/dan_machi.jpg" onclick="watchanime_danmachi()">
                <p class="animtitle" onclick="watchanime_danmachi()">DanMachi</p>
            </div>
                

        </div>
        
        <div class="animetile">
                <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/eromanga_sensei.jpg" onclick="watchanime_eromangasensei()">
                        <p class="animtitle" onclick="watchanime_eromangasensei()">Eromanga Sensei</p>
                   </div>
                      
                   <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/fate_zero.jpg" onclick="watchanime_fatezero()">
                        <p class="animtitle" onclick="watchanime_fatezero()">Fate/Zero</p>
                   </div><map name=""></map>
                      
                   <div class="animpictile">
                         <img class="animpic" src="<?php echo base_url(); ?>public/SRC/gabriel_dropout.jpg" onclick="watchanime_gabrieldropout()">
                         <p class="animtitle" onclick="watchanime_gabrieldropout()">Gabriel Dropout</p>
                   </div>
                     
                   <div class="animpictile">
                       <img class="animpic" src="<?php echo base_url(); ?>public/SRC/himouto_umaruchan.jpg" onclick="watchanime_himoutoumaruchan()">
                       <p class="animtitle" onclick="watchanime_himoutoumaruchan()">Himouto Umaru-chan</p>
                   </div>
        </div>

        <div class="animetile">
                <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/infinite_stratos.jpg" onclick="watchanime_infinitestratos()">
                        <p class="animtitle" onclick="watchanime_infinitestratos()">Infinite Stratos</p>
                   </div>
                      
                   <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/log_horizon.jpg" onclick="watchanime_loghorizon()">
                        <p class="animtitle">Log Horizon</p>
                   </div>
                      
                   <div class="animpictile">
                         <img class="animpic" src="<?php echo base_url(); ?>public/SRC/made_in_abyss.jpg" onclick="watchanime_madeinabyss()">
                         <p class="animtitle" onclick="watchanime_loghorizon()">Made in Abyss</p>
                   </div>
                     
                   <div class="animpictile">
                       <img class="animpic" src="<?php echo base_url(); ?>public/SRC/nogame_nolife.jpg" onclick="watchanime_nogamenolife()">
                       <p class="animtitle" onclick="watchanime_nogamenolife()">No Game No Life</p>
                   </div>
        </div>

        <div class="animetile">
                <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/rakudai_kishi.jpg" onclick="watchanime_rakudaikishi()">
                        <p class="animtitle" onclick="watchanime_rakudaikishi()">Rakudai Kishi</p>
                   </div>
                      
                   <div class="animpictile">
                        <img class="animpic" src="<?php echo base_url(); ?>public/SRC/sao.jpg" onclick="watchanime_sao()">
                        <p class="animtitle" onclick="watchanime_sao()">S.A.O.</p>
                   </div>
                      
                   <div class="animpictile">
                         <img class="animpic" src="<?php echo base_url(); ?>public/SRC/tokyo_ghoul.jpg" onclick="watchanime_tokyoghoul()">
                         <p class="animtitle" onclick="watchanime_tokyoghoul()">Tokyo Ghoul</p>
                   </div>
                     
                   <div class="animpictile">
                       <img class="animpic" src="<?php echo base_url(); ?>public/SRC/re_zero.jpg" onclick="watchanime_rezero()">
                       <p class="animtitle" onclick="watchanime_rezero()">Re:Zero</p>
                   </div>
        </div>

       



    </div>

    
        <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>


</body>
