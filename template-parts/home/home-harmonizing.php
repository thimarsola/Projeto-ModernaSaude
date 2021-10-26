<section id="harmonizacao-facial" class="harmonizing">
    <!-- container -->
    <div class="harmonizing__container bg-light-gray-500 py-10">
        <div class="container">
        <!-- header -->
        <header class="harmonizing__container__header title mb-7">
            <h2>Harmonização Facial</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="harmonizing__container__row grid">
            <?php
            $jsonHarmonizing = file_get_contents(__DIR__ . '/../../includes/procedures.json');
            $harmonizingList = json_decode($jsonHarmonizing, true);

            foreach ($harmonizingList['harmonizing'] as $harmonizing):
                ?>

                <!-- card -->
                <article class="harmonizing__container__row__card bg-white-500 shadow radius">
                    <!-- image -->
                    <div class="harmonizing__container__row__card__image">
                        <?= picture($harmonizing['image'], 'Conheça o nosso procedimento ' . $harmonizing['title']); ?>
                    </div>
                    <!-- end of image -->

                    <!-- content -->
                    <div class="harmonizing__container__row__card__content">
                        <!-- header -->
                        <header class="harmonizing__container__row__card__content__header mb-3">
                            <h3><?= $harmonizing['title']; ?></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="harmonizing__container__row__card__content__body">
                            <p class="mb-3"><?= $harmonizing['description']; ?></p>
                            <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['messageProcedure'] . $harmonizing['title'], 'Agende um horário', 'btn btn-primary-500', 'Vamos agendar uma horário?'); ?>
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
    </div>
    <!-- end of container -->
</section>