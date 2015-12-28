<?php

/**
 * @file
 * Contains \Drupal\video_provider_youtube_example\StreamWrapper\YoutubeStream.
 */

namespace Drupal\video_provider_youtube_example\StreamWrapper;

use Drupal\Core\StreamWrapper\ReadOnlyStream;
use Drupal\Core\StreamWrapper\StreamWrapperInterface;
use Drupal\video\StreamWrapper\VideoRemoteStreamWrapper;

/**
 * Defines a YouTube (youtube://) stream wrapper class.
 */
class YoutubeStream extends VideoRemoteStreamWrapper {
  
  protected static $base_url = 'http://www.youtube.com/watch';
  
  /**
   * {@inheritdoc}
   */
  public function getName() {
    return t('YouTube');
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return t('Video served by the YouTube services.');
  }
  
  /**
   * {@inheritdoc}
   */
  public static function baseUrl() {
    return self::$base_url;
  }
}
