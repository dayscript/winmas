<?php

namespace App\Admin\Controllers;

use App\Matches;
use App\Teams;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

Class MatchController extends AdminController
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Listado partidos')
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
            ->header('Editar partidos')
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
            ->header('Creación partido')
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
        $grid = new Grid(new Matches);
        $grid->model()->orderBy('id','DESC');

        $grid->id('ID');
        $grid->date('Fecha');
        $grid->hours('Hora');
        $grid->team_1_id('Equipo 1');
        $grid->team_2_id('Equipo 2');


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
        $show = new Show(Matches::findOrFail($id));

        $show->id('Id');
        $show->date('Fecha');
        $show->hours('Hora');
        $show->team_1('Equipo 1');
        $show->team_('Equipo 2');
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

        $teams = Teams::pluck('name','id');
        $form = new Form(new Matches);
        $form->select('team_1_id', 'Equipo 1')->options($teams)->rules('required');
        $form->select('team_2_id', 'Equipo 2')->options($teams)->rules('required');
        $form->date('date', 'Fecha')->format('YYYY-MM-DD');
        $form->time('hours', 'Hora')->format('HH:mm:ss');
        $form->radio('highlight','Destacado')->options(['0'=>'No','1'=>'Si'])->default(0)->rules('required');


        return $form;
    }
}
