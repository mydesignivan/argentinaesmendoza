<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title><?=TITLE_GLOBAL . @$tlp_title;?></title>
    <meta name="description" content="<?=META_DESCRIPTION;?>" />
    <meta name="keywords" content="<?=META_KEYWORDS;?>" />
    <?php require('includes/head_inc.php');?>
    <?php if( isset($tlp_script) && !empty($tlp_script) ) {
        if( !is_array($tlp_script) ) $tlp_script = array($tlp_script);
        foreach( $tlp_script as $file ){
            require('js/includes/'.$file.'_inc.php');
        }
    }?>
</head>

<body>
<div class="container">
    <!-- ================  HEADER  ================ -->
    <?php require('includes/header_inc.php');?>
    <!-- ================  END HEADER  ================ -->

    <!-- ================  END MAIN CONTAINER  ================ -->
    <div class="clear span-24 last border">
        <div class="clear span-16">
            <?php require($tlp_section);?>
        </div>
        <div class="span-7 pull-0 last border">
            <?php require("includes/sidebar_inc.php");?>
        </div>
    </div>
    <!-- ================  END MAIN CONTAINER  ================ -->

    <!-- =============== FOOTER =============== -->
    <?php //require('includes/footer_inc.php');?>
    <!-- =============== END FOOTER =============== -->
</div>
</body>
</html>