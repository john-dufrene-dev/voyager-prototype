<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        // 1
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.dashboard'),
            'url'     => '',
            'route'   => 'voyager.dashboard',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-boat',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        // 2
        $toolsMenuItemCMS = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('CMS'),
            'url'     => '',
        ]);
        if (!$toolsMenuItemCMS->exists) {
            $toolsMenuItemCMS->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-documentation',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }

        // 3
        $toolsMenuItemBlog = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('Blog'),
            'url'     => '',
        ]);
        if (!$toolsMenuItemBlog->exists) {
            $toolsMenuItemBlog->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-news',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }

         // 4
         $toolsMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.tools'),
            'url'     => '',
        ]);
        if (!$toolsMenuItem->exists) {
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-tools',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 4,
            ])->save();
        }

        // 5
        $toolsMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.preference'),
            'url'     => '',
        ]);
        if (!$toolsMenuItem->exists) {
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-archive',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 5,
            ])->save();
        }

        // 6
        $settingsFullMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.settings_full'),
            'url'     => '',
        ]);
        if (!$settingsFullMenuItem->exists) {
            $settingsFullMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 6,
            ])->save();
        }

        // 7
        $toolsMenuItemUser = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.admin'),
            'url'     => '',
        ]);
        if (!$toolsMenuItemUser->exists) {
            $toolsMenuItemUser->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-people',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 7,
            ])->save();
        }

        // order 8 = pages for CMS

        // 8
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.media'),
            'url'     => '',
            'route'   => 'voyager.media.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-images',
                'color'      => '#000000',
                'parent_id'  => 2,
                'order'      => 9,
            ])->save();
        }

        // order 10 = Blog for Articles

        // order 11 = Categorie for Articles

        // 9
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.menu_builder'),
            'url'     => '',
            'route'   => 'voyager.menus.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-list',
                'color'      => '#000000',
                'parent_id'  => 4,
                'order'      => 12,
            ])->save();
        }

        // 10
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.compass'),
            'url'     => '',
            'route'   => 'voyager.compass.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-compass',
                'color'      => '#000000',
                'parent_id'  => 4,
                'order'      => 13,
            ])->save();
        }

        // 11
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.general'),
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-hammer',
                'color'      => '#000000',
                'parent_id'  => 5,
                'order'      => 14,
            ])->save();
        }

        // 12
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.header'),
            'url'     => '',
            'route'   => 'voyager.config.pages.settings.header',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-list',
                'color'      => '#000000',
                'parent_id'  => 5,
                'order'      => 15,
            ])->save();
        }

        // 13
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.pages'),
            'url'     => '',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-sort',
                'color'      => '#000000',
                'parent_id'  => 5,
                'order'      => 16,
            ])->save();
        }

        // order 17 = maintenance page

        // 14
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.database'),
            'url'     => '',
            'route'   => 'voyager.database.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => '#000000',
                'parent_id'  => 6,
                'order'      => 18,
            ])->save();
        }

        // 15
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.bread'),
            'url'     => '',
            'route'   => 'voyager.bread.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread',
                'color'      => '#000000',
                'parent_id'  => 6,
                'order'      => 19,
            ])->save();
        }

        // 16
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.users'),
            'url'     => '',
            'route'   => 'voyager.users.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-person',
                'color'      => '#000000',
                'parent_id'  => 7,
                'order'      => 20,
            ])->save();
        }

        // 17
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.roles'),
            'url'     => '',
            'route'   => 'voyager.roles.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-lock',
                'color'      => '#000000',
                'parent_id'  => 7,
                'order'      => 21,
            ])->save();
        }

        // order 22 = history log page

        // 18
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.logs'),
            'url'     => '',
            'route'   => 'admin.logs.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bug',
                'color'      => '#000000',
                'parent_id'  => 6,
                'order'      => 22,
            ])->save();
        }

        // 19
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.modules'),
            'url'     => '',
            'route'   => 'modules.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-star-two',
                'color'      => '#000000',
                'parent_id'  => 4,
                'order'      => 24,
            ])->save();
        }

        // 20
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.home'),
            'url'     => '',
            'route'   => 'voyager.config.pages.settings.home',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-home',
                'color'      => '#000000',
                'parent_id'  => 13,
                'order'      => 25,
            ])->save();
        }

        // SEED MENU HEADER
        $menu_2 = Menu::where('name', 'header')->firstOrFail();

        // 1
        $menuItem_2 = MenuItem::firstOrNew([
            'menu_id' => $menu_2->id,
            'title'   => __('seo.homepage.homepage'),
            'url'     => '',
            'route'     => __('home.index'),
        ]);
        if (!$menuItem_2->exists) {
            $menuItem_2->fill([
                'target'     => '_self',
                'link_to_module'    => 'HomePage',
                'icon_class' => null,
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        // 2
        $menuItem_2 = MenuItem::firstOrNew([
            'menu_id' => $menu_2->id,
            'title'   => __('seo.articles.my-posts'),
            'url'     => '',
            'route'   => 'articles.index',
        ]);
        if (!$menuItem_2->exists) {
            $menuItem_2->fill([
                'target'     => '_self',
                'link_to_module'    => 'Post',
                'icon_class' => null,
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }
    }
}
