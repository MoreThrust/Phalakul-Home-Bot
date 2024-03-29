<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="TimePicki/css/timepicki.css" rel="stylesheet">

    <title>ตั้งเวลาหลอดไฟ</title>
</head>

<body>
    <div class="container bg-dark text-white">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">

                <?php $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/living_lamp_time_on', CURLOPT_USERAGENT => 'Codular Sample cURL Request'
                ));
                $resp = curl_exec($curl);
                curl_close($curl);
                $val = explode('"', $resp);
                $st_ton = $val[7];

                ?>

                เวลาเปิดที่ตั้งไว้ <?php echo $st_ton; ?> น.
                
                <br>

                <div class="inner cover indexpicker">
                    <h1 class="cover-heading">กรอกเวลาที่ต้องการ</h1>
                    <p class="lead">Timepicki is a light weight jQuery Time Picker plugin for using in form submission websites.
                        User can easily pick time in the form with using it.</p>
                    <input id="timepicker1" type="text" name="timepicker1" />
                </div>

                <br>

                <button type="button" id="closewindowbutton" class="btn btn-primary">บันทึกเวลา</div>

        </div>
        <div class="col-sm"></div>
    </div>
    </div>

    <script src="TimePicki/js/timepicki.js"></script>
    <script>
        $('#timepicker1').timepicki();
    </script>
    <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <script src="liff-starter.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>