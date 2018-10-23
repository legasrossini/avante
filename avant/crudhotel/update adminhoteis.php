<?php
$servername = "localhost";
$username = "root";
$dbname = "projeto";

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$numero = $_GET["numero"];
$pais = $_GET["pais"];
$estado = $_GET["estado"];
$cidade = $_GET["cidade"];
$cep = $_GET["cep"];
$quartob = $_GET["quartob"];
$quartobdois = $_GET["quartobdois"];
$quartol = $_GET["quartol"];
$quartoldois = $_GET["quartoldois"];
$horaabertura = $_GET["horaabre"];
$horaencerra = $_GET["horafecha"];
$wifi = $_GET["wifi"];
$academia = $_GET["academia"];
$restaurante = $_GET["restaurante"];
$obs = $_GET["obs"];
$urlfoto = $_GET["urlfoto"];

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO hotel (nome, endereco, numero, pais, estado, cidade, cep, quartob, quartobdois, quartol, quartoldois, horaabertura, horaencerra, wifi, academia, restaurante, obs, pathFoto)
VALUES ('$nome', '$endereco', '$numero', '$pais', '$estado', '$cidade', '$cep', $quartob, $quartobdois, $quartol, $quartoldois, '$horaabertura', '$horaencerra', $wifi, $academia, $restaurante, '$obs', '$urlfoto')";

if (mysqli_query($conn, $sql)) {

    header("Location: /avant/adminhoteis.html");
    alert ('Dados inseridos com sucesso!');
    die();

    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>