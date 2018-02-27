<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 15:53:44
         compiled from "/application/modules/paypal/views/templates/admin/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9033115595a9570f89cb207-85740713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa77b3c0e05e7d7b74365df179361c4b303a00ff' => 
    array (
      0 => '/application/modules/paypal/views/templates/admin/configuration.tpl',
      1 => 1519743205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9033115595a9570f89cb207-85740713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ec_paypal_active' => 0,
    'ec_card_active' => 0,
    'bt_active' => 0,
    'ppp_active' => 0,
    'path' => 0,
    'iso_code' => 0,
    'country' => 0,
    'localization' => 0,
    'img_checkout' => 0,
    'return_url' => 0,
    'braintree_available' => 0,
    'ppp_available' => 0,
    'ec_active' => 0,
    'bt_paypal_active' => 0,
    'active_products' => 0,
    'PAYPAL_SANDBOX_CLIENTID' => 0,
    'PAYPAL_SANDBOX_SECRET' => 0,
    'PAYPAL_LIVE_CLIENTID' => 0,
    'PAYPAL_LIVE_SECRET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9570f8d6a374_61071570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9570f8d6a374_61071570')) {function content_5a9570f8d6a374_61071570($_smarty_tpl) {?>
<div dir="ltr" style="text-align: left;" trbidi="on">
    <script type="text/javascript">
         (function(d, s, id){
         var js, ref = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)){
                js = d.createElement(s); js.id = id; js.async = true;
                js.src = "https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js";
                ref.parentNode.insertBefore(js, ref);
            }
         }(document, "script", "paypal-js"));
    </script>
</div>

<div class="container-fluid paypal-nav">
    <ul class="nav nav-pills navbar-separator">
        <li <?php if (!isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)&&!isset($_smarty_tpl->tpl_vars['ec_card_active']->value)&&!isset($_smarty_tpl->tpl_vars['bt_active']->value)&&!isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>class="active"<?php }?>><a data-toggle="pill" href="#paypal_conf"><span><?php echo smartyTranslate(array('s'=>'Products','mod'=>'paypal'),$_smarty_tpl);?>
</span></a></li>
        <li <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)||isset($_smarty_tpl->tpl_vars['ec_card_active']->value)||isset($_smarty_tpl->tpl_vars['bt_active']->value)||isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>class="active"<?php }?>><a data-toggle="pill" href="#paypal_params"><span><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'paypal'),$_smarty_tpl);?>
</span></a></li>
    </ul>
    <div class="tab-content">
        <div id="paypal_conf"  class="tab-pane fade <?php if (!isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)&&!isset($_smarty_tpl->tpl_vars['ec_card_active']->value)&&!isset($_smarty_tpl->tpl_vars['bt_active']->value)&&!isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>in active<?php }?>">
        <div class="box half left">
            <div class="logo">
                 <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal_btm.png" alt=""  />
                <div><?php echo smartyTranslate(array('s'=>'The smart choice for business','mod'=>'paypal'),$_smarty_tpl);?>
</div>
            </div>
            <ul class="tick">
                <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Target more customers','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'More than 200 million PayPal active users worldwide','mod'=>'paypal'),$_smarty_tpl);?>
.</li>
                <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Truly global','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'Access a whole world of customers. PayPal is available in more than 200 markets and in 25 currencies','mod'=>'paypal'),$_smarty_tpl);?>
.</li>
                <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Accept all types of payments','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'Use PayPal with simple buy button or also payment by card due to Braintree (un service PayPal)','mod'=>'paypal'),$_smarty_tpl);?>
.</li>
                <li><span class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Safety','mod'=>'paypal'),$_smarty_tpl);?>
</span><br /><?php echo smartyTranslate(array('s'=>'Protect your profit from the risks of fraud thanks to our program of','mod'=>'paypal'),$_smarty_tpl);?>
 <a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/ua/useragreement-full#011"><?php echo smartyTranslate(array('s'=>'Seller Protection','mod'=>'paypal'),$_smarty_tpl);?>
