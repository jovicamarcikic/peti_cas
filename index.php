<?php
$konekcija = mysqli_connect('localhost', 'root', "", "kuca");
$korisnici = mysqli_query($konekcija, "SELECT * FROM korisnici");

echo $korisnici->num_rows;
echo "<br>";

if ($korisnici->num_rows > 0)
{
    echo "Pronadeni podaci";
    while ($redubazi = $korisnici->fetch_assoc())
    {
        echo $redubazi["Ime"];
    }
}