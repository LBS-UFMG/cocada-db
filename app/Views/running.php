<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- Conteúdo personalizado -->

<div class="container py-5 text-secondary text-center">
    <h1>Running</h1>
    <p>Making a Cocada... wait...</p>
    <p class="mt-4 alert alert-success"><b>Project created!</b><br><b>ID:</b> <?=$id?></p>
    <p>You will be redirected to the project page in <br><span id="contador" style="font-size: 50px;">10</span></h1>

    <p><br></p>
    <img src="<?= base_url('img/cocadito.png'); ?>" width="300px">

    

</div>


<script>
    // Função para o redirecionamento
    function redirecionar() {
        window.location.href = "<?=base_url()?>/project/<?=$id?>";
    }

    // Função para o contador
    function iniciarContagem() {
        let tempoRestante = 10; // 10 segundos
        const contadorElemento = document.getElementById("contador");

        const intervalo = setInterval(() => {
            contadorElemento.textContent = tempoRestante;
            tempoRestante--;

            if (tempoRestante < 0) {
                clearInterval(intervalo);
                redirecionar(); // Redireciona ao final da contagem
            }
        }, 1000); // Atualiza a cada 1 segundo
    }

    // Inicia a contagem quando a página for carregada
    window.onload = iniciarContagem;
</script>


<!-- / FIM Conteúdo personalizado -->
<?= $this->endSection() ?>