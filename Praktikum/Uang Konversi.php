<html>
    <head>
        <title>Hasil</title>
    </head>
    <?php
    if (isset($_POST["submit"])) {
        $nominal=$_POST['nominal'];
        $konversi=$_POST['konversi'];
        $hasil=0;
        $a="";
        $b="";

        if ($konversi=="dolar") {
            if ($nominal>=14241.55) {
                $hasil=floor((1/14241.55)*$nominal);
            }else {
                $hasil=(1/14203)*$nominal;
            }
            $a="Rupiah";
            $b="US Dolar";
        }else if ($konversi=="rupiah") {
            $hasil=floor(14241.553*$nominal);
            $a="US Dolar";
            $b="Rupiah";
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
                <legend class="control"><b>Hasil konversi</b></legend>
                <div class="col-12 control">
                    <b><u><?=@$nominal?> <?=@$a?></u> sama dengan <u><?=@$hasil?> <?=@$b?></u></b>
                </div>
                <form>
                    <button type="button" onclick="history.back();" class="button">Kembali</button>
                </form>
            </fieldset>
        </div>
    </body>
</html>