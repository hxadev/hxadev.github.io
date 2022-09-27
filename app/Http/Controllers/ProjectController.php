<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PluginController;

class ProjectController extends Controller
{
    private $menu, $plugin;
    public function __construct()
    {
        $this->menu = new MenuController();
        $this->plugin = new PluginController();
        $this->project = new Project();
    }



    public function index($id)
    {
        $project = $this->project->where('_id', $id)->get()[0];

        return view(
            'index',
            array(
                "template" => "portfolio",
                "title" => "{$project->name} | hxa.dev",
                "colorTheme" => $this->plugin->getColorTheme(),
                "typeTheme" => $this->plugin->getTypeTheme(),
                "project" => $project,
                "menu" => $this->menu->getMenu()
            )
        );
    }

    public function getAll()
    {
        return Project::all();
    }
}
