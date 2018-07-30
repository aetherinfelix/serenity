<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
        <link href="{{ asset('css/boot.css') }}" rel="stylesheet">
    <title>Email from TheFatBeardedVegan.com</title>
</head>
<body>
  <div class="container">
      <div class="row bg-dark shadow-sm">
          <div class="col-3">
              <img src="http://serenity.dev/images/veganlogo.jpg" class="img-thiumbnail" style="width:100px;height:100px;" alt="Vegan Logo">
          </div>
          <div class="col-9">
              <h2>THE FAT BEARDED VEGAN</h2>
          </div>
        </div>
    <div class="row">
            <div class="col-3">
                    <!--Spacing-->
                </div>
                <div class="col-9">
                        <p>Dear {{ $name }},</p>
                        <p>Thank you for your message.</p>
                            <p>Sincerely, Mike.</p>
                    </div>
            
</body>
</html>