</a>.</li>
            </ul>

        </div>

        <div class="box half right">
            <div class="info">
                <p class="paypal-bold"><?php echo smartyTranslate(array('s'=>'Merchant Country','mod'=>'paypal'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['country']->value,'html','UTF-8');?>
</p>
                <p><i>
                        <?php echo smartyTranslate(array('s'=>'To modify country : ','mod'=>'paypal'),$_smarty_tpl);?>

                        <a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['localization']->value,'html','UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'International > Localization','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                    </i></p>
            </div>
        </div>
        <div style="clear:both;"></div>

        <div class="active-products">
            <p><b><?php echo smartyTranslate(array('s'=>'2 PayPal products selected for you','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)&&$_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>active-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                    <p>
                            <?php echo smartyTranslate(array('s'=>'Accept PayPal payments, you can optimize your conversion rate.','mod'=>'paypal'),$_smarty_tpl);?>

                    </p>
                    <p><ul>
                        <li><?php echo smartyTranslate(array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl);?>

                            <?php echo smartyTranslate(array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'in theme of comScore, 4th trilestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'With our Seller Protection Program and advanced fraud screening, xe can protect your business','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    </ul></p>
                    <p>
                        <a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                    </p>
                    <div class="bottom">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['img_checkout']->value,'html','UTF-8');?>
" class="product-img">
                        <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8');?>
&method=EC&with_card=0<?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)&&$_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>&modify=1<?php }?>" ><?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)&&$_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?><?php echo smartyTranslate(array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?></a>
                    </div>
                </div>
            </div>
            <?php if (!isset($_smarty_tpl->tpl_vars['braintree_available']->value)&&!isset($_smarty_tpl->tpl_vars['ppp_available']->value)) {?>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['ec_active']->value)&&$_smarty_tpl->tpl_vars['ec_active']->value&&isset($_smarty_tpl->tpl_vars['ec_card_active']->value)&&$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>actvie-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                    <p>
                            <?php echo smartyTranslate(array('s'=>'Accept credit cards, debit cards and PayPal payments','mod'=>'paypal'),$_smarty_tpl);?>

                    </p>
                    <p><ul>
                        <li><?php echo smartyTranslate(array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl);?>

                            <?php echo smartyTranslate(array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'in theme of comScore, 4th trilestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'With our Seller Protection Program and advanced fraud screening, xe can protect your business','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    </ul></p>
                    <p><a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <div class="bottom">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal_btm.png" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/visa.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/mastercard.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/maestro.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/jcb.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/discover.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/amex.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/diners.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/unionpay.svg" class="product-img">
                        <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8');?>
&method=EC&with_card=1<?php if (isset($_smarty_tpl->tpl_vars['ec_active']->value)&&$_smarty_tpl->tpl_vars['ec_active']->value&&isset($_smarty_tpl->tpl_vars['ec_card_active']->value)&&$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>&modify=1<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['ec_active']->value)&&$_smarty_tpl->tpl_vars['ec_active']->value&&isset($_smarty_tpl->tpl_vars['ec_card_active']->value)&&$_smarty_tpl->tpl_vars['ec_card_active']->value) {?><?php echo smartyTranslate(array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?></a>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['braintree_available']->value)) {?>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value)&&$_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?>active-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/braintree-paypal.png">
                    <p>
                        <?php echo smartyTranslate(array('s'=>'Accept PayPal, debit and credit card payments via Braintree (a PayPal service)','mod'=>'paypal'),$_smarty_tpl);?>
.
                    </p>
                    <p><ul>
                        <li><?php echo smartyTranslate(array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    </ul></p>
                    <p><a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/hosted"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <div class="bottom">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal_btm.png" class="product-img"> <b>+</b>
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/visa.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/mastercard.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/maestro.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/jcb.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/discover.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/amex.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/diners.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/unionpay.svg" class="product-img">
                        <a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'html','UTF-8');?>
&method=BT&with_paypal=1<?php if (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value)&&$_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?>&modify=1<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value)&&$_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?><?php echo smartyTranslate(array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?></a>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['ppp_available']->value)) {?>
            <div class="col-sm-6">
                <div class="panel <?php if (isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>active-panel<?php }?>">
                    <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                    <p>
                        <?php echo smartyTranslate(array('s'=>'PayPal Plus','mod'=>'paypal'),$_smarty_tpl);?>

                    </p>
                    <p><ul>
                        <li><?php echo smartyTranslate(array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        <li><?php echo smartyTranslate(array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                    </ul></p>
                    <p><a target="_blank" href="https://www.paypal.com/webapps/mpp/standard"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <div class="bottom">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/visa.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/mastercard.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/amex.svg" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/ppp-bank-logo.png" class="product-img">
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/kauf.png" class="product-img">
                        <a class="btn btn-default pull-right" href="#" onclick="display_popup('PPP')"><?php if (isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?><?php echo smartyTranslate(array('s'=>'Modify','mod'=>'paypal'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Activate','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?></a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

        <div style="clear:both;"></div>
        <div class="blue">
            <div class="row-fluid" id="rtb1">
                <header class="containerCentered center-text">
                    <h2 class="pulloutHeadline "><?php echo smartyTranslate(array('s'=>'Find out why 17 million businesses worldwide choose PayPal.','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                </header>
                <div class="containerCentered">
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo smartyTranslate(array('s'=>'Safer and more protected','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                        <p class="contentPara"><?php echo smartyTranslate(array('s'=>'With our Seller Protection and advanced fraud screening, we can protect your business.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo smartyTranslate(array('s'=>'Easy and convenient','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                        <p class="contentPara"><?php echo smartyTranslate(array('s'=>'Customers need just an email address and password or mobile number and PIN to pay quickly and more securely.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo smartyTranslate(array('s'=>'Preferred by customers','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                        <p class="contentPara"><?php echo smartyTranslate(array('s'=>'We’re the smart choice: Great Britain’s No.1 preferred online and mobile payment method','mod'=>'paypal'),$_smarty_tpl);?>
<sup>4</sup>.
                            <?php echo smartyTranslate(array('s'=>'For invaluable insights into what makes British shoppers tick','mod'=>'paypal'),$_smarty_tpl);?>
,
                            <a data-pa-click="link|shopping-habits" href="https://www.paypal.com/uk-shopping-habits"><?php echo smartyTranslate(array('s'=>'click here','mod'=>'paypal'),$_smarty_tpl);?>
</a>.</p>
                    </div>
                </div>
            </div>
            <div class="row-fluid" id="rtb2">
                <div class="containerCentered">
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo smartyTranslate(array('s'=>'Truly global','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                        <p class="contentPara"><?php echo smartyTranslate(array('s'=>'Access a whole world of customers. PayPal is available in 202 countries and markets, and in 25 currencies.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo smartyTranslate(array('s'=>'Simple to integrate','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                        <p class="contentPara"><?php echo smartyTranslate(array('s'=>'Works with all major shopping carts and ecommerce platforms.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
                    </div>
                    <div class="span4">
                        <h2 class="contentHead large h3"><?php echo smartyTranslate(array('s'=>'24/7 customer support','mod'=>'paypal'),$_smarty_tpl);?>
</h2>
                        <p class="contentPara"><?php echo smartyTranslate(array('s'=>'Whatever your query, we\'ve got it covered. Online or on the phone, we\'re here to help.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <div id="paypal_params" class="tab-pane fade col-sm-12 <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)||isset($_smarty_tpl->tpl_vars['ec_card_active']->value)||isset($_smarty_tpl->tpl_vars['bt_active']->value)||isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>in active<?php }?>">
        <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)||isset($_smarty_tpl->tpl_vars['ec_card_active']->value)||isset($_smarty_tpl->tpl_vars['bt_active']->value)||isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>
        <div class="panel parametres">
            <div class="panel-body">
                <div class="col-sm-8 help-left">
                    <?php if (isset($_smarty_tpl->tpl_vars['ec_paypal_active']->value)&&$_smarty_tpl->tpl_vars['ec_paypal_active']->value) {?>
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                        <p>
                                <?php echo smartyTranslate(array('s'=>'Accept PayPal payments, you can optimize your conversion rate.','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['active_products']->value,'html','UTF-8');?>

                        </p>
                        <p><ul>
                            <li><?php echo smartyTranslate(array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl);?>

                                <?php echo smartyTranslate(array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'in theme of comScore, 4th trimestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'With our Seller Protection Program and advanced fraud screening, we can protect your business','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        </ul></p>
                        <p>
                            <a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                        </p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['ec_card_active']->value)&&$_smarty_tpl->tpl_vars['ec_card_active']->value) {?>
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                        <p>
                                <?php echo smartyTranslate(array('s'=>'Accept credit cards, debit cards and PayPal payments','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['active_products']->value,'html','UTF-8');?>

                        </p>
                        <p><ul>
                            <li><?php echo smartyTranslate(array('s'=>'Fast, simple & secure, used by over 200 million active users','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'optimizes your conversion rate up to 87.5%.','mod'=>'paypal'),$_smarty_tpl);?>

                                <?php echo smartyTranslate(array('s'=>'Rate with OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'in theme of comScore, 4th trilestre 2015 in United States','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Fully optimized for mobile payments','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Benefit of in-context checkout so your buyers never leave your site','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'With our Seller Protection Program and advanced fraud screening, xe can protect your business','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        </ul></p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['bt_paypal_active']->value)&&$_smarty_tpl->tpl_vars['bt_paypal_active']->value) {?>
                        <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/braintree-paypal.png">
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Accept PayPal, debit and credit card payments via Braintree (a PayPal service)','mod'=>'paypal'),$_smarty_tpl);?>
.
                        </p>
                        <p><ul>
                            <li><?php echo smartyTranslate(array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        </ul></p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/hosted"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['bt_active']->value)&&!$_smarty_tpl->tpl_vars['bt_paypal_active']->value&&$_smarty_tpl->tpl_vars['bt_active']->value) {?>
                        <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/braintree-paypal.png">
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Accept Braintree payments','mod'=>'paypal'),$_smarty_tpl);?>

                        </p>
                        <p>
                            <?php echo smartyTranslate(array('s'=>'Your customers can pay with a selection of local and international debit and credit cards. Make online payments simple. PayPal customers can buy from you quickly if they use One Touch','mod'=>'paypal'),$_smarty_tpl);?>
&trade;
                        </p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/express-checkout"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <?php } elseif (isset($_smarty_tpl->tpl_vars['ppp_available']->value)&&isset($_smarty_tpl->tpl_vars['ppp_active']->value)) {?>
                        <img class="paypal-products" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path']->value,'html','UTF-8');?>
/views/img/paypal.png">
                        <p>
                            <?php echo smartyTranslate(array('s'=>'PayPal Plus','mod'=>'paypal'),$_smarty_tpl);?>

                        </p>
                        <p><ul>
                            <li><?php echo smartyTranslate(array('s'=>'Get the best of PayPal & Braintree in a single solution','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Benefit of PayPal\'s OneTouch','mod'=>'paypal'),$_smarty_tpl);?>
&trade; <?php echo smartyTranslate(array('s'=>'conversion rate improvements, in-context payments & Seller Protection Program','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Offer debit and credit card payments with all major global card networks','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'No monthly or setup fee - check PayPal\'s & Braintree\'s pricing','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                            <li><?php echo smartyTranslate(array('s'=>'Protect your payments with 3D Secure & PCI DSS v3.0 SAQ-A compliance','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                        </ul></p>
                        <p><a target="_blank" href="https://www.paypal.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8');?>
/webapps/mpp/hosted"><?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
                    <?php }?>
                </div>
                <div class="col-sm-3 help-right">
                        <p>
                    <?php echo smartyTranslate(array('s'=>'More Information','mod'=>'paypal'),$_smarty_tpl);?>
 ?
                    <a target="_blank" href="<?php echo smartyTranslate(array('s'=>'https://www.paypal.com/fr/webapps/mpp/contact-us','mod'=>'paypal'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'paypal'),$_smarty_tpl);?>
</a>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="configuration-block"></div>
    </div>

    </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['ppp_available']->value)) {?>
<div style="display: none;">
    <div id="content-fancybox-configuration">
        <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['return_url']->value,'javascript','UTF-8');?>
" method="post" id="credential-configuration" class="bootstrap">
            <h4><?php echo smartyTranslate(array('s'=>'API Credentials','mod'=>'paypal'),$_smarty_tpl);?>
</h4>
            <p><?php echo smartyTranslate(array('s'=>'In order to accept PayPal Plus payments, please fill your API REST credentials.','mod'=>'paypal'),$_smarty_tpl);?>
</p>
            <ul>
                <li><?php echo smartyTranslate(array('s'=>'Access','mod'=>'paypal'),$_smarty_tpl);?>
 <a target="_blank" href="https://developer.paypal.com/developer/applications/"><?php echo smartyTranslate(array('s'=>'https://developer.paypal.com/developer/applications/','mod'=>'paypal'),$_smarty_tpl);?>
</a></li>
                <li><?php echo smartyTranslate(array('s'=>'Log in or Create a business account','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Create a « REST API apps »','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Click « Show » en dessous de « Secret: »','mod'=>'paypal'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Copy/paste your « Client ID » and « Secret » below for each environment','mod'=>'paypal'),$_smarty_tpl);?>
</li>
            </ul>
            <hr/>
            <input type="hidden" id="method" name="method"/>
            <input type="hidden" id="with_card" name="with_card"/>
            <h4><?php echo smartyTranslate(array('s'=>'Sandbox','mod'=>'paypal'),$_smarty_tpl);?>
</h4>
            <p>
                <label for="sandbox_client_id"><?php echo smartyTranslate(array('s'=>'Client ID','mod'=>'paypal'),$_smarty_tpl);?>
</label>
                <input type="text" id="sandbox_client_id" name="sandbox[client_id]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_CLIENTID']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_CLIENTID']->value,'htmlall','UTF-8');?>
<?php }?>"/>
            </p>
            <p>
                <label for="sandbox_secret"><?php echo smartyTranslate(array('s'=>'Secret','mod'=>'paypal'),$_smarty_tpl);?>
</label>
                <input type="password" id="sandbox_secret" name="sandbox[secret]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_SECRET']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PAYPAL_SANDBOX_SECRET']->value,'htmlall','UTF-8');?>
<?php }?>"/>
            </p>
            <h4><?php echo smartyTranslate(array('s'=>'Live','mod'=>'paypal'),$_smarty_tpl);?>
</h4>
            <ul>
                <li><?php echo smartyTranslate(array('s'=>'You can switch to "Live" environment on top right','mod'=>'paypal'),$_smarty_tpl);?>
</li>
            </ul>
            <p>
                <label for="live_client_id"><?php echo smartyTranslate(array('s'=>'Client ID','mod'=>'paypal'),$_smarty_tpl);?>
</label>
                <input type="text" id="live_client_id" name="live[client_id]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_LIVE_CLIENTID']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PAYPAL_LIVE_CLIENTID']->value,'htmlall','UTF-8');?>
<?php }?>"/>
            </p>
            <p>
                <label for="live_secret"><?php echo smartyTranslate(array('s'=>'Secret','mod'=>'paypal'),$_smarty_tpl);?>
</label>
                <input type="password" id="live_secret" name="live[secret]" value="<?php if (isset($_smarty_tpl->tpl_vars['PAYPAL_LIVE_SECRET']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PAYPAL_LIVE_SECRET']->value,'htmlall','UTF-8');?>
<?php }?>"/>
            </p>
            <hr/>
            <p>
                <button class="btn btn-default"  onclick="$.fancybox.close();return false;"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'paypal'),$_smarty_tpl);?>
</button>
                <button class="btn btn-info" name="save_credentials"><?php echo smartyTranslate(array('s'=>'Confirm API Credentials','mod'=>'paypal'),$_smarty_tpl);?>
</button>
            </p>
        </form>
    </div>
</div>
<?php }?>

<script type="text/javascript">

    function display_popup(method)
    {
        $('#method').val(method);
        $.fancybox.open([
            {
                type: 'inline',
                autoScale: true,
                minHeight: 30,
                content: $('#content-fancybox-configuration').html(),
            }
        ]);
    }

    $(document).ready(function(){

        $('#change_product').click(function(event) {
            event.preventDefault();
            $('a[href=#paypal_conf]').click();
        });
        $('#configuration_form').insertAfter($('.configuration-block'));
        $('#configuration_form_1').insertAfter($('.configuration-block'));

    });

</script><?php }} ?>
