<?php
/*
    Template name: Галерея
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="galery-container">
                <div class="galery-header-wrapper">
                    <h1 class="galery-header-title">Галерея</h1>
                </div>

                <div class="galery-image-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 my-3">
                            <div class="g-img">
                                <img src="/assets/images/gallery/g1.png" alt="image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-7 col-lg-3 my-3">
                            <div class="g-img">
                                <img src="/assets/images/gallery/g2.png" alt="image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 col-lg-4 my-3">
                            <div class="g-img">
                                <img src="/assets/images/gallery/g3.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 my-3">
                            <div class="g-img-bottom">
                                <img src="/assets/images/gallery/g4.png" alt="image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-7 col-lg-3 my-3">
                            <div class="g-img-bottom">
                                <img src="/assets/images/gallery/g5.png" alt="image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-5 col-lg-4 my-3">
                            <div class="g-img-bottom">
                                <img src="/assets/images/gallery/g6.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="galery-video-container">
                        <video src="/assets/images/services/saun.mp4"
                            alt="A cozy wooden sauna with warm lighting and a stone heater." controls=""></video>
                        <div class="play-button" onclick="togglePlay()">
                            <!-- <video controls>
                    <source src="/assets/images/services/saun.mp4" type="video/mp4" />
                    <source src="video.webm" type="video/webm" />
                    Ваш браузер не поддерживает тег видео.
                  </video>-->
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php
get_footer();
?>