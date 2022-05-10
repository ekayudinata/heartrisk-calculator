<!doctype html>
<html lang="en">

<head>
    <!-- required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/formstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- <title>OMSA Medic | {{ $title }}</title> --}}
    <title>OMSA Medic | Heart Risk Calculator</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favico/favicon-16x16.png">
    <link rel="manifest" href="/img/favico/site.webmanifest"> 
    <style>
        h1 {
            display: flex;
            font-size: 16px;
            flex-direction: row;
        }
        h1:after{
            content: "";
            flex: 1 1;
            border-bottom: 1px solid;
            margin: auto;
        }
        h1:after {
            margin-left: 10px
        }
      </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a href="https://www.omsamedic.com/" class="navbar-brand"><img src="img/logo.png" alt="" width="200px"></a>
        </div>
    </nav>

    <div class="container mt-4">
        {{-- <h3 class="mb-5 mt-5 text-center"><b>{{ $title }}</b> - OMSA MEDIC</h3> --}}
        <h3 class="mb-5 mt-5 text-center"><b>Heart Risk Calculator</b> - OMSA MEDIC</h3>
        
        <form action="/" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="form-group mb-2">
                                            <div>
                                                <label>Jenis Kelamin Anda</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" value="L" checked>
                                              <label class="form-check-label">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" value="P">
                                              <label class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Berapa Usia Anda?</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="" selected>Pilih Usia Anda</option>
                                                <option value="55-59">55-59</option>
                                                <option value="60-64">60-64</option>
                                                <option value="65-69">65-69</option>
                                                <option value="≥70">≥70</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Berapa Berat Badan Anda?</label>
                                            <input type="number" class="form-control" placeholder="Masukkan berat badan" name="" required>
                                            <span class="badge bg-danger mt-2">*Tidak berlaku angka desimal</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="form-group mb-2">
                                            <div>
                                                <label>Apakah Anda merokok?</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" value="Y" checked>
                                              <label class="form-check-label">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" value="N">
                                              <label class="form-check-label">Tidak</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Berapa tekanan darah atas/sistol Anda?</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="" selected>Pilih tekanan darah atas/sistol Anda</option>
                                                <option value="<120"> <120 </option>
                                                <option value="120-139">120-139</option>
                                                <option value="140-159">140-159</option>
                                                <option value="160-179">160-179</option>
                                                <option value="≥180">≥180</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>Berapa tinggi badan Anda?</label>
                                            <input type="number" class="form-control" placeholder="Masukkan usia" name="" required>
                                            <span class="badge bg-danger mt-2">*Tidak berlaku angka desimal</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button class="btn me-md-2" type="button" style="background-color: #e4b73a;">Hitung Resiko Saya</button>
                                            </div>
                                            {{-- <a href="" type="button" class="btn btn-success float-end mb-3"> Hitung Resiko Saya</a> --}}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <h5>Risiko Jantung Anda</h5>
                                    <h2 style="font-size: 60px; color: green;">2%</h2>
                                    <p style="color: green;">Berisiko rendah</p>
                                    <p><span>Selamat, risiko jantung Anda termasuk dalam kategori <b>Rendah / Low Risk</b>. Jaga terus kondisi kesehatan jantung Anda dengan melakukan pemeriksaan jantung rutin. Jangan sampai risiko jantung Anda meningkat tahun depan!</span></p>
                                </div>
                                <div class="form-group">
                                    <div class="d-grid gap-2 justify-content">
                                        <button class="btn me-md-2" type="button" style="background-color: #e4b73a;">Lihat Rekomendasi Paket</button>
                                        <button class="btn me-md-2 text-white" type="button" style="background-color: #5c050d;">Hitung Ulang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kirim Lamaran Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Pastikan semua data sudah benar! kirim lamaran?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
                </div>
            </div>

        </form>


    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center" id="txtReserved">
                <span class="text-muted">© <?= date("Y") ?>, OMSA GROUP. All right reserved</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" id="icoSosmed">
                <li class="ms-3">
                    <a href="https://www.facebook.com/omsamedic/" class="text-muted">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="https://www.instagram.com/omsa.medic" class="text-muted">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="https://www.youtube.com/channel/UCi9JBjs0vbY9i3uV8L7-lag" class="text-muted">
                        <i class="bi bi-youtube"></i>
                    </a>
                </li>
            </ul>
        </footer>
    </div>

    <script src=" js/bootstrap.bundle.min.js">
    </script>
    <script src="js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
    {{-- <script>
        function thisFileUpload() {
            document.getElementById("pp").click();
        };
    </script>
    
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        

    </script> --}}
    
    {{-- <script>

        $(document).ready(function(){

            $('#wilayah').on('change',function(){

                var regionsId = $(this).val(); 
                if(regionsId){
                    $.ajax({
                        url:'/recruit/'+regionsId, 
                        type:'GET', 
                        data:{"_token":"{{ csrf_token() }}"}, 
                        dataType:"json", 
                        success:function(data){ 

                            if(data.length > 0){
                                $('#posisi').empty();
                                $('#posisi').append('<option hidden>Pilih Posisi</option>'); 
                                $.each(data, function(index, showdata){
                                $('select[name="workfield_id"]').append('<option value="'+ showdata.id +'">' + showdata.name+ '</option>');
                                })
                            }else{
                                $('#posisi').empty();
                                $('#posisi').append('<option>Tidak ada lowongan </option>'); 
                            }

                        }
                    }); 
                }

            })

        })
    </script> --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    
    </html>