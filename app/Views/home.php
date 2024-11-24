<!-- modelo para criação de views: copie este arquivo e apague os comentários -->
<?= $this->extend('template') ?>

<?= $this->section('scripts') ?>
<!-- adicione links para scripts aqui -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>

<div class="container col-xxl-10 px-2 py-0">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= base_url('/img/home.png') ?>" class="d-block mx-lg-auto img-fluid" width="450" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">The Interatomic Contact Database</h1>

            <p class="lead">COCaDA-DB is the database that presents contacts in all structures available in the PDB database. CDB calculates seven types of contacts: hydrogen bonds, hydrophobic, aromatic, attractive, repulsive, salt bridges and disulfide bridges. </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                <a class="btn btn-primary btn-lg px-4 me-md-2 azul" href="<?=base_url('/explore')?>">Explore</button>
                <a href="http://bioinfo.dcc.ufmg.br/cocada-web" class="btn btn-outline-dark btn-lg px-4 me-md-2">Run COCaDA-Web</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-light my-5 py-5">
<div id="info" class="container">
  <div class="row">
    <div class="col-xs-12 col-lg-3">
      <div class="card p-2" style="border-left: #031430 5px solid; color: #ccc">
        <div class="caption">
          <div class="row">
            <div class="col-md-3 text-dark" style="font-size: 72px">
                <i class="bi bi-braces-asterisk"></i>
            </div>
            <div class="col-md-9 text-end">
              <h1 class="mt-3">
                <strong class="texto-azul">
                  800.000
                </strong>
              </h1>
              <p class="text-muted small"><strong>CONTACTS</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-lg-3">
      <div class="card p-2" style="border-left: #031430 5px solid; color: #ccc">
        <div class="caption">
          <div class="row">
            <div class="col-md-3 text-dark" style="font-size: 72px">
                <i class="bi bi-info-circle-fill"></i>
            </div>
            <div class="col-md-9 text-end">
              <h1 class="mt-3">
                <strong class="texto-azul">
                  500.000
                </strong>
              </h1>
              <p class="text-muted small"><strong>CONTACTS INTRA</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-lg-3">
      <div class="card p-2" style="border-left: #031430 5px solid; color: #ccc">
        <div class="caption">
          <div class="row">
            <div class="col-md-3 text-dark" style="font-size: 72px">
                <i class="bi bi-exclude"></i>
            </div>
            <div class="col-md-9 text-end">
              <h1 class="mt-3"><strong class="texto-azul">
                  200.000
                </strong>
              </h1>
              <p class="text-muted small"><strong>PPI CONTACTS</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-lg-3">
      <div class="card p-2" style="border-left: #031430 5px solid; color: #ccc">
        <div class="caption">
          <div class="row">
            <div class="col-md-3 text-dark" style="font-size: 72px">
                <i class="bi bi-hurricane"></i>
            </div>
            <div class="col-md-9 text-end">
              <h1 class="mt-3">
                <strong class="texto-azul">
                  200.000
                </strong>
              </h1>
              <p class="text-muted small"><strong>3D STRUCTURES</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h5 class="text-muted small">*Last updated on: Nov 2024</h5>
</div>

</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="alert alert-light shadow my-4 " style="border-left: #6cbd16 5px solid">
                <div class="caption">
                    <div class="row">
                        <div class="col-md-12 p-4">
                            <h4 class="" style="color:#6cbd16"><strong>How to cite:</strong></h4>
                            <p class="small" id="browse">Lemos et al. COCaDA-DB. Database. Laboratory of Bioinformatics and Systems. Universidade Federal de Minas Gerais. 2024.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row bg-light mt-5 px-2" id="explore">

</div>

<?= $this->endSection() ?>