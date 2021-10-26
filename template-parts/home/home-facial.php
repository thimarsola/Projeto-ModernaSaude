<section id="estetica-facial" class="facial">
    <!-- container -->
    <div class="facial__container bg-light-gray-500 py-10">
        <div class="container">
        <!-- header -->
        <header class="facial__container__header title mb-7">
            <h2>Estética Facial</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="facial__container__row grid">
             <?php
             $jsonFacial = file_get_contents(__DIR__ . '/../../includes/procedures.json');
             $facialList = json_decode($jsonFacial, true);

             foreach ($facialList['facial'] as $facial):
             ?>

             <!-- card -->
              <article class="facial__container__row__card bg-white-500 shadow radius">
                  <!-- image -->
                   <div class="facial__container__row__card__image">
                       <?= picture($facial['image'], 'Conheça o nosso procedimento ' . $facial['title']); ?>
                   </div>
                  <!-- end of image -->

                  <!-- content -->
                   <div class="facial__container__row__card__content">
                       <!-- header -->
                       <header class="facial__container__row__card__content__header mb-3">
                           <h3><?= $facial['title']; ?></h3>
                       </header>
                       <!-- end of header -->

                       <!-- body -->
                        <div class="facial__container__row__card__content__body">
                            <p class="mb-3"><?= $facial['description']; ?></p>
                            <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['messageProcedure'] . $facial['title'], 'Agende um horário', 'btn btn-primary-500', 'Vamos agendar uma horário?'); ?>
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