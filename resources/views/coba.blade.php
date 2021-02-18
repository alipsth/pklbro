<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/frondend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frondend/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frondend/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frondend/css/fontawesome.css')}}">



        <title>Bootstrap Template </title>
    </head>

    <body>

        <!-- slider start  -->
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <section id="home" class="home">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/frondend/img/aa.png')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block" >
                            <h2>Welcome to Tracking Covid</h2>
                            <p>Live Data Kasus COVID-19 di Indonesia dan Dunia</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frondend/img/dd.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>COVID-19</h2>
                            <p>adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
                                Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa penanganan khusus.</p>                        
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/frondend/img/cc.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>TENTANG COVID-19</h2>
                            <p>Virus yang menyebabkan COVID-19 terutama ditransmisikan melalui droplet (percikan air liur) 
                            yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau mengembuskan nafas. 
                            Droplet ini terlalu berat dan tidak bisa bertahan di udara, 
                            sehingga dengan cepat jatuh dan menempel pada lantai atau permukaan lainnya.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </section>

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

        <div class="row">
         
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-plus"></i> <br>
              <h5><p><b>Jumlah Positif Indonesia</b></p></h5>  
              <span data-toggle="counter-up">{{ $positif }}</span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-heart-beat-alt"></i> <br>
              <h5><p><b>Jumlah Sembuh Indonesia</b></p></h5>
              <span data-toggle="counter-up">{{ $sembuh }}</span>
              <p>Orang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-skull-danger"></i> <br>
              <h5><p><b>Jumlah Meninggal Indonesia</b></p></h5>
              <span data-toggle="counter-up">{{ $meninggal }}</span>
              <p>Orang</p>
            </div>
          </div>
         
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-globe"></i> <br>
              <h5><p><b>Jumlah Total Positif di Dunia</b></p></h5>
              <span data-toggle="counter-up"><?php echo $posglobal['value'] ?></span>
              <p>Orang</p>
            </div>
          </div>
          
        </div><br><br>
        
        <div class="col text-center">
            <h6><p>Update terakhir : {{ $tanggal }}</p></h6>
        </div> 
      </div>
            <!-- End Counts Section -->
  

            <!-- Global  -->
            <section id="global" class="global">
                <div class="global">
                    <div class="container_width">
                    <div class="card">
                        <div class="container my-4">                      
                                <div class="card-header ">
                                        </div>
                                        <div class="card-body" >
                                            <h1 class="text-center mb-4">Data Kasus Corona virus di Dunia</h1>
                                            <div style="height:600px;overflow:auto;margin-right:15px;">
                                            <table class="table table-striped table-bordered data">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Negara</th>
                                                        <th scope="col">Positif</th>
                                                        <th scope="col">Sembuh</th>
                                                        <th scope="col">Meninggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                
                                                    @php
                                                        $no = 1;    
                                                    @endphp

                                                    @foreach($dunia as $data)
                                                    <tr>
                                                        <td> <?php echo $no++ ?></td>
                                                        <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                                                        <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                                                        <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                                                        <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                       </div>
                                  </section>
                            <!-- end global -->

                <!-- Indonesia -->
                <section id="indonesia" class="indonesia">
                    <div class="indonesia">
                    <div class="container_width">
                    <div class="card">
                        <div class="container my-4">
                            <div class="card-header ">
                            </div>
                    <div class="card-body" >
                        <h1 class="text-center my-3">Data Kasus Corona virus di Indonesia</h1>
                        <div style="height:600px;overflow:auto;margin-right:15px;">
                        <table class="table table-striped table-bordered data">                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Positif</th>
                                    <th scope="col">Sembuh</th>
                                    <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
            
                                @php
                                    $no = 1;    
                                @endphp
                               
                               <tr>
                                    @foreach ($tampil as $item)
                                    <td> <?php echo $no++ ?></td>
                                    <td>{{$item->nama_provinsi}}</td>
                                    <td>{{number_format($item->positif)}}</td>
                                    <td>{{number_format($item->sembuh)}}</td>
                                    <td>{{number_format($item->meninggal)}}</td>
                                </tr>
                                </tbody>
                                    @endforeach
                            </table>       
                            </div>
                        </div>
                        </div>
                        </div>
                        </section> 
            <!-- end Indonesia -->
            <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+62 (831) 5100-2028</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block">alipsth7@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
                
        <!-- Footer -->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>
        <!-- End Footer -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    </body>
</html>