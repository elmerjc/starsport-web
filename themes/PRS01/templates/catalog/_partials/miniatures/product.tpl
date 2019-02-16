<article class="product-miniature js-product-miniature col-sm-4" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
	<div class="thumbnail-container">
		<div class="ttproduct-image">
			{block name='product_thumbnail'}
			  <a href="{$product.url}" class="thumbnail product-thumbnail">
				<img
					  class="ttproduct-img1"
					  src = "{$product.cover.bySize.home_default.url}"
					  alt = "{$product.cover.legend}"
					  data-full-size-image-url = "{$product.cover.large.url}"
					>
					{hook h="displayTtproductImageHover" id_product=$product.id_product home='home_default' large='large_default'}	
	
			  </a>
			{/block}
			{block name='product_flags'}
				<ul class="product-flags">
					{foreach from=$product.flags item=flag}
						<li class="{$flag.type}">{$flag.label}</li>
					{/foreach}
				</ul>
			{/block}
			
		</div>
		
		<div class="ttproduct-desc">
			<div class="product-description">
							 <h5 class="cat-name">{$product.category|escape:'html':'UTF-8'}</h5>

				{block name='product_name'}
					<span class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:25:'...'}</a></span>
				{/block}
				{block name='product_description_short'}
					<div class="product-desc-short" itemprop="description">{$product.description_short|truncate:96:'...' nofilter}</div>
				{/block}
		
				{block name='product_price_and_shipping'}
					{if $product.show_price}
						<div class="product-price-and-shipping">
							<span itemprop="price" class="price">{$product.price}</span>
							{if $product.has_discount}
								{hook h='displayProductPriceBlock' product=$product type="old_price"}
								{if $product.discount_type === 'percentage'}
									<span class="discount-percentage">{$product.discount_percentage}</span>
								{/if}
								<span class="regular-price">{$product.regular_price}</span>
								
							{/if}
							{hook h='displayProductPriceBlock' product=$product type="before_price"}
							{hook h='displayProductPriceBlock' product=$product type='unit_price'}
							{hook h='displayProductPriceBlock' product=$product type='weight'}
						</div>
					{/if}
				{/block}
				<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
				{block name='product_variants'}
					{if $product.main_variants}
						{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
					{/if}
				{/block}
			</div>
			</div>
			
			<div class="ttproducthover">
			<div class="tt-button-container">
				{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
			</div>
			<div class="quick-view-block">
				<a href="#" class="quick-view" data-link-action="quickview" title="{l s='Quick view'}">
					<i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}
				</a>
			</div>
			</div>
		</div>

	</div>
</article>
