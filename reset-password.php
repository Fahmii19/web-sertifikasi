<!doctype html>
<html lang="en" class="dark">
    
<?php 
    $css = '<link rel="stylesheet" href="assets/fonts/webfonts/syne/stylesheet.css">'
?>

<?php include './partials/head.php' ?>

<body class="bg-colorIvory">
    
    <div class="page-wrapper flex flex-col justify-between">
        <!-- ...::: Header Section Start :::... -->
        <header class="section-header site-header is-black is-black fixed top-0 z-30 w-full py-4">
            <!-- Section Container -->
            <div class="container">
                <!-- Header Area -->
                <div class="flex items-center justify-center">
                    <div class="flex items-center gap-x-6">
                        <!-- Header Logo -->
                        <a href="index.php" class="h-auto w-auto">
                            <img src="assets/img/logo-buttery-white.svg" alt="logo-buttery-white" width="121" height="24" />
                        </a>
                        <!-- Header Logo -->
                    </div>
                </div>
                <!-- Header Area -->
            </div>
            <!-- Section Container -->
        </header>
        <!-- ...::: Header Section End :::... -->

        <!-- Main Wrapper Start -->
        <main class="main-wrapper">
            <!-- ...::: Coming Soon Section Start :::... -->
            <section class="section-404-error">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container">
                        <div class="mx-auto max-w-[856px]">
                            <!-- Section Block -->
                            <div class="section-block mx-auto mb-10 max-w-[650px] text-center xl:max-w-[870px]">
                                <h2 class="jos mb-6">
                                    Reset Password
                                    <span>
                                        <img src="assets/img/elemnts/shape-light-lime-5-arms-star.svg" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px]" />
                                    </span>
                                </h2>
                            </div>
                            <!-- Section Block -->
                            <div class="rounded-[10px] border border-black p-10">
                                <!-- Contact Form -->
                                <form action="#" method="post" class="flex flex-col gap-y-6">
                                    <!-- Form Group -->
                                    <div>
                                        <label for="reset-email" class="mb-3 block text-base font-bold">Enter email address</label>
                                        <input type="email" name="reset-email" id="reset-email" placeholder="example@gmail.com" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base tracking-[0.5px]" required />
                                    </div>
                                    <!-- Form Group -->
                                    <!-- Form Group -->
                                    <div>
                                        <label for="reset-password" class="mb-3 block text-base font-bold">Enter Password</label>
                                        <input type="password" name="reset-password" id="reset-password" class="w-full rounded-[50px] border border-black bg-colorIvory px-8 py-4 text-base tracking-[0.5px]" required />
                                    </div>
                                    <!-- Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <button type="submit" class="btn-black w-full">
                                            Change password
                                        </button>
                                    </div>
                                    <!-- Form Group -->
                                </form>
                                <!-- Contact Form -->

                                <!-- Text Link -->
                                <p class="mt-6 text-center text-base">
                                    If you didn’t request a password recovery link, please
                                    ignore this.
                                </p>
                                <!-- Text Link -->
                            </div>
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- ...::: Coming Soon Section End :::... -->
        </main>
        <!--Main Wrapper End -->
    </div>
    
<?php include './partials/script.php' ?>
</body>

</html>
