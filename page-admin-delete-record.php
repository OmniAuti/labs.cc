<?php
/* 
Template Name: QR Delete Confirmation
Template Post Type: page
*/ 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //
        $lab_id = $_POST['lab_id'];
        $refresh_url = $_POST['refresh_url'];
        //
        global $wpdb;
        $result = $wpdb->query("DELETE FROM {$wpdb->prefix}lab_data WHERE lab_id = '$lab_id'");
        //
        if ($result >= 1) {
            echo("Record for $lab_id Deleted");
            header("Location: $refresh_url ");
            exit();
        } else {
            throw new Exception('Error Deleting Record');
        }
    }
?>

<style>
    a {
        text-decoration: none;
        color: white;
        background: grey;
        padding: 20px;
        border-radius: 4px;
        margin-right: 40px;
        margin-bottom: 40px;
        margin-top: 100px;
	}

    main {
        padding: 100px;
    }
</style>
<main>
    <a href="/">Home</a>
</main>