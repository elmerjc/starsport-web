{extends file='catalog/listing/product-list.tpl'}

{block name='product_list_header'}
    <div class="block-category hidden-sm-down">
      {if $category.description}
        <div class="category-cover">
          <img src="{$category.image.large.url}" alt="{$category.image.legend}">
        </div>
      <h1 class="h1 title-category">{$category.name}</h1>
	     <div id="category-description" class="text-muted">{$category.description nofilter}</div>
      {/if}
    </div>
    <div class="text-xs-center hidden-md-up">
      <h1 class="h1">{$category.name}</h1>
    </div>
{/block}


