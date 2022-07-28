<?php

namespace App\Http\Admin;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Section;

/**
 * Class Products
 *
 * @property Product $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Products extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o');
    }

    /**
     * @param array $payload
     * @return DisplayInterface
     */
    public function onDisplay(array $payload = []): DisplayInterface
    {
        $display = AdminDisplay::datatables()
            ->setHtmlAttribute('class', 'table-primary table-hover th-center');

        $display->setColumns([
            AdminColumn::text('id', '#')->setWidth('50px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::image('image_path', 'картинка')->setWidth('100px'),
            AdminColumn::link('name', 'Name'),
            AdminColumn::text('articul', 'articul')->setWidth('80px')
                ->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('brand', 'марка'),



            AdminColumn::text('description', 'Опис'),
            AdminColumn::text('price', 'ціна'),
            AdminColumn::text('category.name', 'Category'),
            AdminColumn::boolean('publish', 'Publish'),
            AdminColumn::text('created_at', 'Created / updated')
        ]);

        $display->setColumnFilters([
            null,
            AdminColumnFilter::text()->setPlaceholder('Name'),
            null,
            null,
            null,
            null,
            null,          //  AdminColumnFilter::text()->setPlaceholder('Категорія' ),
            AdminColumnFilter::select(Category::all()->pluck('name', 'id')->toArray())
                ->setPlaceholder('Категорія')
                ->setDisplay('name ')
                ->setColumnName('category_id'),
            AdminColumnFilter::select(Category::class, 'created_at')
                ->setPlaceholder('Категорія')
                ->setColumnName('category_id'),
            null,
            null,
        ]);
        //dd ($display);
        $display->getColumnFilters()->setPlacement('card.heading');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        $categories = Category::all()->pluck('name', 'id')->toArray();

        $form = AdminForm::card()->addBody([


            AdminFormElement::columns()->addColumn([


                AdminFormElement::text('name', 'Name')->required(),

                AdminFormElement::text('articul', 'articul')->required(),
                AdminFormElement::text('brand', 'brand'),
                AdminFormElement::text('price', 'price')->required(),
                AdminFormElement::select('category_id', 'Category', $categories),

                AdminFormElement::checkbox('publish', 'Publish'),

                AdminFormElement::html('<hr>'),
                AdminFormElement::datetime('updated_at')
                    ->setVisible(true)
                    ->setReadonly(true),
            ], 'col-xs-12 col-sm-6 col-md-4 col-lg-4')->addColumn([
                AdminFormElement::image('image_path', 'Изображение')
                    ->setValidationRules(['image_path' => 'image|mimes:png,gif,jpg,jpeg|max:2048'])
                    ->setUploadFileName(function (\Illuminate\Http\UploadedFile $file) use ($id) {
                        return $file->getClientOriginalName();
//                        $extension = '.' . $file->getClientOriginalExtension() ?? 'jpg';
//                        $fileName = Str::random('12');
//                        return $fileName . $extension;
                    })
                    ->setUploadPath(
                        function (UploadedFile $file) {
                            $folder = 'products';
                            if (!File::exists('images/' . $folder)) {
                                File::makeDirectory('images/' . $folder, 0777, true, true);
                            }
                            return 'images/' . $folder;
                        }),
            ], 'col-xs-12 col-sm-6 col-md-8 col-lg-8'),
        ]);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
           // 'save_and_close'  => new SaveAndClose(),
          //  'save_and_create'  => new SaveAndCreate(),
            'cancel'  => (new Cancel()),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
