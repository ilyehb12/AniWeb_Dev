
<body class="body">
    <div class="head">
        <div class="headlogo">
                <img class="aniweblogo" src="<?php echo base_url(); ?>public/SRC/fapmirallogo.png">
        </div>
        <div class="headlogin">
                <button class="btnheadlogin">LOGIN</button>

                <div class="headsearch">
                        <input type="text" name="searchanime" id="seachanime" class ="txtsearchanime">
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
        <div class="animelistview"><p>Anime List</p></div>
        <div>
            <div class="animeviewtiles">
            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/akame_ga_kill.jpg" onclick="watchakamegakill()">
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

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/blend_s.jpg" onclick="watchblends()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Blend S</h3>
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
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/chaos_head.jpg" onclick="watchchaoshead()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Chaos;Head</h3>
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
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/dan_machi.jpg" onclick="watchdanmachi()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Danmachi</h3>
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
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/eromanga_sensei.jpg" onclick="watcheromangasensei()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Eromanga Sensei</h3>
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
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/fate_zero.jpg" onclick="watchfatezero">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Fate/Zero</h3>
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
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/gabriel_dropout.jpg" onclick="watchgabrieldropout()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Gabriel Dropout</h3>
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
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/himouto_umaruchan.jpg" onclick="watchhimoutoumaruchan()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Himouto Umaru-chan!</h3>
                                <div>
                                        <p class="genre">Genres : Comedy, School, Seinen, Slice of Life</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> People are not always who they appear to be, as is the case with Umaru Doma, the perfect high school girl—that is, until she gets home! Once the front door closes, the real fun begins. When she dons her hamster hoodie, she transforms from a refined, over-achieving student into a lazy, junk food-eating otaku, leaving all the housework to her responsible older brother Taihei. Whether she's hanging out with her friends Nana Ebina and Kirie Motoba, or competing with her self-proclaimed "rival" Sylphinford Tachibana, Umaru knows how to kick back and have some fun!</p>    
                                </div>
                        </div>       
                </div>
            </div>
       
            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/infinite_stratos.jpg" onclick="watchinfinitestratos()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">IS: Infinite Stratos</h3>
                                <div>
                                        <p class="genre">Genres :  Action, Comedy, Harem, Mecha, Sci-Fi</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext">An exoskeleton weapon engineered by Japan, Infinite Stratos (IS) can be piloted only by women. Its power and combat prowess are so immense that an international treaty has been signed banning its use as a military asset.When it is discovered that 15-year-old Ichika Orimura is the only male capable of steering an IS, he is forcibly enrolled in the Infinite Stratos Academy: an all-female boarding school, the students of which graduate to become IS pilots.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/log_horizon.jpg" onclick="watchloghorizon()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Log Horizon</h3>
                                <div>
                                        <p class="genre">Genres : Action, Adventure, Fantasy, Game, Magic</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> In the blink of an eye, thirty thousand bewildered Japanese gamers are whisked from their everyday lives into the world of the popular MMORPG, Elder Tale, after the game's latest update—unable to log out. Among them is the socially awkward college student Shiroe, whose confusion and shock lasts only a moment as, a veteran of the game, he immediately sets out to explore the limits of his new reality.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/made_in_abyss.jpg" onclick="watchmadeinabyss()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Made In Abyss</h3>
                                <div>
                                        <p class="genre">Genres :  Adventure, Drama, Fantasy, Mystery, Sci-Fi</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> The Abyss—a gaping chasm stretching down into the depths of the earth, filled with mysterious creatures and relics from a time long past. How did it come to be? What lies at the bottom? Countless brave individuals, known as Divers, have sought to solve these mysteries of the Abyss, fearlessly descending into its darkest realms. The best and bravest of the Divers, the White Whistles, are hailed as legends by those who remain on the surface. </p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/nogame_nolife.jpg" onclick="watchnogamenolife()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">No Game No Life</h3>
                                <div>
                                        <p class="genre">Genres :  Adventure, Comedy, Ecchi, Fantasy, Game, Supernatural</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> No Game No Life is a surreal comedy that follows Sora and Shiro, shut-in NEET siblings and the online gamer duo behind the legendary username "Kuuhaku." They view the real world as just another lousy game; however, a strange e-mail challenging them to a chess match changes everything—the brother and sister are plunged into an otherworldly realm where they meet Tet, the God of Games.The mysterious god welcomes Sora and Shiro to Disboard, a world where all forms of conflict—from petty squabbles to the fate of whole countries—are settled not through war, but by way of high-stake games.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/rakudai_kishi.jpg" onclick="watchrakudaikishi()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Rakudai Kishi no Cavalry</h3>
                                <div>
                                        <p class="genre">Genres :   Action, Ecchi, Fantasy, Romance, School</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> There are some humans capable of using magical power to manifest their souls as weapons and control forces beyond normal comprehension. These people are known as Blazers, and those who are recognized as such can undergo training at academies to become Mage-Knights. Ikki Kurogane is an aspiring Mage-Knight, despite being considered the worst student at Hagun Academy as an F-ranked Blazer—the lowest rank possible.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/sao.jpg" onclick="watcsao()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">S.A.O. : Sword Art Online</h3>
                                <div>
                                        <p class="genre">Genres :   Action, Adventure, Fantasy, Game, Romance</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of "NerveGear" technology, players can control their avatars within the game using nothing but their own thoughts.In order to escape Aincrad, Kirito will now have to interact and cooperate with his fellow players.To make matters worse, Sword Art Online is not all fun and games: if they die in Aincrad, they die in real life. Kirito must adapt to his new reality, fight for his survival, and hopefully break free from his virtual hell.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/tokyo_ghoul.jpg" onclick="watchtokyoghoul()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Tokyo Ghoul</h3>
                                <div>
                                        <p class="genre">Genres :  Action, Drama, Horror, Mystery, Psychological, Seinen, Supernatural</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext"> Tokyo has become a cruel and merciless city—a place where vicious creatures called “ghouls” exist alongside humans. The citizens of this once great metropolis live in constant fear of these bloodthirsty savages and their thirst for human flesh. However, the greatest threat these ghouls pose is their dangerous ability to masquerade as humans and blend in with society.</p>    
                                </div>
                        </div>       
                </div>
            </div>

            <div class="listdivider"></div>

            <div class="animeviewtile">
                <div class="animelisttile">
                        <div>
                        <img class="animpiclist" src="<?php echo base_url(); ?>public/SRC/re_zero.jpg" onclick="watchrezero()">
                        </div>
                        <div> 
                                <h3 class="animelisttitle">Re: Zero kara Hajimeru Isekai Seikatsu</h3>
                                <div>
                                        <p class="genre">Genres :  Drama, Fantasy, Psychological, Thriller</p>
                                        <p class="summary">Summary :</p>
                                        <p class="summarytext">When Subaru Natsuki leaves the convenience store, the last thing he expects is to be wrenched from his everyday life and dropped into a fantasy world. Things aren't looking good for the bewildered teenager, however: not long after his arrival, he is attacked by some thugs; armed with only a bag of groceries and a now useless cell phone, he is quickly beaten to a pulp. Fortunately, a mysterious beauty named Satella, in hot pursuit after the one who stole her insignia, happens upon Subaru and saves him.</p>    
                                </div>
                        </div>       
                </div>
            </div>

    </div>    
    
        </div>
    

    
    <div class="CRtile">
                <P class="crpara">AniWeb. Copyrights and trademarks for the anime, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</P>
        </div>

       


</body>
