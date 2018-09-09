<?php get_header(); ?>

    <div class="catch wow fadeIn" data-wow-duration="1.0s" data-wow-delay=".8s" data-wow-offset="2">
        <?php /*bloginfo('description');*/ ?>
        <p class="center">
            みなさん、こんにちは！<br>
            こどもの城合唱団です。<br>
            ぼくたち・わたしたちの歌を聴いてください！
        </p>
    </div>

	<div id="topInfo" class="container">
        <div class="row">
            <div class="col-12 col-sm-9 offset-sm-1 col-md-8 offset-md-2 wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s" data-wow-offset="6">
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
                                    <span class="date"><?php the_date('Y.n.d'); ?></span>
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="topAbout" class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s" data-wow-offset="2">
                    <span>
                        "こどもの城合唱団"って<br>
                        どんなところ？
                    </span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s" data-wow-offset="2">
                <img src="http://localhost:8888/shiro2016/wp-content/uploads/2018/09/test1.png" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-7 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s" data-wow-offset="2">
                <p class="desc">
                    この合唱団は、子どもの「遊び」から生まれる創造的自己表現活動を重視し、音楽を通して協調性・創造性等、幅広い知的好奇心を養い、豊かな人間性を育てることを目的にして展開しています。<br>
                    現在、合唱講座・合唱団低学年・合唱団高学年・混声合唱団の4つのグループで構成されており、各グループとも週一回、約2時間のレッスンで、合唱練習に加えて、身体表現活動、朗読劇等を取り入れた演劇活動、造形活動、ふれあいを大切にした野外活動、そしてシンセサイザーやリズム楽器による合奏等を織り込んだ、ユニークな総合的プログラムを展開しております。<br>
                    昨年、法人名を「こどもの城合唱団」に変更して新たにスタートを切りました。
                </p>
            </div>
        </div>
    </div>
    
    <div class="container">
       
        <div class="row wow fadeIn" data-wow-duration="1.0s" data-wow-delay=".5s">
            <div class="col-12 col-sm-9 offset-sm-1 col-md-8 offset-md-2">
                <h2 class="idx"><span>活動のようす</span></h2>
            </div>
            <div class="col-xs-12 padding0">
                <div id="instafeed">

                </div>
            </div>
        </div>
        
    </div>
    
    
    <div id="recruit" class="container">
        
        <div class="row wow fadeIn" data-wow-duration="1.0s" data-wow-delay=".5s">
            <div class="col-12 col-sm-9 offset-sm-1 col-md-8 offset-md-2">

                <h2 class="idx"><span>団員募集中！</span></h2>
                <p class="center">こどもの城合唱団では、新団員の募集をしております。</p>
                <ul>
                    <li>
                        <div class="inner">
                            <h3>小学校1～4年生</h3>
                            <p>
                                テキストてきすとテキストテキストてきすとテキストテキストてきすとテキストテキストてきすとテキスト
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <h3>３〜５歳児</h3>
                        </div>
                    </li>
                    <li>
                        <div class="inner">
                            <h3>障がいを持つ子どもたち</h3>
                        </div>
                    </li>
                </ul>

            </div>          
        </div>
        
    </div>
    
<?php get_footer(); ?>