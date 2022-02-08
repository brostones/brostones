
<?php
  $date         = date('Y-m-d');
  $publishDate  = $publishDate??$date;
  $niche        = $niche??"";
  $author       = SITE_AUTHOR;
  $author_url   = "https://www.google.com/search?q={$author}";
  $img_url      = blade_image($keyword,TRUE);
  $img_thumb    = "{$img_url}&w=250&h=250&c=7";
  $site_title   = blade_sitename($niche);
  $sentences    = collect($sentences);

?>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Article", 
  "author": {
    "@type": "Person",
    "name": "<?php echo e($author); ?>",
    "url": "<?php echo e($author_url); ?>"
  },
  "headline": "<?php echo e(imake_stringcase("ucwords", $keyword)); ?>",
  "description": "<?php echo e($sentences->shuffle()->pop()); ?>",
  "inLanguage": "<?php echo e(LANG_CODE); ?>",
  "datePublished": "<?php echo e($publishDate); ?>",
  "copyrightYear" : "<?php echo e(date('Y')); ?>",
  "image": "<?php echo e($img_url); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo e($site_title); ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo e($img_thumb); ?>",
      "width": 250,
      "height": 250
    }
  },
  "url" : "",
  "wordCount" : "",
  "genre" : "<?php echo e(DEFAULT_NICHE); ?>",
  "keywords" : "<?php echo e($keyword); ?>",
  } 
}
</script>
<?php /**PATH C:\laragon\www\rimake\blade\ads/json_id.blade.php ENDPATH**/ ?>