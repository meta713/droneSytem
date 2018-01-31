<div>
  {foreach from=$array key=key item=item}
  <div style="margin-left: {$index}em;">
    <label>key:{$key}</label>
    <label>test:--{$item.test}</label>
    <label>col:--{$item.col}</label>
    {if array_key_exists("children",$item)}
      {foreach from=$item.children item=child}
        {include file="test.tpl" array=$child index=$index+1}
      {/foreach}
    {/if}
  </div>
  {/foreach}
</div>
