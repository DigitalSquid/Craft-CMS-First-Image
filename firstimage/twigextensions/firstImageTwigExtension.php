<?php  
namespace Craft;

use Twig_Extension;  
use Twig_Filter_Method;

class firstImageTwigExtension extends Twig_Extension {

	public function getName() {
		return 'firstImage';
	}

	public function getFilters() {
		return array(
			'firstImage' => new Twig_Filter_Method($this, 'getFirstImage'),
		);
	}

	public function getFirstImage($content) {
		$parser = xml_parser_create();
		xml_parse_into_struct($parser, $content, $values);
		$first_src = '';
		foreach ($values as $key => $val) {
		    if ($val['tag'] == 'IMG') {
				$first_src = $val['attributes']['SRC'];
				break;
			}
		}

		return $first_src;
	}
}