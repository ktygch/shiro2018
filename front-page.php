<?php get_header(); ?>

    <div class="catch">
        <?php /*bloginfo('description');*/ ?>
        <p class="center wow fadeIn" data-wow-duration="1.0s" data-wow-delay=".6s" data-wow-offset="2">
            みなさん、こんにちは！<br>
            こどもの城合唱団です。<br>
            ぼくたち・わたしたちの歌を<br>
            聴いてください！
        </p>
    </div>

	<div id="topInfo" class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 offset-md-2 wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s" data-wow-offset="6">
                <h2 class="idx"><span>お知らせ</span></h2>
                <ul class="toplist">
                    <?php $posts = get_posts(array('posts_pre_page'=>5,'cat'=>5)); ?>
                    <?php foreach($posts as $post): ?>
                        <?php setup_postdata($post); ?>
                            <li>
                                <?php setup_postdata($post); ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php /*
                                    <?php
                                        $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, true);
                                    ?>
                                    <span class="thumbimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                    */ ?>
                                    <div class="date">
                                        <span>
                                            <?php the_date('Y.n.d'); ?>
                                        </span>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <?php get_template_part('slide/topslide1'); ?>
        </div>
    </div>
    
    <div id="topAbout" class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="wow fadeIn" data-wow-duration=".6s" data-wow-delay=".1s" data-wow-offset="">
                    <span class="emb_classic"></span>
                    <span>
                        "こどもの城合唱団"って<br>
                        どんなところ？
                    </span>
                </h2>
            </div>
        </div>
        
        <div class="philosophy" id="sec1">
            <div class="imgwrap wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s" data-wow-offset="2">
                <img src="<?php bloginfo('template_directory'); ?>/image/top/philo1.png" alt="">
            </div>
            <div class="desc wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s" data-wow-offset="2">
                <p>
                    　こどもの城児童合唱団・混声合唱団は、小学生から大人を対象にした合唱団です。
