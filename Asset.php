<?php

/**
 * @file
 * Drupal assets helper.
 *
 */

/**
* Asset
*/
class Asset {

  /**
   * Add js file/files.
   * @param string|array $data    JS file or array of files.
   * @param array  $options Options.
   * @see  drupal_add_js()
   */
  public static function AddJSFile($data, $options = array()){
    if(is_array($data)){
      foreach ($data as $file) {
        drupal_add_js($file, $options);
      }
    }else{
      drupal_add_js($data, $options);
    }
  }

  /**
   * Add js file add bottom.
   * @param string|array $data    JS file or array of files.
   * @param array  $options Options.
   * @see  drupal_add_js()
   */
  public static function AddJSFileBottom($data, $options = array()){
    $options['scope'] = 'footer';
    self::AddJSFile($data, $options);
  }

  /**
   * Add js Inline.
   * @param string $data    JS data.
   * @param array  $options Options.
   * @see  drupal_add_js()
   */
  public static function AddJSInline($data, $options = 'inline'){
    drupal_add_js($data, $options);
  }

  /**
   * Add js settings.
   * @param string $data    JS data.
   * @param array  $options Options.
   * @see  drupal_add_js()
   */
  public static function AddJSSetting($data,$options = 'setting'){
    drupal_add_js($data, $options);
  }

  /**
   * Add css file
   * @param string|array $data    path to css file or array of files.
   * @param array  $options Options.
   * @see  drupal_add_css()
   */
  public static function AddCSSFile($data, $options = array()){
    if(empty($options['group'])){
      $options['group'] = CSS_THEME;
    }
    if(is_array($data)){
      foreach ($data as $file) {
        drupal_add_css($file, $options);
      }
    }else{
      drupal_add_css($data, $options);
    }
  }

  /**
   * Add external css file
   * @param string|array $data    path to css file or array of files.
   * @param array  $options Options.
   * @see  drupal_add_css()
   */
  public static function AddCSSFileExternal($data, $options = array()){
    if(empty($options['group'])){
      $options['group'] = CSS_THEME;
    }

    if(empty($options['type'])){
      $options['type'] = 'external';
    }

    if(is_array($data)){
      foreach ($data as $file) {
        drupal_add_css($file, $options);
      }
    }else{
      drupal_add_css($data, $options);
    }
  }

  /**
   * Add inline css
   * @param string $data    Inline css.
   * @param array  $options Options.
   * @see  drupal_add_css()
   */
  public static function AddCSSInline($data, $options = 'inline'){
    drupal_add_css($data, $options);
  }
}
