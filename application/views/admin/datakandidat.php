<!doctype html>
<html lang="en">
  <head>
    <title>The Candidate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark bg-info">
              <a class="navbar-brand" href="#"><img src="https://pbs.twimg.com/profile_images/1657882683/Logo_ARH_400x400.jpg" alt="" srcset="" width="30px" height="30px"></a>
              <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li><marquee behavior="slide" direction="left"><div color="white">Boarding Students Page</div></marquee></li>
                  </ul>
                  <div class="dropdown open">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                                  Hello <?php echo $this->session->userdata('nama'); ?>!
                              </button>
                      <div class="dropdown-menu" aria-labelledby="triggerId">
                          <button class="dropdown-item" href="#"><ion-icon name="switch"></ion-icon>Settings</button>
                          <div class="dropdown-divider"></div>
                          <button class="dropdown-item" href="#"><ion-icon name="log-out"></ion-icon><span>Logout</span></button>
                      </div>
                  </div>
              </div>
          </nav>
<!-- akhir navbar -->
          <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-outline-success btn-md form-control" data-toggle="modal" data-target="#tambah">
                      <ion-icon name="add-circle"></ion-icon>Tambah
                    </button>
            </div>
              <div class="col-md-6">
                  <div class="jumbotron">
                      <table class="table">
                          <thead class="text-center">
                              <tr>
                                  <th>Nama Ketua</th>
                                  <th>Foto</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tbody class="text-center text-uppercase">
                              <?php
                              if ($datak->num_rows()>0) {
                                  foreach ($datak->result() as $ket ) {
                                        echo "<tr>
                                            <td>$ket->nama_kandidat</td>
                                            <td><img src='".base_url($ket->foto)."' width='40px' height='40px'></td>
                                            <td>".anchor(base_url('admin/delCandidate/'.$ket->id_kandidat), '<button class="btn btn-danger"><ion-icon name="backspace"></ion-icon></button>')."</td>
                                        </tr>";
                                  }
                              }else {
                                  echo "<tr><td colspan='3'>No data!</td></tr>";
                              }
                              ?>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="jumbotron">
                      <table class="table" >
                          <thead class="text-center">
                              <tr>
                                  <th>Nama Wakil</th>
                                  <th>Foto</th>
                                  <th>Opsi</th>
                              </tr>
                          </thead>
                          <tbody class="text-center text-uppercase">
                          <?php
                              if ($dataw->num_rows()>0) {
                                  foreach ($dataw->result() as $ket ) {
                                        echo "<tr>
                                            <td>$ket->nama_kandidat</td>
                                            <td><img src='$ket->foto' width='40px' height='40px'></td>
                                            <td>".anchor(base_url('admin/delCandidate/'.$ket->id_kandidat), 'Hapus', '<ion-icon name="backspace"></ion-icon>')."</td>
                                        </tr>";
                                  }
                              }else {
                                  echo "<tr><td colspan='3'>No data!</td></tr>";
                              }
                              ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <!-- Modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                                </div>
                                <?php echo form_open_multipart('admin/addCandidate');?>
                                <div class="modal-body">
                                    <div class="form-group">
                                      <label for="nama">Nama Kandidat</label>
                                      <input type="text"
                                        class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <label for="jk">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="jk" id="jk" value="l" checked>
                                        Laki-laki
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="jk" id="jk" value="p" >
                                        Perempuan
                                      </label>
                                    </div>
                                    <label for="posisi">Jabatan</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="posisi" id="posisi" value="ketua" checked>
                                        Ketua
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="posisi" id="posisi" value="wakil" >
                                        Wakil Ketua
                                      </label>
                                    </div>
                                    <div class="form-group">
                                      <label for="img">Foto</label>
                                      <input type="file"
                                        class="form-control" name="img" id="img" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.0.0/dist/ionicons.js"></script>
  </body>
</html>