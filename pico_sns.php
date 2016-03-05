<?php
/**
 * Pico SNS
 * SNS指定をメタデータとして取り込むプラグイン
 *
 * @author TakamiChie
 * @link http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT
 * @version 1.1
 */
class Pico_SNS extends AbstractPicoPlugin {
  
  public function onMetaHeaders(array &$headers)
  {
  	$headers['twitter'] = 'Twitter';
  	$headers['facebook'] = 'Facebook';
  	$headers['github'] = 'Github';
  	$headers['youtube'] = 'Youtube';
  }

  public function onSinglePageLoaded(array &$pageData)
  {
    $meta = $pageData['meta'];
    if($meta['twitter']){
      $pageData['twitter'] = $meta['twitter'];
    }
    if($meta['facebook']){
      $pageData['facebook'] = $meta['facebook'];
    }
    if($meta['github']){
      $pageData['github'] = $meta['github'];
    }
    if($meta['youtube']){
      $pageData['youtube'] = $meta['youtube'];
    }
  }
}
?>