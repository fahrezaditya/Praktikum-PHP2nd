<html>
    <head>
        <title>Hasil</title>
    </head>
    <?php
    if (isset($_POST["submit"])) {
        $suhu=$_POST['suhu'];
        $konversi=$_POST['konversi'];
        $input=$_POST['input'];
        $a="";
        $b="";

        if ($suhu=="celcius" && $konversi=="reamur") {
            $hasil=(4/5)*$input;
            $a="CELCIUS";
            $b="REAMUR";
        }else if ($suhu=="celcius" && $konversi=="fahrenheit") {
            $hasil=((9/5)*$input)+32;
            $a="CELSIUS";
            $b="FAHRENHEIT";
        }else if ($suhu=="celcius" && $konversi=="kelvin") {
            $hasil=$input+273;
            $a="CELCIUS";
            $b="KELVIN";
        }else if ($suhu=="reamur" && $konversi=="celcius") {
            $hasil=(5/4)*$input;
            $a="REAMUR";
            $b="CELCIUS";
        }else if ($suhu=="reamur" && $konversi=="fahrenheit") {
            $hasil=((9/4)*$input)+32;
            $a="REAMUR";
            $b="FAHRENHEIT";
        }else if ($suhu=="reamur" && $konversi=="kelvin") {
            $hasil=((5/4)*$input)+273;
            $a="REAMUR";
            $b="KELVIN";
        }else if ($suhu=="fahrenheit" && $konversi=="celcius") {
            $hasil=(5/9)*($input-32);
            $a="FAHRENHEIT";
            $b="CELCIUS";
        }else if ($suhu=="fahrenheit" && $konversi=="reamur") {
            $hasil=(4/9)*($input-32);
            $a="FAHRENHEIT";
            $b="REAMUR";
        }else if ($suhu=="fahrenheit" && $konversi=="kelvin") {
            $hasil=((5/9)*($input-32))+273;
            $a="FAHRENHEIT";
            $b="KELVIN";
        }else if ($suhu=="kelvin" && $konversi=="celcius") {
            $hasil=$input-273;
            $a="KELVIN";
            $b="CELCIUS";
        }else if ($suhu=="kelvin" && $konversi=="reamur") {
            $hasil=(4/9)*($input-273);
            $a="KELVIN";
            $b="REAMUR";
        }else if ($suhu=="kelvin" && $konversi=="fahrenheit") {
            $hasil=((9/5)*($input-273))+32;
            $a="KELVIN";
            $b="FAHRENHEIT";
        }else {
            exit();
        }
    }
    ?>
    <style>
        *{box-sizing: border-box;}
        [class*="col-"]{
            padding: 15px;
            float: left;
            width: 100%;
        }

        @media only screen and (min-width: 600px){
            /*untuk tablet*/
            .col-s-1{width: 8.33%;}
            .col-s-2{width: 16.66%;}
            .col-s-3{width: 25%;}
            .col-s-4{width: 33.33%;}
            .col-s-5{width: 41.66%;}
            .col-s-6{width: 50%;}
            .col-s-7{width: 58.33%;}
            .col-s-8{width: 66.66%;}
            .col-s-9{width: 75%;}
            .col-s-10{width: 83.33%;}
            .col-s-11{width: 91.66%;}
            .col-s-12{width: 100%;}
        }
        @media only screen and (min-width: 768px){
            /*untuk dekstop*/
            .col-1{width: 8.33%;}
            .col-2{width: 16.66%;}
            .col-3{width: 25%;}
            .col-4{width: 33.33%;}
            .col-5{width: 41.66%;}
            .col-6{width: 50%;}
            .col-7{width: 58.33%;}
            .col-8{width: 66.66%;}
            .col-9{width: 75%;}
            .col-10{width: 83.33%;}
            .col-11{width: 91.66%;}
            .col-12{width: 100%;}
        }
        .container{
            width: 80%;
            margin: 0 auto;
        }
        .control{
            font-size: 20px;
        }
        .button{
            float: right;
            background: rgb(230, 230, 230);
            color: black;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            font-weight: bolder;
            letter-spacing: 1px;
        }
        fieldset{
            border-radius: 10px;
        }
        .fieldset legend{
            font-weight: bolder;
        }
    </style>
    <body>
        <br>
        <div class="container">
            <fieldset>
                <legend class="control"><b>HASIL</b></legend>
                <div class="col-12 control">
                    <b>SUHU <u><?=@$a?></u> AWAL ADALAH <u><?=@$input?></u></b>
                </div>
                <div class="col-12 control">
                    <b>HASIL KONVERSI KE SUHU <u><?=@$b?></u> ADALAH <u><?=@$hasil?></u></b>
                </div>
                <form>
                    <button type="button" onclick="history.back();" class="button">Kembali</button>
                </form>
            </fieldset>
        </div>
    </body>
</html>