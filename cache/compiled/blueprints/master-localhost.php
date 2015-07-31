<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => 'b900437c185e71b2e6e9c39778263b88:e9295607a26816ca23571f54b9abd866',
    'files' => [
        'user/plugins' => [
            'plugins/anchors' => [
                'file' => 'user/plugins/anchors/blueprints.yaml',
                'modified' => 1438304259
            ],
            'plugins/cachebuster' => [
                'file' => 'user/plugins/cachebuster/blueprints.yaml',
                'modified' => 1438304445
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1438304639
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/blueprints.yaml',
                'modified' => 1438304815
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/blueprints.yaml',
                'modified' => 1438304990
            ],
            'plugins/private' => [
                'file' => 'user/plugins/private/blueprints.yaml',
                'modified' => 1438305237
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1437760370
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1438305383
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/blueprints.yaml',
                'modified' => 1438305396
            ]
        ],
        'system/blueprints/config' => [
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1437760368
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1437760368
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1437760368
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1437760368
            ]
        ]
    ],
    'data' => [
        'items' => [
            'plugins.anchors.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.anchors.enabled'
            ],
            'plugins.anchors.selectors' => [
                'type' => 'text',
                'label' => 'Selectors',
                'size' => 'large',
                'placeholder' => 'Anchor Selectors',
                'help' => 'Comma separated list of header selectors to activate on',
                'name' => 'plugins.anchors.selectors'
            ],
            'plugins.cachebuster.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.cachebuster.enabled'
            ],
            'plugins.cachebuster.route' => [
                'type' => 'text',
                'label' => 'Route',
                'placeholder' => '/cachebuster',
                'name' => 'plugins.cachebuster.route'
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled'
            ],
            'plugins.external_links.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.enabled'
            ],
            'plugins.external_links.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.built_in_css'
            ],
            'plugins.external_links.weight' => [
                'type' => 'text',
                'label' => 'Set the weight (order of execution)',
                'default' => 0,
                'validate' => [
                    'type' => 'int',
                    'min' => -100,
                    'max' => 100
                ],
                'name' => 'plugins.external_links.weight'
            ],
            'plugins.external_links.exclude.classes' => [
                'type' => 'text',
                'label' => 'Exclude all links with this class',
                'help' => 'Comma separated list.',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.exclude.classes'
            ],
            'plugins.external_links.exclude.domains' => [
                'type' => 'text',
                'label' => 'A list of domains to be excluded (any regular expression can be used)',
                'help' => 'Comma separated list of domains e.g. _localhost/*_.',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.external_links.exclude.domains'
            ],
            'plugins.external_links.process' => [
                'type' => 'toggle',
                'label' => 'Filter external links',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.process'
            ],
            'plugins.external_links.no_follow' => [
                'type' => 'toggle',
                'label' => 'Add `rel="nofollow"` to all external links',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.external_links.no_follow'
            ],
            'plugins.external_links.target' => [
                'type' => 'text',
                'label' => 'Set target attribute of the link.',
                'default' => '_blank',
                'placeholder' => '_blank',
                'name' => 'plugins.external_links.target'
            ],
            'plugins.highlight.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.highlight.enabled'
            ],
            'plugins.highlight.theme' => [
                'type' => 'select',
                'label' => 'CSS Theme',
                'default' => 'default',
                'options' => [
                    'default' => 'Default',
                    'monokai' => 'Monakai',
                    'learn' => 'Grav Learn',
                    'railscasts' => 'Railscasts',
                    'arta' => 'Arta',
                    'ascetic' => 'Ascetic',
                    'atelier-dune.dark' => 'Atelier Dune Dark',
                    'atelier-dune.light' => 'Atelier Dune Light',
                    'atelier-forest.dark' => 'Atelier Forest Dark',
                    'atelier-forest.light' => 'Atelier Forest Light',
                    'atelier-heath.dark' => 'Atelier Heath Dark',
                    'atelier-heath.light' => 'Atelier Heath Light',
                    'atelier-lakeside.dark' => 'Atelier Lakeside Dark',
                    'atelier-lakeside.light' => 'Atelier Lakeside Light',
                    'atelier-seaside.dark' => 'Atelier Seaside Dark',
                    'atelier-seaside.light' => 'Atelier Seaside Light',
                    'brown_paper' => 'Brown Paper',
                    'codepen-embed' => 'Codepen Embed',
                    'color-brewer' => 'Color Brewer',
                    'dark' => 'Dark',
                    'docco' => 'Docco',
                    'far' => 'Far',
                    'foundation' => 'Foundation',
                    'github' => 'Github',
                    'googlecode' => 'GoogleCode',
                    'hybrid' => 'Hybrid',
                    'idea' => 'Idea',
                    'ir_black' => 'IRBlack',
                    'kimbie.dark' => 'Kimbie Dark',
                    'kimbie.light' => 'Kimbie Light',
                    'magula' => 'Magula',
                    'mono-blue' => 'Mono Blue',
                    'monokai_sublime' => 'Monokai Sublime',
                    'obsidian' => 'Obsidian',
                    'paraiso.dark' => 'Paraiso Dark',
                    'paraiso.light' => 'Paraiso Light',
                    'pojoaque' => 'Pojoaque',
                    'rainbow' => 'Rainbow',
                    'school_book' => 'School Book',
                    'solarized_dark' => 'Solarized Dark',
                    'solarized_light' => 'Solarized Light',
                    'sunburst' => 'Sunburst',
                    'tomorrow-night-blue' => 'Tomorrow Night Blue',
                    'tomorrow-night-bright' => 'Tomorrow Night Bright',
                    'tomorrow-night-eighties' => 'Tomorrow Night Eighties',
                    'tomorrow-night' => 'Tomorrow Night',
                    'tomorrow' => 'Tomorrow',
                    'vs' => 'VS',
                    'xcode' => 'XCode',
                    'zenburn' => 'Zenburn'
                ],
                'name' => 'plugins.highlight.theme'
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled'
            ],
            'plugins.simplesearch.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.enabled'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css'
            ],
            'plugins.simplesearch.filters' => [
                'type' => 'text',
                'label' => 'Category filter',
                'help' => 'Comma separated list of category names',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.simplesearch.filter_combinator'
            ],
            'plugins.sitemap.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin status',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.enabled'
            ],
            'plugins.sitemap.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.built_in_css'
            ],
            'plugins.sitemap.route' => [
                'type' => 'text',
                'label' => 'Route to sitemap',
                'placeholder' => '/sitemap',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.sitemap.route'
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'Site Title',
                'size' => 'large',
                'placeholder' => 'Site wide title',
                'help' => 'Default title for your site',
                'name' => 'site.title'
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Author',
                'name' => 'site.author.name'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Default Email',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email'
            ],
            'site.taxonomies' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Taxonomy Types',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'Metadata',
                'placeholder_key' => 'Name',
                'placeholder_value' => 'Content',
                'name' => 'site.metadata'
            ],
            'site.blog.route' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'Blog URL',
                'name' => 'site.blog.route'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Summary Size',
                'validate' => NULL,
                'min' => 0,
                'max' => 65536,
                'name' => 'site.summary.size'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'Custom',
                'placeholder_key' => '/your/alias',
                'placeholder_value' => '/your/route',
                'name' => 'site.routes'
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx'
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Home Page',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'help' => 'The page that Grav will use as the default landing page',
                'name' => 'system.home.alias'
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'size' => 'medium',
                'label' => 'Default Theme',
                'help' => 'Set the theme (defaults to \'default\')',
                'name' => 'system.pages.theme'
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown Extra',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'Process',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Short Date Format',
                'help' => 'Set the short date format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\\\a\\\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.short'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Long Date Format',
                'help' => 'Set the long date format',
                'options' => [
                    'F jS \\a\\t g:ia' => 'January 1st at 11:59pm',
                    'l jS of F g:i A' => 'Monday 1st of January at 11:59 PM',
                    'D, m M Y G:i:s' => 'Mon, 01 Jan 2014 23:59:00',
                    'd-m-y G:i' => '01-01-14 23:59',
                    'jS M Y' => '10th Feb 2014'
                ],
                'name' => 'system.pages.dateformat.long'
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Default Ordering',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'title' => 'Title - based on title field in header',
                    'date' => 'Date - based on date field in header'
                ],
                'name' => 'system.pages.order.by'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'Default Order Direction',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'system.pages.order.dir'
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Default Item Count',
                'help' => 'Default max pages count',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'Date-based publishing',
                'help' => 'Automatically (un)publish posts based on their date',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates'
            ],
            'system.pages.events.page' => [
                'type' => 'toggle',
                'label' => 'Page events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.page'
            ],
            'system.pages.events.twig' => [
                'type' => 'toggle',
                'label' => 'Twig events',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.events.twig'
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'Caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled'
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache Check Method',
                'options' => [
                    'file' => 'File',
                    'folder' => 'Folder',
                    'none' => 'None'
                ],
                'name' => 'system.cache.check.method'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Cache driver',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apc' => 'APC',
                    'xcache' => 'XCache',
                    'memcache' => 'MemCache',
                    'wincache' => 'WinCache'
                ],
                'name' => 'system.cache.driver'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Cache Prefix',
                'placeholder' => 'Derived from base URL (override by entering random string)',
                'name' => 'system.cache.prefix'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'GZIP compression',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip'
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on assets',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp'
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'Enable timestamps on media',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp'
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'Twig caching',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'Twig debug',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'Detect changes',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'Autoescape variables',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'CSS Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'CSS Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'CSS Minify Windows Override',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'CSS Rewrite',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'JavaScript Pipeline',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'JavaScript Minify',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify'
            ],
            'system.errors.display' => [
                'type' => 'toggle',
                'label' => 'Display errors',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.display'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'Log errors',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log'
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'Debugger',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled'
            ],
            'system.debugger.mode' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Mode',
                'options' => [
                    'detect' => 'Auto-Detect',
                    'development' => 'Development',
                    'production' => 'Production'
                ],
                'name' => 'system.debugger.mode'
            ],
            'system.debugger.strict' => [
                'type' => 'toggle',
                'label' => 'Strict',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.strict'
            ],
            'system.debugger.max_depth' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Detail Level',
                'placeholder' => 'How many nested levels to display for objects or arrays',
                'options' => [
                    1 => '1 level',
                    2 => '2 levels',
                    3 => '3 levels',
                    4 => '4 levels',
                    5 => '5 levels',
                    6 => '6 levels',
                    7 => '7 levels',
                    8 => '8 levels',
                    9 => '9 levels',
                    10 => '10 levels'
                ],
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.debugger.max_depth'
            ],
            'system.debugger.log.enabled' => [
                'type' => 'toggle',
                'label' => 'Logging',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.log.enabled'
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'Shutdown Close Connection',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection'
            ],
            'system.images.default_image_quality' => [
                'type' => 'text',
                'label' => 'Default image quality',
                'classes' => 'x-small',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'Image debug watermark',
                'highlight' => 1,
                'options' => [
                    1 => 'Yes',
                    0 => 'No'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug'
            ],
            'system.media.upload_limit' => [
                'type' => 'text',
                'label' => 'File upload limit',
                'classes' => 'small',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.media.upload_limit'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'Timezone',
                'classes' => 'fancy',
                '@data-options' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => '- None -',
                    'Pacific/Pago_Pago' => '(UTC-11:00) Pacific/Pago_Pago',
                    'Pacific/Niue' => '(UTC-11:00) Pacific/Niue',
                    'Pacific/Midway' => '(UTC-11:00) Pacific/Midway',
                    'Pacific/Honolulu' => '(UTC-10:00) Pacific/Honolulu',
                    'Pacific/Johnston' => '(UTC-10:00) Pacific/Johnston',
                    'Pacific/Tahiti' => '(UTC-10:00) Pacific/Tahiti',
                    'Pacific/Rarotonga' => '(UTC-10:00) Pacific/Rarotonga',
                    'Pacific/Marquesas' => '(UTC-09:30) Pacific/Marquesas',
                    'Pacific/Gambier' => '(UTC-09:00) Pacific/Gambier',
                    'America/Adak' => '(UTC-09:00) America/Adak',
                    'America/Metlakatla' => '(UTC-08:00) America/Metlakatla',
                    'America/Nome' => '(UTC-08:00) America/Nome',
                    'America/Anchorage' => '(UTC-08:00) America/Anchorage',
                    'America/Yakutat' => '(UTC-08:00) America/Yakutat',
                    'America/Sitka' => '(UTC-08:00) America/Sitka',
                    'America/Juneau' => '(UTC-08:00) America/Juneau',
                    'Pacific/Pitcairn' => '(UTC-08:00) Pacific/Pitcairn',
                    'America/Tijuana' => '(UTC-07:00) America/Tijuana',
                    'America/Creston' => '(UTC-07:00) America/Creston',
                    'America/Vancouver' => '(UTC-07:00) America/Vancouver',
                    'America/Whitehorse' => '(UTC-07:00) America/Whitehorse',
                    'America/Los_Angeles' => '(UTC-07:00) America/Los_Angeles',
                    'America/Dawson_Creek' => '(UTC-07:00) America/Dawson_Creek',
                    'America/Hermosillo' => '(UTC-07:00) America/Hermosillo',
                    'America/Santa_Isabel' => '(UTC-07:00) America/Santa_Isabel',
                    'America/Dawson' => '(UTC-07:00) America/Dawson',
                    'America/Phoenix' => '(UTC-07:00) America/Phoenix',
                    'America/Ojinaga' => '(UTC-06:00) America/Ojinaga',
                    'America/Managua' => '(UTC-06:00) America/Managua',
                    'America/Inuvik' => '(UTC-06:00) America/Inuvik',
                    'America/Costa_Rica' => '(UTC-06:00) America/Costa_Rica',
                    'America/Cambridge_Bay' => '(UTC-06:00) America/Cambridge_Bay',
                    'America/Mazatlan' => '(UTC-06:00) America/Mazatlan',
                    'America/Belize' => '(UTC-06:00) America/Belize',
                    'America/Chihuahua' => '(UTC-06:00) America/Chihuahua',
                    'America/Boise' => '(UTC-06:00) America/Boise',
                    'America/Guatemala' => '(UTC-06:00) America/Guatemala',
                    'America/Denver' => '(UTC-06:00) America/Denver',
                    'Pacific/Easter' => '(UTC-06:00) Pacific/Easter',
                    'America/Swift_Current' => '(UTC-06:00) America/Swift_Current',
                    'America/El_Salvador' => '(UTC-06:00) America/El_Salvador',
                    'America/Tegucigalpa' => '(UTC-06:00) America/Tegucigalpa',
                    'America/Edmonton' => '(UTC-06:00) America/Edmonton',
                    'Pacific/Galapagos' => '(UTC-06:00) Pacific/Galapagos',
                    'America/Yellowknife' => '(UTC-06:00) America/Yellowknife',
                    'America/Regina' => '(UTC-06:00) America/Regina',
                    'America/Chicago' => '(UTC-05:00) America/Chicago',
                    'America/Matamoros' => '(UTC-05:00) America/Matamoros',
                    'America/Menominee' => '(UTC-05:00) America/Menominee',
                    'America/Lima' => '(UTC-05:00) America/Lima',
                    'America/Jamaica' => '(UTC-05:00) America/Jamaica',
                    'America/Bogota' => '(UTC-05:00) America/Bogota',
                    'America/Guayaquil' => '(UTC-05:00) America/Guayaquil',
                    'America/Winnipeg' => '(UTC-05:00) America/Winnipeg',
                    'America/Cancun' => '(UTC-05:00) America/Cancun',
                    'America/Merida' => '(UTC-05:00) America/Merida',
                    'America/Atikokan' => '(UTC-05:00) America/Atikokan',
                    'America/Bahia_Banderas' => '(UTC-05:00) America/Bahia_Banderas',
                    'America/Cayman' => '(UTC-05:00) America/Cayman',
                    'America/Indiana/Knox' => '(UTC-05:00) America/Indiana/Knox',
                    'America/Indiana/Tell_City' => '(UTC-05:00) America/Indiana/Tell_City',
                    'America/North_Dakota/New_Salem' => '(UTC-05:00) America/North_Dakota/New_Salem',
                    'America/Rainy_River' => '(UTC-05:00) America/Rainy_River',
                    'America/Panama' => '(UTC-05:00) America/Panama',
                    'America/Rio_Branco' => '(UTC-05:00) America/Rio_Branco',
                    'America/Rankin_Inlet' => '(UTC-05:00) America/Rankin_Inlet',
                    'America/Resolute' => '(UTC-05:00) America/Resolute',
                    'America/North_Dakota/Beulah' => '(UTC-05:00) America/North_Dakota/Beulah',
                    'America/North_Dakota/Center' => '(UTC-05:00) America/North_Dakota/Center',
                    'America/Monterrey' => '(UTC-05:00) America/Monterrey',
                    'America/Mexico_City' => '(UTC-05:00) America/Mexico_City',
                    'America/Eirunepe' => '(UTC-05:00) America/Eirunepe',
                    'America/Caracas' => '(UTC-04:30) America/Caracas',
                    'America/Indiana/Indianapolis' => '(UTC-04:00) America/Indiana/Indianapolis',
                    'America/Havana' => '(UTC-04:00) America/Havana',
                    'America/Indiana/Vevay' => '(UTC-04:00) America/Indiana/Vevay',
                    'America/Indiana/Winamac' => '(UTC-04:00) America/Indiana/Winamac',
                    'America/Indiana/Vincennes' => '(UTC-04:00) America/Indiana/Vincennes',
                    'America/Guyana' => '(UTC-04:00) America/Guyana',
                    'America/Indiana/Marengo' => '(UTC-04:00) America/Indiana/Marengo',
                    'America/Iqaluit' => '(UTC-04:00) America/Iqaluit',
                    'America/New_York' => '(UTC-04:00) America/New_York',
                    'America/St_Barthelemy' => '(UTC-04:00) America/St_Barthelemy',
                    'America/St_Kitts' => '(UTC-04:00) America/St_Kitts',
                    'America/Santo_Domingo' => '(UTC-04:00) America/Santo_Domingo',
                    'America/Santiago' => '(UTC-04:00) America/Santiago',
                    'America/Puerto_Rico' => '(UTC-04:00) America/Puerto_Rico',
                    'America/St_Lucia' => '(UTC-04:00) America/St_Lucia',
                    'America/St_Thomas' => '(UTC-04:00) America/St_Thomas',
                    'America/Tortola' => '(UTC-04:00) America/Tortola',
                    'Antarctica/Palmer' => '(UTC-04:00) Antarctica/Palmer',
                    'America/Toronto' => '(UTC-04:00) America/Toronto',
                    'America/Thunder_Bay' => '(UTC-04:00) America/Thunder_Bay',
                    'America/St_Vincent' => '(UTC-04:00) America/St_Vincent',
                    'America/Porto_Velho' => '(UTC-04:00) America/Porto_Velho',
                    'America/Port_of_Spain' => '(UTC-04:00) America/Port_of_Spain',
                    'America/Lower_Princes' => '(UTC-04:00) America/Lower_Princes',
                    'America/Manaus' => '(UTC-04:00) America/Manaus',
                    'America/La_Paz' => '(UTC-04:00) America/La_Paz',
                    'America/Kralendijk' => '(UTC-04:00) America/Kralendijk',
                    'America/Kentucky/Monticello' => '(UTC-04:00) America/Kentucky/Monticello',
                    'America/Marigot' => '(UTC-04:00) America/Marigot',
                    'America/Martinique' => '(UTC-04:00) America/Martinique',
                    'America/Pangnirtung' => '(UTC-04:00) America/Pangnirtung',
                    'America/Port-au-Prince' => '(UTC-04:00) America/Port-au-Prince',
                    'America/Nipigon' => '(UTC-04:00) America/Nipigon',
                    'America/Nassau' => '(UTC-04:00) America/Nassau',
                    'America/Montserrat' => '(UTC-04:00) America/Montserrat',
                    'America/Kentucky/Louisville' => '(UTC-04:00) America/Kentucky/Louisville',
                    'America/Indiana/Petersburg' => '(UTC-04:00) America/Indiana/Petersburg',
                    'America/Blanc-Sablon' => '(UTC-04:00) America/Blanc-Sablon',
                    'America/Boa_Vista' => '(UTC-04:00) America/Boa_Vista',
                    'America/Campo_Grande' => '(UTC-04:00) America/Campo_Grande',
                    'America/Cuiaba' => '(UTC-04:00) America/Cuiaba',
                    'America/Barbados' => '(UTC-04:00) America/Barbados',
                    'America/Asuncion' => '(UTC-04:00) America/Asuncion',
                    'America/Guadeloupe' => '(UTC-04:00) America/Guadeloupe',
                    'America/Anguilla' => '(UTC-04:00) America/Anguilla',
                    'America/Aruba' => '(UTC-04:00) America/Aruba',
                    'America/Curacao' => '(UTC-04:00) America/Curacao',
                    'America/Antigua' => '(UTC-04:00) America/Antigua',
                    'America/Grenada' => '(UTC-04:00) America/Grenada',
                    'America/Dominica' => '(UTC-04:00) America/Dominica',
                    'America/Detroit' => '(UTC-04:00) America/Detroit',
                    'America/Grand_Turk' => '(UTC-04:00) America/Grand_Turk',
                    'America/Halifax' => '(UTC-03:00) America/Halifax',
                    'America/Montevideo' => '(UTC-03:00) America/Montevideo',
                    'America/Araguaina' => '(UTC-03:00) America/Araguaina',
                    'America/Argentina/Catamarca' => '(UTC-03:00) America/Argentina/Catamarca',
                    'America/Argentina/Jujuy' => '(UTC-03:00) America/Argentina/Jujuy',
                    'America/Argentina/Cordoba' => '(UTC-03:00) America/Argentina/Cordoba',
                    'America/Argentina/Buenos_Aires' => '(UTC-03:00) America/Argentina/Buenos_Aires',
                    'America/Thule' => '(UTC-03:00) America/Thule',
                    'America/Sao_Paulo' => '(UTC-03:00) America/Sao_Paulo',
                    'America/Recife' => '(UTC-03:00) America/Recife',
                    'America/Santarem' => '(UTC-03:00) America/Santarem',
                    'Atlantic/Stanley' => '(UTC-03:00) Atlantic/Stanley',
                    'Antarctica/Rothera' => '(UTC-03:00) Antarctica/Rothera',
                    'America/Argentina/La_Rioja' => '(UTC-03:00) America/Argentina/La_Rioja',
                    'America/Paramaribo' => '(UTC-03:00) America/Paramaribo',
                    'Atlantic/Bermuda' => '(UTC-03:00) Atlantic/Bermuda',
                    'America/Moncton' => '(UTC-03:00) America/Moncton',
                    'America/Goose_Bay' => '(UTC-03:00) America/Goose_Bay',
                    'America/Argentina/Ushuaia' => '(UTC-03:00) America/Argentina/Ushuaia',
                    'America/Glace_Bay' => '(UTC-03:00) America/Glace_Bay',
                    'America/Argentina/Mendoza' => '(UTC-03:00) America/Argentina/Mendoza',
                    'America/Belem' => '(UTC-03:00) America/Belem',
                    'America/Fortaleza' => '(UTC-03:00) America/Fortaleza',
                    'America/Cayenne' => '(UTC-03:00) America/Cayenne',
                    'America/Bahia' => '(UTC-03:00) America/Bahia',
                    'America/Argentina/Salta' => '(UTC-03:00) America/Argentina/Salta',
                    'America/Argentina/Rio_Gallegos' => '(UTC-03:00) America/Argentina/Rio_Gallegos',
                    'America/Argentina/San_Juan' => '(UTC-03:00) America/Argentina/San_Juan',
                    'America/Argentina/San_Luis' => '(UTC-03:00) America/Argentina/San_Luis',
                    'America/Argentina/Tucuman' => '(UTC-03:00) America/Argentina/Tucuman',
                    'America/Maceio' => '(UTC-03:00) America/Maceio',
                    'America/St_Johns' => '(UTC-02:30) America/St_Johns',
                    'Atlantic/South_Georgia' => '(UTC-02:00) Atlantic/South_Georgia',
                    'America/Noronha' => '(UTC-02:00) America/Noronha',
                    'America/Godthab' => '(UTC-02:00) America/Godthab',
                    'America/Miquelon' => '(UTC-02:00) America/Miquelon',
                    'Atlantic/Cape_Verde' => '(UTC-01:00) Atlantic/Cape_Verde',
                    'Africa/Lome' => '(UTC+00:00) Africa/Lome',
                    'Africa/Banjul' => '(UTC+00:00) Africa/Banjul',
                    'America/Scoresbysund' => '(UTC+00:00) America/Scoresbysund',
                    'Africa/Dakar' => '(UTC+00:00) Africa/Dakar',
                    'Africa/Bamako' => '(UTC+00:00) Africa/Bamako',
                    'Africa/Conakry' => '(UTC+00:00) Africa/Conakry',
                    'Africa/Freetown' => '(UTC+00:00) Africa/Freetown',
                    'UTC' => '(UTC+00:00) UTC',
                    'Africa/Accra' => '(UTC+00:00) Africa/Accra',
                    'Africa/Abidjan' => '(UTC+00:00) Africa/Abidjan',
                    'Africa/Sao_Tome' => '(UTC+00:00) Africa/Sao_Tome',
                    'Africa/Monrovia' => '(UTC+00:00) Africa/Monrovia',
                    'Atlantic/Reykjavik' => '(UTC+00:00) Atlantic/Reykjavik',
                    'Africa/Nouakchott' => '(UTC+00:00) Africa/Nouakchott',
                    'Africa/Ouagadougou' => '(UTC+00:00) Africa/Ouagadougou',
                    'Atlantic/St_Helena' => '(UTC+00:00) Atlantic/St_Helena',
                    'America/Danmarkshavn' => '(UTC+00:00) America/Danmarkshavn',
                    'Atlantic/Azores' => '(UTC+00:00) Atlantic/Azores',
                    'Africa/Bissau' => '(UTC+00:00) Africa/Bissau',
                    'Atlantic/Canary' => '(UTC+01:00) Atlantic/Canary',
                    'Africa/Bangui' => '(UTC+01:00) Africa/Bangui',
                    'Atlantic/Faroe' => '(UTC+01:00) Atlantic/Faroe',
                    'Africa/Algiers' => '(UTC+01:00) Africa/Algiers',
                    'Atlantic/Madeira' => '(UTC+01:00) Atlantic/Madeira',
                    'Europe/Isle_of_Man' => '(UTC+01:00) Europe/Isle_of_Man',
                    'Europe/Jersey' => '(UTC+01:00) Europe/Jersey',
                    'Europe/London' => '(UTC+01:00) Europe/London',
                    'Europe/Guernsey' => '(UTC+01:00) Europe/Guernsey',
                    'Europe/Dublin' => '(UTC+01:00) Europe/Dublin',
                    'Europe/Lisbon' => '(UTC+01:00) Europe/Lisbon',
                    'Africa/Luanda' => '(UTC+01:00) Africa/Luanda',
                    'Africa/Ndjamena' => '(UTC+01:00) Africa/Ndjamena',
                    'Africa/Niamey' => '(UTC+01:00) Africa/Niamey',
                    'Africa/Lagos' => '(UTC+01:00) Africa/Lagos',
                    'Africa/Libreville' => '(UTC+01:00) Africa/Libreville',
                    'Africa/Malabo' => '(UTC+01:00) Africa/Malabo',
                    'Africa/Brazzaville' => '(UTC+01:00) Africa/Brazzaville',
                    'Africa/Porto-Novo' => '(UTC+01:00) Africa/Porto-Novo',
                    'Africa/Kinshasa' => '(UTC+01:00) Africa/Kinshasa',
                    'Africa/Douala' => '(UTC+01:00) Africa/Douala',
                    'Africa/Windhoek' => '(UTC+01:00) Africa/Windhoek',
                    'Africa/El_Aaiun' => '(UTC+01:00) Africa/El_Aaiun',
                    'Africa/Casablanca' => '(UTC+01:00) Africa/Casablanca',
                    'Africa/Tunis' => '(UTC+01:00) Africa/Tunis',
                    'Europe/Berlin' => '(UTC+02:00) Europe/Berlin',
                    'Europe/Bratislava' => '(UTC+02:00) Europe/Bratislava',
                    'Europe/Brussels' => '(UTC+02:00) Europe/Brussels',
                    'Europe/Budapest' => '(UTC+02:00) Europe/Budapest',
                    'Europe/Busingen' => '(UTC+02:00) Europe/Busingen',
                    'Europe/Andorra' => '(UTC+02:00) Europe/Andorra',
                    'Europe/Stockholm' => '(UTC+02:00) Europe/Stockholm',
                    'Europe/Skopje' => '(UTC+02:00) Europe/Skopje',
                    'Europe/Copenhagen' => '(UTC+02:00) Europe/Copenhagen',
                    'Europe/Tirane' => '(UTC+02:00) Europe/Tirane',
                    'Europe/Sarajevo' => '(UTC+02:00) Europe/Sarajevo',
                    'Europe/Amsterdam' => '(UTC+02:00) Europe/Amsterdam',
                    'Europe/Belgrade' => '(UTC+02:00) Europe/Belgrade',
                    'Europe/Vienna' => '(UTC+02:00) Europe/Vienna',
                    'Europe/Paris' => '(UTC+02:00) Europe/Paris',
                    'Europe/Oslo' => '(UTC+02:00) Europe/Oslo',
                    'Europe/Zagreb' => '(UTC+02:00) Europe/Zagreb',
                    'Europe/Podgorica' => '(UTC+02:00) Europe/Podgorica',
                    'Europe/Prague' => '(UTC+02:00) Europe/Prague',
                    'Europe/Zurich' => '(UTC+02:00) Europe/Zurich',
                    'Europe/San_Marino' => '(UTC+02:00) Europe/San_Marino',
                    'Europe/Rome' => '(UTC+02:00) Europe/Rome',
                    'Europe/Monaco' => '(UTC+02:00) Europe/Monaco',
                    'Europe/Malta' => '(UTC+02:00) Europe/Malta',
                    'Europe/Kaliningrad' => '(UTC+02:00) Europe/Kaliningrad',
                    'Europe/Vatican' => '(UTC+02:00) Europe/Vatican',
                    'Europe/Gibraltar' => '(UTC+02:00) Europe/Gibraltar',
                    'Europe/Warsaw' => '(UTC+02:00) Europe/Warsaw',
                    'Europe/Ljubljana' => '(UTC+02:00) Europe/Ljubljana',
                    'Europe/Madrid' => '(UTC+02:00) Europe/Madrid',
                    'Europe/Luxembourg' => '(UTC+02:00) Europe/Luxembourg',
                    'Europe/Vaduz' => '(UTC+02:00) Europe/Vaduz',
                    'Antarctica/Troll' => '(UTC+02:00) Antarctica/Troll',
                    'Africa/Lubumbashi' => '(UTC+02:00) Africa/Lubumbashi',
                    'Africa/Kigali' => '(UTC+02:00) Africa/Kigali',
                    'Africa/Johannesburg' => '(UTC+02:00) Africa/Johannesburg',
                    'Africa/Lusaka' => '(UTC+02:00) Africa/Lusaka',
                    'Africa/Maputo' => '(UTC+02:00) Africa/Maputo',
                    'Arctic/Longyearbyen' => '(UTC+02:00) Arctic/Longyearbyen',
                    'Africa/Tripoli' => '(UTC+02:00) Africa/Tripoli',
                    'Africa/Mbabane' => '(UTC+02:00) Africa/Mbabane',
                    'Africa/Harare' => '(UTC+02:00) Africa/Harare',
                    'Africa/Maseru' => '(UTC+02:00) Africa/Maseru',
                    'Africa/Blantyre' => '(UTC+02:00) Africa/Blantyre',
                    'Africa/Bujumbura' => '(UTC+02:00) Africa/Bujumbura',
                    'Africa/Gaborone' => '(UTC+02:00) Africa/Gaborone',
                    'Africa/Ceuta' => '(UTC+02:00) Africa/Ceuta',
                    'Asia/Aden' => '(UTC+03:00) Asia/Aden',
                    'Africa/Addis_Ababa' => '(UTC+03:00) Africa/Addis_Ababa',
                    'Europe/Mariehamn' => '(UTC+03:00) Europe/Mariehamn',
                    'Europe/Minsk' => '(UTC+03:00) Europe/Minsk',
                    'Europe/Riga' => '(UTC+03:00) Europe/Riga',
                    'Europe/Moscow' => '(UTC+03:00) Europe/Moscow',
                    'Antarctica/Syowa' => '(UTC+03:00) Antarctica/Syowa',
                    'Asia/Amman' => '(UTC+03:00) Asia/Amman',
                    'Europe/Kiev' => '(UTC+03:00) Europe/Kiev',
                    'Europe/Bucharest' => '(UTC+03:00) Europe/Bucharest',
                    'Europe/Athens' => '(UTC+03:00) Europe/Athens',
                    'Asia/Damascus' => '(UTC+03:00) Asia/Damascus',
                    'Asia/Gaza' => '(UTC+03:00) Asia/Gaza',
                    'Asia/Beirut' => '(UTC+03:00) Asia/Beirut',
                    'Europe/Chisinau' => '(UTC+03:00) Europe/Chisinau',
                    'Europe/Helsinki' => '(UTC+03:00) Europe/Helsinki',
                    'Asia/Baghdad' => '(UTC+03:00) Asia/Baghdad',
                    'Asia/Bahrain' => '(UTC+03:00) Asia/Bahrain',
                    'Africa/Asmara' => '(UTC+03:00) Africa/Asmara',
                    'Europe/Sofia' => '(UTC+03:00) Europe/Sofia',
                    'Indian/Antananarivo' => '(UTC+03:00) Indian/Antananarivo',
                    'Africa/Khartoum' => '(UTC+03:00) Africa/Khartoum',
                    'Europe/Zaporozhye' => '(UTC+03:00) Europe/Zaporozhye',
                    'Indian/Comoro' => '(UTC+03:00) Indian/Comoro',
                    'Indian/Mayotte' => '(UTC+03:00) Indian/Mayotte',
                    'Africa/Djibouti' => '(UTC+03:00) Africa/Djibouti',
                    'Africa/Juba' => '(UTC+03:00) Africa/Juba',
                    'Africa/Kampala' => '(UTC+03:00) Africa/Kampala',
                    'Africa/Dar_es_Salaam' => '(UTC+03:00) Africa/Dar_es_Salaam',
                    'Europe/Volgograd' => '(UTC+03:00) Europe/Volgograd',
                    'Europe/Tallinn' => '(UTC+03:00) Europe/Tallinn',
                    'Africa/Mogadishu' => '(UTC+03:00) Africa/Mogadishu',
                    'Africa/Nairobi' => '(UTC+03:00) Africa/Nairobi',
                    'Europe/Uzhgorod' => '(UTC+03:00) Europe/Uzhgorod',
                    'Asia/Hebron' => '(UTC+03:00) Asia/Hebron',
                    'Europe/Vilnius' => '(UTC+03:00) Europe/Vilnius',
                    'Africa/Cairo' => '(UTC+03:00) Africa/Cairo',
                    'Europe/Simferopol' => '(UTC+03:00) Europe/Simferopol',
                    'Europe/Istanbul' => '(UTC+03:00) Europe/Istanbul',
                    'Asia/Nicosia' => '(UTC+03:00) Asia/Nicosia',
                    'Asia/Riyadh' => '(UTC+03:00) Asia/Riyadh',
                    'Asia/Kuwait' => '(UTC+03:00) Asia/Kuwait',
                    'Asia/Jerusalem' => '(UTC+03:00) Asia/Jerusalem',
                    'Asia/Qatar' => '(UTC+03:00) Asia/Qatar',
                    'Indian/Reunion' => '(UTC+04:00) Indian/Reunion',
                    'Asia/Muscat' => '(UTC+04:00) Asia/Muscat',
                    'Indian/Mauritius' => '(UTC+04:00) Indian/Mauritius',
                    'Europe/Samara' => '(UTC+04:00) Europe/Samara',
                    'Asia/Tbilisi' => '(UTC+04:00) Asia/Tbilisi',
                    'Indian/Mahe' => '(UTC+04:00) Indian/Mahe',
                    'Asia/Dubai' => '(UTC+04:00) Asia/Dubai',
                    'Asia/Yerevan' => '(UTC+04:00) Asia/Yerevan',
                    'Asia/Tehran' => '(UTC+04:30) Asia/Tehran',
                    'Asia/Kabul' => '(UTC+04:30) Asia/Kabul',
                    'Indian/Maldives' => '(UTC+05:00) Indian/Maldives',
                    'Asia/Samarkand' => '(UTC+05:00) Asia/Samarkand',
                    'Antarctica/Mawson' => '(UTC+05:00) Antarctica/Mawson',
                    'Asia/Tashkent' => '(UTC+05:00) Asia/Tashkent',
                    'Asia/Yekaterinburg' => '(UTC+05:00) Asia/Yekaterinburg',
                    'Asia/Oral' => '(UTC+05:00) Asia/Oral',
                    'Asia/Dushanbe' => '(UTC+05:00) Asia/Dushanbe',
                    'Asia/Aqtau' => '(UTC+05:00) Asia/Aqtau',
                    'Indian/Kerguelen' => '(UTC+05:00) Indian/Kerguelen',
                    'Asia/Aqtobe' => '(UTC+05:00) Asia/Aqtobe',
                    'Asia/Karachi' => '(UTC+05:00) Asia/Karachi',
                    'Asia/Baku' => '(UTC+05:00) Asia/Baku',
                    'Asia/Ashgabat' => '(UTC+05:00) Asia/Ashgabat',
                    'Asia/Kolkata' => '(UTC+05:30) Asia/Kolkata',
                    'Asia/Colombo' => '(UTC+05:30) Asia/Colombo',
                    'Asia/Kathmandu' => '(UTC+05:45) Asia/Kathmandu',
                    'Asia/Novosibirsk' => '(UTC+06:00) Asia/Novosibirsk',
                    'Indian/Chagos' => '(UTC+06:00) Indian/Chagos',
                    'Asia/Almaty' => '(UTC+06:00) Asia/Almaty',
                    'Asia/Omsk' => '(UTC+06:00) Asia/Omsk',
                    'Antarctica/Vostok' => '(UTC+06:00) Antarctica/Vostok',
                    'Asia/Qyzylorda' => '(UTC+06:00) Asia/Qyzylorda',
                    'Asia/Urumqi' => '(UTC+06:00) Asia/Urumqi',
                    'Asia/Thimphu' => '(UTC+06:00) Asia/Thimphu',
                    'Asia/Dhaka' => '(UTC+06:00) Asia/Dhaka',
                    'Asia/Bishkek' => '(UTC+06:00) Asia/Bishkek',
                    'Asia/Rangoon' => '(UTC+06:30) Asia/Rangoon',
                    'Indian/Cocos' => '(UTC+06:30) Indian/Cocos',
                    'Asia/Ho_Chi_Minh' => '(UTC+07:00) Asia/Ho_Chi_Minh',
                    'Asia/Krasnoyarsk' => '(UTC+07:00) Asia/Krasnoyarsk',
                    'Asia/Phnom_Penh' => '(UTC+07:00) Asia/Phnom_Penh',
                    'Asia/Hovd' => '(UTC+07:00) Asia/Hovd',
                    'Indian/Christmas' => '(UTC+07:00) Indian/Christmas',
                    'Asia/Novokuznetsk' => '(UTC+07:00) Asia/Novokuznetsk',
                    'Antarctica/Davis' => '(UTC+07:00) Antarctica/Davis',
                    'Asia/Pontianak' => '(UTC+07:00) Asia/Pontianak',
                    'Asia/Jakarta' => '(UTC+07:00) Asia/Jakarta',
                    'Asia/Vientiane' => '(UTC+07:00) Asia/Vientiane',
                    'Asia/Bangkok' => '(UTC+07:00) Asia/Bangkok',
                    'Asia/Irkutsk' => '(UTC+08:00) Asia/Irkutsk',
                    'Asia/Manila' => '(UTC+08:00) Asia/Manila',
                    'Asia/Ulaanbaatar' => '(UTC+08:00) Asia/Ulaanbaatar',
                    'Asia/Macau' => '(UTC+08:00) Asia/Macau',
                    'Asia/Hong_Kong' => '(UTC+08:00) Asia/Hong_Kong',
                    'Asia/Makassar' => '(UTC+08:00) Asia/Makassar',
                    'Asia/Taipei' => '(UTC+08:00) Asia/Taipei',
                    'Australia/Perth' => '(UTC+08:00) Australia/Perth',
                    'Antarctica/Casey' => '(UTC+08:00) Antarctica/Casey',
                    'Asia/Shanghai' => '(UTC+08:00) Asia/Shanghai',
                    'Asia/Singapore' => '(UTC+08:00) Asia/Singapore',
                    'Asia/Chita' => '(UTC+08:00) Asia/Chita',
                    'Asia/Kuching' => '(UTC+08:00) Asia/Kuching',
                    'Asia/Brunei' => '(UTC+08:00) Asia/Brunei',
                    'Asia/Choibalsan' => '(UTC+08:00) Asia/Choibalsan',
                    'Asia/Kuala_Lumpur' => '(UTC+08:00) Asia/Kuala_Lumpur',
                    'Australia/Eucla' => '(UTC+08:45) Australia/Eucla',
                    'Asia/Jayapura' => '(UTC+09:00) Asia/Jayapura',
                    'Asia/Seoul' => '(UTC+09:00) Asia/Seoul',
                    'Asia/Dili' => '(UTC+09:00) Asia/Dili',
                    'Asia/Khandyga' => '(UTC+09:00) Asia/Khandyga',
                    'Asia/Pyongyang' => '(UTC+09:00) Asia/Pyongyang',
                    'Asia/Tokyo' => '(UTC+09:00) Asia/Tokyo',
                    'Asia/Yakutsk' => '(UTC+09:00) Asia/Yakutsk',
                    'Pacific/Palau' => '(UTC+09:00) Pacific/Palau',
                    'Australia/Adelaide' => '(UTC+09:30) Australia/Adelaide',
                    'Australia/Broken_Hill' => '(UTC+09:30) Australia/Broken_Hill',
                    'Australia/Darwin' => '(UTC+09:30) Australia/Darwin',
                    'Asia/Magadan' => '(UTC+10:00) Asia/Magadan',
                    'Pacific/Guam' => '(UTC+10:00) Pacific/Guam',
                    'Pacific/Chuuk' => '(UTC+10:00) Pacific/Chuuk',
                    'Pacific/Saipan' => '(UTC+10:00) Pacific/Saipan',
                    'Pacific/Port_Moresby' => '(UTC+10:00) Pacific/Port_Moresby',
                    'Asia/Sakhalin' => '(UTC+10:00) Asia/Sakhalin',
                    'Australia/Melbourne' => '(UTC+10:00) Australia/Melbourne',
                    'Australia/Lindeman' => '(UTC+10:00) Australia/Lindeman',
                    'Asia/Ust-Nera' => '(UTC+10:00) Asia/Ust-Nera',
                    'Australia/Sydney' => '(UTC+10:00) Australia/Sydney',
                    'Asia/Vladivostok' => '(UTC+10:00) Asia/Vladivostok',
                    'Australia/Hobart' => '(UTC+10:00) Australia/Hobart',
                    'Antarctica/DumontDUrville' => '(UTC+10:00) Antarctica/DumontDUrville',
                    'Australia/Currie' => '(UTC+10:00) Australia/Currie',
                    'Australia/Brisbane' => '(UTC+10:00) Australia/Brisbane',
                    'Australia/Lord_Howe' => '(UTC+10:30) Australia/Lord_Howe',
                    'Pacific/Pohnpei' => '(UTC+11:00) Pacific/Pohnpei',
                    'Pacific/Efate' => '(UTC+11:00) Pacific/Efate',
                    'Pacific/Kosrae' => '(UTC+11:00) Pacific/Kosrae',
                    'Asia/Srednekolymsk' => '(UTC+11:00) Asia/Srednekolymsk',
                    'Pacific/Noumea' => '(UTC+11:00) Pacific/Noumea',
                    'Antarctica/Macquarie' => '(UTC+11:00) Antarctica/Macquarie',
                    'Pacific/Guadalcanal' => '(UTC+11:00) Pacific/Guadalcanal',
                    'Pacific/Norfolk' => '(UTC+11:30) Pacific/Norfolk',
                    'Pacific/Wake' => '(UTC+12:00) Pacific/Wake',
                    'Asia/Kamchatka' => '(UTC+12:00) Asia/Kamchatka',
                    'Pacific/Tarawa' => '(UTC+12:00) Pacific/Tarawa',
                    'Pacific/Wallis' => '(UTC+12:00) Pacific/Wallis',
                    'Asia/Anadyr' => '(UTC+12:00) Asia/Anadyr',
                    'Pacific/Nauru' => '(UTC+12:00) Pacific/Nauru',
                    'Pacific/Funafuti' => '(UTC+12:00) Pacific/Funafuti',
                    'Pacific/Fiji' => '(UTC+12:00) Pacific/Fiji',
                    'Antarctica/McMurdo' => '(UTC+12:00) Antarctica/McMurdo',
                    'Pacific/Auckland' => '(UTC+12:00) Pacific/Auckland',
                    'Pacific/Kwajalein' => '(UTC+12:00) Pacific/Kwajalein',
                    'Pacific/Majuro' => '(UTC+12:00) Pacific/Majuro',
                    'Pacific/Chatham' => '(UTC+12:45) Pacific/Chatham',
                    'Pacific/Enderbury' => '(UTC+13:00) Pacific/Enderbury',
                    'Pacific/Fakaofo' => '(UTC+13:00) Pacific/Fakaofo',
                    'Pacific/Apia' => '(UTC+13:00) Pacific/Apia',
                    'Pacific/Tongatapu' => '(UTC+13:00) Pacific/Tongatapu',
                    'Pacific/Kiritimati' => '(UTC+14:00) Pacific/Kiritimati'
                ],
                'name' => 'system.timezone'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'label' => 'Parameter separator',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (use this for apache on Windows)'
                ],
                'name' => 'system.param_sep'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'plugins' => [
                'anchors' => [
                    'enabled' => 'plugins.anchors.enabled',
                    'selectors' => 'plugins.anchors.selectors'
                ],
                'cachebuster' => [
                    'enabled' => 'plugins.cachebuster.enabled',
                    'route' => 'plugins.cachebuster.route'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled'
                ],
                'external_links' => [
                    'enabled' => 'plugins.external_links.enabled',
                    'built_in_css' => 'plugins.external_links.built_in_css',
                    'weight' => 'plugins.external_links.weight',
                    'exclude' => [
                        'classes' => 'plugins.external_links.exclude.classes',
                        'domains' => 'plugins.external_links.exclude.domains'
                    ],
                    'process' => 'plugins.external_links.process',
                    'no_follow' => 'plugins.external_links.no_follow',
                    'target' => 'plugins.external_links.target'
                ],
                'highlight' => [
                    'enabled' => 'plugins.highlight.enabled',
                    'theme' => 'plugins.highlight.theme'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'filters' => 'plugins.simplesearch.filters',
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator'
                ],
                'sitemap' => [
                    'enabled' => 'plugins.sitemap.enabled',
                    'built_in_css' => 'plugins.sitemap.built_in_css',
                    'route' => 'plugins.sitemap.route'
                ]
            ],
            'site' => [
                'title' => 'site.title',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'metadata' => 'site.metadata',
                'blog' => [
                    'route' => 'site.blog.route'
                ],
                'summary' => [
                    'size' => 'site.summary.size'
                ],
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra'
                    ],
                    'process' => 'system.pages.process',
                    'dateformat' => [
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => [
                        'page' => 'system.pages.events.page',
                        'twig' => 'system.pages.events.twig'
                    ]
                ],
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'gzip' => 'system.cache.gzip'
                ],
                'assets' => [
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_minify' => 'system.assets.js_minify'
                ],
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'upload_limit' => 'system.media.upload_limit'
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'mode' => 'system.debugger.mode',
                    'strict' => 'system.debugger.strict',
                    'max_depth' => 'system.debugger.max_depth',
                    'log' => [
                        'enabled' => 'system.debugger.log.enabled'
                    ],
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'default_image_quality' => 'system.images.default_image_quality',
                    'debug' => 'system.images.debug'
                ],
                'timezone' => 'system.timezone',
                'param_sep' => 'system.param_sep'
            ]
        ],
        'filter' => [
            'validation' => true
        ]
    ]
];
