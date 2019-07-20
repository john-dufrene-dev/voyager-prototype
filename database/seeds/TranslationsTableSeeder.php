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
        $cat = Category::where('slug', 'categorie-1')->firstOrFail();
        if ($cat->exists) {
            $this->trans('fr', $this->arr(['categories', 'slug'], $cat->id), 'categorie-1');
            $this->trans('fr', $this->arr(['categories', 'name'], $cat->id), 'catégorie 1');
            $this->trans('en', $this->arr(['categories', 'slug'], $cat->id), 'category-1');
            $this->trans('en', $this->arr(['categories', 'name'], $cat->id), 'category 1');
        }
        $cat = Category::where('slug', 'categorie-2')->firstOrFail();
        if ($cat->exists) {
            $this->trans('fr', $this->arr(['categories', 'slug'], $cat->id), 'categorie-2');
            $this->trans('fr', $this->arr(['categories', 'name'], $cat->id), 'catégorie 2');
            $this->trans('en', $this->arr(['categories', 'slug'], $cat->id), 'category-2');
            $this->trans('en', $this->arr(['categories', 'name'], $cat->id), 'category 2');
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
        $dtp = DataType::where($_fld, 'Article')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Article');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Article');
        }
        $dtp = DataType::where($_fld, 'Page')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Page');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Page');
        }
        $dtp = DataType::where($_fld, 'Utilisateur')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Utilisateur');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'User');
        }
        $dtp = DataType::where($_fld, 'Catégorie')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégorie');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Category');
        }
        $dtp = DataType::where($_fld, 'Menu')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Menu');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Menu');
        }
        $dtp = DataType::where($_fld, 'Rôle')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Rôle');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Role');
        }
        $dtp = DataType::where($_fld, 'Mode Maintenance')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Mode maintenance');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Maintenance mode');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, 'Articles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Articles');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Articles');
        }
        $dtp = DataType::where($_fld, 'Pages')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Pages');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Pages');
        }
        $dtp = DataType::where($_fld, 'Utilisateurs')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Utilisateurs');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Users');
        }
        $dtp = DataType::where($_fld, 'Catégories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Catégories');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Categories');
        }
        $dtp = DataType::where($_fld, 'Menus')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Menus');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Menus');
        }
        $dtp = DataType::where($_fld, 'Rôles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Rôles');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Roles');
        }
        $dtp = DataType::where($_fld, 'Mode maintenance')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('fr', $this->arr($_tpl, $dtp->id), 'Mode maintenance');
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Maintenance mode');
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
            $this->trans('en', $_arr, 'Hello World');

            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('fr', $_arr, 'Bonjour tout le monde');
            $this->trans('en', $_arr, 'Hello world');

            $_arr = $this->arr(['pages', 'body'], $page->id);
            $this->trans('fr', $_arr, '<p>FR Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
            <p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>');
            $this->trans('en', $_arr, '<p>EN Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
            <p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        // MENU ADMIN
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem('Tableau de bord');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Tableau de bord');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Dashboard');
        }

        $_item = $this->findMenuItem('Médiathèque');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Médiathèque');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Medias');
        }

        $_item = $this->findMenuItem('Articles');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Articles');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Articles');
        }

        $_item = $this->findMenuItem('Utilisateurs');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Utilisateurs');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Users');
        }

        $_item = $this->findMenuItem('Catégories');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Catégories');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Categories');
        }

        $_item = $this->findMenuItem('Pages');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Pages');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Pages');
        }

        $_item = $this->findMenuItem('Rôles');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Rôles');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Roles');
        }

        $_item = $this->findMenuItem('Outils');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Outils');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Utilities');
        }

        $_item = $this->findMenuItem('Créateur de menus');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Créateurs de menus');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Menu builder');
        }

        $_item = $this->findMenuItem('Base de données');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Base de données');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Database');
        }

        $_item = $this->findMenuItem('Paramètres avancés');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Paramètres avancés');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Advanced settings');
        }

        $_item = $this->findMenuItem('Préférences');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Préférences');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Preferences');
        }

        $_item = $this->findMenuItem('Général');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Général');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'General');
        }

        // MENU HEADER

        $_item = $this->findMenuItem('Accueil');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Accueil');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Home');
        }

        $_item = $this->findMenuItem('Nos articles');
        if ($_item->exists) {
            $this->trans('fr', $this->arr($_tpl, $_item->id), 'Nos articles');
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Our articles');
        }

        // MENU FOOTER
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function findMenuItemUrl($url)
    {
        return MenuItem::where('url', $url)->firstOrFail();
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
