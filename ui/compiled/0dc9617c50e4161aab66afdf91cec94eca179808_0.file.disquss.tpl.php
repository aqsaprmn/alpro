<?php
/* Smarty version 3.1.39, created on 2021-08-19 11:15:33
  from 'C:\_mywebsites\apipinter\ui\theme\default\disquss.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611ddae55a62a1_32203838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dc9617c50e4161aab66afdf91cec94eca179808' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\disquss.tpl',
      1 => 1629343892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_611ddae55a62a1_32203838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">Public Disquss</div>
								<div class="panel-body">
									<div id="disqus_thread"></div>
										<?php echo '<script'; ?>
>
											var disqus_config = function () {
											this.page.url = "https://ibnux.github.io/phpmixbill/diskusi.html";  // Replace PAGE_URL with your page's canonical URL variable
											this.page.identifier = "phpmixbill"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
											};
											(function() { // DON'T EDIT BELOW THIS LINE
											var d = document, s = d.createElement('script');
											s.src = 'https://phpmixbill.disqus.com/embed.js';
											s.setAttribute('data-timestamp', +new Date());
											(d.head || d.body).appendChild(s);
											})();
										<?php echo '</script'; ?>
>
										<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>								
								</div>
							</div>
						</div>
					</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
