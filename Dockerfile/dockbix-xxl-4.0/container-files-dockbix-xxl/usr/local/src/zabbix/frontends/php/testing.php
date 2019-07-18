<?php
/*
** Monitoring Artist
** Copyright (C) 2015-2016 Monitoring Artist Ltd
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/

require_once dirname(__FILE__).'/include/config.inc.php';
$page['title'] = _('Item Testing');
$page['file'] = 'testing.php';
$page['type'] = detect_page_type(PAGE_TYPE_HTML);
require_once dirname(__FILE__).'/include/page_header.php';

$widget = (new CWidget())
        ->setTitle(_('Items in testing'))
        ->setControls((new CList())
        ->addItem(get_icon('fullscreen', ['fullscreen' => getRequest('fullscreen')]))
        );
$widget->show();
?>
<link rel="stylesheet" type="text/css" href="searcher/stylesheets/style.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<header> 
</header>

<section class="list">
  
</section>

<?php
require_once dirname(__FILE__).'/include/page_footer.php';
?>
