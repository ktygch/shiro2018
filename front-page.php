<?php get_header(); ?>
	<div class="container">
        <div class="row philosophy">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <h2>こどもの城児童合唱団は</h2>
                <div>
                    <ul>
                        <li>こどもの城児童合唱団</li>
                        <li>こどもの城混声合唱団</li>
                        <li>こどもの城合唱講座</li>
                        <li>おんがく大好きミュージックパーク</li>
                    </ul>
                    から構成される合唱団です。<br>
                    1985年の4月に、その年の11月の国立児童総合センター「こどもの城」のオープンに先駆けて作られました。
                    <div class="">
                        子どもの「遊び」から生まれる創造的自己表現活動を重視し、音楽を通して協調性・創造性等、幅広い知的好奇心を養い、豊かな人間性を育てることを目的にしています。

                        現在、合唱講座・合唱団低学年・合唱団高学年・混声合唱団の４グループ約２５０名の団員で構成されています。各グループとも週一回、約２時間のレッスンで、合唱練習に加えて、身体表現活動、朗読劇等を取り入れた演劇活動、造形活動、ふれあいを大切にした野外活動、そしてシンセサイザーやリズム楽器による合奏等を織り込んだ、ユニークな総合的プログラムを展開しております。
                        ２０１５年３月のこどもの城閉館に伴い、４月より特定非営利活動法人アートセラピー研究所ＤＡＭに運営を移行し、さらに活発に活動を続けております。平成２７年度児童福祉文化賞を受賞。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2 class="idx">お知らせ</h2>
                <ul class="toplist">
                    <!-- list item -->
                    <?php $news = get_posts('posts_per_page=10'); ?>
                    <?php foreach($news as $post): ?>
                        <li>
                            <?php setup_postdata($post); ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                    $image_id = get_post_thumbnail_id();
                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                ?>
                                <span class="thumbimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                <div class="list_txt">
                                    <h3><?php the_title(); ?></h3>
                                    <p>
                                        <span class="date"><?php the_date('Y.n.d'); ?></span>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- list item --> 
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2 class="idx">団員募集中</h2>
                <p class="f12">こどもの城児童合唱団では、団員を募集しております。2017年4月からの新団員の募集を受け付けます。</p>
                <ul class="">
                    <li>
                        <a href="" class="btn btn-success btn-block">
                            小学校1年～4年生
                        </a>
                    </li>
                    <li>
                        <a href="" class="btn btn-success btn-md btn-block">３〜５歳児</a>
                    </li>
                    <li>
                        <a href="" class="btn btn-success btn-block">
                            障がいを持つ子どもたち
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2 class="idx">連絡事項</h2>
                <ul>
                    <li>
                        <a href="">6/10の練習について</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2 class="idx">Instagram</h2>
                <div id="instafeed"></div>

            </div>
        </div>
    </div>
    
<?php get_sidebar(); ?>

<?php get_footer(); ?>