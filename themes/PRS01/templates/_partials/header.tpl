<div class="full-header">
{block name='header_nav'}
  <nav class="header-nav col-sm-3">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down top-nav">
            <div class="col-md-5 col-xs-12">
              {hook h='displayNav1'}
            </div>
            <div class="col-md-7 right-nav">
                {hook h='displayNav2'}
            </div>
          </div>
          <div class="hidden-md-up text-xs-center mobile">
            <div class="pull-xs-left" id="menu-icon">
              <i class="material-icons">&#xE5D2;</i>
            </div>
            <div class="pull-xs-right" id="_mobile_cart"></div>
            <div class="pull-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top col-sm-2">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
          </a>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
	
  </div>
  <div class="col-md-7 col-sm-7 position-static">
	  <div class="row">
		{hook h='displayTop'}
		<div class="clearfix"></div>
	  </div>
	</div>
  {hook h='displayNavFullWidth'}
{/block}
</div>
{if $page.page_name == 'index'}
	{block name='top_column'}
		<div id="top_column" class="">
			{hook h='displayTopColumn'}
		 </div>
	{/block}
{/if}