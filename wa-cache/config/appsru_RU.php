<?php
return array (
  'blog' => 
  array (
    'id' => 'blog',
    'name' => 'Блог',
    'icon' => 
    array (
      16 => 'wa-apps/blog/img/blog16.png',
      24 => 'wa-apps/blog/img/blog24.png',
      48 => 'wa-apps/blog/img/blog.png',
      96 => 'wa-apps/blog/img/blog96.png',
    ),
    'sash_color' => '#f0b100',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'version' => '1.4.2',
    'critical' => '1.4.2',
    'vendor' => 'webasyst',
    'csrf' => true,
    'my_account' => true,
    'routing_params' => 
    array (
      'blog_url_type' => 1,
    ),
    'build' => 32,
    'img' => 'wa-apps/blog/img/blog.png',
  ),
  'contacts' => 
  array (
    'id' => 'contacts',
    'name' => 'Контакты',
    'icon' => 
    array (
      48 => 'wa-apps/contacts/img/contacts.png',
      96 => 'wa-apps/contacts/img/contacts96.png',
      24 => 'wa-apps/contacts/img/contacts.png',
      16 => 'wa-apps/contacts/img/contacts.png',
    ),
    'rights' => true,
    'analytics' => true,
    'version' => '1.1.6',
    'critical' => '1.1.0',
    'vendor' => 'webasyst',
    'system' => false,
    'csrf' => true,
    'plugins' => true,
    'frontend' => true,
    'routing_params' => 
    array (
      'private' => true,
    ),
    'build' => 20,
    'img' => 'wa-apps/contacts/img/contacts.png',
  ),
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Инсталлер',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      24 => 'wa-apps/installer/img/installer-24.png',
      48 => 'wa-apps/installer/img/installer-48.png',
      96 => 'wa-apps/installer/img/installer-96.png',
      16 => 'wa-apps/installer/img/installer-24.png',
    ),
    'mobile' => false,
    'version' => '1.11.7',
    'critical' => '1.11.0',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'build' => 418,
    'img' => 'wa-apps/installer/img/installer-48.png',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Сайт',
    'icon' => 
    array (
      96 => 'wa-apps/site/img/site96.png',
      48 => 'wa-apps/site/img/site.png',
      24 => 'wa-apps/site/img/site24.png',
      16 => 'wa-apps/site/img/site16.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.5.9',
    'critical' => '2.5.0',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 189,
    'img' => 'wa-apps/site/img/site.png',
  ),
  'stickies' => 
  array (
    'id' => 'stickies',
    'name' => 'Стикеры',
    'prefix' => 'stickies',
    'icon' => 
    array (
      48 => 'wa-apps/stickies/img/stickies.png',
      96 => 'wa-apps/stickies/img/stickies96.png',
      24 => 'wa-apps/stickies/img/stickies.png',
      16 => 'wa-apps/stickies/img/stickies.png',
    ),
    'rights' => true,
    'mobile' => true,
    'version' => '1.1.1',
    'critical' => '1.1.1',
    'vendor' => 'webasyst',
    'build' => 1,
    'img' => 'wa-apps/stickies/img/stickies.png',
  ),
  'team' => 
  array (
    'id' => 'team',
    'name' => 'Команда',
    'icon' => 
    array (
      24 => 'wa-apps/team/img/team24.png',
      48 => 'wa-apps/team/img/team48.png',
      96 => 'wa-apps/team/img/team96.png',
      16 => 'wa-apps/team/img/team24.png',
    ),
    'version' => '1.0.10',
    'vendor' => 'webasyst',
    'sash_color' => '#f0dc03',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'csrf' => true,
    'build' => 111,
    'img' => 'wa-apps/team/img/team48.png',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Вебасист',
    'prefix' => 'webasyst',
    'version' => '1.11.7',
    'critical' => '1.11.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'header_items' => 
    array (
      'settings' => 
      array (
        'icon' => 
        array (
          24 => 'wa-content/img/wa-settings/settings-24.png',
          48 => 'wa-content/img/wa-settings/settings-48.png',
          96 => 'wa-content/img/wa-settings/settings-96.png',
          384 => 'wa-content/img/wa-settings/settings-384.png',
        ),
        'name' => 'Настройки',
        'link' => 'settings',
        'rights' => 'backend',
        'img' => 'wa-content/img/wa-settings/settings-48.png',
      ),
    ),
    'build' => 418,
    'icon' => 
    array (
    ),
  ),
);
