<header>
    <div id="logo"><?php tpl_link(wl(),'<img src="'.ml('logo.png').'" alt="'.$conf['title'].'" />','') ?></div>
    <h1><?php tpl_link(wl(), $conf['title'], 'accesskey="h" title="[H]"') ?></h1>
    <?php if ($conf['tagline']) { ?><p class="claim"><?php echo $conf['tagline'] ?></p><?php } ?>
    <?php if($showSidebar): ?>
    <div class="clearer"></div>
    <nav>
        <div class="content">
            <?php tpl_flush() ?>
            <?php tpl_include_page($conf['sidebar'], 1, 1) ?>
        </div>
    </nav>
    <?php endif; ?></header>
