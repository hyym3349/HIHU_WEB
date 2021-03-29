<?php
$conn = mysqli_connect("localhost", "root", "qwopaskl0532", "opentutorials");
mysqli_query($conn, "
    INSERT INTO topic (
        title,
        description,
        created
    ) VALUES (
        'MySQL',
        'MySQL is ....',
        NOW()
    )");
?>