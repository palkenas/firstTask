<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>PHP Pirma Uzduotis</title>
</head>

<body>
    <h1>Pirma uzduotis</h1>

    <?php
    session_start();
    if (!isset($_SESSION['participants'])) {
        $_SESSION['participants'] = [];
    }

    if (isset($_GET['vardas']) && isset($_GET['pavarde']) && isset($_GET['amzius']) && isset($_GET['lytis'])) {
        $_SESSION['participants'][] = ['vardas' => $_GET['vardas'], 'pavarde' => $_GET['pavarde'], 'amzius' => $_GET['amzius'], 'lytis' => $_GET['lytis']];
    }


    if (isset($_GET['vardas']) && isset($_GET['pavarde']) && isset($_GET['amzius']) && isset($_GET['lytis'])) {

        // print_r($_GET);
        // echo "<h1>" . $_GET['vardas'] . " " . $_GET['pavarde'] . " " . $_GET['amzius'] . " " . $_GET['lytis'] . "</h1>";
        "<br>";
        for ($i = 0; $i < count($_SESSION['participants']); $i++) {
            $ptc = $_SESSION['participants'][$i];
            echo "<h1>" . $ptc['vardas'] . " " . $ptc['pavarde'] . " " . $ptc['amzius'] . " " . $ptc['lytis'] . "</h1>";
            echo "<br>";
        }
    }
    ?>


<div class="container">

    <form action="" method="get">
        <label for="">Vardas</label>
        <input type="text" name="vardas" id="vardas">
        <label for="">Pavardė</label>
        <input type="text" name="pavarde" id="pavarde">
        <label for="">Amžius</label>
        <input type="text" name="amzius" id="amzius">
        <label for="">Lytis</label>
        <input type="text" name="lytis" id="lytis">
        <input type="submit" value="Submit">

    </form>
</div>

<div class="container">
    <table id="table" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Amžius</th>
                <th scope="col">Lytis</th>
            </tr>
        </thead>
        <tbody>
             <?php
            foreach ($_SESSION['participants'] as $ptc) {// php foreach paleidžiame ir uždarome php tagą. žemiau esantis html įvyks tiek kartų kiek kartų ciklas prasisuks
            ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $ptc['vardas'];?></td> 
                <td><?php echo $ptc['pavarde'];?> </td>
                <td><?php echo $ptc['amzius'];?> </td>
                <td><?=$ptc['lytis']?> </td> 
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


</body>

</html>