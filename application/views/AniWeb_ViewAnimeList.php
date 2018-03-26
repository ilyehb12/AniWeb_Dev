<?php include('server.php') ?>
<body class="body">
    <div class="head">
        <div class="headlogo">
                <img class="aniweblogo" src="<?php echo base_url(); ?>public/SRC/fapmirallogo.png">
        </div>
        <div class="headlogin">
        <button id="myBtn"s class="btnheadlogin" onclick="register()">LOGIN</button>
                                    <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <div class="Box">
                    <img src="<?php echo base_url(); ?>public/SRC/prompicleft.png" class="user">
                        <h2>AniWeb</h2><br>
                        <h4>SignIn</h4>
                    <form method="post" action="loadmain">
                      <?php include('errors.php'); ?>
                      <div>
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter Username">
                      </div>
                      <div>
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Enter Password">
                      </div>
                      <div>
                        <input type="submit" name="login_user" value="SignIn">
                      </div>
                      <p>
                        Not yet a member? <a href="register">Register</a>
                      </p>
                    </form>
                  </div>
                    </div></div>
                <div class="headsearch">
                        <input type="text" name="searchanime" id="seachanime" class ="txtsearchanime" list="animes">
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
        <div class="animelistview"><p>Anime List</p></div>
        <div>
            <div class="animeviewtiles">
            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/akame_ga_kill.jpg" onclick="watchanime_akamegakill()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_akamegakill()">Akame Ga Kill!</h3>
                                <div>
                                        <p class="genre">Genres : Action , Adventure , Fantasy</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> In a fantasy world, fighter Tatsumi sets out for the Capitol to earn money for his starving village, and finds a world of unimaginable corruption, all spreading from the depraved Prime Minister who controls the child Emperor's ear. After nearly becoming a victim of this corruption himself, Tatsumi is recruited by Night Raid, a group of assassins dedicated to eliminating the corruption plaguing the Capitol by mercilessly killing those responsible.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/blend_s.jpg" onclick="watchanime_blends()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_blends()">Blend S</h3>
                                <div>
                                        <p class="genre">Genres : Comedy, Seinen, Slice of Life</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> High school girl Maika Sakuranomiya has trouble finding a part-time job because of how scary she looks when smiling. However, she is scouted one day by an Italian man who is also the manager of Stile, a café where its waitresses are given unique traits such as tsundere and younger sister. Maika is given a sadist trait because of her looks and has to adopt a dominant and cruel persona when servicing customers, particularly masochist ones.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/chaos_head.jpg" onclick="watchanime_chaoshead()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_chaoshead()">Chaos;Head</h3>
                                <div>
                                        <p class="genre">Genres :  Harem, Mystery, Psychological, Sci-Fi, Supernatural</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> Shibuya, Japan, 2008. Takumi Nishijou, a high school student at the Private Suimei Academy, one day hears about the 'New Gen' murders that have been occurring around the city. Although dismissing the subject because it doesn't involve him, Takumi begins to experience strange mishaps around him, from a horrific picture he received while on his PC, to a mysterious Pink-Haired girl standing at a murder scene.From there on Takumi struggles to cope with the events unfolding around him, and is soon unaware of what is real or a delusion.</p>    
                                </div>
                        </div>       
                </div>
            </div>
               
            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/dan_machi.jpg" onclick="watchanime_danmachi()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_danmachi()">Danmachi</h3>
                                <div>
                                        <p class="genre">Genres :  Action, Adventure, Comedy, Fantasy, Romance</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> Life in the bustling city of Orario is never dull, especially for Bell Cranel, a naïve young man who hopes to become the greatest adventurer in the land. After a chance encounter with the lonely goddess, Hestia, his dreams become a little closer to reality. With her support, Bell embarks on a fantastic quest as he ventures deep within the city's monster-filled catacombs, known only as the "Dungeon." Death lurks around every corner in the cavernous depths of this terrifying labyrinth, and a mysterious power moves amidst the shadows.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/eromanga_sensei.jpg" onclick="watchanime_eromangasensei()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_eromangasensei()">Eromanga Sensei</h3>
                                <div>
                                        <p class="genre">Genres :  Comedy, Drama, Romance</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> One year ago, Sagiri Izumi became step-siblings with Masamune Izumi. But the sudden death of their parents tears their new family apart, resulting in Sagiri becoming a shut-in which cut her off from her brother and society.While caring for what's left of his family, Masamune earns a living as a published light novel author with one small problem: he's never actually met his acclaimed illustrator, Eromanga-sensei, infamous for drawing the most lewd erotica. Through an embarrassing chain of events, he learns that his very own little sister was his partner the whole time!</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/fate_zero.jpg" onclick="watchanime_fatezero">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_fatezero">Fate/Zero</h3>
                                <div>
                                        <p class="genre">Genres :  Action, Fantasy, Supernatural</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> Fate/Zero takes place 10 years prior to the events of Fate/stay night, detailing the events of the 4th Holy Grail War in Fuyuki City. The War of the Holy Grail is a contest in which seven magi summon seven Heroic Spirits to compete to obtain the power of the "Holy Grail," which grants a miracle. After three inconclusive wars for the elusive Holy Grail, the Fourth War commences. </p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/gabriel_dropout.jpg" onclick="watchanime_gabrieldropout()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_gabrieldropout()">Gabriel Dropout</h3>
                                <div>
                                        <p class="genre">Genres :  Comedy, School, Shounen, Supernatural</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> For centuries, Heaven has required its young angels to live and study among humans in order to become full-fledged angels. This is no different for top-of-her-class Gabriel White Tenma, who believes it is her mission to be a great angel who will bring happiness to mankind. However, Gabriel grows addicted to video games on Earth and eventually becomes a hikikomori. Proclaiming herself a "Faillen Angel," she is apathetic to everything else—much to the annoyance of Vignette April Tsukinose, a demon whom Gabriel befriended in her angelic early days on Earth.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/himouto_umaruchan.jpg" onclick="watchanime_himoutoumaruchan()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle" onclick="watchanime_himoutoumaruchan()">Himouto Umaru-chan!</h3>
                                <div>
                                        <p class="genre">Genres : Comedy, School, Seinen, Slice of Life</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> People are not always who they appear to be, as is the case with Umaru Doma, the perfect high school girl—that is, until she gets home! Once the front door closes, the real fun begins. When she dons her hamster hoodie, she transforms from a refined, over-achieving student into a lazy, junk food-eating otaku, leaving all the housework to her responsible older brother Taihei. Whether she's hanging out with her friends Nana Ebina and Kirie Motoba, or competing with her self-proclaimed "rival" Sylphinford Tachibana, Umaru knows how to kick back and have some fun!</p>    
                                </div>
                        </div>       
                </div>
            </div>
       
            <div class="listdivider"></div>

         

    </div>    
    
        </div>
    

    
    <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>

       


</body>
