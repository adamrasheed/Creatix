<?php
/* 
* Macotuts SEO plugin for Kirby
* Version 1.0
* Built by macotuts.com
* 
* Get metadata for current page
*
* @site (object) Kirby site object
* @page (object) Kirby page object
* @return (array)
*/
function getMeta($site, $page) {
  $meta = array();
    if($page->isHomepage()):
      $meta['title'] = $site->title();
      $meta['desc'] = excerpt(h($site->description()), 155);
      $meta['type'] = 'website';
      $meta['og']['images'][] = $site->seoimg()->toFile()->url();
    else:
      $meta['title'] = $page->seotitle()->isNotEmpty() ? $page->seotitle() : $page->title() . ' | ' . $site->title();
      $meta['desc'] = $page->seodescription()->isNotEmpty() ? excerpt(h($page->seodescription()), 155) : html::decode(excerpt($page->description()->kt(), 155));
      $meta['type'] = 'article';
      if ($page->hasImages()):
        // SEO Image is displayed first
        if ($seoimg = $page->image($page->seoimg())):
          $meta['og']['images'][] = $seoimg->url();
        endif;
        // Then all other page images
        foreach ($page->images()->not($seoimg) as $img):
          $meta['og']['images'][] = $img->url();
        endforeach;
      else:
        // As a fallback, the site SEO image is used
        $meta['og']['images'][] = $site->seoimg()->toFile()->url();
      endif;
    endif;
  return $meta;
}