<?$title = 'My projects'?>

<? include 'layouts/template.php'?>

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
                            <a href="http://managementconsultingint.hol.es/main.php" target="_blank"">
                            <img src="/public/images/management-consulting-int.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">Management Consulting Int</h5>
                            </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/JackDarkWeb/management.com" target="_blank" class="btn btn-dark mr-3">In PHP on git</a>
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">In Laravel on git</a>
                        </div>
                    </div>

                    <div class="card animated zoomIn">
                        <div class="imgcard">
                            <a href="http://babor.hol.es" target="_blank"">
                            <img src="/public/images/babor.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">Babor Meeting</h5>
                            </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/JackDarkWeb/babor.com" target="_blank" class="btn btn-dark mr-3">In PHP on git</a>
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">In Laravel on git</a>
                        </div>
                    </div>

                    <div class="card animated zoomIn">
                        <div class="imgcard">
                            <a href="http://cedric-blog.hol.es" target="_blank"">
                            <img src="/public/images/cedric.png" class="card-img-top" alt="...">

                            <div class="overlay">
                                <h5 class="text">CEDRIC Blog</h5>
                            </div>
                            </a>
                        </div>

                        <div class="card-body">
                            <a href="https://github.com/JackDarkWeb/cedric.com" target="_blank" class="btn btn-dark mr-3">In PHP on git</a>
                            <a href="https://github.com/developerGroupWeb/Management-Consulting-Int" target="_blank" class="btn btn-dark mr-3">In Laravel on git</a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="mx-auto text-center">
                        <a href="index.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-2s">Home</a>
                        <a href="/about-me.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-3s">About me</a>
                        <a href="/contact.php" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-4s">Contact me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<? include 'layouts/footer.php'?>