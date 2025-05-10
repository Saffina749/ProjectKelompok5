<?php
$menu = [
    [
        "icon" => "Adjustable wrench",
        "label" => "layanan",
        "items" => [
            [
                "link" => "layanan.php",
                "label" => "Layanan"
            ],
        ]
    ],
    [
        "icon" => "user",
        "label" => "Montir",
        "items" => [
            [
                "link" => "montir.php",
                "label" => "Montir"
            ],
        ]
    ],
    [
        "icon" => "person",
        "label" => "Detail Layanan",
        "items" => [
            [
                "link" => "detail-layanan.php",
                "label" => "detail layanan"
            ],
        ]
    ],
    [
        "icon" => "flower",
        "label" => "Kategori montir",
        "items" => [
            [
                "link" => "kategori-montir.php",
                "label" => "Kategori Montir"
            ],
        ]
    ]
];
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-paw"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PemWeb <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Menu dinamis -->
    <?php foreach ($menu as $item) : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#<?= $item['label'] ?>"
                aria-expanded="true" aria-controls="<?= $item['label'] ?>">
                <i class="fas fa-<?= $item['icon'] ?>"></i>
                <span><?= $item['label'] ?></span>
            </a>
            <div id="<?= $item['label'] ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <?php foreach ($item['items'] as $subitem) : ?>
                        <a class="collapse-item" href="<?= $subitem['link'] ?>"><?= $subitem['label'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </li>
    <?php endforeach; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
