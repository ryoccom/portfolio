<?php
session_start();
session_regenerate_id(true);

$_SESSION['csrf_hash'] = md5(rand(time(), true));
$home_url = $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['SERVER_NAME'];
?>

<!doctype html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="ryoccomのポートフォリオ">
    <meta property="og:title" content="ryoccomのポートフォリオ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ryoccom.com/portfolio/public/">
    <meta property="og:image" content="https://ryoccom.com/portfolio/public/img/works__img01.png">
    <meta property="og:site_name" content="ryoccomのポートフォリオ">
    <title>ryoccom</title>
    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" href="css/style.css?v=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="preload" as="image" href="img/about_bg01.webp">
    <link rel="preload" as="image" href="img/about_bg02.webp">
    <link rel="preload" as="image" href="img/about_bg03.webp">
    <link rel="preload" as="image" href="img/about_bg04.webp">
    <link rel="preload" as="image" href="img/about_bg05.webp">
</head>


<body>
    <div class="wrapper">
        <!--header-->
        <header>
            <div class="header">
                <div class="header__logo">
                    <h1>
                        <a href="#"><span data-hover="RYOCCO WADA">RYOCCO WADA</span></a>
                    </h1>
                    <div class="switch">
                        <input type="checkbox" id="switch__trigger">
                        <label class="switch__mode js-mode" for="switch__trigger">NIGHT</label>
                    </div>
                </div>

                <nav>
                    <div class="header__menu">
                        <ul>
                            <li><a href="#about"><span data-hover="ABOUT">ABOUT</span></a></li>
                            <li><a href="#works"><span data-hover="WORKS"></span>WORKS</a></li>
                            <li><a href="#contact"><span data-hover="CONTACT">CONTACT</span></a></li>
                        </ul>
                    </div>
                </nav>
                <button class="header__button" aria-controls="global-nav" aria-expanded="false">
                    <span class="header__button__line"></span>
                    <span class="header__button__hidden"></span>
                </button>
                <div class="header__cv">
                    <div class="btn">
                        <span class="btn__wrap">
                            <a href="#contact">HIRE ME</a>
                        </span>
                    </div>
                </div>
            </div>
        </header>
        <!--/header-->
        <main>
            <!--mainvisual-->
            <section>
                <div class="mainvisual">
                    <div class="mainvisual__wrap">
                        <picture>
                            <source srcset="img/kurumi.webp" type="image/webp">
                            <img src="img/kurumi.png" alt="I'M RYOCCO" class="js-paralax">
                        </picture>
                    </div>
                    <div class="mainvisual__title">
                        <h2>I'M RYOCCO.</h2>
                        <p>WEB DESIGNER</p>
                        <p>+ CODER</p>
                    </div>
                </div>
            </section>
            <!--/mainvisual-->
            <!--about-->
            <section id="about">
                <div class="about js-bg01">
                    <div class="wrap">
                        <h3>ABOUT</h3>
                        <dl>
                            <dt class="js-open">BORN IN OSAKA<span>1983-</span></dt>
                            <dd><span>大阪生まれ、大阪育ち。<br>
                                    淀川のほとりでお笑いやFMラジオに影響を受けながらのっしのっしと成長。<br>
                                    青春時代は軽音楽部で全国大会に出場も。ただし楽器は和太鼓。めっちゃ汗かいて頑張った。</span></dd>
                            <dt>BECAME A WEBDESIGNER<span>2008-</span></dt>
                            <dd><span>高校を出て、フリーター＆バンド活動をする。<br>
                                    その後、職業訓練校でWebを学び、旅行会社のWeb制作部門にてデザイン・コーディングを担当。<br>
                                    スキルアップのため転職をし、WordpressやPHPフルスクラッチのサイトに初めて触れる。</span></dd>
                            <dt>+ FREELANCE<span>2015-</span></dt>
                            <dd><span>クラウドソーシングで副業をし始める。<br>ABテストツールを用いてJqueryでテスト側画面の作成、<br>
                                    LP、バナー制作、大規模サイトのコーディングなど様々なサイト制作を経験。<br>
                                    物価の安いタイ・チェンマイで1ヶ月フリーランスをしながら滞在したことも。
                                </span>
                            </dd>
                            <dt>KEKKON!<span>2016-</span></dt>
                            <dd><span>結婚しました！<br>
                                    派遣社員になり、求人広告会社で採用サイト、コーポレートサイトなどのデザイン・コーディングを担当。<br>素敵なチームメンバーに恵まれ、もりもりと多数のサイトを世に出す。</span>
                            </dd>
                            <dt>MAMA<span>2019,2021-</span></dt>
                            <dd><span>不妊治療を経て、とてもかんわゆいぴっかぴかの2人の男の子に恵まれる。<br>
                                    元気な柴犬（かわいい）＋兄弟を毎日はちゃめちゃに育児中！<br>自分が母子家庭で育ったため、子供たちが寂しくないようにと働き方について日々悩み中。</span>
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
            <!--/about-->
            <!--works-->
            <section id="works">
                <div class="works">
                    <div class="wrap">

                        <section class="splide" aria-label="基本構造の例">
                            <div class="splide__track">
                                <!--cms-->
                                <ul class="splide__list" id="js-image">
                                    <script type="text/x-handlebars-template" id="img-template">
                                        {{#each data}}
                                            <li class="splide__slide">
                                                <div class="works__img">
                                                    <picture>
                                                        <source srcset="{{image.imageMain.url}}" type="image/webp">
                                                        <img src="{{image.imageWebp.url}}" alt="{{image.imgalt}}">
                                                    </picture>
                                                </div>
                                            </li>
                                        {{/each}}
                                    </script>
                                </ul>
                                <!--cms-->
                            </div>
                            <div class="splide__arrows">
                                <button class="splide__arrow splide__arrow--prev">
                                    ＜
                                </button><button class="splide__arrow splide__arrow--next">
                                    ＞
                                </button>
                            </div>

                        </section>
                        <div class="works__detail">
                            <h3>WORKS</h3>
                            <!--cms-->
                            <ul id="js-result">
                                <script type="text/x-handlebars-template" id="news-template">
                                    {{#each data}}
                                    <li>
                                        <div class="works__detail__title">
                                            <h4>{{titleEng}}</h4>
                                            <p>{{titleJp}}</p>
                                        </div>
                                        <div class="works__detail__tags">
                                            {{#each tag}}
                                            <p>{{this}}</p>
                                            {{/each}}
                                        </div>
                                        <div class="works__detail__text">
                                            <p>{{text}}
                                            </p>
                                        </div>
                                        {{#if buttonLink}}
                                        <div class="works__detail__link">
                                            <a href="{{buttonLink}}" target="_blank">{{buttonName}}</a>
                                        </div>
                                        {{/if}}
                                    </li>
                                    {{/each}}
                                </script>
                            </ul>
                            <!--cms-->
                        </div>
                    </div>
                </div>
            </section>
            <!--/works-->
            <!--contact-->
            <section id="contact">
                <div class="contact">
                    <div class="wrap">
                        <div class="contact__detail">
                            <h3>CONTACT</h3>
                            <div class="contact__detail__title">
                                <p><span>PLEASE　PLEASE</span>HIRE ME &gt;&lt;</p>
                            </div>
                            <div class="contact__detail__comment">
                                <p>現在、2人の子供を抱えて育児と仕事のバランスに悩んでおります。育児に力を入れてつつも、続けてきたこの仕事を諦めたくないです。フレキシブルに働ける正社員や、または業務委託等のご相談、制作のご相談、またどんな人物か知りたい等、お気軽にご連絡ください。
                                </p>
                            </div>
                        </div>
                        <div class="contact__way">
                            <div class="contact__way__sns">
                                <ul>
                                    <li><a href="https://twitter.com/atsuatsuohuro" target="_blank">TWITTER</a></li>
                                    <li><a href="https://www.facebook.com/ryoko.okamura.9" target="_blank">FACEBOOK</a></li>
                                    <li><a href="https://github.com/ryoccom" target="_blank">GITHUB</a></li>
                                </ul>
                            </div>
                            <div class="contact__way__form">
                            <div id="dispmsg"></div>
                                <form id="mailform">
                                    <p>NAME</p>
                                    <div class="formwrap">
                                        <input type="text" name="name" id="name" required>
                                    </div>
                                    <p>EMAIL</p>
                                    <div class="formwrap">
                                        <input type="email" name="mail" id="mail" required>
                                    </div>
                                    <p>MESSAGE</p>
                                    <div class="formwrap">
                                        <textarea name="text" id="text" required></textarea>
                                    </div>
                                    <div class="btn">
                                        <span class="btn__wrap">
                                            <span class="btn__wrap__line">
                                                <input type="submit" value="SEND" id="submit">
                                                <input type="hidden" name="token" value="<?php echo $_SESSION['csrf_hash']; ?>">
                                            </span>
                                        </span>
                                    </div>
                                </form>
                               
                                
                            </div>
                            <div class="contact__way__thanks">
                                <p>ARIGATO!</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!--/contact-->
        </main>
    </div>
    
    <!--scripts-->
    <script src="js/bundle.js"></script>
    <!--/scripts-->

</body>

</html>