<?php

function query($query)
{
    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
