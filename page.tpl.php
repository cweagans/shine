<div id="page-wrapper">

  <div id="page-wrapper-inner">
    <img src="/<?php print $directory; ?>/images/container-top.png" id="container-top-image" />
    <div id="sidebar">
      <div id='branding'><div class='limiter clearfix'>
        <?php if ($logo): ?><a href="/"><img id="logo" src="<?php print $logo ?>" /></a><?php endif; ?>
        <?php if ($site_name): ?><h1 class='site-name'><?php print $site_name ?></h1><?php endif; ?>
      </div></div>

      <?php if ($site_slogan): ?>
        <div id="site-slogan"><?php print $site_slogan; ?></div>
      <?php endif; ?>

      <?php if ($page['sidebar']): ?>
        <div id='left' class='clearfix'><?php print render($page['sidebar']) ?></div>
      <?php endif; ?>
    </div>

    <div id="main">
      <div id='navigation'><div class='limiter clearfix'>
        <?php if (isset($main_menu)) : ?>
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu'))) ?>
        <?php endif; ?>
      </div></div>

      <?php if ($page['help'] || ($show_messages && $messages)): ?>
        <div id='console'><div class='limiter clearfix'>
          <?php print render($page['help']); ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
        </div></div>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id='header'><div class='limiter clearfix'>
          <?php print render($page['header']); ?>
        </div></div>
      <?php endif; ?>

      <div id='main-content'>
        <?php if ($tabs): ?><ul class='tabs clearfix'><?php print render($tabs); ?></ul><?php endif; ?>
        <?php if ($title): ?><h1 class='page-title'><?php print $title ?></h1><?php endif; ?>
        <?php if ($action_links): ?><ul class='links clearfix'><?php print render($action_links); ?></ul><?php endif; ?>
        <div id='content' class='clearfix'><?php print render($page['content']) ?><?php print $feed_icons ?></div>
      </div>
    </div>
    <img src="/<?php print $directory; ?>/images/container-bottom.png" id="container-bottom-image" />
  </div>

  <div id="footer">
    <div id="footer-left"><?php print render($page['footer_left']) ?></div>
    <div id="footer-middle"><?php print render($page['footer_middle']) ?></div>
    <div id="footer-right"><?php print render($page['footer_right']) ?></div>
    <div class='limiter clearfix'></div>
  </div>

</div>


