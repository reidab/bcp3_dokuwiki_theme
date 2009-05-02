<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://wiki.splitbrain.org/wiki:tpl:templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

     <div id='header'>
        <h1>
          <a href='/'>BarCamp Portland 2009</a>
        </h1>
        <ul>
          <li>
            <a href='/'>Schedule</a>
          </li>
          <li>
            <a class='active' href='/sessions'>Session Notes</a>
          </li>
        </ul>
      </div>

  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">
    <div class="bar" id="bar__top">
      <div class="bar-left" id="bar__topleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
      </div>

      <div class="bar-right" id="bar__topright">
        <?php tpl_button('recent')?>
        <?php tpl_searchform()?>&nbsp;
      </div>

      <div class="clearer"></div>
    </div>

    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

    <!-- wikipage start -->
		<div id="content">
    <?php tpl_content()?>
		</div>
    <!-- wikipage stop -->

	  <?php flush()?>

	  <div class="stylefoot">

	    <div class="meta">
	      <div class="user">
	        <?php tpl_userinfo()?>
	      </div>
	      <div class="doc">
	        <?php tpl_pageinfo()?>
	      </div>
	    </div>

	   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

	    <div class="bar" id="bar__bottom">
	      <div class="bar-left" id="bar__bottomleft">
	        <?php tpl_button('edit')?>
	        <?php tpl_button('history')?>
	      </div>
	      <div class="bar-right" id="bar__bottomright">
	        <?php tpl_button('subscription')?>
	        <?php tpl_button('admin')?>
	        <?php tpl_button('profile')?>
	        <?php tpl_button('login')?>
	        <?php tpl_button('index')?>
	        <?php tpl_button('top')?>&nbsp;
	      </div>
	      <div class="clearer"></div>
	    </div>

	  </div>
	
	
	
	
  </div>

  <div class="clearer">&nbsp;</div>


<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
