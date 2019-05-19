<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->dataTypesTranslations();
        $this->categoriesTranslations();
        $this->pagesTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function categoriesTranslations()
    {
        // Adding translations for 'categories'
        //
        $cat = Category::where('slug', 'category-1')->firstOrFail();
        if ($cat->exists) {
            $this->trans('fr', $this->arr(['categories', 'slug'], $cat->id), 'categorie-1');
            $this->trans('fr', $this->arr(['categories', 'name'], $cat->id), 'categorie 1');
        }
        $cat = Category::where('slug', 'category-2')->firstOrFail();
        if ($cat->exists) {
            $this->trans('fr', $this->arr(['categories', 'slug'], $cat->id), 'categorie-2');
            $this->trans('fr', $this->arr(['categories', 'name'], $cat->id), 'categorie 2');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, 'Post')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Articles');
        }
        $dtp = DataType::where($_fld, 'Page')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Page');
        }
        $dtp = DataType::where($_fld, 'User')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Utilisateur');
        }
        $dtp = DataType::where($_fld, 'Category')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégorie');
        }
        $dtp = DataType::where($_fld, 'Menu')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Menu');
        }
        $dtp = DataType::where($_fld, 'Role')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Fonction');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, 'Posts')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Articles');
        }
        $dtp = DataType::where($_fld, 'Pages')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Pages');
        }
        $dtp = DataType::where($_fld, 'Users')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Utilisateurs');
        }
        $dtp = DataType::where($_fld, 'Categories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Categories');
        }
        $dtp = DataType::where($_fld, 'Menus')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Menus');
        }
        $dtp = DataType::where($_fld, 'Roles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Fonctions');
        }
    }

    /**
     * Auto generate Pages Translations.
     *
     * @return void
     */
    private function pagesTranslations()
    {
        $page = Page::where('slug', 'hello-world')->firstOrFail();
        if ($page->exists) {
            $_arr = $this->arr(['pages', 'title'], $page->id);
            $this->trans('fr', $_arr, 'Bonjour tout le monde');
            /**
             * For configuring additional languages use it e.g.
             *
             * ```
             *   $this->trans('es', $_arr, 'hola-mundo');
             *   $this->trans('de', $_arr, 'hallo-welt');
             * ```
             */
            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('fr', $_arr, 'Bonjour tout le monde');

            $_arr = $this->arr(['pages', 'body'], $page->id);
            $this->trans('fr', $_arr, '<p>lorem  ipsum</p>'
                                        ."\r\n".'<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem('Dashboard');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Panneau d\'administration');
        }

        $_item = $this->findMenuItem('Media');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Médiathèque');
        }

        $_item = $this->findMenuItem('Posts');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Articles');
        }

        $_item = $this->findMenuItem('Users');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Utilisateurs');
        }

        $_item = $this->findMenuItem('Categories');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Catégories');
        }

        $_item = $this->findMenuItem('Pages');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Pages');
        }

        $_item = $this->findMenuItem('Roles');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Fonctions');
        }

        $_item = $this->findMenuItem('Tools');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Paramètres');
        }

        $_item = $this->findMenuItem('Menu Builder');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Menus');
        }

        $_item = $this->findMenuItem('Database');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Base de données');
        }

        $_item = $this->findMenuItem('Settings');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Configurations');
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Translation::firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }
}
