<?php require 'php-inc/inc_html_head.php'; ?> 

        <main class="content-wrap" role="main">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row row-with-vspace">
                    <article class="col-xs-12">
                        <header class="page-header">
                            <h1>Carousel</h1>
                        </header>


                        <h2>Example</h2>
                        <div class="example-block">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/carousel-image.jpg" alt="">
                                        <div class="carousel-caption">
                                            <h3>คอปเตอร์ ป๊อกแจ๊กพ็อตเฟอร์รี่ คอมเพล็กซ์</h3>
                                            <p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/carousel-image.jpg" alt="">
                                        <div class="carousel-caption">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/carousel-image.jpg" alt="">
                                        <div class="carousel-caption">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis.
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                        </div>
                    </article>
                </div>
            </div>

        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 