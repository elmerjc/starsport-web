<div class="footer-top">
	<div class="container">
		{hook h='displayFooterBefore'}
	</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      {hook h='displayFooter'}
    </div>
    <div class="row">
      {hook h='displayFooterAfter'}
    </div>
  </div>
</div>
<div class="bottom-footer">
	<div class="container">
	  <div class="col-md-12">
		<p>
		  <a class="_blank" href="http://www.takanags.com" target="_blank">
			{l s='%copyright% %year% - Creado por %TakanaGS%' sprintf=['%TakanaGS%' => 'TakanaGS™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme'}
		  </a>
		</p>
	  </div>
	</div>
</div>
<a href="#" id="goToTop" title="Back to top"> <i class="material-icons arrow-up">&#xE316;</i></a>