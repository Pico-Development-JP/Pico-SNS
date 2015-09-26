<?php
/**
 * Pico SNS
 * SNS指定をメタデータとして取り込むプラグイン
 *
 * @author TakamiChie
 * @link http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
class Pico_SNS {
  
  public function before_read_file_meta(&$headers)
  {
  	$headers['twitter'] = 'Twitter';
  	$headers['facebook'] = 'Facebook';
  	$headers['github'] = 'Github';
  	$headers['youtube'] = 'Youtube';
  }

  public function get_page_data(&$data, $page_meta)
  {
    if($page_meta['twitter']){
      $data['twitter'] = $page_meta['twitter'];
    }
    if($page_meta['facebook']){
      $data['facebook'] = $page_meta['facebook'];
    }
    if($page_meta['github']){
      $data['github'] = $page_meta['github'];
    }
    if($page_meta['youtube']){
      $data['youtube'] = $page_meta['youtube'];
    }
  }
}
?>