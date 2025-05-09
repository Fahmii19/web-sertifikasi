<?php 
    $title='Our Portfolio';
    $subTitle = 'Portfolio';
    $css = '<link rel="stylesheet" href="assets/fonts/webfonts/syne/stylesheet.css">'
?>
<?php include './partials/layouts/layoutTop.php' ?>

<!-- ...::: Portfolio Section Start :::... -->
<section class="section-portfolio">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container">
            <!-- Section Block -->
            <div class="section-block mx-auto mb-10 max-w-[650px] text-center md:mb-[60px] xl:mb-20 xl:max-w-[856px]">
                <h2 class="jos">
                    Have a wide range of creative projects
                    <span>
                        <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px]" />
                    </span>
                </h2>
            </div>
            <!-- Section Block -->

            <!-- Portfolio List -->
            <ul class="grid grid-cols-1 gap-y-10 md:gap-y-[60px] lg:gap-y-20">
                <!-- Portfolio Item -->
                <li class="jos">
                    <div class="group">
                        <!-- Thumbnail Block-->
                        <div class="relative mb-6 overflow-hidden rounded-[10px]">
                            <!-- Image -->
                            <img src="assets/img/images/th-1/project-thumbnail-large-1.jpg" alt="project-thumbnail-large-1" width="1296" height="550" class="aspect-video sm:aspect-auto" />
                            <!-- Image -->

                            <div class="absolute inset-0 flex translate-y-full items-center justify-center bg-gradient-to-t from-[#191931] to-[#191931]/20 transition-all group-hover:translate-y-0">
                                <a href="portfolio-details.php" class="absolute inline-flex h-[100px] w-[100px] scale-90 items-center justify-center rounded-[50%] border border-black bg-colorLightLime opacity-0 transition-all delay-300 duration-500 group-hover:scale-100 group-hover:opacity-100">
                                    <img src="assets/img/icons/icon-black-trending-up.svg" alt="icon-black-trending-up" width="50" height="50" />
                                </a>
                            </div>
                        </div>
                        <!-- Thumbnail Block-->

                        <!-- Content Block -->
                        <div class="flex flex-col justify-between gap-x-10 gap-y-4 lg:flex-row xl:items-center">
                            <a href="portfolio-details.php" class="display-heading display-heading-4">Product Design</a>

                            <p class="line-clamp-2 text-lg leading-[1.42] lg:max-w-[526px] lg:text-[21px]">
                                Developing the look and feel of physical products,
                                considering ergonomics, aesthetics, & functionality.
                            </p>
                        </div>
                        <!-- Content Block -->
                    </div>
                </li>
                <!-- Portfolio Item -->
                <!-- Portfolio Item -->
                <li class="jos">
                    <div class="group">
                        <!-- Thumbnail Block-->
                        <div class="relative mb-6 overflow-hidden rounded-[10px]">
                            <!-- Image -->
                            <img src="assets/img/images/th-1/project-thumbnail-large-2.jpg" alt="project-thumbnail-large-2" width="1296" height="550" class="aspect-video sm:aspect-auto" />
                            <!-- Image -->

                            <div class="absolute inset-0 flex translate-y-full items-center justify-center bg-gradient-to-t from-[#191931] to-[#191931]/20 transition-all group-hover:translate-y-0">
                                <a href="portfolio-details.php" class="absolute inline-flex h-[100px] w-[100px] scale-90 items-center justify-center rounded-[50%] border border-black bg-colorLightLime opacity-0 transition-all delay-300 duration-500 group-hover:scale-100 group-hover:opacity-100">
                                    <img src="assets/img/icons/icon-black-trending-up.svg" alt="icon-black-trending-up" width="50" height="50" />
                                </a>
                            </div>
                        </div>
                        <!-- Thumbnail Block-->

                        <!-- Content Block -->
                        <div class="flex flex-col justify-between gap-x-10 gap-y-4 lg:flex-row xl:items-center">
                            <a href="portfolio-details.php" class="display-heading display-heading-4">Market Expansion Blueprint</a>

                            <p class="line-clamp-2 text-lg leading-[1.42] lg:max-w-[526px] lg:text-[21px]">
                                Developing the look and feel of physical products,
                                considering ergonomics, aesthetics, & functionality.
                            </p>
                        </div>
                        <!-- Content Block -->
                    </div>
                </li>
                <!-- Portfolio Item -->
                <!-- Portfolio Item -->
                <li class="jos">
                    <div class="group">
                        <!-- Thumbnail Block-->
                        <div class="relative mb-6 overflow-hidden rounded-[10px]">
                            <!-- Image -->
                            <img src="assets/img/images/th-1/project-thumbnail-large-3.jpg" alt="project-thumbnail-large-3" width="1296" height="550" class="aspect-video sm:aspect-auto" />
                            <!-- Image -->

                            <div class="absolute inset-0 flex translate-y-full items-center justify-center bg-gradient-to-t from-[#191931] to-[#191931]/20 transition-all group-hover:translate-y-0">
                                <a href="portfolio-details.php" class="absolute inline-flex h-[100px] w-[100px] scale-90 items-center justify-center rounded-[50%] border border-black bg-colorLightLime opacity-0 transition-all delay-300 duration-500 group-hover:scale-100 group-hover:opacity-100">
                                    <img src="assets/img/icons/icon-black-trending-up.svg" alt="icon-black-trending-up" width="50" height="50" />
                                </a>
                            </div>
                        </div>
                        <!-- Thumbnail Block-->

                        <!-- Content Block -->
                        <div class="flex flex-col justify-between gap-x-10 gap-y-4 lg:flex-row xl:items-center">
                            <a href="portfolio-details.php" class="display-heading display-heading-4">Strategic Growth Accelerator</a>

                            <p class="line-clamp-2 text-lg leading-[1.42] lg:max-w-[526px] lg:text-[21px]">
                                Developing the look and feel of physical products,
                                considering ergonomics, aesthetics, & functionality.
                            </p>
                        </div>
                        <!-- Content Block -->
                    </div>
                </li>
                <!-- Portfolio Item -->
            </ul>
            <!-- Portfolio List -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- ...::: Portfolio Section End :::... -->
</main>
<!--  Main Wrapper End -->

<?php include './partials/layouts/layoutBottom.php' ?>