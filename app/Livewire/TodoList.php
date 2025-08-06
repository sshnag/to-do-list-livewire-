<?php

namespace App\Livewire;

use App\Models\Todo;
use GuzzleHttp\Promise\Create;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    public $editingTodoId;

        #[Rule('required|min:3|max:50')]
    public $editingTodoName;
    use WithPagination;
    #[Rule('required|min:3|max:50')]
    public $name;

    public $search;
    public function create(){
        // validate
        $validated=$this->validateOnly('name');
        //create the todo
        Todo::create($validated);
        //clear the input
        $this->reset('name');
        //send flash message
        session()->flash('success','Created!');
        $this->resetPage();
    }
    public function delete($todoId){
        try {
        Todo::find($todoId)->delete();
        } catch (\Exception $e) {
            session()->flash('error','Failed to delete!');
            return;
        }
    }
    public function edit($todoId){
        $this->editingTodoId=$todoId;
        $this->editingTodoName=Todo::find($todoId)->name;
    }
    public function toggle($todoId){
        $todo=Todo::find($todoId);
        $todo->completed=!$todo->completed;
        $todo->save();
    }
    public function cancelEdit(){
        $this->reset('editingTodoId','editingTodoName');
    }
    public function update(){
        $this->validateOnly('editingTodoName');
        Todo::find($this->editingTodoId)->update([
            'name'=>$this->editingTodoName
        ]);
    }
    public function placeholder(){
        return view('placeholder');
    }
    public function render()
    {
        sleep(2);
        return view('livewire.todo-list', ['todos'=>Todo::latest()->where('name','like',"%{$this->search}%")->paginate(5)]);
    }
}
