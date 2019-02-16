{extends file='page.tpl'}

    {block name='page_content_container'}
	<div class="tthometab-title">Novedades</div>
	{block name='home_tab'}
		<div id="hometab" class="home-tab container">
			{hook h='displayHomeTab'}
		 </div>
	{/block}
	
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}
        {block name='page_content'}
          {$HOOK_HOME nofilter}
        {/block}
      </section>
    {/block}
