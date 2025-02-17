<?php

/*
 * This file is part of the flarum-translations.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

use app\components\release\PolishReleaseGenerator;
use function rob006\flarum\translations\helpers\getComponents;

return [
	'cs' => [
		'type' => 'language',
		'language' => 'cs',
		'repository' => 'git@github.com:madnest/flarum-lang-czech.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'es' => [
		'type' => 'language',
		'language' => 'es',
		'repository' => 'git@github.com:FlarumES/lang-spanish.git',
		'branch' => 'main',
		'path' => '/locale/es-ES-informal',
	],
	'et' => [
		'type' => 'language',
		'language' => 'et',
		'repository' => 'git@github.com:aprold/flarum-lang-estonian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'fr' => [
		'type' => 'language',
		'language' => 'fr',
		'repository' => 'git@github.com:qiaeru/lang-french.git',
		'branch' => 'master',
		'path' => '/locale',
		'components' => getComponents([
			'core',
			'validation',
			'flarum-*',
		]),
	],
	'fr-extended' => [
		'type' => 'language',
		'language' => 'fr',
		'repository' => 'git@github.com:rooaaar/lang-french-extended.git',
		'branch' => 'master',
		'path' => '/locale',
		'components' => getComponents([
			'!core',
			'!validation',
			'!flarum-*',
			'*',
		]),
	],
	'it' => [
		'type' => 'language',
		'language' => 'it',
		'repository' => 'git@github.com:flarum-lang/italian.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'ja' => [
		'type' => 'language',
		'language' => 'ja',
		'repository' => 'git@github.com:FFans/lang-japanese.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'ka' => [
		'type' => 'language',
		'language' => 'ka',
		'repository' => 'git@github.com:B3K4682/lang-georgian.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'lv' => [
		'type' => 'language',
		'language' => 'lv',
		'repository' => 'git@github.com:edevrob/flarum-lang-latvian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'nl' => [
		'type' => 'language',
		'language' => 'nl',
		'repository' => 'git@github.com:flarum-lang/dutch.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'pl' => [
		'type' => 'language',
		'language' => 'pl',
		'releaseGenerator' => PolishReleaseGenerator::class,
		'repository' => 'git@github.com:rob006-software/flarum-lang-polish.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'si' => [
		'type' => 'language',
		'language' => 'si',
		'repository' => 'git@gitlab.com:flarum-sinhala/language-pack.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'tr' => [
		'type' => 'language',
		'language' => 'tr',
		'repository' => 'git@github.com:flarum-lang/turkish.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'zh_Hans' => [
		'type' => 'language',
		'language' => 'zh_Hans',
		'repository' => 'git@github.com:flarum-lang/chinese-simplified.git',
		'branch' => 'master',
		'path' => '/locale',
	],
];
