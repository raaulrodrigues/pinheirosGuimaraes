<?php require_once 'header.php'; ?>
    <div class="dynamicSpacer"></div>
    <section id="default-hero">
        <div style="background-image: url('img/background-contato.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-top without-line text-white">
                            <p>trabalhe conosco</p>
                        </div>
                        <div class="default-tagline title-white">
                            <h1>Carreiras</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work-with-us" class="bg-beige">
        <div class="spacer-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="work-with-us-title title-green">
                        <h2>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h2>
                    </div>
                </div>
                <div class="spacer-40"></div>
                <div class="col-lg-6">
                    <div class="work-with-us-content text-dark-green">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-with-us-content text-dark-green">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.</p>
                    </div>
                </div>
            </div>
            <form class="work-with-us-form" method="post" action="">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="work-with-us-field">
                            <input type="text" name="nome" placeholder="NOME" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="work-with-us-field">
                            <input type="email" name="email" placeholder="EMAIL" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="work-with-us-field">
                            <input type="text" name="mensagem" placeholder="MENSAGEM">
                        </div>
                    </div>
                </div>
                <div class="spacer-20"></div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="work-with-us-field">
                            <input type="tel" name="telefone" placeholder="TELEFONE">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="work-with-us-field work-with-us-field-select">
                            <select name="areas">
                                <option value="" disabled selected>SELECIONE UMA OU MAIS ÁREAS DE INTERESSE</option>
                                <option value="direito-corporativo">Direito Corporativo</option>
                                <option value="direito-tributario">Direito Tributário</option>
                                <option value="contencioso">Contencioso</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <div class="row">
                    <div class="col-12">
                        <label class="work-with-us-file-label bg-dark-beige">
                            <i class="bi bi-paperclip"></i>
                            <span>ANEXAR ARQUIVO</span>
                            <input type="file" name="arquivo">
                        </label>
                    </div>
                </div>
                <div class="spacer-30"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="work-with-us-check text-dark-green">
                            <input type="checkbox" id="work-privacy" name="privacy" required>
                            <p>Declaro que li e aceito as políticas de privacidade e termos de uso.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="work-with-us-lgpd text-dark-green">
                            <p>Seus dados serão guardados pelo tempo necessário para o recrutamento ou conforme exigido por lei. Se tiver dúvidas ou quiser exercer seus direitos sob a LGPD, contate nosso Encarregado de Proteção de Dados em <a href="mailto:privacidade@pinheiroguimaraes.com.br">privacidade@pinheiroguimaraes.com.br</a>.</p>
                            <div class="spacer-10"></div>
                            <p>Agradecemos seu interesse e, se seu perfil corresponder às vagas, entraremos em contato.</p>
                        </div>
                        <div class="spacer-40"></div>
                        <button type="submit" class="main-btn bg-green bg-hover-dark-green text-white text-hover-beige">ENVIAR <i class="bi bi-arrow-up-right"></i></button>
                    </div>
                </div>
            </form>
            <div class="spacer-60"></div>
        </div>
    </section>
    <?php include('awards-links.php'); ?>
<?php require_once 'footer.php'; ?>