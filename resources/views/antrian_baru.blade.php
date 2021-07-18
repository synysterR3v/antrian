<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key="></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <div class="col-lg-3 mt-3">
        <h2>Antrian A</h2>

        @foreach($antrian as $antrianA)

            @if($antrianA->type_antrian == 'A')

            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h1>{{$antrianA->nama}}</h1>

                        <h3>Nomor {{$antrianA->inisial}}{{$antrianA->nomor}}</h3>

                        <button onclick="panggilAntrian('<?= $antrianA->id_antrian ?>')" type="button" class="btn btn-primary">Panggil</button>
                    
                        <button onclick="adaAntrian('<?= $antrianA->id_antrian ?>')" type="button" class="btn btn-primary">Ada</button>                    
                    
                        <button onclick="tidakAdaAntrian('<?= $antrianA->id_antrian ?>')" type="button" class="btn btn-primary">Tidak ada Antrian</button>
                    </div>
                </div>
            </div>

        @endif

        @endforeach
    </div>

    <div class="col-lg-3 mt-3">
        <h2>Antrian B</h2>

        @foreach($antrian as $antrianB)

            @if($antrianB->type_antrian == 'B')

            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h1>{{$antrianB->nama}}</h1>

                        <h3>Nomor {{$antrianB->inisial}}{{$antrianB->nomor}}</h3>

                        <button onclick="panggilAntrian('<?= $antrianB->id_antrian ?>')" type="button" class="btn btn-primary">Panggil</button>
                    
                        <button onclick="adaAntrian('<?= $antrianB->id_antrian ?>')" type="button" class="btn btn-primary">Ada</button>                    
                    
                        <button onclick="tidakAdaAntrian('<?= $antrianB->id_antrian ?>')" type="button" class="btn btn-primary">Tidak ada Antrian</button>
                    </div>
                </div>
            </div>

        @endif

        @endforeach
    </div>
    <div class="col-lg-3 mt-3">
        <h2>Antrian C</h2>

        @foreach($antrian as $antrianC)

            @if($antrianC->type_antrian == 'C')

            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h1>{{$antrianC->nama}}</h1>

                        <h3>Nomor {{$antrianC->inisial}}{{$antrianC->nomor}}</h3>

                        <button onclick="panggilAntrian('<?= $antrianC->id_antrian ?>')" type="button" class="btn btn-primary">Panggil</button>
                    
                        <button onclick="adaAntrian('<?= $antrianC->id_antrian ?>')" type="button" class="btn btn-primary">Ada</button>                    
                    
                        <button onclick="tidakAdaAntrian('<?= $antrianC->id_antrian ?>')" type="button" class="btn btn-primary">Tidak ada Antrian</button>
                    </div>
                </div>
            </div>

        @endif

        @endforeach
    </div>
    <div class="col-lg-3 mt-3">
        <h2>Antrian D</h2>

        @foreach($antrian as $antrianD)

            @if($antrianD->type_antrian == 'D')

            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h1>{{$antrianD->nama}}</h1>

                        <h3>Nomor {{$antrianD->inisial}}{{$antrianD->nomor}}</h3>

                        <button onclick="panggilAntrian('<?= $antrianD->id_antrian ?>')" type="button" class="btn btn-primary">Panggil</button>
                    
                        <button onclick="adaAntrian('<?= $antrianD->id_antrian ?>')" type="button" class="btn btn-primary">Ada</button>                    
                    
                        <button onclick="tidakAdaAntrian('<?= $antrianD->id_antrian ?>')" type="button" class="btn btn-primary">Tidak ada Antrian</button>
                    </div>
                </div>
            </div>

        @endif

        @endforeach
    </div>
    
</body>
<script>
        function panggilAntrian(id, nomor) {
            $.ajax({
                url: '{{url('panggil')}}?id=' + id,
                
                type: "GET",

                dataType: "html",

                success: function (data) {
                    //alert('berhasil generate');
                }


            });
        }

        function adaAntrian(id) {
            $.ajax({
                url: '{{url('ada-antrian')}}?id=' + id,

                type: "GET"'

                dataType: "html",

                success: function (data) {
                    $('#antrianMasuk').load("{{url('antrian-baru')}}", function(e){});
                }
            });
        }

        function tidakAdaAntrian(id) {
            $.ajax({

                url: '{{url('tidak-ada')}}?id='+ id,

                type: "GET",

                dataType: "html",

                succes: function (data) {
                    $('#antrianMasuk').load("{{url('antrian-baru')}}", function(e){});
                }
            });
        }
    </script>
</html>