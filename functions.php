<?php 
$year = date("Y");

function greet() {
    date_default_timezone_set("Asia/Jakarta");
    $time = date("H");

    if ( $time >= 4 && $time < 12 ) {
        $day = "pagi";
    } elseif ( $time >= 12 && $time < 16 ) {
        $day = "siang";
    } elseif ( $time >= 16 && $time < 19 ) {
        $day = "sore";
    } else {
        $day = "malam";
    }

    return "Hi, selamat $day";
}

$dbconn = mysqli_connect("localhost", "root", "", "dibimbing");

function query($query) {
    global $dbconn;

    $dbresult = mysqli_query($dbconn, $query);
    $dbrows = [];
    while ( $dbrow = mysqli_fetch_assoc($dbresult) ) {
        $dbrows[] = $dbrow;
    }

    return $dbrows;
}

function tambah($data) {
    global $dbconn;

    $nama = htmlspecialchars($data["nama"]);
    $komentar = htmlspecialchars($data["komentar"]);

    $query = "INSERT INTO portofolio VALUES
        ('', '$nama', '$komentar', CURRENT_TIMESTAMP())
    ";
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}
?>