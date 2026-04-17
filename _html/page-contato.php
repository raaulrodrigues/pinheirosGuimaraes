<?php require_once 'header.php'; ?>
    <div class="dynamicSpacer"></div>
    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="wrapper-breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <span>/</span>
                        <span class="current">Contato</span>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="default-hero">
        <div style="background-image: url('img/background-contato.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top">
                            <div class="section-top without-line text-white">
                            <p>fale conosco</p>
                        </div>
                        <div class="default-tagline title-white">
                            <h1>Contato</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="bg-beige">
        <div class="spacer-60"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <form class="contact-form" method="post" action="">
                        <div class="contact-field text-green">
                            <input type="text" placeholder="NOME">
                        </div>
                        <div class="contact-field text-green">
                            <input type="tel" placeholder="TELEFONE">
                        </div>
                        <div class="contact-field text-green">
                            <input type="email" placeholder="EMAIL">
                        </div>
                        <div class="contact-field text-green">
                            <input type="text" placeholder="ENDEREÇO">
                        </div>
                        <div class="contact-field text-green">
                            <textarea placeholder="MENSAGEM"></textarea>
                        </div>
                        <div class="contact-check text-dark-green">
                            <input type="checkbox" id="contact-privacy">
                            <label for="contact-privacy">Declaro que li e aceito as políticas de privacidade e termos de uso.</label>
                        </div>
                        <div class="spacer-40"></div>
                        <a href="#" class="main-btn bg-green bg-hover-dark-green text-white text-hover-beige">ENVIAR <i class="bi bi-arrow-up-right"></i></a>
                    </form>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7313.171645583543!2d-46.684163164418!3d-23.583314328661707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cc494f7013%3A0xd93a7cad488bd82a!2sPinheiro%20Guimar%C3%A3es!5e0!3m2!1spt-BR!2sbr!4v1774273950659!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="spacer-60"></div>
        </div>
    </section>
    <?php include('awards-links.php'); ?>
<?php require_once 'footer.php'; ?>