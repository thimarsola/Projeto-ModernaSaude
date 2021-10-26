<section id="estetica-corporal" class="corporal py-10">
    <div class="container">
        <!-- header -->
        <header class="corporal__header title mb-7">
            <h2>Estética Corporal</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="corporal__row grid">
            <?php
            $jsonCorporal = file_get_contents(__DIR__ . '/../../includes/procedures.json');
            $corporalList = json_decode($jsonCorporal, true);

            foreach ($corporalList['corporal'] as $corporal):
                ?>

                <!-- card -->
                <article class="corporal__row__card bg-white-500 shadow radius">
                    <!-- image -->
                    <div class="corporal__row__card__image">
                        <?= picture($corporal['image'], 'Conheça o nosso procedimento ' . $corporal['title']); ?>
                    </div>
                    <!-- end of image -->

                    <!-- content -->
                    <div class="corporal__row__card__content">
                        <!-- header -->
                        <header class="corporal__row__card__content__header mb-3">
                            <h3><?= $corporal['title']; ?></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="corporal__row__card__content__body">
                            <p class="mb-3"><?= $corporal['description']; ?></p>
                            <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['messageProcedure'] . $corporal['title'], 'Agende um horário', 'btn btn-primary-500', 'Vamos agendar uma horário?'); ?>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>