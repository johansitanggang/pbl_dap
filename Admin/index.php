<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dompet Amal Polibatam</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
    integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top ">
    <button class="navbar-toggler sideMenuToggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">Dompet Amal Polibatam</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="material-icons icon">
              person
            </i>
            <span class="text">User</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <p class="dropdown-item">User</p>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="LOGIN/login.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="wrapper d-flex">
    <div class="sideMenu bg-mattBlackLight">
      <div class="sidebar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#db" class="nav-link px-2 mt-3">
              <i class="material-icons icon">
                dashboard
              </i>
              <span class="text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#lpr" class="nav-link px-2">
              <i class="material-icons icon">
                report
              </i>
              <span class="text">Laporan</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#krt" class="nav-link px-2">
              <i class="material-icons icon">
                list
              </i>
              <span class="text"> Kriteria</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#dp" class="nav-link px-2">
              <i class="material-icons icon">
                settings
              </i>
              <span class="text">Pengajuan</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#usr" class="nav-link px-2">
              <i class="material-icons icon">
                person
              </i>
              <span class="text">Pengguna</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 sideMenuToggler">
              <i class="material-icons icon expandView ">
                open_with
              </i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="content">
      <main>
        <div class="container-fluid">
          <div class="row" id="db">
            <div class="col-md mt-3 mb-2">
              <div class="bg-mattOrangeLight px-3 pt-3 pb-1">
                <h4 class="mb-2">SELAMAT DATANG DI DASHBOARD</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam qui porro amet ut delectus cum ea
                  tempora magnam iusto numquam impedit voluptate distinctio vel eos quasi odit, quia voluptatibus
                  consequuntur assumenda sequi molestias corporis voluptas rerum! Laboriosam beatae officia cupiditate
                  rem numquam assumenda quod illo architecto rerum. Et, culpa repellendus.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md mt-3 mb-2">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <!-- Slide 1 -->
                  <div class="carousel-item active" data-interval="2000">
                    <img src="https://metro.batampos.co.id/wp-content/uploads/2023/01/F-1-HL-Polibatam.-F-Polibatam.jpg"
                      class="d-block mx-auto img-fluid" alt="..."
                      style="max-height: 400px; max-width: 1000px; width: 100%; height: 100%; object-fit: cover;">
                  </div>
                  <!-- Slide 2 -->
                  <div class="carousel-item" data-interval="2000">
                    <img src="https://media.suara.com/pictures/653x366/2021/06/28/91932-politeknik-negeri-batam.jpg"
                      class="d-block mx-auto img-fluid" alt="..."
                      style="max-height: 400px; max-width: 1000px; width: 100%; height: 100%; object-fit: cover;">
                  </div>
                  <!-- Slide 3 -->
                  <div class="carousel-item" data-interval="2000">
                    <img
                      src="https://metro.batampos.co.id/wp-content/uploads/2022/06/1-HL-Polibatam-Zona-Integritas-PWBB.-F-Polibatam-1-scaled-e1655355264389.jpg"
                      class="d-block mx-auto img-fluid" alt="..."
                      style="max-height: 400px; max-width: 1000px; width: 100%; height: 100%; object-fit: cover;">
                  </div>
                </div>
                <!-- Previous and Next controls -->
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md my-3">
              <div class="bg-mattBlackLight px-3 py-3">
                <h4 class="mb-2" align="center">Dana Saat Ini</h4>
                <div class="progress" style="height: 3px;">
                  <div class="progress-bar bg-warning text-mattBlackDark" role="progressbar" style="width: 100%;"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">&nbsp;
                  </div>
                </div>
                <div class="my-2">
                  <h1 align="center">666666</h1>
                  <a href="#" data-toggle="modal" data-target="#">
                    <h6 align="center">Edit</h6>
                  </a>
                </div>
                <div class="progress" style="height: 3px;">
                  <div class="progress-bar bg-warning text-mattBlackDark" role="progressbar" style="width: 100%;"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="bg-mattBlackLight my-2 p-3">
                <h2 align="center">Dana</h2>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                sunt earum tempora veniam.
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-mattBlackLight my-2 p-3">
                <h2 align="center">Ajuan</h2>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                sunt earum tempora veniam.
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-mattBlackLight my-2 p-3">
                <h2 align="center">Tujuan</h2>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                sunt earum tempora veniam.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div id="chart" style="height: 250px; justify-content: center; align-items: center;"></div>
            </div>
          </div>
          <div class="row" id="lpr">
            <div class="col-md mt-3 mb-2">
              <div class="bg-mattOrangeLight px-3 pt-3 pb-1">
                <h1 class="mb-2" align="center">LAPORAN DAN KEUANGAN</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mt-3 mb-2">
              <div class="bg-mattBlackLight my-2 p-3">
                <h3 align="center">Filter Tahun & Bulan</h3>
              </div>
              <div class="bg-mattBlackLight px-3 py-3">
                <form>
                  <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="number" class="form-control" id="tahun" placeholder="Masukkan tahun" min="2000"
                      max="2023" required>
                  </div>
                  <div class="form-group">
                    <label for="bulanAwal">Bulan Awal:</label>
                    <select class="form-control" id="bulanAwal" required>
                      <option value="">Pilih bulan awal</option>
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Maret</option>
                      <!-- Tambahkan opsi bulan lainnya sesuai kebutuhan -->
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="bulanAkhir">Bulan Akhir:</label>
                    <select class="form-control" id="bulanAkhir" required>
                      <option value="">Pilih bulan akhir</option>
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Maret</option>
                      <!-- Tambahkan opsi bulan lainnya sesuai kebutuhan -->
                    </select>
                  </div>
                  <button type="submit" class="btn btn-danger">Print</button>
                </form>
              </div>
            </div>
            <div class="col-md-4 mt-3 mb-2">
              <div class="bg-mattBlackLight my-2 p-3">
                <h3 align="center">Filter Tanggal</h3>
              </div>
              <div class="bg-mattBlackLight px-3 py-3">
                <form>
                  <div class="form-group">
                    <label for="tanggalAwal">Tanggal Awal:</label>
                    <input type="date" class="form-control" id="tanggalAwal" required>
                  </div>
                  <div class="form-group mt-4 mb-5">
                    <label for="tanggalAkhir">Tanggal Akhir:</label>
                    <input type="date" class="form-control" id="tanggalAkhir" required>
                  </div>
                  <button type="submit" class="btn btn-danger mt-5 pt-1">Print</button>
                </form>
              </div>
            </div>
            <div class="col-md-4 mt-3 mb-2">
              <div class="bg-mattBlackLight my-2 p-3">
                <h3 align="center">Filter Kategori & User</h3>
              </div>
              <div class="bg-mattBlackLight px-3 py-3">
                <form>
                  <div class="form-group">
                    <label for="tahun">Tahun:</label>
                    <input type="number" class="form-control" id="tahun" placeholder="Masukkan tahun" min="2000"
                      max="2023" required>
                  </div>
                  <div class="form-group">
                    <label for="kategori">Kategori Bantuan:</label>
                    <select class="form-control" id="kategori" required>
                      <option value="">Pilih kategori bantuan</option>
                      <option value="makanan">Makanan</option>
                      <option value="pakaian">Pakaian</option>
                      <option value="tempat tinggal">Tempat Tinggal</option>
                      <!-- Tambahkan opsi kategori lainnya sesuai kebutuhan -->
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="user">User:</label>
                    <input type="text" class="form-control" id="user" placeholder="Masukkan user" required>
                  </div>
                  <button type="submit" class="btn btn-danger">Print</button>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md mt-3 mb-2">
              <div class="bg-mattBlackLight px-3 pt-3 pb-1">
                <div style="overflow: hidden; overflow-x: auto;">
                  <table class="table table-striped table-bordered"
                    style="justify-content: center; align-items: center; text-align: center;">
                    <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="">
                      <i class="fas fa-plus-circle mr-2"></i>TAMBAH</a>
                    <a href="" class="btn btn-success mb-2 ml-3"><span class="glyphicon glyphicondownload"></span>
                      CETAK</a>
                    <thead>
                      <tr style="color: white;">
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">TIPE</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">NOMINAL</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="color: white;">
                        <td>
                          1
                        </td>
                        <td>
                          Marco Philips Sirait
                        </td>
                        <td>
                          Pengeluaran
                        </td>
                        <td>
                          2023-05-07
                        </td>
                        <td>
                          Rp 1.000.000,-
                        </td>
                        <td style="border: none;">
                          <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                          <a href="#" data-toggle="modal" data-target="#">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                    <!-- modal delete -->
                  </table>
                </div>
              </div>
            </div>
          </div>




          <!-- KRITERIA BANTUAN -->
          <!-- yang kami tambah modal update,delete,simpan -->
          <div class="row" id="krt">
            <div class="col-md mt-3 mb-2">
              <div class="bg-mattOrangeLight px-3 pt-3 pb-1">
                <h1 class="mb-2" align="center">KRITERIA BANTUAN</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md mt-3 mb-2">
              <div class="bg-mattBlackLight px-3 pt-3 pb-1">
                <div style="overflow: hidden; overflow-x: auto;">
                  <table class="table table-striped table-bordered"
                    style="justify-content: center; align-items: center; text-align: center;">
                    <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahkriteria">
                      <i class="fas fa-plus-circle mr-2"></i>TAMBAH</a>
                    <a href="" class="btn btn-success mb-2 ml-3"><span class="glyphicon glyphicondownload"></span>
                      CETAK</a>
                    <thead>
                      <tr style="color: white;">
                        <th scope="col">NO</th>
                        <th scope="col">KATEGORI BANTUAN</th>
                        <th scope="col">STANDAR BANTUAN</th>
                        <th scope="col">KETERANGAN</th>
                        <th scope="col">KELENGKAPAN DOKUMEN</th>
                        <th colspan="2" scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'koneksi.php';
                      $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
                      while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr style="color: white;">
                          <td>
                            <?php echo $data['id'] ?>
                          </td>
                          <td>
                            <?php echo $data['kategori']; ?>
                          </td>
                          <td>
                            <?php echo $data['standar']; ?>
                          </td>
                          <td>
                            <?php echo $data['keterangan']; ?>
                          </td>
                          <td>
                            <?php echo $data['kelengkapan']; ?>
                          </td>
                          <td>
                            <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                            <a href="#" data-toggle="modal" data-target="#editkategori<?php echo $data['id']; ?>">Edit</a>
                            <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                            <a href="#" data-toggle="modal"
                              data-target="#deletekategori<?php echo $data['id']; ?>">Delete</a>
                          </td>
                        </tr>
                        <!-- Update Modal -->
                        <div class="example-modal">
                          <div class="modal fade" id="editkategori<?php echo $data['id']; ?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title">Edit Data Mahasiswa</h3>
                                </div>
                                <div class="modal-body">
                                  <form action="kategori/update_kategori.php" method="post" role="form">
                                    <?php
                                    $id = $data['id'];
                                    $query1 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id='$id'");
                                    while ($data1 = mysqli_fetch_assoc($query1)) {
                                      ?>
                                      <div class="form-group">
                                        <div class="row">
                                          <label class="col-sm-3 control-label text-right">NO</label>
                                          <div class="col-sm-8"><input type="text" class="form-control" name="id" value="<?php echo
                                            $data1['id']; ?>"></div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <label class="col-sm-3 control-label text-right">KATEGORI BANTUAN</label>
                                          <div class="col-sm-8"><input type="text" class="form-control" name="kategori"
                                              value="<?php echo
                                                $data1['kategori']; ?>"></div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <label class="col-sm-3 control-label text-right">STANDAR BANTUAN</label>
                                          <div class="col-sm-8"><input type="text" class="form-control" name="standar"
                                              value="<?php echo
                                                $data1['standar']; ?>"></div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <label class="col-sm-3 control-label text-right">KETERANGAN </label>
                                          <div class="col-sm-8"><input type="text" class="form-control" name="keterangan"
                                              value="<?php echo
                                                $data1['keterangan']; ?>">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <label class="col-sm-3 control-label text-right">KELENGKAPAN DOKUMEN </label>
                                          <div class="col-sm-8"><input type="text" name="kelengkapan" class="form-control"
                                              value="<?php echo
                                                $data1['kelengkapan']; ?>">
                                            </input>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button id="noedit" type="button" class="btn btn-danger pull-left"
                                          data-dismiss="modal">Batal</button>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                      </div>
                                      <?php
                                    }
                                    ?>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- modal delete -->
                        <div class="example-modal">
                          <div id="deletekategori<?php echo $data['id']; ?>" class="modal fade" role="dialog"
                            style="display:none;">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title">Konfirmasi Hapus Data</h3>
                                </div>
                                <div class="modal-body">
                                  <h5 align="center">Apakah anda yakin ingin menghapus kriteria
                                    <?php echo
                                      $data['id']; ?><strong><span class="grt"></span></strong> ?
                                  </h5>
                                </div>
                                <div class="modal-footer">
                                  <button id="nodelete" type="button" class="btn btn-danger pull-left"
                                    data-dismiss="modal">Cancel</button>
                                  <a href="kategori/hapus_kategori.php?id=<?php echo $data['id']; ?>"
                                    class="btn btn-primary">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                      }
                      ?>
                  </table>
                  </tbody>
                  </table>
                </div>
              </div>
              <!-- Simpan Modal  -->
              <div class="example-modal">
                <div id="tambahkriteria" class="modal fade" role="dialog" style="display:none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title">Tambah Data Baru</h3>
                      </div>
                      <div class="modal-body">
                        <form action="kategori/simpan_kategori.php" method="post" role="form">
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-3 control-label text-right">KATEGORI BANTUAN</label>
                              <div class="col-sm-8"><input type="text" class="form-control" name="kategori"
                                  placeholder="KATEGORI BANTUAN" value="">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-3 control-label text-right">STANDAR BANTUAN</label>
                              <div class="col-sm-8"><input type="text" class="form-control" name="standar"
                                  placeholder="STANDAR BANTUAN" value=""></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-3 control-label text-right">KETERANGAN</label>
                              <div class="col-sm-8"><input type="text" class="form-control" name="keterangan"
                                  placeholder="KETERANGAN" id="keterangan" value="">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-3 control-label text-right">KELENGKAPAN </label>
                              <div class="col-sm-8"><input type="text" name="kelengkapan" class="form-control"
                                  placeholder="KELENGKAPAN">
                                </input>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button id="nosave" type="button" class="btn btn-danger pull-left"
                              data-dismiss="modal">Batal</button>
                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- SAMPAI SINI KATEGORI -->




              < <!-- PENGAJUAN -->
                <div class="row" id="dp">
                  <div class="col-md mt-3 mb-2">
                    <div class="bg-mattOrangeLight px-3 pt-3 pb-1">
                      <h1 class="mb-2" align="center">DAFTAR PENGAJUAN</h1>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md mt-3 mb-2">
                    <div class="bg-mattBlackLight px-3 pt-3 pb-1">
                      <div style="overflow: hidden; overflow-x: auto;">
                        <table class="table table-striped table-bordered"
                          style="justify-content: center; align-items: center; text-align: center;">
                          <thead>
                            <tr style="color: white;">
                              <th scope="col">NO</th>
                              <th scope="col">NAMA</th>
                              <th scope="col">TANGGAL</th>
                              <th scope="col">KATEGORI</th>
                              <th scope="col">DESKRIPSI</th>
                              <th scope="col">NOMINAL</th>
                              <th scope="col">BUKTI / DOKUMEN</th>
                              <th scope="col">STATUS</th>
                              <th scope="col">DESKRIPSI STATUS</th>
                              <th colspan="2" scope="col">AKSI</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="color: white;">
                              <td>
                                1
                              </td>
                              <td>
                                Marco Philips Sirait
                              </td>
                              <td>
                                2023-05-07
                              </td>
                              <td>
                                Meninggal
                              </td>
                              <td>
                                Cool
                              </td>
                              <td>
                                Selesai
                              </td>
                              <td>
                                Bla-bla.jpg
                              </td>
                              <td>
                                Belum
                              </td>
                              <td>
                                Sudah Selesai
                              </td>
                              <td style="border: none;">
                                <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                                <a href="#" data-toggle="modal" data-target="#">Edit</a>
                              </td>
                              <td style="border: none;">
                                <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                                <a href="#" data-toggle="modal" data-target="#">Delete</a>
                              </td>
                            </tr>
                          </tbody>
                          <!-- modal -->
                        </table>
                      </div>
                    </div>
                  </div>
                </div>



                <!-- PENGGUNA -->
                <div class="row" id="usr">
                  <div class="col-md mt-3 mb-2">
                    <div class="bg-mattOrangeLight px-3 pt-3 pb-1">
                      <h1 class="mb-2" align="center">PENGGUNA</h1>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md mt-3 mb-2">
                    <div class="bg-mattBlackLight px-3 pt-3 pb-1">
                      <div style="overflow: hidden; overflow-x: auto;">
                        <table class="table table-striped table-bordered"
                          style="justify-content: center; align-items: center; text-align: center;">
                          <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahpengguna">
                            <i class="fas fa-plus-circle mr-2"></i>TAMBAH</a>
                          <thead>
                            <tr style="color: white;">
                              <th scope="col">USERNAME</th>
                              <th scope="col">NAMA</th>
                              <th scope="col">TELEPON</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">ROLE</th>
                              <th colspan="2" scope="col">AKSI</th>
                            </tr>
                          </thead>
                          <?php
                          include 'koneksi.php';
                          $query_pengguna = mysqli_query($koneksi, "SELECT * FROM pengguna");
                          while ($data_pengguna = mysqli_fetch_assoc($query_pengguna)) {
                            ?>
                            <tbody>
                              <tr style="color: white;">
                                <td>
                                  <?php echo $data_pengguna['username']; ?>
                                </td>
                                <td>
                                  <?php echo $data_pengguna['nama']; ?>
                                </td>
                                <td>
                                  <?php echo $data_pengguna['telepon']; ?>
                                </td>
                                <td>
                                  <?php echo $data_pengguna['email']; ?>
                                </td>
                                <td>
                                  <?php echo $data_pengguna['role']; ?>
                                </td>
                                <td style="border: none;">
                                  <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                                  <a href="#" data-toggle="modal"
                                    data-target="#editpengguna<?php echo $data_pengguna['username']; ?>">Edit</a>
                                </td>
                                <td style="border: none;">
                                  <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                                  <a href="#" data-toggle="modal"
                                    data-target="#deletepengguna<?php echo $data_pengguna['username']; ?>">Delete</a>
                                </td>
                              </tr>
                            </tbody>

                            <!-- Update Modal -->
                            <div class="example-modal">
                              <div class="modal fade" id="editpengguna<?php echo $data_pengguna['username']; ?>"
                                role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h3 class="modal-title">Edit Data Pengguna</h3>
                                    </div>
                                    <div class="modal-body">
                                      <form action="pengguna/update_pengguna.php" method="post" role="form">
                                        <?php
                                        $username = $data_pengguna['username'];
                                        $query_pengguna1 = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username'");
                                        while ($data_pengguna1 = mysqli_fetch_assoc($query_pengguna1)) {
                                          ?>
                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-sm-3 control-label text-right">USERNAME</label>
                                              <div class="col-sm-8"><input type="text" class="form-control" name="username"
                                                  value="<?php echo
                                                    $data_pengguna1['username']; ?>"></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-sm-3 control-label text-right">PASSWORD</label>
                                              <div class="col-sm-8"><input type="password" class="form-control" name="password"
                                                  value="<?php echo
                                                    $data_pengguna1['password']; ?>"></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-sm-3 control-label text-right">NAMA</label>
                                              <div class="col-sm-8"><input type="text" class="form-control" name="nama"
                                                  value="<?php echo
                                                    $data_pengguna1['nama']; ?>"></div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-sm-3 control-label text-right">TELEPON</label>
                                              <div class="col-sm-8"><input type="text" class="form-control" name="telepon"
                                                  value="<?php echo
                                                    $data_pengguna1['telepon']; ?>">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-sm-3 control-label text-right">EMAIL</label>
                                              <div class="col-sm-8"><input type="text" name="email" class="form-control"
                                                  value="<?php echo
                                                    $data_pengguna1['email']; ?>">
                                                </input>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="row">
                                              <label class="col-sm-3 control-label text-right"> ROLE</label>
                                              <div class="col-sm-8"><input type="text" name="role" class="form-control"
                                                  value="<?php echo
                                                    $data_pengguna1['role']; ?>">
                                                </input>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button id="noedit" type="button" class="btn btn-danger pull-left"
                                              data-dismiss="modal">Batal</button>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                          </div>
                                          <?php
                                        }
                                        ?>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- modal delete -->
                            <div class="example-modal">
                              <div id="deletepengguna<?php echo $data_pengguna['username']; ?>" class="modal fade"
                                role="dialog" style="display:none;">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h3 class="modal-title">Konfirmasi Hapus Data</h3>
                                    </div>
                                    <div class="modal-body">
                                      <h5 align="center">Apakah anda yakin ingin menghapus pengguna
                                        <?php echo
                                          $data_pengguna['username']; ?><strong><span class="grt"></span></strong> ?
                                      </h5>
                                    </div>
                                    <div class="modal-footer">
                                      <button id="nodelete" type="button" class="btn btn-danger pull-left"
                                        data-dismiss="modal">Cancel</button>
                                      <a href="pengguna/hapus_pengguna.php?username=<?php echo $data_pengguna['username']; ?>"
                                        class="btn btn-primary">Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                          }
                          ?>
                        </table>
                        </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- Simpan Modal  -->
                    <div class="example-modal" style="color:black;">
                      <div id="tambahpengguna" class="modal fade" role="dialog" style="display:none;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title">Tambah Data Baru</h3>
                            </div>
                            <div class="modal-body">
                              <form action="pengguna/simpan_pengguna.php" method="post" role="form">
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-sm-3 control-label text-right">USERNAME</label>
                                    <div class="col-sm-8"><input type="text" class="form-control" name="username"
                                        id="username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-sm-3 control-label text-right">PASSWORD</label>
                                    <div class="col-sm-8"><input type="password" class="form-control" name="password"
                                        id="password">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-sm-3 control-label text-right">NAMA</label>
                                    <div class="col-sm-8"><input type="text" name="nama" class="form-control">
                                      </input>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-sm-3 control-label text-right">TELEPON</label>
                                    <div class="col-sm-8"><input type="text" name="telepon" class="form-control">
                                      </input>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-sm-3 control-label text-right">EMAIL</label>
                                    <div class="col-sm-8"><input type="text" name="email" class="form-control">
                                      </input>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <label class="col-sm-3 control-label text-right">ROLE</label>
                                    <div class="col-sm-8"><input type="text" name="role" class="form-control">
                                      </input>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button id="nosave" type="button" class="btn btn-danger pull-left"
                                    data-dismiss="modal">Batal</button>
                                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <footer class="page-footer font-small blue pt-4 bg-mattBlackLight mt-5">
                      <div class="container-fluid text-center text-md-left">
                        <div class="row">
                          <div class="col-md-10 mt-md-0 mt-3">
                            <h5 class="text-uppercase">Tentang Kita</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, tempore alias odio
                              voluptatibus aperiam facilis autem? Deserunt porro assumenda optio ullam distinctio
                              incidunt nulla
                              nam similique laboriosam. Laudantium sapiente itaque aperiam eveniet beatae, ea, molestias
                              laborum
                              corrupti aliquam nesciunt rem illum, non quia officia repellat saepe temporibus at
                              accusantium ad!
                            </p>
                          </div>
                          <hr class="clearfix w-100 d-md-none pb-3">
                          <div class="col-md-1 mb-md-0 mb-3">
                            <h5 class="text-uppercase">Konten</h5>
                            <ul class="list-unstyled">
                              <li>
                                <a href="#db">Dashboard</a>
                              </li>
                              <li>
                                <a href="#lpr">Laporan</a>
                              </li>
                              <li>
                                <a href="#krt">Kriteria</a>
                              </li>
                              <li>
                                <a href="#dp">Pengajuan</a>
                              </li>
                              <li>
                                <a href="#usr">Pengguna</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-1 mb-md-0 mb-3">
                            <h5 class="text-uppercase">Social</h5>
                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">Instagram</a>
                              </li>
                              <li>
                                <a href="#!">Facebook</a>
                              </li>
                              <li>
                                <a href="#!">Twitter</a>
                              </li>
                              <li>
                                <a href="#!">Website</a>
                              </li>
                              <li>
                                <a href="#!">Reddit</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="/"> Kelompok 6</a>
                      </div>
                    </footer>
      </main>
    </div>
  </div>
  <script>
    new Morris.Line({
      // ID of the element in which to draw the chart.
      element: 'chart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
        { month: "Jan", value: 10000000 },
        { month: 'Feb', value: 20000000 },
        { month: 'Mar', value: 30000000 },
        { month: 'Apr', value: 20000000 },
        { month: 'Mei', value: 40000000 },
        { month: 'Jun', value: 10000000 },
        { month: 'Jul', value: 20000000 },
        { month: 'Aug', value: 30000000 },
        { month: 'Sep', value: 20000000 },
        { month: 'Okt', value: 40000000 },
        { month: 'Nov', value: 20000000 },
        { month: 'Des', value: 10000000 }
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'month',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['value'],
      parseTime: false,
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['value']
    });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
    integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI=" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>