  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <!-- NOTIF FLASH DISINI-->
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title"><?= $judul; ?></h3>
              </div>
              <div class="card-body">
                  <div class="alert alert-success alert-dismissible">
                      <h4 align="center"><?= strtoupper($profil['nama_profil']); ?><br /><?= $profil['nama_aplikasi']; ?></h4>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="card card-primary card-outline">
                              <div class="card-header">
                                  <h5 class="m-0">Perbaharui Profil</h5>
                              </div>
                              <div class="card-body">
                                  <h6 class="card-title">Menu Profil</h6>

                                  <p class="card-text">Perbaharui data profil password login pada menu ini.</p>
                                  <a href="<?= base_url('profil'); ?>" class="btn btn-primary"><i class="nav-icon fas fa fa-user"></i> Menu Profil</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="card card-success card-outline">
                              <div class="card-header">
                                  <h5 class="m-0">Register Permohonan</h5>
                              </div>
                              <div class="card-body">
                                  <h6 class="card-title">Menu Register Permohonan</h6>

                                  <p class="card-text">Register Permohonan dapat dilakukan pada halaman ini.</p>
                                  <a href="<?= base_url('register/permohonan'); ?>" class="btn btn-success"><i class="nav-icon fas fa fa-plus"></i> Permohonan</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-12">
                          <div class="callout callout-danger">
                              <h5>Syarat-syarat mengajukan permohonan di Pengadilan Negeri Batulicin</h5>
                              <!--
                              <ol>
                                  <li>Lorem ipsum dolor sit amet</li>
                                  <li>Consectetur adipiscing elit</li>
                                  <li>Integer molestie lorem at massa</li>
                                  <li>Facilisis in pretium nisl aliquet</li>
                              </ol>
-->
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->