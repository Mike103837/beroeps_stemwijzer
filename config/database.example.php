<?php
declare(strict_types=1);
// Template voor een lokale Plesk MariaDB-configuratie.
// Kopieer naar database.php en vul uitsluitend de waarden uit Plesk in.
// Deel echte wachtwoorden niet en commit database.php niet naar Git.
return [
    "host" => "VUL_PLESK_DATABASE_HOST_IN",
    "port" => 3306,
    "database" => "VUL_DATABASE_NAAM_IN",
    "username" => "VUL_DATABASE_GEBRUIKER_IN",
    "password" => "VUL_WACHTWOORD_IN",
    "charset" => "utf8mb4",
];
