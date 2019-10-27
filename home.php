<?$title = 'Home'?>
<? include 'helpers/Helpers.php' ?>
<? Helpers::counter();?>

<? include 'layouts/template.php'?>

<section class="" id="mathead">
    <div class="container">
        <div class="row vertical-center">
            <div class="col-12">
                <div class="row">
                    <div class="img-profil mx-auto"></div>
                </div>

                <div class="row my-4">
                    <h1 class="mx-auto text-center text-uppercase text-white animated fadeInUp ">Hello i'm Mathias, <span class="font-weight-bold">PHP Web Developer</span></h1>
                </div>

                <div class="row">
                    <div class="mx-auto text-center">
                        <a href="/about-me.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-2s">About me</a>
                        <a href="myprojects.php" class="btn btn-outline-warning mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-3s">My projects</a>
                        <a href="/contact.php" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-4s">Contact me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? include 'layouts/footer.php'?>


