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
    <title>OMSA Medic | @lang('index.title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favico/favicon-16x16.png">
    <link rel="manifest" href="/img/favico/site.webmanifest"> 
    <style>


            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

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

        .placeholder {
            position: relative;
            display: inline-block;
        }

        .placeholder::after {
            position: absolute;
            right: 5px;
            top: 5px;
            content: attr(data-placeholder);
            pointer-events: none;
            opacity: 0.6;
        }

       /* .dropdown-menu{
           display:block;
       } */

      </style>

</head>

<body>
    @php
    $lang = Request::segment(1)
    @endphp

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a href="https://www.omsamedic.com/" class="navbar-brand"><img src="img/logo.png" alt="" width="200px"></a>

            {{-- <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  @if ($lang == 'id')
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAARVBMVEXfAgDPAADskYrvh4Dsd27qa2PoYVi9AADmV03kTULiQzfeMyf2vrryq6ftoJvMGA/8/Pz5+fn39/fz8/Pm5ubg4ODt7u3lScs2AAAAR0lEQVR4AQXBsRGDQBAAMe39e0gcuP86CTEgBSAgIwipzYiMdBmJjITNMJJYd58jhBPf+kEiaCARaFIiWEyA58Gf3bJwI3gBwHkHZeHbupcAAAAASUVORK5CYII=" alt="Bahasa Indonesia" width="16" height="11" style="width: 16px; height: 11px;">
                  @else
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;">    
                  @endif
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/en">
                  
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;">
                    </a></li>
                  <li><a class="dropdown-item" href="/id">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAARVBMVEXfAgDPAADskYrvh4Dsd27qa2PoYVi9AADmV03kTULiQzfeMyf2vrryq6ftoJvMGA/8/Pz5+fn39/fz8/Pm5ubg4ODt7u3lScs2AAAAR0lEQVR4AQXBsRGDQBAAMe39e0gcuP86CTEgBSAgIwipzYiMdBmJjITNMJJYd58jhBPf+kEiaCARaFIiWEyA58Gf3bJwI3gBwHkHZeHbupcAAAAASUVORK5CYII=" alt="Bahasa Indonesia" width="16" height="11" style="width: 16px; height: 11px;">
                    </a></li>
                </ul>
            </div> --}}

        </div>
        
    </nav>

   
    <div class="container mt-4">
        {{-- <h3 class="mb-5 mt-5 text-center"><b>{{ $title }}</b> - OMSA MEDIC</h3> --}}
        <h3 class="mb-5 mt-5 text-center"><b>@lang('index.welcome')</b> - OMSA MEDIC</h3>
        
        <form action="/hearriskcalculate/{{ $lang }}" method="post" enctype="multipart/form-data">
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
                                                <label>@lang('index.gender.label')</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" value="L" checked>
                                              <label class="form-check-label">@lang('index.gender.l')</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="type" value="P">
                                              <label class="form-check-label">@lang('index.gender.p')</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>@lang('index.age.label')</label>
                                            <select class="form-select" aria-label="Default select example" name="agerange">
                                                <option value="" selected>@lang('index.age.option')</option>
                                                <option value="<=44">≤44</option>
                                                <option value="45-49">45-49</option>
                                                <option value="50-54">50-54</option>
                                                <option value="55-59">55-59</option>
                                                <option value="60-64">60-64</option>
                                                <option value="65-69">65-69</option>
                                                <option value=">=70">≥70</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>@lang('index.weight.label')</label>
                                            <div class="placeholder" data-placeholder="kg">
                                                <input type="number" class="form-control" placeholder="@lang('index.weight.placeholder')" name="weight" required>
                                            </div>
                                            <span class="badge bg-danger mt-2">@lang('index.weight.note')</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="form-group mb-2">
                                            <div>
                                                <label>@lang('index.smoker.label')</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="smoking" value="Y" checked>
                                              <label class="form-check-label">@lang('index.smoker.y')</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="smoking" value="N">
                                              <label class="form-check-label">@lang('index.smoker.n')</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>@lang('index.blood.label')</label>
                                            <select class="form-select" aria-label="Default select example" name="bloodpressure">
                                                <option value="" selected>@lang('index.blood.option')</option>
                                                <option value="<120"> <120</option>
                                                <option value="120-139">120-139</option>
                                                <option value="140-159">140-159</option>
                                                <option value="160-179">160-179</option>
                                                <option value=">179">>179</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>@lang('index.height.label')</label>
                                            <div class="placeholder" data-placeholder="cm">
                                                <input type="number" class="form-control" placeholder="@lang('index.height.placeholder')" name="height" required>
                                            </div>
                                            <span class="badge bg-danger mt-2">@lang('index.height.note')</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button class="btn me-md-2" type="submit" style="background-color: #e4b73a;">@lang('index.buttonCalculate')</button>
                                            </div>
                                            {{-- <a href="" type="button" class="btn btn-success float-end mb-3"> Hitung Resiko Saya</a> --}}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div> 
                    </div>
                    @if ( session()->has('heartriskpercent') )
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <h5>@lang('index.cardTittle')</h5>

                                    @if ($lang == 'id')
                                            <h2 
                                            @if ( session("category") == 'Resiko Rendah')
                                            style="font-size: 60px;
                                            color: green;"
                                            @elseif(session("category") == 'Resiko Sedang')
                                            style="font-size: 60px;
                                            color: #dcb434;"
                                            @elseif(session("category") == 'Resiko Tinggi')
                                            style="font-size: 60px;
                                            color: #c0232f;;"
                                            @endif
                                            >{{ session("heartriskpercent")}}%</h2>
                                  

                                            <p @if ( session("category") == 'Resiko Rendah')
                                                    style="color: green;"
                                                @elseif(session("category") == 'Resiko Sedang')
                                                    style="color: #dcb434;"
                                                @elseif(session("category") == 'Resiko Tinggi')
                                                    style="color: #c0232f;"
                                                @endif                                
                                                >{{ session("category")}}</p>
                                        
                                            
                                            @else
                                            
                                                <h2 
                                                @if ( session("category") == 'Low Risk')
                                                style="font-size: 60px;
                                                color: green;"
                                                @elseif(session("category") == 'Medium Risk')
                                                style="font-size: 60px;
                                                color: #dcb434;"
                                                @elseif(session("category") == 'High risk')
                                                style="font-size: 60px;
                                                color: #c0232f;;"
                                                @endif
                                                >{{ session("heartriskpercent")}}%</h2>
                                    

                                                <p @if ( session("category") == 'Low Risk')
                                                        style="color: green;"
                                                    @elseif(session("category") == 'Medium Risk')
                                                        style="color: #dcb434;"
                                                    @elseif(session("category") == 'High risk')
                                                        style="color: #c0232f;"
                                                    @endif                                
                                                    >{{ session("category")}}</p>
                                        @endif

                                    <p><span>{{ session("explain")  }}</span></p>
                                </div>
                                <div class="form-group">
                                    <div class="d-grid gap-2 justify-content">
                                        @if ($lang == 'id')
                                        <a href="https://www.omsamedic.com/medical-check-up/" class="btn me-md-2" type="button" style="background-color: #e4b73a;">@lang('index.buttonRecomendation')</a>
                                    @else
                                        <a href="https://www.omsamedic.com/en/health-check-up/" class="btn me-md-2" type="button" style="background-color: #e4b73a;">@lang('index.buttonRecomendation')</a>
                                    @endif
                                        <button class="btn me-md-2 text-white" type="button" style="background-color: #5c050d;"  onClick="window.location.reload()">@lang('index.buttonRecount')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    
    </html>