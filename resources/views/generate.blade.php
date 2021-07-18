<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
</body>
<style>
    .generate {
        margin: 250px auto;
        padding: 10px;
    }
</style>

<div class="container">
    <div class="row justify-content-center generate">
        <div onclick="antrian('A')"class="col-lg-3 btn btn-primary btn-lg">
        <h1>Antrian A</h1>
        </div>

        <div onclick="antrian('B')"class="col-lg-3 btn btn-primary btn-lg">
        <h1>Antrian B</h1>

        <div onclick="antrian('C')"class="col-lg-3 btn btn-primary btn-lg">
        <h1>Antrian C</h1>

        <div onclick="antrian('D')"class="col-lg-3 btn btn-primary btn-lg">
        <h1>Antrian D</h1>
        </div>
        </div>
        </div>
    </div>

</div>
<script>
    function antrian(id){
        $.ajax({
            url:'{{url("generate")}}/' + id,
            type: "GET",
            dataType: "html",
            success: function(data) {
                alert('berhasil generate');
            } 
        });
    }
</script>

</html>