<?php

namespace App\Controllers;

use App\Entities\Task;

class Tasks extends BaseController
{
    private $model;

    private $current_user;

    public function __construct()
    {
        $this->model = new \App\Models\TaskModel;
        $this->current_user = service('auth')->getCurrentUser();
    }

    public function getIndex()
    {        
        $data = $this->model->paginateTasksByUserId($this->current_user->id);

        return view("Tasks/index", [
            'tasks' => $data,
            'pager' => $this->model->pager
        ]);
    }

    public function getShow($id)
    {
        $task = $this->getTaskOr404($id);

        return view('Tasks/show', [
            'task' => $task
        ]);
    }

    public function getNew()
    {
        $task = new Task;

        return view('Tasks/new', [
            'task' => $task
        ]);
    }

    public function postCreate()
    {
        $task = new Task($this->request->getPost());

        $task->user_id = $this->current_user->id;

        if ($this->model->insert($task)) {
            return redirect()->to("/tasks/show/{$this->model->insertID}")
                             ->with('info', 'Task created successfully');
        } else {
            return redirect()->back()
                             ->with('errors', $this->model->errors())
                             ->with('warning', 'Invalid Data')
                             ->withInput();
        }
    }

    public function getEdit($id)
    {
        $task = $this->getTaskOr404($id);

        return view('Tasks/edit', [
            'task' => $task
        ]);        
    }

    public function postUpdate($id)
    {
        $task = $this->getTaskOr404($id);

        $post = $this->request->getPost();
        unset($post['user_id']);

        $task->fill($post);

        if (! $task->hasChanged()) {
            return redirect()->back()
                             ->with('warning', 'Nothing to update')
                             ->withInput();
        }

        if ($this->model->save($task)) {
            return redirect()->to("/tasks/show/$id")
                             ->with('info', 'Task updated successfully');
        } else {
            return redirect()->back()
                             ->with('errors', $this->model->errors())
                             ->with('warning', 'Invalid Data')
                             ->withInput();
        }
    }

    public function getDelete($id)
    {
        $task = $this->getTaskOr404($id);

        return view('Tasks/delete', [
            'task' => $task
        ]);
    }

    public function postDelete($id)
    {
        $task = $this->getTaskOr404($id);

        $this->model->delete($id);
    
        return redirect()->to('/tasks')
                         ->with('info', 'Task deleted successfully');
    }

    public function getSearch()
    {
        $tasks = $this->model->search($this->request->getGet('q'), $this->current_user->id);

        return $this->response->setJSON($tasks);
    }

    private function getTaskOr404($id)
    {
        $task = $this->model->getTaskByUserId($id, $this->current_user->id);

        if (is_null($task)) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException("Task with $id not found");
        
        }

        return $task;
    }
}
