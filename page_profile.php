<?php /*
	Template Name: page_profile
*/ ?>
<?php get_header(); ?>

<div id="pageProfile" class="content wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <h2 class="idx"><span><?php the_title(); ?></span></h2>
                        <div id="pgCntnt">
                            <?php /*the_content();*/ ?>
                            <div id="profIntro" class="row">
                                <div class="col-12 col-sm-10 offset-sm-1">
                                    　こどもの城児童合唱団は、1985年の4月に、その年の11月の国立児童総合センター「こどもの城」のオープンに先駆けて作られた児童合唱団です。この合唱団は、子どもの「遊び」から生まれる創造的自己表現活動を重視し、音楽を通して協調性・創造性等、幅広い知的好奇心を養い、豊かな人間性を育てることを目的にして展開しています。現在、合唱講座・合唱団低学年・合唱団高学年・混声合唱団の4つのグループ約250名の団員で構成されています。各グループとも週一回、約2時間のレッスンで、合唱練習に加えて、身体表現活動、朗読劇等を取り入れた演劇活動、造形活動、ふれあいを大切にした野外活動、そしてシンセサイザーやリズム楽器による合奏等を織り込んだ、ユニークな総合的プログラムを展開しております。<br>
                                    　2015年3月のこどもの城閉館に伴い、4月より特定非営利活動法人アートセラピー研究所DAMにて活動を継続し、平成27年度児童福祉文化賞を受賞しました。<br>
                                    　2017年、法人名を「こどもの城合唱団」に変更して新たにスタートを切りました。
                                </div>
                            </div>
                            
                            <h3 class="idx"><span>講師紹介</span></h3>

                            <div id="yoshimura" class="row wow fadeIn" data-wow-duration=".6s" data-wow-offset="15">
                                <div class="col-12 col-sm-5">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/profile/yoshimurasensei.jpg">
                                </div>
                                <div class="col-12 col-sm-7">
                                    <h3><span class="f14 bold">指揮者紹介</span>&nbsp;吉村 温子</h3>
                                    <p>			
                                        　こどもの城オープン前より音楽事業部の企画に携わり、こどもの城児童合唱団・混声合唱団の設立当初より指揮をとっており、他にも幼児のための親子リトミック、就園前の親子リトミック等、幼児から大人までを対象に幅広くユニークな音楽表現活動を展開している。<br>
                                        　また、全国各地の子ども達とのドラマスクールや、ミュージカルつくりの現場に参加し、指導を行っている。<br>
                                        　毎年お正月には青山円形劇場で、参加型のオペレッタ公演の主演を務め、2008年の1月に公演した「タントさんのふしぎなレストラン2･3･4」は児童福祉文化財の特別推薦に選ばれた。<br>
                                        　その他、「ウインザーの陽気な女房たち」（アンナ）、「フィガロの結婚」（スザンナ）、「愛の妙薬」（アディーナ）、「ヘンゼルとグレーテル」（グレーテル）、「サルタン王の物語」（白鳥姫）、「三つのオレンジへの恋」（ニネッタ姫）等、多数出演、また「第九」のソロや、レクイエムのソロ、多くのコンサートに出演している。<br>
                                        　幼児や児童の音楽表現あそびの本や、音楽の教科書に載っている曲の解説など、執筆も多数手がけている。<br>
                                        〔職歴〕<br>
                                        玉川大学非常勤講師、東京家政大学非常勤講師<br>
                                        日本オペラ振興会会員、全日本音楽療法学会会員<br>
                                        オペラ・クリエーション・イン・青山主宰、<br>
                                        特定非営利活動法人アートセラピー研究所ＤＡＭ　代表理事<br>
                                        〔著書〕<br>
                                        ・子どもがよろこぶ楽しいゲーム③　歌あそび　学事出版<br>
                                        ・『ころ・ぴよ・とこ・ぱた』０歳からの歌あそび絵本　主婦の友社<br>
                                        ・教科書に出てくる『童謡・唱歌のふるさと』　岩崎書店（共著）　他<br>
                                    </p>
                                </div>
                            </div>

                            <div id="yamamoto" class="row wow fadeIn" data-wow-duration=".6s" data-wow-offset="15">
                                <div class="col-12 col-sm-5 order-sm-2">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/profile/makotosensei.jpg">
                                </div>
                                <div class="col-12 col-sm-7 order-sm-1">
                                    <h3 class="right"><span class="f14 bold">演奏者紹介</span>&nbsp;山本 誠</h3>
                                    <p>	
                                        　保育士資格を取得し、1985年の「こどもの城」開館時より
                            こどもの音楽活動プログラムの企画・運営を行った。<br>
                                        　こどもの城では合唱団のほか、「中・高校生のバンド講座」「就園前児のリトミック」なども担当した。 各地で行われる児童厚生員等指導者講習会の「音楽遊び」講師なども務めた。<br>
                                        　特定非営利活動法人アートセラピー研究所ＤＡＭの事務局長兼運営部長として、また音楽プロデューサーとして、児童劇、オペレッタ等の作曲活動も行う。 専門楽器
                            はベースだが、ピアノ、ドラム、ギター、パーカッション、サックス、沖縄三線
                            などもこなす無類の楽器好き。 <br><br>
                                    </p>
                                </div>
                            </div>

                            <div id="hayashi" class="row wow fadeIn" data-wow-duration=".6s" data-wow-offset="15">
                                <div class="col-12 col-sm-5">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/profile/adusasensei.jpg">
                                </div>
                                <div class="col-12 col-sm-7">
                                    <h3><span class="f14 bold">伴奏者紹介</span>&nbsp;林 あづさ</h3>
                                    <p>			
                                        こどもの城児童合唱団・混声合唱団専属ピアノ伴奏者<br>
                                        　青山円形劇場で公演されたファミリーオペレッタや、こどもの城児童合唱団・混声合唱団の為に多数作曲。玉川大学非常勤講師<br>
                                    </p>
                                </div>
                            </div>
                            
                            
                            
                            <hr>

                            <br />
                            <div class="profile_detail">
                                <h2 class="idx"><span>こどもの城児童合唱団・混声合唱団の特色、特性</span></h2>
                                <div class="padding10 profbox">
                                    <h4>-みんな宝石-</h4>
                                    <p>
                                        こどもの城児童合唱団・混声合唱団は、毎週土曜日、約２時間の練習をしています。<br>
                                        温子先生は上手に歌うこと、それ以外にも沢山のことを私達に教えてくれます。<br>
                                        <br>
                                        皆でハーモニーを合わせること、その前にまず一人一人の楽しさや歌を大切にしてくれます。<br>
                                        「遊び」を取り入れた練習、大きな声で楽しく歌う、一生懸命表現する、楽しかったらリズムにのる。<br>
                                        レッスンを受け、先生の指揮を見ていると、いつの間にか皆、歌に思いをこめ、歌うことの楽しさを身体中で表し、一生懸命伝えたいと思うのです。<br>
                                        そのエネルギーはお客様に伝わるのだと学びます。<br>
                                        その時のエネルギーをもっと大切に、もっと大きく！と先生に教えてもらいました。<br>
                                        合唱団では、歌の上手さだけではなく、人の心に届ける方法を自然に学ぶことができます。
                                    </p>
                                    <br>
                                    <p align="center">
                                        <img src="http://localhost:8888/shiro2016/image/concert/25shuunen01s.jpg">
                                        <img src="http://localhost:8888/shiro2016/image/concert/2007sound2s.jpg">
                            <a href="http://www.youtube.com/watch?v=lnUHCynCMew" target="_blank"><img src="http://localhost:8888/shiro2016/image/shirouta_ytlogo2.jpg"></a>
                                    </p>
                                </div>
                                <div class="padding10 profbox">
                                    <h4>-すばらしい出会い-</h4>
                                    <p>
                                        私達の活動は、コンサートで歌を歌うことだけではありません。<br>
                                        私達には自慢できる沢山の財産があります。<br>
                                        それは、今まで出会った「ともだち」です。<br>
                                        沢山の人と出会い、貴重な経験をしてきました。<br>
                                        <br>
                                        コンサートで共演した歌い手の方々や演奏の方、バレエダンサーの方々。。。<br>
                                        共演させてもらう中で、色々な文化や芸術を見、そして一緒の舞台に立って、こどもたちはそれぞれあっという間に沢山の事を感じ、吸収します。<br>
                                        <br>
                                        毎年夏に皆で行く合宿は、今年で33回目を迎え、全国で18道県、海外にも行きました。<br>
                                        そこでの地方公演、地元の方とのジョイントコンサート、文化交流、そして一緒に思いっきり遊ぶこと。<br>
                                        沢山の出会いと忘れられない思い出を作り、皆大きく成長して帰ってきます。<br>
                                        帰ってからも、「ずっと友達」です。<br>
                                        <br>
                                        また一緒にコンサートをしたり、お手紙を書いたり。<br>
                                        皆がずっと大切にしたいと思う、全国の「ともだち」と出会えたことは、本当に幸せです。<br>
                                        <br>
                                        いつも素敵なコンサートや体験の場を与えてもらっていること。<br>
                                        私達は、出会った全ての方に支えてもらっていることを感じ、感謝の心も歌にこめてきました。
                                    </p>
                                    <br>
                                    <p align="center">
                                        <img src="http://localhost:8888/shiro2016/image/gasshuku/S63hiroshima1s.jpg">
                                        <img src="http://localhost:8888/shiro2016/image/2013bazaar1s.jpg">
                                        <a href="http://www.youtube.com/watch?v=VxNwLuGdET4" target="_blank"><img src="http://localhost:8888/shiro2016/image/subadea_ytlogo2.jpg"></a>
                                    </p>
                                </div>


                                <div class="padding10 profbox">
                                    <h4>-時のおくりもの-</h4>
                                    <p>
                                        私達は、小学校一年生から大人まで総勢290名の合唱団です。<br>
                                        世代を越えて一緒にコンサートに向けて練習し、歌を歌い、合宿にいくこと。<br>
                                        その中で、子ども達は自然と自我が芽生え、役割を分担し、お互いに協力し合います。<br>
                                        <br>
                                        そして、家族のように練習してきた大好きな仲間と、大好きな歌を歌うことの楽しさと喜びを感じています。<br>
                                        子どもの時から合唱団が大好きで、大人になっても一緒に歌い続けている人達や、大人になった時自分の子どもを通わせ二世代、三世代で歌っている人。<br>
                                        そんな仲間が集まり私達はいつの間にか大きな家族のような合唱団になりました。
                                    </p>
                                    <br>
                                    <p align="center">
                                        <img src="http://localhost:8888/shiro2016/image/gasshuku/H23ishikawa2s.jpg">
                                        <img src="http://localhost:8888/shiro2016/image/gasshuku/H22niigata1s.jpg">
                                    </p>
                                </div>

                                <div class="padding10 profbox">
                                    <h4>-ぼくらの歌-</h4>
                                    <p>
                                        私達のコンサートを見に来て下さったお客様は、皆とても楽しそうに歌っていたねと言って下さいます。<br>
                                        それは、曲のイメージによって色々な演出をしているからです。<br>
                                        <br>
                                        かわいい振りのついた曲や、お客様と一緒に振りのできる曲、手話をつけた曲、舞台によって移動したり、楽器を自分達が演奏したり、朗読劇も行います。<br>
                                        温子先生の演出と指導に合わせて歌以外の事にもチャレンジし、曲ごとに楽しんで表現をしています。<br>
                                        <br>
                                        私達は、歌うこと以外にも表現することの楽しさをいつも感じて舞台に立っています。
                                    </p>
                                    <br>
                                    <p align="center">
                                        <img src="http://localhost:8888/shiro2016/image/concert/1999onita1s.jpg">
                                        <img src="http://localhost:8888/shiro2016/image/concert/2013sound4s.jpg">
                                    </p>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>