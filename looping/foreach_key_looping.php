<?php
$siswa = [
    [
        "nama" => "Yafi Musyaffa Imron",
        "kelas" => "XI RPL 2",
        "email" => "yafimusyafa@example.com"
    ],
    [
        "nama" => "Ali Imron",
        "kelas" => "XI RPL 2",
        "email" => "aliimron@example.com"
    ]
];

echo "==========================" . "\n";
foreach ($siswa as $key => $value) {
    echo $value['nama'] . "\n";
    echo $value['kelas'] . "\n";
    echo $value['email'] . "\n";
}
