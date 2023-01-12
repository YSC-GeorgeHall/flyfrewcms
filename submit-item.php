<?php
    require_once 'admin_config.php';


    $itemName = $_POST['itemName'];
    $itemName2 = $_POST['itemName2'];
    $options = $_POST['option'];
    $options2 = $_POST['option2'];

    // Insert the item into the items table
    $sql = "INSERT INTO items (name) VALUES ('$itemName')";
    if ($conn->query($sql) === TRUE) {
        $itemId = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert the options into the options table
    foreach ($options as $option) {
        $sql = "INSERT INTO options (item_id, name) VALUES ($itemId, '$option')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $sql = "INSERT INTO items (name) VALUES ('$itemName2')";
    if ($conn->query($sql) === TRUE) {
        $itemId2 = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

        // Insert the options into the options table
        foreach ($options2 as $option2) {
            $sql = "INSERT INTO options (item_id, name) VALUES ($itemId2, '$option2')";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

    $conn->close();
?>
