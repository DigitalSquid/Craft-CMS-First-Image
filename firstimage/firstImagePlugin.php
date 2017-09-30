<?php
namespace Craft;

class firstImagePlugin extends BasePlugin {
	public function getName() {
		return Craft::t('Get First Image');
	}

	public function getVersion() {
		return '1.0';
	}

	public function getDeveloper() {
		return 'CLD';
	}

	public function getDeveloperUrl() {
		return 'http://cleverlittledevelopment.co.uk';
	}

	public function hasCpSection() {
		return false;
	}

	public function addTwigExtension() {
		Craft::import('plugins.firstimage.twigextensions.firstImageTwigExtension');
		return new firstImageTwigExtension();
	}
}