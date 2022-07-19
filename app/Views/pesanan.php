<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISITI</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Cinema 1011</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">  
                            <a class="nav-link active" aria-current="page" href="#">Now Playing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Upcoming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Theater</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promotion</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>  

    <div class="container"  style="padding-top:2cm">
        <div class="container">
            <div class="row">
              <div class="col">
                Now Playing
                <div class="card" style="width: 18rem;">
                    <img src="img/cars1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cars</h5>
                      <a href="pesanan.html" class="btn btn-primary">Beli Tiket</a>
                    </div>
                  </div>
              </div>
              <div class="col">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jenis Film</td>
                        <td>:Kartun , Komedi</td>
                      </tr>
                      <tr>
                        <td>Produser</td>
                        <td>:Thornton</td>
                      </tr>
                      <tr>
                        <td>Sutradara</td>
                        <td>:John Lasseter</td>
                      </tr>
                      <tr>
                        <td>Penulis</td>
                        <td>:John Lasseter; Joe Ranft; Jorgen Klubien</td>
                      </tr>
                      <tr>
                        <td>Produksi</td>
                        <td>:Walt Disney</td>
                      </tr>
                      <tr>
                        <td>Durasi</td>
                        <td>:156 Menit</td>
                      </tr>
                      <tr>
                        <td>Pemeran</td>
                        <td>:Owen Wilson, Paul Newman, Larry Cable Guy</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="col">
                <img src="img/umur.png">
              </div>
            </div>
          </div>
    </div>

    <div>
        <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
              </ul>
              <p class="text-center text-muted">&copy; 2022 Cinema 1011, Inc</p>
            </footer>
          </div>
    </div>

    </body>
    </html>