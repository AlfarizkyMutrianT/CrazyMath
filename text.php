<?php

$db = mysqli_connect("localhost", "root", "6101400153", "crazymath");

$query = "INSERT INTO leaderboard (username, score, tanggal) VALUES ('ujang', 30, '2019-04-04 13:26:00')";

$result = mysqli_query($db, $query);

if ($result) {
    echo "Insert Data Sukses";
} else {
        echo "Insert Data Gagal";
}