<?php

namespace App\Admin\Controllers;

use App\Logos;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
class LogoController extends AdminController
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
            ->header('Listado logos')
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
            ->header('Editar logo')
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
            ->header('Creación logo')
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
        $grid = new Grid(new Logos);
        $grid->model()->orderBy('id','DESC');

        $grid->id('ID');
        $grid->name('Nombre');
        $grid->logo('Logo')->display(function($logo)
        {
            return '<img src="../uploads/'.$logo.'" heigth="50" width="50" />';
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
        $show = new Show(Logos::findOrFail($id));

        $show->id('Id');
        $show->logo('Logo');
        $show->name('Nombre');
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
        $form = new Form(new Logos);
        $form->text('name','Nombre');
        $form->image('logo','Logo')->help('Deben ser imagenes con un peso inferior a 350KB')->rules('required');

        return $form;
    }
}
