<?php 
$info_text = get_field('info_bar_text');
if($info_text): ?>
<div class="infobar">
    <p class="infobar__info">
        <svg xmlns="http://www.w3.org/2000/svg" width="15.794" height="15.794" viewBox="0 0 15.794 15.794">
            <path id="Path_285" data-name="Path 285" d="M-158.82,690.515a7.9,7.9,0,0,0-7.9,7.9,7.9,7.9,0,0,0,7.9,7.9,7.9,7.9,0,0,0,7.9-7.9A7.9,7.9,0,0,0-158.82,690.515Zm0,3.257a.882.882,0,0,1,.906.931.889.889,0,0,1-.906.93.889.889,0,0,1-.906-.93A.882.882,0,0,1-158.82,693.772Zm.93,9.28h-1.861v-6.5h1.861Z" transform="translate(166.717 -690.515)" fill="#fff"/>
        </svg>    
        <?php echo $info_text; ?>
    </p>
</div>
<?php endif; ?>