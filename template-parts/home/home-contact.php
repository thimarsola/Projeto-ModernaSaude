<section id="contato" class="contact">
    <!-- container -->
    <div class="contact__container py-10">
        <div class="container">
            <!-- cta -->
            <div class="contact__container__cta grid mb-10">
                <!-- image -->
                <div class="contact__container__cta__image shadow">
                    <?= picture('imagem-contato-01', 'Vamos agendar uma avaliação?'); ?>
                </div>
                <!-- end of image -->

                <!-- content -->
                <div class="contact__container__cta__content">
                    <!-- header -->
                    <header class="contact__container__cta__content__header mb-2">
                        <h2>Vamos agendar um horário?</h2>
                    </header>
                    <!-- end of header -->

                    <p>Você merece cuidados especiais.</p>
                    <p class="mb-6">Invista na sua saúde e no seu corpo. Estamos te esperando!</p>

                    <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['messageSchedule'], 'Agende um horário', 'btn btn-primary-500', 'Vamos agendar uma avaliação?') ?>
                </div>
                <!-- end of content -->
            </div>
            <!-- cta -->

            <!-- information -->
            <div class="contact__container__information grid">
                <!-- content -->
                <div class="contact__container__information__content">
                    <!-- header -->
                    <header class="contact__container__information__content__header d-none">
                        <h2>Informações para contato</h2>
                    </header>
                    <!-- end of header -->

                    <!-- card -->
                    <article class="contact__container__information__content__card mb-3">
                        <!-- header -->
                        <header class="contact__container__information__content__card__header mb-2">
                            <h3>Horário de funcionamento</h3>
                        </header>
                        <!-- end of header -->

                        <p>Segunda a Sexta: das 9h às 20h | Sábado: da 09h às 13h</p>
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__container__information__content__card mb-3">
                        <!-- header -->
                        <header class="contact__container__information__content__card__header mb-2">
                            <h3>Endereço</h3>
                        </header>
                        <!-- end of header -->

                        <a rel="nofollow noreferrer noopener" href="<?= CONTACT['addressLink']; ?>" title="Venha conheçar a Clínica Moderna Saúde" target="_blank"><?= CONTACT['address']; ?></a>
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__container__information__content__card mb-3">
                        <!-- header -->
                        <header class="contact__container__information__content__card__header mb-2">
                            <h3>Telefones</h3>
                        </header>
                        <!-- end of header -->

                        <p>Fixo: <a rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" target="_blank" title="Vamos conversar pelo Telefone?"><?= CONTACT['phone']['01']; ?></a> | WhatsApp:
                            <?= whatsapp(formatPhone(CONTACT["whatsapp"]["number"]), CONTACT["whatsapp"]["message"], CONTACT["whatsapp"]["number"], NULL, 'Vamos conversar pelo WhatsApp?'); ?>
                    </article>
                    <!-- end of card -->

                    <!-- card -->
                    <article class="contact__container__information__content__card mb-3">
                        <!-- header -->
                        <header class="contact__container__information__content__card__header mb-2">
                            <h3>E-mail</h3>
                        </header>
                        <!-- end of header -->

                        <a rel="nofollow noreferrer noopener" href="mailto:<?= CONTACT['mail']; ?>" title="Vamos conversar por e-mail?" target="_blank"><?= CONTACT['mail']; ?></a>
                    </article>
                    <!-- end of card -->
                </div>
                <!-- end of content -->

                <!-- image -->
                <div class="contact__container__information__image shadow">
                    <?= picture('imagem-contato-02', 'Conheça nossos meios de comunicação'); ?>
                </div>
                <!-- end of image -->
            </div>
            <!-- end of information -->
        </div>
    </div>
    <!-- end of container -->
</section>