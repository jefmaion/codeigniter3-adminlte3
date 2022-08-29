<li class="nav-item d-none d-sm-inline-block">
    <a href="<?= $item['url'] ?>" class="nav-link">

        <i class="right <?= $item['icon'] ?>"></i>

        <span class="<?= ($item['label']) ? 'mr-1' : '' ?>"><?= $item['text'] ?></span>

        <?php if ($item['label']) : ?>
            <span class="badge badge-<?= $item['label_color'] ?> navbar-badge" >
                <?= $item['label'] ?>
            </span>
        <?php endif; ?>
    </a>
</li>