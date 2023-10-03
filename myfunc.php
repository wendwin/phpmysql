<?php 
// koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'belajarphp');
// query ke DB
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>