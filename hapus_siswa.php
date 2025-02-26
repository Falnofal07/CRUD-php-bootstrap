<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Validate ID
    if (!is_numeric($id)) {
        echo "Invalid ID.";
        exit;
    }

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $connection->prepare("DELETE FROM tbl_siswa WHERE id_siswa = ?");
    $stmt->bind_param("i", $id);


    if ($stmt->execute()) {
        header("Location: index.php");
        exit;

    } else {
        echo "Error deleting record: " . $stmt->error;
    }
} else {
    echo "ID not found.";
}

?>
