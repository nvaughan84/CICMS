<?php 
$contents =  'Template Name: Homepage';

preg_match_all("/Template Name:(.*)/",$contents,$template_name);
    $template_name = trim($template_name[1][0]);
    if ( !$template_name ) { $template_name = '(default)' ; }
    echo 'Template: '.$template_name ;


?>
<?php $this->load->view('themes/default/header'); ?>
  <div role="main">
	HOME PAGE TEMPLATE
  </div>
  <div class='side_bar'><?php module('posts','posts'); ?></div>
 <?php $this->load->view('themes/default/footer'); ?>