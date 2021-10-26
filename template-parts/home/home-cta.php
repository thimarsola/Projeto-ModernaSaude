<section class="cta pb-10">
    <div class="container">
        <!-- header -->
         <header class="cta_header title mb-6">
             <h2 class="mb-4">Vamos agendar uma avaliação?</h2>
             <p>Temos os melhores tratamentos com protocolos exclusivos e personalizados conciliando expectativas e possibilidades.</p>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="cta__row grid">
             <!-- image -->
              <div class="cta__row__image">
                  <?= picture('image-avaliacao-01', 'Vamos agendar uma avaliação?'); ?>
              </div>
             <!-- end of image -->

             <!-- content -->
              <div class="cta__row__content">
                  <?= picture('image-avaliacao-02', 'Vamos agendar uma avaliação?'); ?>
                  <p class="my-3">Entre em contato agora mesmo pelo nosso telefone <a href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>"><?= CONTACT['phone']['01']; ?></a></p>
                  <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['messageCTA'], 'ou no whatsapp', 'btn btn-primary-500', 'Vamos agendar uma avaliação?') ?>
              </div>
             <!-- end of content -->

             <!-- image -->
              <div class="cta__row__image">
                  <?= picture('image-avaliacao-03', 'Vamos agendar uma avaliação?'); ?>
              </div>
             <!-- end of image -->
         </div>
        <!-- end of row -->
    </div>
</section>