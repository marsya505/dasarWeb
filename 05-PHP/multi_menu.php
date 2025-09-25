<?php
$menu = [
    [ "nama" => "Beranda" ],
    [ "nama" => "Berita",
        "subMenu" => [
    [ "nama" => "Wisata",
        "subMenu" => [
                    [ "nama" => "Pantai" ],
                    [ "nama" => "Gunung" ]
                    ]
    ],
        [ "nama" => "Kuliner" ],
        [ "nama" => "Hiburan" ]
                        ]
    ],
        [ "nama" => "Tentang" ],
        [ "nama" => "Kontak" ]
];

function tampilkanMenuBeritingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBeritingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilkanMenuBeritingkat($menu);
?>
