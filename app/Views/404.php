<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- Conteúdo personalizado -->

<div class="container py-5 text-secondary">
    <h1 style="font-size:100px;">Error 404</h1>
    <p>Project not found in COCaDA-DB.</p>
    <p><strong>A COCADA-ID has four characters, <em>e.g.</em>, <a href="<?=base_url('entry/2LZM')?>">2LZM</a></p>

    <img src="<?= base_url('/img/cocadito2.png') ?>" width="300px">

</div>

<!-- / FIM Conteúdo personalizado -->
<?= $this->endSection() ?>
