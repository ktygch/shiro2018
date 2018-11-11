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
        
        <div id="sec1" class="row">
            <div class="col-12 col-sm-12 col-md-5 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s" data-wow-offset="2">
                <img src="http://localhost:8888/shiro2016/wp-content/uploads/2018/09/test1.png" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s" data-wow-offset="2">
                <p class="desc">
                    　この合唱団は、子どもの「遊び」から生まれる創造的自己表現活動を重視し、音楽を通して協調性・創造性等、幅広い知的好奇心を養い、豊かな人間性を育てることを目的にして展開しています。<br>
                    　現在、合唱講座・合唱団低学年・合唱団高学年・混声合唱団の4つのグループで構成されており、各グループとも週一回、約2時間のレッスンで、合唱練習に加えて、身体表現活動、朗読劇等を取り入れた演劇活動、造形活動、ふれあいを大切にした野外活動、そしてシンセサイザーやリズム楽器による合奏等を織り込んだ、ユニークな総合的プログラムを展開しております。
                </p>
            </div>
        </div>
        
        <div id="sec2" class="row">
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
        
        <div id="sec3" class="row">
            <div class="col-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
                <ul id="instafeed">
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-1 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s" data-wow-offset="2">
                <p class="desc">
                    　この合唱団は、子どもの「遊び」から生まれる創造的自己表現活動を重視し、音楽を通して協調性・創造性等、幅広い知的好奇心を養い、豊かな人間性を育てることを目的にして展開しています。<br>
                    　現在、合唱講座・合唱団低学年・合唱団高学年・混声合唱団の4つのグループで構成されており、各グループとも週一回、約2時間のレッスンで、合唱練習に加えて、身体表現活動、朗読劇等を取り入れた演劇活動、造形活動、ふれあいを大切にした野外活動、そしてシンセサイザーやリズム楽器による合奏等を織り込んだ、ユニークな総合的プログラムを展開しております。
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-5 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".9s" data-wow-offset="2">
                <img src="http://localhost:8888/shiro2016/wp-content/uploads/2018/09/test1.png" alt="">
            </div>
        </div>
        
    </div>
    
    <div id="recruit" class="container">
        
        <div class="row wow fadeIn" data-wow-duration="1.0s" data-wow-delay=".5s">
            <div class="col-12">

                <h2 class="idx"><span>団員募集中！</span></h2>
                <p class="center" style="margin-bottom: 60px;">こどもの城合唱団では、新団員の募集をしております。</p>
                
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
                <div class="alert alert-success" role="alert">
                    <h3>
                        入団のお申し込みの前に<br>
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
    
    <div class="container-fluid">
        <div class="row">
            <?php get_template_part('slide/topslide2'); ?>
        </div>
    </div>
    
<?php get_footer(); ?>