<?php get_header(); ?>
    <main>
        <div class="main-container">
            <div class="box-item flex">
                <img class="box-icon" src="<?php echo get_template_directory_uri() ?>/IMAGE/money.png" alt="">
                <p>転職祝い金プレゼント<br>最大    <span class="span3">30</span>    万円</p>
            </div>
            <div class="main-header">
                <h1>薬局グループが運営する薬剤師専門転職エージェント</h1>
            </div>
            <h2>希少な高年収求人を多数掲載</h2>
            <div class="main-btn">
                <a class="flex" href="#form-info">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    <p class="main-text">
                        最短即日オンライン面談可能！<br>
                        <span class="main-text2" >無料相談はこちらから</span>
                    </p>
                    <p class="main-text-right">></p>
                </a>
            </div>
        </div>
    </main>
    <section class="detail">
        <div class="detail-container">
            <h3>薬転エージェントは薬剤師に特化した転職エージェントサービスです</h3>
            <div class="detail-items flex">
                <div class="detail-item">
                    <p>年間相談件数</p>
                    <p class="detail-text"><span>1000</span>件</p>
                </div>
                <div class="detail-item">
                    <p>年収アップ平均額</p>
                    <p class="detail-text"><span>200</span>万円</p>
                </div>
                <div class="detail-item">
                    <p>転職満足度</p>
                    <p class="detail-text"><span>96.2</span>%</p>
                </div>
            </div>
        </div>
    </section>
    <section class="service" id="service-info">
        <section class="service-strength">
            <div class="strength-header">
                <h3 class="color-main">Strength</h3>
                <h2>年収600万以上が可能となる5つの強み</h2>
            </div>
            <div class="strength-contents">
                <div class="strength-content">
                    <img
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/icon_strength1.png" 
                        alt="非公開求人"
                    />
                    <p>
                        高収入・高時給案件の<span>非公開求人</span>多数
                    </p>
                </div>
                <div class="strength-content">
                    <img
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/icon_strength2.png"
                        alt="非公開求人"
                    />
                    <p>
                    薬局経営ノウハウを活かした<span>雇用条件等の交渉</span>
                        </p>
                </div>
                <div class="strength-content">
                    <img
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/icon_strength3.png"
                        alt="非公開求人"
                    />
                    <p>
                        <span>自社オーナー薬局薬剤師</span>への積極採用
                    </p>
                </div>
                <div class="strength-content">
                    <img
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/icon_strength4.png"
                        alt="非公開求人"
                    />
                    <p>
                        薬局経営企業が提供する<span>上質なキャリア相談</span>
                    </p>
                </div>
                <div class="strength-content">
                    <img
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/icon_strength5.png"
                        alt="非公開求人"
                    />
                    <p>
                        転職後にも続く<span>幅広いキャリアサポート</span>
                    </p>
                </div>
            </div>
        </section>  
    </section>
    <section class="matter" id="matter-info">
        <div class="matter-header">
            <h3 class="color-main">Offer information</h3>
            <h2>注目の求人情報</h2>
            <h3>〇〇では9000件を越える案件を取り扱っています</h3>
            <div class="matter-button">
                <a href="#form-info" class="button-blue">詳しく聞いてみる　></a>
            </div>
        </div>
        
        <div class="matter-contents">
            <?php
                $args = array(
                    "post_type" => "post", // 取得する投稿タイプ
                    "posts_per_page" => 6, // 取得する投稿数
                    "order" => "asc", // 昇順で取得
                    "orderby" => "title" // タイトルで並べ替え
                );
                $post_query = new WP_Query($args); // WP_Queryオブジェクトを生成
            ?>

            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>

                <div class="matter-content">
                    <?php
                        $catchcopy = get_post_meta(get_the_ID(), 'キャッチコピー', true);
                        $point1 = get_post_meta(get_the_ID(), 'ポイント1', true);
                        $point2 = get_post_meta(get_the_ID(), 'ポイント2', true);
                        $point3 = get_post_meta(get_the_ID(), 'ポイント3', true);

                        if (is_null($point1) || empty($point1)) {
                            $mattertext1 = 'matter-point-0';
                        } else {
                            $mattertext1 = 'matter-point';
                        }
                        if (is_null($point2) || empty($point2)) {
                            $mattertext2 = 'matter-point-0';
                        } else {
                            $mattertext2 = 'matter-point';
                        }
                        if (is_null($point3) || empty($point3)) {
                            $mattertext3 = 'matter-point-0';
                        } else {
                            $mattertext3 = 'matter-point';
                        }

                        
                    ?>
                    
                    <?php
                        // サムネイル画像があるかどうかを判断
                        if (get_the_post_thumbnail_url()) {
                            echo '<img src="' . esc_url(get_the_post_thumbnail_url()) . '" />';
                        } else {  // サムネイル画像がなければデフォルトの画像を出す
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/IMAGE/matter1.jpg" />';
                        }
                    ?>
                    <p class="matter-text"><?php echo $catchcopy; ?></p>
                    <div class="matter-points">
                        <div class="<?php echo $mattertext1; ?>">
                            <p><?php echo $point1; ?></p>
                        </div>
                        <div class="<?php echo $mattertext2; ?>">
                            <p><?php echo $point2; ?></p>
                        </div>
                        <div class="<?php echo $mattertext3; ?>">
                            <p><?php echo $point3; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            
        </div>
    </section>
    <section class="value">
        <div class="value-container">
            <div class="value-header">
                <h3 class="color-main">Value</h3>
                <h2>年収が上がる３つの仕組み</h2>
                <h3>薬転エージェントを利用することで転職後の年収アップが見込めます。</h3>
            </div>
            <div class="value-items flex">
                <div class="value-item">
                    <img src="<?php echo get_template_directory_uri() ?>/IMAGE/value-item1.png" alt="">
                    <p class="item-header">ご自身の年収相場を査定して<br>年収アップ</p>
                    <p class="item-text">ひとえに薬剤師といっても様々なご経験や知識、知見などによって年収は大きく変わります。ご自身の年収相場を査定して本来貰える年収を把握することは、キャリアアップ転職する上で重要なポイントです。</p>
                </div>
                <div class="value-item">
                    <img src="<?php echo get_template_directory_uri() ?>/IMAGE/value-item2.png" alt="">
                    <p class="item-header">高収入案件の紹介で<br>年収アップ</p>
                    <p class="item-text">大手薬局などで長く働いても給与は上がらず悩んでいる薬剤師の方々は大勢います。薬転エージェントでは高収入求人を多く抱えているため、ご相談いただいた求職者の方々の中には260万円も年収アップした方もいます。</p>
                </div>
                <div class="value-item">
                    <img src="<?php echo get_template_directory_uri() ?>/IMAGE/value-item3.png" alt="">
                    <p class="item-header">最終条件交渉で<br>年収アップ</p>
                    <p class="item-text">弊社は薬局経営をしているため、雇用側が求める薬剤師の条件と薬剤師が求める雇用側の条件を把握しております。年収を含めた条件交渉を専任のエージェントが行ないます。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="flow" id="flow-info">
        <div class="flow-header">
            <h3 class="color-main">Flows</h3>
            <h2>転職までの流れ</h2>
            <h3>ご相談から面接、終業後までのフローを紹介いたします</h3>
        </div>
        <div class="flow-contents flex">
            <div class="flow-content flex">
                <div class="flow-text">
                    <h3><span>❶</span> お問い合わせ</h3>
                    <p>お申し込みフォームから、お問い合わせください。お客様情報を確認後、ご連絡致します。</p>
                </div>
            </div>
            <div class="flow-content flex">
                <div class="flow-text">
                    <h3><span>❷</span> キャリアプランニング</h3>
                    <p>ご自身の理想の雇用条件、仕事内容、年収・給料アップを専属キャリアカウンセラーがヒアリングし最適なキャリアプランニングを実施致します。</p>
                </div>
            </div>
            <div class="flow-content flex">
                <div class="flow-text">
                    <h3><span>❸</span> 書類添削・面接練習</h3>
                    <p>履歴書や職務経歴書等の書類の添削、面接での細かい所作や自己紹介等自前に必要な受け答えの練習など、親身にサポートします。</p>
                </div>
            </div>
            <div class="flow-content flex">
                <div class="flow-text">
                    <h3><span>❹</span> 転職先企業の紹介</h3>
                    <p>常に5000件ほどある有効求人からご自身のキャリアビジョンに沿った最適な転職先を選定し、ご提案致します。</p>
                </div>
            </div>
            <div class="flow-content flex">
                <div class="flow-text">
                    <h3><span>❺</span> 年収交渉</h3>
                    <p>ご自身のプロフィール・経歴・スキルなどから、年収が相場以下にならないように先方企業に交渉致します。</p>
                </div>
            </div>
            <div class="flow-content flex">
                <div class="flow-text">
                    <h3><span>❻</span> アフターフォロー</h3>
                    <p>就業後も相談を承ります。就業先でのキャリアアップやお困りごとなど、より働きやすくなるようにサポート致します。</p>
                </div>
            </div>
        </div>
        <section class="banner">
            <div class="banner-text">
                <h2>最大30万円</h2>
                <h3>転職祝い金プレゼント</h3>
                <p>まずはお気軽にご相談ください。</p>
                <a href="#form-info"><i class="fa fa-commenting-o" aria-hidden="true"></i>    ご相談はこちらから</a>
            </div>
        </section>
    </section>
    <section class="reason" id="reason">
        <div class="reason-header">
            <h3 class="color-main">Reason for choosing</h3>
            <h2>多くの薬剤師に選ばれる理由</h2>
        </div>
        <div class="reason-container">
            <div class="reason-content">
                <p class="header1">Online</p>
                <div class="content-container flex">
                    <div class="reason-text">
                        <h3>遠方の方でも<br>
                            オンライン面談でスピーディーに<br>
                            丁寧に対応いたします
                        </h3>
                        <p>一人一人と丁寧に向き合う転職相談で、ご希望を実現する方法やお悩み得お解決する方法を私たちが一緒に考え、満足できる職場に巡り会えるようにサポートいたします。</p>
                    </div>
                    <img class="img-size1"
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/reason1.png"
                        alt=""
                    />
                </div>
            </div>
            <div class="reason-content ">
                <p class="header2">Reserch</p>
                <div class="content-container flex">
                    <img class="img-size2"
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/reason2.png"
                        alt=""
                    />
                    <div class="reason-text2">
                        <h3>最終面接の際は<br>
                            全国各地、弊社エージェントが<br>
                            同行いたします
                        </h3>
                        <p>最終面接の際は、採用確度を上げるために全国各地弊社エージェントが同行し、最後まで誠意をもって対応いたします。また、当社の転職サービスは全国各地、エリア状況を詳しく把握していることが特徴です。</p>
                    </div>
                </div>
            </div>
            <div class="reason-content">
                <p class="header3">Try</p>
                <div class="content-container flex">
                    <div class="reason-text">
                        <h3>転職先に不安がある方は、<br>
                            お試しで勤務できる<br>
                            「紹介予定派遣」を活用できます
                        </h3>
                        <p>転職の際、職場、人間関係、仕事内容に不満がある方は、お試しで就職予定先に派遣勤務し、仕事先と薬剤師さん双方合意で就職できる「紹介予定派遣」を活用できます。
                        </p>
                    </div>
                    <img class="img-size3"
                        src="<?php echo get_template_directory_uri() ?>/IMAGE/reason3.png"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
    <section class="comparison">
        <div class="comparison-header">
            <h3 class="color-main">Comparison</h3>
            <h2>他社と比較した優位性</h2>
            <h3>弊社は他者と比べても手厚いサポートが充実しております。
            </h3>
        </div>
        <div class="comparison-img">
            <img src="<?php echo get_template_directory_uri() ?>/IMAGE/graph.png" alt="">
        </div>
    </section>

    <section class="user" id="user-info">
        <div class="user-header">
            <h3 class="color-main">Customer reviews</h3>
            <h2>転職エージェント利用者の声</h2>
        </div>
        <div class="user-contents">
            <div class="user-content">
                <img
                    src="<?php echo get_template_directory_uri() ?>/IMAGE/user1.jpg"
                    alt="matter"
                />
                <div class="user-headline">
                    <p>調剤薬局で勤務　田中 さん</p>
                </div>
                <h4>適切な会社をスピーディーに紹介してもらい、登録してから1週間で就職先が決まりました。</h4>
                <p>
                    11月の中旬に登録してオンライン面談を行い、それから1週間で就職先が決まって、その翌月には、今の職場で働くことができました。<br>
                    <br>
                    また、本当に希望に適した求人を紹介してもらったと感謝しています。
                </p>
            </div>
            <div class="user-content">
                <img
                    src="<?php echo get_template_directory_uri() ?>/IMAGE/user2.jpg"
                    alt="matter"
                />
                <div class="user-headline">
                <p>病院薬剤師　佐藤 さん</p>
                </div>
                <h4>薬剤師の転職についての知識がなくて相談したところ、キャリアアップに繋がる転職をすることができました。</h4>
                <p>
                    キャリアカウンセラーとの相談から始まり、自身のキャリアパスを明確にすることができました。
                    こればっかりは一人でいくら調べても難しい点だと思います。<br>
                    <br>
                    その後、転職先を紹介してもらい、管理職候補として就職することができました。
                </p>
            </div>
            <div class="user-content">
                <img
                    src="<?php echo get_template_directory_uri() ?>/IMAGE/user3.jpg"
                    alt="matter"
                />
                <div class="user-headline">
                    <p>薬剤師　鈴木さん</p>                    
                </div>
                <h4>最近、本当に紹介会社が増えましたからね...</h4>
                <p>転職活動をしている方々は、いい紹介会社というのは知らないはずです。だからこそ、クラシスさんにはもっとアピールをしてほしいですね。</p>
                <p>その薬剤師さんの不安や心配を解消するようなサポートと、さらに、何をするために薬剤師になったか、希望だけではなくてその人の夢、将来像といったところまでご紹介いただく方については知りたいですね。</p>
            </div>
        </div>
        
    </section>
    <section class="question" id="question-info">
        <div class="question-header">
            <h3 class="color-main">Questions</h3>
            <h2>よくある質問</h2>
        </div>
        <div class="question-contents">
            <div class="question-content">
                <div class="anser flex">
                    <h3 class="icon-blue">Q</h3>
                    <h4>転職エージェントのサービスは無料ですか？</h4>
                </div>
                <div class="anser flex">
                    <h3 class="icon-normal">A</h3>
                    <p>当サービスはご転職先の企業様からご紹介料として報酬をいただいているため、ご求職者様は全て無料でサービスを受けることができます。安心してご利用下さい。</p>
                </div>
            </div>
            <div class="question-content">
                <div class="anser flex">
                    <h3 class="icon-blue">Q</h3>
                    <h4>申し込みできる条件等はありますか？</h4>
                </div>
                <div class="anser flex">
                    <h3 class="icon-normal">A</h3>
                    <p>
                        薬剤師の資格をお持ちの方なら、どなたでも転職サービスを受けることができます。
                        もちろん、ブランクのある方でも歓迎いたします。
                    </p>
                </div>
            </div>
            <div class="question-content">
                <div class="anser flex">
                    <h3 class="icon-blue">Q</h3>
                    <h4>
                        転職をしようか悩んでいるのですが、<br>
                        相談するだけでお申込みしてもいいですか？
                    </h4>
                </div>
                <div class="anser flex">
                    <h3 class="icon-normal">A</h3>
                    <p>
                        もちろん大丈夫です、気軽にご相談ください。実際に、転職をしようか悩んでいる方からの相談はとても多く、
                        ひとりひとりに対して弊社のキャリアカウンセラーがベストなアドバイスや、
                        転職を行う最適な時期など転職活動に必要な情報を提供させていただきます。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="form" id="form-info">
        <div class="form-header">
            <h3 class="color-main">Contact</h3>
            <h2>お問い合わせ</h2>
            <h3>簡単30秒で入力いただけます</h3>
        </div>
        <!-- 問い合わせフォーム -->
        <?php
            $contact = array(
                "post_type" => "contact",
                "posts_per_page" => 1
            );
            $contact_query = new WP_Query($contact);
        ?>
        <?php while ($contact_query->have_posts()) : $contact_query->the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; ?>

    </section>

    <?php get_footer(); ?>
    