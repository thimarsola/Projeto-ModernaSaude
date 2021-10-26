<section class="gallery py-10">
    <div class="container">
        <!-- header -->
        <header class="gallery__header mb-5">
            <h2>Conheça o nosso Espaço</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="gallery__row grid">
             <?php for ($i = 4; $i < 11; $i++):  ?>
                 <!-- image -->
                 <a href="<?= image('imagem-clinica-' . str_pad($i, 2, 0, STR_PAD_LEFT) . '.jpg'); ?>" title="Conheça um pouco mais o nosso espaço" class="gallery__row__card">
                     <?= picture('imagem-clinica-'. str_pad($i, 2, 0, STR_PAD_LEFT), 'Conheça um pouco mais o nosso espaço'); ?>
                 </a>
                 <!-- end of image -->
             <?php endfor; ?>
         </div>
        <!-- end of row -->

        <p class="mt-5">viva a beleza de sentir-se bem consigo mesmo!</p>
    </div>
</section>