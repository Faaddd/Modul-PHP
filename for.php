<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bulan=array("Januari","Januari","Januari","Januari","Januari","Januari","Januari","Januari","Januari","Januari","Januari","Januari",);
    for($i-0;$i<count ($bulan);$i++)
    {
        echo(($i+1). "$bulan[$i] <br>");
    }
    ?>
</body>
</html>