<?$title = 'Contact me'?>

    <?
    include 'core/Book.php';
    include 'core/Validator.php';


    $validate = new Validator();
    ?>


<? include 'layouts/template.php'?>


<section class="" id="about">
    <div class="container">
        <div class="row vertical-center">
            <div class="col-12">
                <div class="row">
                    <div class="bg-warning my-btn mx-auto text-uppercase font-weight-bold mb-5 animated zoomIn">Touch me</div>
                </div>

                <div class='row'>
                    <div class='col-md-6 offset-md-3'>

                        <div class="result"></div>
                        <?= ($validate->message_flash('message')) ? $validate->message_flash('message') : ''?>

                        <div class='row px-4 px-md-0'>
                            <form method="post" class='col-12' action='tra' id="form-contact">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="first_name" id="first-name" class="form-control" placeholder="Votre Prenom" value="<?= $validate->post('first_name')?>">
                                        <span class="text-danger error-first-name font-italic font-"><?= $validate->error("first_name")?></span>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="last_name" id="last-name" class="form-control" placeholder="Votre Nom" value="<?= $validate->post('last_name')?>">
                                        <span class="text-danger error-last-name font-italic"><?= $validate->error("last_name")?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label ></label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="<?= $validate->post('email')?>">
                                    <span class="text-danger error-email font-italic"><?= $validate->error("email")?></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Quel est le sujet du message?" value="<?= $validate->post('subject')?>">
                                    <span class="text-danger error-subject font-italic"><?= $validate->error("subject")?></span>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder='Votre Message' id="message" rows="3" style="<?= ($validate->error('message')) ? "border-color : red" : ''?>"></textarea>
                                </div>

                                <button type="submit"  name="submit" class='btn btn-dark text-uppercase px-4'>Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mx-auto text-center">
                        <a href="index.php" class="btn btn-outline-light mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-2s">Home</a>
                        <a href="myprojects.php" class="btn btn-warning mr-2 px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-3s">My projects</a>
                        <a href="about-me.php" class="btn btn-outline-light px-5 py-2 font-weight-bold text-uppercase mt-3 animated  fadeInUp delay-4s">About me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/public/js/contact.js"></script>
<? include 'layouts/footer.php' ?>