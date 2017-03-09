<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header id="navbar" role="banner" class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega">
 
   <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span> 
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
       <?php if ($logo): ?> <img class="navbar-brand-logo" src="<?php print $logo; ?>" alt="<?php print t('Interact'); ?>"><?php endif; ?>
        <span class="navbar-brand-text hidden-xs-down"> Interact</span>
      </div>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon md-search" aria-hidden="true"></i>
      </button>
    </div>
   
   
   <div class="navbar-container container-fluid">
    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
       <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link waves-effect waves-light waves-round" data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
      
<li class="nav-item hidden-float">
            <a class="nav-link icon md-search waves-effect waves-light waves-round" data-toggle="collapse" href="#" data-target="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          
        </ul>
       
       <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown margin-right-20">
            <a class="nav-link navbar-avatar waves-effect waves-light waves-round" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
             
              <a class="dropdown-item waves-effect waves-light waves-round" href="views/view-user-profile.html" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item waves-effect waves-light waves-round" href="javascript:void(0)" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
		</ul>
       
      </div>
    <?php endif; ?>
    
  </div>
  
   <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input class="form-control" name="site-search" placeholder="Search..." type="text">
              <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
</header>
   <?php if (!empty($page['sidebar_first'])): ?>
      <div class="site-menubar" role="navigation">
       
       <ul class="site-menu">
    <li class="site-menu-item">
        <a class="animsition-link" href="../index.html">
          <i class="site-menu-icon md-home" aria-hidden="true"></i>
          <span class="site-menu-title">Home</span>
        </a>
      </li>
      
      
     <li class="site-menu-item has-sub">
        <a href="javascript:void(0)">
          <i class="site-menu-icon md-group-work" aria-hidden="true"></i>
          <span class="site-menu-title">Groups</span>
          <span class="site-menu-arrow"></span>
        </a>
            <ul class="site-menu-sub">
              <li class="site-menu-section">
                <a class="animsition-link" href="_groups.html">
                  <div>
                      <span class="site-menu-title btn btn-primary margin-bottom-15">Browse All Groups <span class="icon md-chevron-right"></span></span>
                    </div> 
                </a>
              </li>
                 <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>
                <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>
                 <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>
                 <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>
                 <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>
                 <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>
                 <li class="site-menu-item">
                    <a class="animsition-link" href="_group-detail.html">
                        <span class="site-menu-title">
                          $groupName
                        </span>
                    </a>
                 </li>

            </ul>
      </li>
      <li class="site-menu-item">
        <a href="_events.html">
          <i class="site-menu-icon md-calendar" aria-hidden="true"></i>
          <span class="site-menu-title">Events</span>
        </a>
      </li>
      <li class="site-menu-item">
        <a href="_education.html">
          <i class="site-menu-icon md-graduation-cap" aria-hidden="true"></i>
          <span class="site-menu-title">Education/Training</span>
		</a>
      </li> 
      
      
      
      
    <li class="site-menu-section padding-left-15 white bg-blue-100" style="max-height:1px;">
       Tools
    </li>
        
    
    <li class="site-menu-item">
        <a href="_subscriptions.html">
          <i class="site-menu-icon md-collection-item" aria-hidden="true"></i>
          <span class="site-menu-title">Subscriptions</span>
          
        </a>
      </li>
    <li class="site-menu-item">
        <a href="_friends.html">
          <i class="site-menu-icon md-accounts" aria-hidden="true"></i>
          <span class="site-menu-title">Friends</span>
          
        </a>
      </li>    
    <li class="site-menu-item">
        <a href="_library.html">
          <i class="site-menu-icon md-library" aria-hidden="true"></i>
          <span class="site-menu-title">Library</span>
          
        </a>
      </li>
    <li class="site-menu-item">
     
     
      <?php print render($page['sidebar_first']); ?>
		   </li>    
      

      </ul>
       
       
      </div>  <!-- /#sidebar-first -->
    <?php endif; ?>
    
<div >

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

 


  <div class="page">
	<div class="page-content container">


    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	  </div>
  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
