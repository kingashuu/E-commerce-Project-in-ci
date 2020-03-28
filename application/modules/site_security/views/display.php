<h1>Your tasks</h1>

<?php
foreach ($query->result() as $row) {
 echo "<h2>".$row->title."</h2>";
}

echo "<hr>";
$firstname = "Jerry";
$lastname = "van Heerwaarden";
//manier 1 om een andere tabel op te roepen
$this->load->module('nofun');
$this->nofun->sayhello($firstname, $lastname);


echo "<hr>";
//manier 2
echo Modules::run('nofun/sayhello2', $firstname);


?>