<?$title = 'My projects'?>

<? include '../views/layouts/template.php'?>

<section class="" id="myprojects">
    <div class="container">
        <div class="row vertical-center">
            <div class="col-12">
                <div class="row">
                    <div class="bg-warning my-btn mx-auto text-uppercase font-weight-bold mb-5 animated zoomIn">My projects</div>
                </div>

                <div class="card-columns my-4">
                    <div class="card animated zoomIn">
                        <div class="imgcard">
                            <img src="/public/images/management-consulting-int.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">Management Consulting Int</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">code on git</a>
                            <a href="http://managementconsultingint.hol.es/main.php" target="_blank" class="btn btn-primary">view site</a>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="mx-auto text-center">
                        <a href="../index.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-2s">Home</a>
                        <a href="../views/about-me.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-3s">About me</a>
                        <a href="../views/contact.php" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-4s">Contact me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<? include '../views/layouts/footer.php'?>