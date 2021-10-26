<section id="clinica" class="clinic py-10">
    <div class="container">
        <!-- row -->
         <div class="clinic__row grid">
             <?php for($i = 1; $i < 4; $i++): ?>
             <!-- card -->
              <div class="clinic__row__card">
                  <?= picture('imagem-clinica-' . str_pad($i, 2, 0, STR_PAD_LEFT), 'Conheça mais sobre a Clínica Moderna Saúde'); ?>
              </div>
             <!-- end of card -->
             <?php endfor; ?>
         </div>
        <!-- end of row -->

        <!-- container -->
         <div class="clinic__container shadow">
            <!-- header -->
             <header class="clinic__container__header title mb-4">
                 <h2>A Clínica</h2>
             </header>
            <!-- end of header -->

             <!-- content -->
              <div class="clinic__container__content">
                  <p>Com um novo conceito de atendimento na área de estética e beleza, a Moderna tem o objetivo de ajudar a elevar a autoestima e bem-estar.</p>
                  <p>Um espaço moderno e aconchegante para proporcionar um cuidado especial aos nossos clientes. Temos um menu de protocolos essenciais para tratamentos faciais, corporais e de harmonização orofacial personalizados, que auxiliam na eliminação das toxinas, bem como nos edemas, diversos procedimentos com benefícios para reduzir medidas, melhorar o contorno corporal, minimizar a flacidez, corrigir e suavizar linhas de expressão e rugas decorrentes do processo natural de envelhecimento, clareamento de manchas, controle de acnes e rejuvenescimento.</p>
                  <p>Trabalhamos de forma segura e com foco em resultado, satisfação, bem-estar e qualidade de vida.</p>
              </div>
             <!-- end of content -->
         </div>
        <!-- end of container -->
    </div>
</section>