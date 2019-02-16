{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="contact-rich links col-md-3">
  <h4 class="hidden-sm-down">{l s='Store information' d='Shop.Theme'}</h4>
  <div  class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#contact-footer">
  	<span class="h3">{l s='Store information' d='Shop.Theme'}</span>
	 <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
	</span>
  </div>
  <ul id="contact-footer" class="collapse">
  <li class="block">
    <div class="icon"><i class="material-icons">&#xE55F;</i></div>
    <div class="data address">{$contact_infos.address.formatted nofilter}</div>
  </li>
  {if $contact_infos.phone}
    <li class="block">
      <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
      <div class="data contact">
        {l s='Call us:' d='Shop.Theme'}<br/>
       </div>
	   <a href="tel:{$contact_infos.phone}">{$contact_infos.phone}</a>
    </li>
  {/if}
  {if $contact_infos.fax}
    <hr/>
    <li class="block">
      <div class="icon"><i class="material-icons">&#xE0DF;</i></div>
      <div class="data fax">
        {l s='Fax:' d='Shop.Theme'}<br/>
        {$contact_infos.fax}
      </div>
    </li>
  {/if}
  {if $contact_infos.email}
    <li class="block">
      <div class="icon"><i class="material-icons">&#xE158;</i></div>
      <div class="data email">
        {l s='Email us:' d='Shop.Theme'}<br/>
       </div>
       <a href="mailto:{$contact_infos.email}">{$contact_infos.email}</a>
    </li>
  {/if}
  </ul>
</div>
