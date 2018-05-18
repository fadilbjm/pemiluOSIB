<!doctype html>
<html lang="en">
  <head>
    <title>Add Student</title>
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
            <div class="col-md-2">
                <div class="jumbotron">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modelId">
                      <ion-icon name="add-circle"></ion-icon>Tambah
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="jumbotron">
                    <table class="table table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>a</th>
                                <th>a</th>
                                <th>a</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                    </table>
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