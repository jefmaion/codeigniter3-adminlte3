<?php if ($item['header']) : ?>
    <li class="nav-header"><?= $item['header'] ?></li>
<?php return;
endif; ?>

<li class="nav-item">
    <a href="<?= base_url($item['url']) ?>" class="nav-link <?= $item['is-active'] ?>">
        <i class="nav-icon <?= $item['icon'] ?>"></i>
        <p>
            <?= $item['text'] ?>

            <?php if ($item['submenu']) : ?>
                <i class="right fas fa-angle-left"></i>
            <?php endif; ?>

            <?php if ($item['label']) : ?>
                <span class="right badge badge-<?= $item['label_color'] ?>">
                    <?= $item['label'] ?>
                </span>
            <?php endif; ?>
        </p>
    </a>

    <?php if ($item['submenu']) : ?>
        <ul class="nav nav-treeview">
            <?= $this->adminlte->menu($item['submenu']) ?>
        </ul>
    <?php endif; ?>
</li>