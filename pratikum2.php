<!DOCTYPE html>
<html>
<head>
    <title>Mencari Data Orang</title>
</head>
<body>
    <form action="" method="get">
    Silahkan Masukan Nama : <input type="text" name="namaorang">
    <input type="submit" name="tombol" value="kirim">
    </form>
<br><br>
<?php
if(isset($_GET['namaorang'])){

$namaorang = $_GET['namaorang'];
$user = array(
    array(
        "nama"              => "Arsene Lupin",
        "nik"               => "1234",
        "jenis_kelamin"     => "Male",
        "tgl_lahir"         => "1902-03-23"
    ),
    array(
        "nama"              => "Sherlock Holmes",
        "nik"               => "4321",
        "jenis_kelamin"     => "Male",
        "tgl_lahir"         => "1812-01-11"
    ),
    array(
        "nama"              => "Irene Adler",
        "nik"               => "7890",
        "jenis_kelamin"     => "Female",
        "tgl_lahir"         => "1232-04-13"
    )
);

$y=0;
$n=0;

foreach($user as $u){
if(strtoupper($u["nama"]) == strtoupper($namaorang)){
$y=1;
$n=$u;
} 
}

if($y){

echo "<ul>";
echo "<li>Nama              : ".$n["nama"]."</li>";
echo "<li>Nik               : ".$n["nik"]."</li>";
echo "<li>Kelamin           : ".$n["jenis_kelamin"]."</li>";
echo "<li>Tanggal Lahir     : ".$n["tgl_lahir"]."</li>";
echo "</ul>";
}
}

?>
<br>


</body>
</html>