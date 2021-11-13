<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Config;
use Livewire\WithFileUploads;
class Configs extends Component
{
    use WithPagination;
	use WithFileUploads;
	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $titulo, $tema, $empresa, $autor, $path_favicon, $path_logo, $description_logo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.configs.view', [
            'configs' => Config::latest()
						->orWhere('titulo', 'LIKE', $keyWord)
						->orWhere('tema', 'LIKE', $keyWord)
						->orWhere('empresa', 'LIKE', $keyWord)
						->orWhere('autor', 'LIKE', $keyWord)
						->orWhere('path_favicon', 'LIKE', $keyWord)
						->orWhere('path_logo', 'LIKE', $keyWord)
						->orWhere('description_logo', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->titulo = null;
		$this->tema = null;
		$this->empresa = null;
		$this->autor = null;
		$this->path_favicon = null;
		$this->path_logo = null;
		$this->description_logo = null;
    }

    public function edit($id)
    {
        $record = Config::findOrFail($id);

        $this->selected_id = $id; 
		$this->titulo = $record-> titulo;
		$this->tema = $record-> tema;
		$this->empresa = $record-> empresa;
		$this->autor = $record-> autor;
		$this->path_favicon = $record-> path_favicon;
		$this->path_logo = $record-> path_logo;
		$this->description_logo = $record-> description_logo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'titulo' => 'required',
		'tema' => 'required',
		'empresa' => 'required',
		'autor' => 'required',
		'path_favicon' => 'image|max:1024',
		'path_logo' => 'image|max:1024',
		'description_logo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Config::find($this->selected_id);
            $record->update([ 
			'titulo' => $this-> titulo,
			'tema' => $this-> tema,
			'empresa' => $this-> empresa,
			'autor' => $this-> autor,
			'path_favicon' => $this-> path_favicon,
			'path_logo' => $this-> path_logo,
			'description_logo' => $this-> description_logo
            ]);
			$this->path_logo->store('photos', 'avatar');
            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Config Successfully updated.');
        }
    }

}
