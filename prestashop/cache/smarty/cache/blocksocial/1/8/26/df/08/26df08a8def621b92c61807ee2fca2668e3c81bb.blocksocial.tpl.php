<?php /*%%SmartyHeaderCode:1255299232584ece1d0a8279-62357534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26df08a8def621b92c61807ee2fca2668e3c81bb' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/blocksocial/blocksocial.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255299232584ece1d0a8279-62357534',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584ece1d17c847_86025944',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ece1d17c847_86025944')) {function content_584ece1d17c847_86025944($_smarty_tpl) {?>
<section id="social_block">
	<ul>
					<li class="facebook">
				<a target="_blank" href="http://www.facebook.com/prestashop">
					<span>Facebook</span>
				</a>
			</li>
							<li class="twitter">
				<a target="_blank" href="http://www.twitter.com/prestashop">
					<span>Twitter</span>
				</a>
			</li>
							<li class="rss">
				<a target="_blank" href="http://www.prestashop.com/blog/en/">
					<span>RSS</span>
				</a>
			</li>
		                        	<li class="google-plus">
        		<a  target="_blank" href="https://www.google.com/+prestashop">
        			<span>Google Plus</span>
        		</a>
        	</li>
                	</ul>
    <h4>Nous suivre</h4>
</section>
<div class="clearfix"></div>
<?php }} ?>
