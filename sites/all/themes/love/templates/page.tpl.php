<?php
$headers = drupal_get_http_header();
if(isset($headers['status']))
$status = $headers['status']; // = '403 Forbidden';
//dpm($headers);
// || (user_is_anonymous() && arg(0)!=='user')
if(isset($status) && $status == '403 Forbidden' && user_is_anonymous()): ?>

<div id="wrapper" class="container-fluid">
  <div class="row-fluid clearfix">
    <div id="falmily" class="span8">
      <div class="main-title">
       <p class="bibles-say">“因此，人要离开父母与妻子联合，二人成为一体。” --创世纪 2:24</p>
    </div>
      <img src="<?php print 'http://'.$_SERVER['HTTP_HOST'].'/'.path_to_theme(); ?>/family_2.png" />
    </div>
    <div class="main-content span4">
        <center>
           <h1 class="sitename">永不止息</h1>
          <?php if ( $messages ): ?>
            <div id="love-messages"><?php print $messages; ?></div>
          <?php endif; ?>
          <p class="site-slogan">幸福家庭，从婚恋迈出第一步,</p>
          <p class="site-slogan">响应呼召，组建家庭，让爱永不止息！</p>
        </center>

        <div id="love-login-form">
          <?php $login_form = drupal_get_form('user_login');print drupal_render($login_form); ?>
        </div>
        <div class="site-des">
          <p>&nbsp;&nbsp;</p>
          <ul>
            <li>异象：爱是永不止息，是互相激励、共同成长，并且需要公众见证、公开交往，接受监督的，让更多的肢体在婚恋交友，及组建家庭上彰显神的荣耀。<a href="#" rel="tooltip" data-placement="bottom" title="【永不止息】是@bluesky_still透过对当前教会单身肢体需求的看见，业余时间开发的针对主内肢体婚恋社交网站，通过简洁的关系建立渠道，熟人的推荐，舆论监督与指导，为肢体提供一个便捷互相了解、信实互动的社交平台。">成长历程</a></li>
            <li>【永不止息】只接受熟人间邮箱邀请注册，请为您邀请的肢体祷告，您在熟人之间互相介绍时，应慎重，严谨，并为之代祷。</li>
            
            <li>为<a href="#" rel="tooltip" title="请为本站营造良好的社交环境。<br/>为教会单身守望。">本站代祷</a> ，<a href="#" rel="tooltip" title="如果您觉得打开速度慢，那么您可以在网站服务器升级上有分">支持奉献</a>，<a href="http://blog.liangyou.net/lianai/" rel="tooltip" title="打开速度慢，这个建议就不用提了^_^">意见建议</a></li>
            <!--li><a href="http://blog.liangyou.net/lianai/"  rel="tooltip" title="如果您还未收到邀请，听听这个节目，预备自己成为理想的另一半吧！"><img src="<?php print path_to_theme(); ?>/lianai.jpg" alt=""></a><a href="#" rel="tooltip" title="打开速度慢，这个建议就不用提了^_^"></a></li-->
            <li><embed type="application/x-shockwave-flash" width="290" height="24" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'.drupal_get_path('module','love')?>/player.swf?soundFile=http://liangyou.nissigz.com/media/se/se<?php echo date("ymd");?>.mp3&amp;bg=0xCDDFF3&amp;leftbg=0x357DCE&amp;lefticon=0xF2F2F2&amp;rightbg=0x357DCE&amp;rightbghover=0x4499EE&amp;righticon=0xF2F2F2&amp;righticonhover=0xFFFFFF&amp;text=0x357DCE&amp;slider=0x357DCE&amp;track=0xFFFFFF&amp;border=0xFFFFFF&amp;loader=0x8EC2F4&amp;autostart=yes&amp;loop=no" wmode="transparent" quality="high"><a href="#"  title="未收到邀请？听听这个节目，预备自己成为理想的另一半吧！">今日广播</a>
</li>          </ul>
        </div>
      </div>
   </div>
</div>
<?php else:?>

<header id="navbar" role="banner" class="navbar navbar-fixed-top">

	<div class="container">
    <div class="logo">
      <?php if ($logo): ?>
          
          <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <span  class="site-name">永不止息<i class="icon-fire"></i></span>
          <!--img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          <img src="http://simg.sinajs.cn/xblogstyle/images/common/logo_act.png" alt=""-->
        </a>
      <?php endif;?>
    </div>
    <nav role="navigation" class="clearfix">
      <?php if ($primary_nav): ?>
      	<div class="pull-left">
          <?php print $primary_nav; ?>
        </div>
      <?php endif; ?>

     	<?php if ($secondary_nav): ?>
     		<div class="pull-right ml-24">
          <?php print $secondary_nav; ?>
        </div>
      <?php endif; ?>
      <?php if (!user_is_anonymous()): ?>
      <div class="pull-right">
          <?php print $menu_user_picture; ?>
      </div>
      <?php endif; ?>
   </nav>
  </div></div>
</header>

<div class="container" >

  <header role="banner" id="page-header">
    <?php if ( $site_slogan ): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="row" id="page-wrapper">
        
        <?php if ($page['sidebar_first']): ?>
          <aside class="span3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>  
        
        <section class="<?php print _twitter_bootstrap_content_span($columns); ?>" id="page-section">  
          <?php if ($page['highlighted']): ?>
            <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
          <?php if ($breadcrumb): print $breadcrumb; endif;?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if ($tabs): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if ($page['help']): ?> 
            <div class="well"><?php print render($page['help']); ?></div>
          <?php endif; ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </section>

        <?php if ($page['sidebar_second']): ?>
          <aside class="span3" role="complementary well">
            <?php print render($page['sidebar_second']); ?>
          </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>
      </div>
    </div>
  </div><!-- /container-fluid -->
  <div class="top"> <a href="#"><img alt="Scroll to Top" src="<?php print 'http://'.$_SERVER['HTTP_HOST'].'/'.path_to_theme(); ?>/images/scroll-top.png" style="opacity: 1;"></a>
    <div class="clear"></div>
    <div class="scroll">
        <p>
            To Top        </p>
    </div>
  </div>
  <footer class="footer container">
    <?php print render($page['footer']); ?>
  </footer>
</div>
<?php endif ?>