「みつけよう、すきなこと」をテーマに、週１回の練習でさまざまなジャンルの歌とダンス、サンバ楽器などの演奏、多様なアーティストとの共演、朗読劇などのレッスンを行います。丁寧な指導を通して、子どもたちは音楽に親しみ、仲間と触れ合い、自分らしさを表現する力を伸ばしていく場です。
                </p>
            </div>
        </div>
        
        <div class="philosophy" id="sec2">
            <div class="imgwrap wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s" data-wow-offset="2">
                <img src="<?php bloginfo('template_directory'); ?>/image/top/philo4.png" alt="">
            </div>
            <div class="desc wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s" data-wow-offset="2">
                <p>
                    　世代や性別、国籍や障がいの有無を超えた多様なメンバー構成、そして歌やダンスのほかアートやドラマにも親しむバラエティに富んだレッスン内容、さらにコンサートや公演など多くのステージへの出演機会があります。音楽イベント、オペラ、定期コンサート、地方での交流コンサートなど、年に10本を超える舞台へ出演します。通常のレッスンに加えての特別レッスンや、コンディションの調整をするなど、子どもたちにとっては楽しいことばかりではないかもしれません。メンバーと一緒に乗り越えステージにたった後には、一体感、充実感、達成感に溢れ、子どもたちは自信に満ちた表情をしています。
                </p>
            </div>
        </div>
        
        <div id="sec3" class="row">
            <div class="col-12 col-sm-6 wow fadeInLeft" data-wow-duration=".6s" data-wow-delay="">
                <h3 class="idx_yousu">活動のようす</h3>
            </div>
            <div class="col-12 col-sm-6 right wow fadeInRight" data-wow-duration=".6s" data-wow-delay="">
                <div class="idx_right_insta">
                    <span class="logo_insta">Instagram</span>
                    <a href="https://www.instagram.com/kodomonoshiro_chorus/" target="_blank">
                        @kodomonoshiro_chorus
                    </a>
                </div>
            </div>
        </div>
        
        <div id="sec4" class="row">
            <div class="col-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
                <ul id="instafeed">
                </ul>
            </div>
        </div>
        
        <div class="philosophy" id="sec5">
            <div class="imgwrap wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s" data-wow-offset="2">
                <img src="<?php bloginfo('template_directory'); ?>/image/top/philo2.png" alt="">
            </div>
            <div class="desc wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s" data-wow-offset="2">
                <p>
                    　こどもの城合唱団の初めての晴れ舞台は1985年、日本で唯一の国立児童館「こどもの城」のオープニングイベントでした。その活動は30年の歴史を重ね、現在は青山学院大学を会場にレッスンを行っています。国際色豊かで、文化の雰囲気漂うキャンパスに通うことは子どもたちの楽しみの一つになっています。合唱団に入る前の２歳〜5歳のリトミッククラスの子どもたちは親子で参加し、表現力やコミュニケーション能力の向上を図るプログラムに取り組んでいます。
                </p>
            </div>
        </div>
        
        <div class="philosophy" id="sec6">
            <div class="imgwrap wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s" data-wow-offset="2">
                <img src="<?php bloginfo('template_directory'); ?>/image/top/philo5.png" alt="">
            </div>
            <div class="desc wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s" data-wow-offset="2">
                <h3 class="center">「みつけよう、すきなこと」</h3>
                <p>
                　多感な時期だからこそ、人と触れ合い、大きな声で歌い、音楽を力に生きていけるように。自分の個性を信じ、好きなものと出会い、力強く歩きだせるように。さらに、ひとり一人の違う歩みを音楽で支えていきたいと願いを込めてプログラムを行っています。
                </p>
            </div>
        </div>
        
    </div>
    
    <div id="recruit" class="container">
        
        <div class="row wow fadeIn" data-wow-duration="1.0s" data-wow-delay=".5s">
            <div class="col-12">

                <h2 class="idx"><span>団員募集中！</span></h2>
                <p class="center" style="margin-bottom: 60px;">こどもの城合唱団では、<br class="d-inline d-md-none">新団員の募集をしております。</p>
                
                <ul>
                    <li class="wow fadeInUp" data-wow-duration=".6s">
                        <div class="inner">
                            <h3>３〜５歳児</h3>
                            <dl>
                                <dt><span>クラス名</span></dt>
                                <dd>
                                    みんなで楽しいリトミックⅠ（年少、年中）<br>
                                    みんなで楽しいリトミックⅡ（年長）
                                    
                                </dd>
                                
                                <dt><span>活動日時</span></dt>
                                <dd>
                                    Ⅰ）木曜日　15:00～16:00<br>
                                    Ⅱ）木曜日　16:00～17:00
                                </dd>
                                
                                <dt><span>活動場所</span></dt>
                                <dd>青山学院大学（渋谷区渋谷4-4-25）</dd>
                                
                                <dt><span>受講料等</span></dt>
                                <dd>
                                    1期（4～7月） 全10回 20,000円<br>
                                    2期（9～12月）全10回 20,000円<br>
                                    3期（1～3月） 全10回 20,000円<br>
                                    ※消費税別<br>
                                    その他、登録料(1,000円/年)、教材費、コンサート参加費等。
                                </dd>
                                
                            </dl>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
                        <div class="inner">
                            <h3>小学校1～4年生</h3>
                            <dl>
                                <dt><span>クラス名</span></dt>
                                <dd>こどもの城児童合唱団 合唱講座</dd>
                                
                                <dt><span>活動日時</span></dt>
                                <dd>土曜日　14:00～15:30</dd>
                                
                                <dt><span>活動場所</span></dt>
                                <dd>青山学院大学（渋谷区渋谷4-4-25）</dd>
                                
                                <dt><span>受講料等</span></dt>
                                <dd>
                                    1期（4～7月） 全11回 22,000円<br>
                                    2期（9～12月）全12回 24,000円<br>
                                    3期（1～3月） 全9回 18,000円<br>
                                    ※消費税別<br>
                                    その他、登録料(1,000円/年)、教材費、コンサート参加費等。
                                </dd>
                            </dl>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
                        <div class="inner">
                            <h3>障がいを持つ<br>子どもたち</h3>
                            <dl>
                                <dt><span>クラス名</span></dt>
                                <dd>おんがく大好きミュージックパーク</dd>
                                
                                <dt><span>活動日時</span></dt>
                                <dd>
                                    幼児・小学生クラス）日曜日 13:00～14:15<br>
                                    中学生以上クラス）日曜日 14:30～16:00
                                </dd>
                                
                                <dt><span>活動場所</span></dt>
                                <dd><a href="https://www.city.shibuya.tokyo.jp/shisetsu/chiiki/hikawa/index.html" target="_blank">リフレッシュ氷川</a>他</dd>
                                
                                <dt><span>受講料等</span></dt>
                                <dd>
                                    1期（4～7月） 全10回 20,000円<br>
                                    2期（9～12月）全10回 20,000円<br>
                                    3期（1～3月） 全10回 20,000円<br>
                                    ※消費税別<br>
                                    その他、登録料(1,000円/年)、教材費、コンサート参加費等。
                                </dd>
                                
                            </dl>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-12 center">
                <div class="alert alert-success wow fadeIn" role="alert" data-wow-duration=".6s" data-wow-delay=".6s" data-wow-offset="2">
                    <h3>
                        入団のお申し込みの前に<br class="d-none d-md-inline">
                        一度講座をご見学ください
                    </h3>
                    <p>
                        資料をお求めの方も下のボタンを押してください。
                    </p>
                    <div class="center">
                        <a href="<?php bloginfo('url'); ?>/?page_id=1897" class="btn btn-success btn-lg">見学申込・資料請求</a>
                    </div>
                </div>
            </div>        
        </div>
        
    </div>
    
<?php get_footer(); ?>