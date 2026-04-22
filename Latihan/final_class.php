<?php
final class Database {
    public function connect() {
        echo "Koneksi Database";
    }
}
// ERROR jika dilakukan

class MyDB extends Database{
    
}

?>