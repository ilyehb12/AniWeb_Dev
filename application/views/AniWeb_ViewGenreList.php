
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

    <div class="animegenretile">
    <div class="genretile">

<div class="genretitletile">
     <p class="genretitles">Action</p>
     <p class ="genretitle">The action genre in manga depicts extremely high levels of high-intensity action. More often than not, you’ll be witnessing thrilling battles and action-packed fight scenes in the shows included in this genre.</p>
</div>
<div class="listdivider"></div>



<div class="genretitletile">
     <p class="genretitles">Adventure</p>
     <p class="genretitle">Adventure as it stands by itself is about traveling and undertaking an adventure in a certain place or around the world (which may sometimes escalate to the whole universe or even to the other dimensions).</p>
</div>
<div class="listdivider"></div>
<div class="genretitletile">
      
      <p class="genretitles">Drama</p>
      <p class="genretitle">Tear-inducing and emotion-stimulating – these are basically what the drama genre does best! Drama manga tends to connect the viewers to the experiences of the characters.</p>
      </div>
      <div class="listdivider"></div>

<div class="genretitletile">
    <p class="genretitles">Comedy</p>
    <p class="genretitle">The main purpose of the comedy genre is…you got it…to make you laugh! If it fails to make you laugh or at least make you giggle, then it’s a failure. </p>
</br></div>

    

</div>

<div class="genretile">
    <div class="genretitletile">
           
            <p class="genretitles">Sci-Fi</p>
            <p class="genretitle">Sci-Fi (short for science fiction) is a genre that showcases scientific and technological elements in its story. Machines and various kinds of technologies are staples of this genre.</p>
       </div>
       <div class="listdivider"></div>
       <div class="genretitletile">
      

            <p class="genretitles">Tragedy</p>
            <p class="genretitle">As the name implies, the tragedy genre revolves around tragic events or phenomenon where the characters are deeply involved and affected. Tragedy comes in diverse varieties such as disasters, accidents, misfortunes, and deaths.</p>
       </div>
       <div class="listdivider"></div>
       <div class="genretitletile">
             
             <p class="genretitles">Sports</p>
             <p class="genretitle">Pretty much self-explanatory, sports manga are shows that bases on the very definition of sports. That means, it can tackle on the story of the many sports you know of.</p>
       </div>
       <div class="listdivider"></div>

       <div class="genretitletile">
          
           <p class="genretitles">Magic</p>
           <p class="genretitle">Magic in all its essence is about magical stuff like spells and incantations. It can also include magical sources, beings that grants wishes, and good ol’ sleeve tricks.</p>
       </div>
</div>

<div class="genretile">
    <div class="genretitletile">
           
            <p class="genretitles">Mystery</p>
            <p class="genretitle">If there’s one thing that’s similar in all mystery manga, that is the existence of a central mystery. Whether it’s an event, a place, of an item – if there’s some sort of mystery surrounding it, then it can readily be classified in the ranks of mystery manga.</p>
       </div>
       <div class="listdivider"></div>

       <div class="genretitletile">
            
            <p class="genretitles">Romance</p>
            <p class="genretitle">Romance is all about love and sweet moments. Manga involved with this genre often have the skill to tug everyone’s heartstrings with the laid-out romantic scenes and sweet moments. </p>
       </div>
       <div class="listdivider"></div>
       <div class="genretitletile">
            
             <p class="genretitles">Music</p>
             <p class="genretitle">Manga shows in the music genre aren’t that popular nowadays, but they do exists and they are very timely. These manga are pretty much very musical throughoutly. </p>
       </div>
       <div class="listdivider"></div>

       <div class="genretitletile">
          
           <p class="genretitles">Horror</p>
            <p class="genretitle">Horror is either frightening and/or shocking.</p>
       </div>
</div>

<div class="genretile">
    <div class="genretitletile">
           
            <p class="genretitles">Mecha</p>
            <p class="genretitle">Mecha stands for mechanical (in this case, mechanical units or robots). You’ll never see a mecha manga without a robot or mechanical suit/object in it. </p>
       </div>
       <div class="listdivider"></div>

       <div class="genretitletile">
            
            <p class="genretitles">Fantasy</p>
            <p class="genretitle">The fantasy genre in manga primarily deals with fantasy worlds and surreal events and places. Most of the time, the setting is in a magical fantasy world where the characters starts an adventure or sometimes get sent to from the real world.</p>
       </div>
       <div class="listdivider"></div>
       <div class="genretitletile">
             
             <p class="genretitles">Ecchi</p>
             <p class="genretitle">The word ecchi comes from the sound of “H” in the word hentai, which in turn means “pervert” in Japanese. Having that said, this genre is generally accepted as a category full of slight sexual scenes (mild enough to be viewed by the general audience) and scenarios derived from sexual innuendoes.</p>
       </div>
       <div class="listdivider"></div>

       <div class="genretitletile">
          
           <p class="genretitles">Martial Arts</p>
           <p class="genretitle">As the name suggests, anything martial arts related. Any of several arts of combat or self-defense, such as aikido, karate, judo, or tae kwon do, kendo, fencing, and so on and so forth.</p>
       </div>
</div>


    </div>

    
    <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>


</body>
