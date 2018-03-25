
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
        <p class="promnote">AniWeb was founded in February 1st 2018 and has offices in Okinawa Japan. AniWeb is a pioneer and innovator in the Japanese anime industry and the only video service in the world to offer hit programs online to its subscribers within one hour of its Japanese broadcast.

                        Its mission is to bring professional content to a worldwide audience and to build a fun, thriving community around this content. To achieve these goals, AniWeb actively partners with content providers around the world, while developing social media tools to support this content. It has partnered with over 30 major Site publishers to provide over Thousand Videos to its audience. It has created a vibrant active community of over ThousandsÂ  users through its Anime Network.
                        
                        AniWeb is free and easy to use. Videos are supported with advertisements and do not require special installations to watch.</p>
        <img class="prompic" src="<?php echo base_url(); ?>public/SRC/prompicright.png">
    </div>

    <div class="animeviewtile">
       


    </div>

    
    <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>


</body>
