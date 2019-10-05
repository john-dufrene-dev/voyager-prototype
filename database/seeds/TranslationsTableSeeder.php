<?php

use TCG\Voyager\Models\Page;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Translation;
use Modules\VoyagerBaseExtend\Entities\CorsSetting;

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
        $this->corsTranslations();
        $this->dataRowsTranslations();
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
            $this->trans('en', $this->arr(['categories', 'slug'], $cat->id), 'category-1');
            $this->trans('en', $this->arr(['categories', 'name'], $cat->id), 'category 1');
        }
        $cat = Category::where('slug', 'categorie-2')->firstOrFail();
        if ($cat->exists) {
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
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Article');
        }
        $dtp = DataType::where($_fld, 'Page')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Page');
        }
        $dtp = DataType::where($_fld, 'Utilisateur')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'User');
        }
        $dtp = DataType::where($_fld, 'Catégorie')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Category');
        }
        $dtp = DataType::where($_fld, 'Menu')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Menu');
        }
        $dtp = DataType::where($_fld, 'Rôle')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Role');
        }
        $dtp = DataType::where($_fld, 'Mode Maintenance')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Maintenance mode');
        }
        $dtp = DataType::where($_fld, 'Log d\'activité')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Log Activity');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, 'Articles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Articles');
        }
        $dtp = DataType::where($_fld, 'Pages')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Pages');
        }
        $dtp = DataType::where($_fld, 'Utilisateurs')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Users');
        }
        $dtp = DataType::where($_fld, 'Catégories')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Categories');
        }
        $dtp = DataType::where($_fld, 'Menus')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Menus');
        }
        $dtp = DataType::where($_fld, 'Rôles')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Roles');
        }
        $dtp = DataType::where($_fld, 'Mode maintenance')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Maintenance mode');
        }
        $dtp = DataType::where($_fld, 'Logs d\'activités')->firstOrFail();
        if ($dtp->exists) {
            $this->trans('en', $this->arr($_tpl, $dtp->id), 'Activities logs');
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
            $this->trans('en', $_arr, 'Hello World');

            $_arr = $this->arr(['pages', 'slug'], $page->id);
            $this->trans('en', $_arr, 'Hello world');

            $_arr = $this->arr(['pages', 'body'], $page->id);
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
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Dashboard');
        }

        $_item = $this->findMenuItem('Médiathèque');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Medias');
        }

        $_item = $this->findMenuItem('Articles');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Articles');
        }

        $_item = $this->findMenuItem('Utilisateurs');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Users');
        }

        $_item = $this->findMenuItem('Catégories');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Categories');
        }

        $_item = $this->findMenuItem('Pages');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Pages');
        }

        $_item = $this->findMenuItem('Rôles');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Roles');
        }

        $_item = $this->findMenuItem('Outils');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Utilities');
        }

        $_item = $this->findMenuItem('Créateur de menus');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Menu builder');
        }

        $_item = $this->findMenuItem('Base de données');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Database');
        }

        $_item = $this->findMenuItem('Paramètres avancés');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Advanced settings');
        }

        $_item = $this->findMenuItem('Préférences');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Preferences');
        }

        $_item = $this->findMenuItem('Général');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'General');
        }

        $_item = $this->findMenuItemRoute('voyager.config.pages.settings.home');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Home');
        }

        $_item = $this->findMenuItem('Logs D\'activités');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Activities Logs');
        }

        $_item = $this->findMenuItem('Logs Serveur');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Server Logs');
        }

        // MENU HEADER

        $_item = $this->findMenuItemRoute('home.index');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Home');
        }

        $_item = $this->findMenuItem('Nos articles');
        if ($_item->exists) {
            $this->trans('en', $this->arr($_tpl, $_item->id), 'Our articles');
        }

        // MENU FOOTER
    }

    /**
     * Auto generate CorsSetting Translations.
     *
     * @return void
     */
    private function corsTranslations()
    {
        // Adding translations for 'cors_settings'
        //
        $cors = CorsSetting::where('cors_name', 'PAGE_HOME_META_TITLE')->firstOrFail();
        if ($cors->exists) {
            $this->trans('en', $this->arr(['cors_settings', 'cors_value'], $cors->id), 'Home page');
        }

        $cors = CorsSetting::where('cors_name', 'PAGE_HOME_META_KEYWORDS')->firstOrFail();
        if ($cors->exists) {
            $this->trans('en', $this->arr(['cors_settings', 'cors_value'], $cors->id), 'home');
        }

        $cors = CorsSetting::where('cors_name', 'PAGE_HOME_META_DESCRIPTION')->firstOrFail();
        if ($cors->exists) {
            $this->trans('en', $this->arr(['cors_settings', 'cors_value'], $cors->id), 'Homepage description');
        }
    }

    /**
     * Auto generate Data Rows Translations.
     *
     * @return void
     */
    private function dataRowsTranslations()
    {
        // Adding translations for 'data_rows'
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];

        $dtp = DataType::where($_fld, 'Log d\'activité')->firstOrFail();
        if ($dtp->exists) {
            $id = $dtp->id;
        }
        $datarows = DataRow::where('display_name', 'Nom du modèle')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Model name');
        }
        $datarows = DataRow::where('display_name', 'Action sur modèle')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Model action');
        }
        $datarows = DataRow::where('display_name', 'ID du modèle')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Model ID');
        }
        $datarows = DataRow::where('display_name', 'Type de modèle')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Model type');
        }
        $datarows = DataRow::where('display_name', 'Mis à jour par')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Updated by');
        }
        $datarows = DataRow::where('display_name', 'Créé le')
            ->where('data_type_id', $id)
            ->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Created at');
        }
        $datarows = DataRow::where('display_name', 'Mis à jour le')
            ->where('data_type_id', $id)
            ->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Updated at');
        }
        $datarows = DataRow::where('display_name', 'Type d\'utilisateur')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'User type');
        }
        $datarows = DataRow::where('display_name', 'Propriétés')->firstOrFail();
        if ($datarows->exists) {
            $this->trans('en', $this->arr(['data_rows', 'display_name'], $datarows->id), 'Properties');
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function findMenuItemUrl($url)
    {
        return MenuItem::where('url', $url)->firstOrFail();
    }

    private function findMenuItemRoute($route)
    {
        return MenuItem::where('route', $route)->firstOrFail();
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
