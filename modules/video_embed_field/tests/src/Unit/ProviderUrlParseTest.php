<?php

/**
 * @file
 * Contains Drupal\Tests\video_embed_field\Unit\ProviderUrlParseTest.
 */

namespace Drupal\Tests\video_embed_field\Unit;

use Drupal\Tests\UnitTestCase;

/**
 * Test that URL parsing for various providers is functioning.
 *
 * @group video_embed_field
 */
class ProviderUrlParseTest extends UnitTestCase {

  /**
   * @dataProvider urlsWithExpectedIds
   *
   * Test URL parsing works as expected.
   */
  public function testUrlParsing($provider, $url, $expected) {
    $this->assertEquals($provider::getIdFromInput($url), $expected);
  }

  /**
   * A data provider for URL parsing test cases.
   *
   * @return array
   *   An array of test cases.
   */
  public function urlsWithExpectedIds() {
    return [
      // Youtube passing cases.
      'YouTube: Standard URL' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\YouTube',
        'https://www.youtube.com/watch?v=fdbFVWupSsw',
        'fdbFVWupSsw',
      ],
      'YouTubue: Non HTTPS' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\YouTube',
        'http://www.youtube.com/watch?v=fdbFVWupSsw',
        'fdbFVWupSsw',
      ],
      'YouTube: Non WWW' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\YouTube',
        'https://youtube.com/watch?v=fdbFVWupSsw',
        'fdbFVWupSsw',
      ],
      // Youtube failing cases.
      'YouTube: Non-youtube domain with ?v param' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\YouTube',
        'https://www.otherdomain.com/watch?v=fdbFVWupSsw',
        FALSE,
      ],
      'YouTube: Malformed String' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\YouTube',
        $this->randomMachineName(),
        FALSE,
      ],
      // Vimeo passing cases.
      'Vimeo: Normal URL' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\Vimeo',
        'https://vimeo.com/138627894',
        '138627894',
      ],
      'Vimeo: WWW URL' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\Vimeo',
        'https://www.vimeo.com/138627894',
        '138627894',
      ],
      'Vimeo: Non HTTPS' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\Vimeo',
        'http://www.vimeo.com/138627894',
        '138627894',
      ],
      // Vimeo failing cases.
      'Vimeo: Malformed String' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\Vimeo',
        $this->randomMachineName(),
        FALSE,
      ],
      'Vimeo: Non numeric page' => [
        'Drupal\video_embed_field\Plugin\video_embed_field\Provider\Vimeo',
        'https://vimeo.com/channels/staffpicks/143313674',
        FALSE,
      ],
    ];
  }
}
