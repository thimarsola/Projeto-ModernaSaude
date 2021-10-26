<section id="servicos" class="procedures bg-light-gray-500 mb-6">
    <div class="container">

        <!-- header -->
         <header class="procedures__header title pt-10 mb-8">
             <h2 class="mb-4">Conheça os nossos Serviços</h2>
             <p>Contamos com profissionais altamente especializados e gabaritados na área da estética.</p>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="procedures__row grid pb-10">
             <?php
             $jsonProcedures = file_get_contents(__DIR__ . '/../../includes/procedures.json');
             $proceduresList = json_decode($jsonProcedures, true);

             foreach ($proceduresList['procedures'] as $procedure):
             ?>

             <!-- card -->
              <article class="procedures__row__card bg-white-500 shadow p-4">
                  <!-- icon -->
                   <div class="procedures__row__card__icon bg-light-gray-500 mb-2">
                       <i class="icon-<?= $procedure['icon']; ?>"></i>
                   </div>
                  <!-- end of icon -->

                  <!-- header -->
                  <header class="procedures__row__card__header">
                      <h3>
                          <a href="<?= $procedure['target']; ?>" title="<?= $procedure['title']; ?>"><?= $procedure['title']; ?></a>
                      </h3>
                  </header>
                  <!-- end of header -->
              </article>
             <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end of row -->

    </div>
</section>