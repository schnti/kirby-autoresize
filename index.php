<?php
Kirby::plugin('schnti/autoresize', [
	'options' => [
		'max'          => 1500,
		'customConfig' => []
	],
	'hooks'   => [
		'file.create:after'  => function ($file) {
			if ($file->isResizable()) {

				$maxDimension = option('schnti.autoresize.max');
				$customConfigArray = option('schnti.autoresize.customConfig');

				if ($file->width() > $maxDimension || $file->height() > $maxDimension) {

					try {

						$config = [
							'width'  => $maxDimension,
							'height' => $maxDimension,
						];

						$config = array_merge($config, $customConfigArray);

						kirby()->thumb($file->root(), $file->root(), $config);
					} catch (Exception $e) {
						throw new Exception($e->getMessage());
					}
				}
			}
		},
		'file.replace:after' => function ($file) {
			if ($file->isResizable()) {

				$maxDimension = option('schnti.autoresize.max');
				$customConfigArray = option('schnti.autoresize.customConfig');

				if ($file->width() > $maxDimension || $file->height() > $maxDimension) {

					try {

						$config = [
							'width'  => $maxDimension,
							'height' => $maxDimension,
						];

						$config = array_merge($config, $customConfigArray);

						kirby()->thumb($file->root(), $file->root(), $config);
					} catch (Exception $e) {
						throw new Exception($e->getMessage());
					}
				}
			}
		}
	]
]);
