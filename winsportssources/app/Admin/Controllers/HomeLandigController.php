<?php

namespace App\Admin\Controllers;

use App\Home;
use App\Logos;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
class HomeLandigController extends AdminController
{
    // use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Home')
            // ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Editar datos del home')
            ->description('Los campos con (*) son obligatorios')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Creación del home')
            ->description('Los campos con (*) son obligatorios')
            ->body($this->form());

    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Home);
        $grid->model()->orderBy('id','DESC');
        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableView();
        });

        $grid->id('ID');
        $grid->banner_1('Banner 1')->display(function($logo)
        {
            return '<img src="../uploads/'.$logo.'" heigth="150" width="150" />';
        });
        $grid->banner_2('Banner 2')->display(function($logo)
        {
            return '<img src="../uploads/'.$logo.'" heigth="150" width="150" />';
        });
        $grid->banner_3('Banner 3')->display(function($logo)
        {
            return '<img src="../uploads/'.$logo.'" heigth="150" width="150" />';
        });
        $grid->tools(function ($tools) {
            $tools->disableRefreshButton();
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Home::findOrFail($id));

        $show->id('Id');
        $show->banner_1('Banner 1');
        $show->banner_2('Banner 2');
        $show->banner_3('Banner 3');
        $show->banner_4('Banner 4');
        $show->banner_5('Banner 5');
        $show->question_1('Pregunta 1');
        $show->answer_1('Respuesta 1');
        $show->question_2('Pregunta 2');
        $show->answer_2('Respuesta 2');
        $show->question_3('Pregunta 3');
        $show->answer_3('Respuesta 3');
        $show->question_4('Pregunta 4');
        $show->answer_4('Respuesta 4');
        $show->question_5('Pregunta 5');
        $show->answer_5('Respuesta 5');
        $show->question_6('Pregunta 6');
        $show->answer_6('Respuesta 6');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $logos = Logos::pluck('name','id');
        $form = new Form(new Home);
        $form->image('banner_1','Banner Home 1')->help('Deben ser imagenes con un peso inferior a 350KB')->rules('required');
        $form->image('banner_2','Banner Home 2')->help('Deben ser imagenes con un peso inferior a 350KB')->rules('required');
        $form->image('banner_3','Banner Home 3')->help('Deben ser imagenes con un peso inferior a 350KB')->rules('required');
        $form->image('banner_4','Banner Home 4')->help('Deben ser imagenes con un peso inferior a 350KB');
        $form->image('banner_5','Banner Home 5')->help('Deben ser imagenes con un peso inferior a 350KB');
        $form->image('infografia','Infografia')->help('Deben ser imagenes con un peso inferior a 350KB');
        $form->text('video', 'URL Video')->rules('required');
        /* Preguntas del Home */
        $form->hasMany('questions_asigned','Preguntas', function (Form\NestedForm $form) use($logos) {
            $form->text('question', 'Pregunta')->rules('required');
            // $form->image('logo','Logo')->help('Deben ser imagenes con un peso inferior a 350KB')->rules('required');
            $form->select('logo', 'Logo')->options($logos)->rules('required');
            $form->textarea('answer', 'Respuesta')->rows(5)->rules('required');
        });
        /* Operadores del Home */
        $form->hasMany('operators_asigned','Operadores', function (Form\NestedForm $form) use($logos) {
            $form->text('link', 'Link Desktop')->rules('required');
            $form->text('phone_link', 'Link Mobile')->rules('required');
            $form->text('gtmOutbound', 'gtmOutbound')->rules('required');
            $form->text('gtmProvider', 'gtmProvider')->rules('required');
            $form->text('gtmDevice', 'gtmDevice')->rules('required');
            $form->text('gtmDeviceMobile', 'gtmDeviceMobile')->rules('required');
            $form->image('logo', 'Logo')->help('Deben ser imagenes con un peso inferior a 350KB');
            $form->radio('status','Estado')->options(['0'=>'Inactivo','1'=>'Activo'])->default(1);
        });
        $form->ckeditor('tyc','Términos y Condiciones');


        return $form;
    }
}
