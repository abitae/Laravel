<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Feedback;

class Feedbacks extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $plantilla, $path_image1, $path_image2, $path_image3, $path_image4, $layer1, $layer2, $layer3, $layer4, $btn1, $btn2, $btn3, $btn4, $state;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.feedback.view', [
            'feedback' => Feedback::latest()
						->orWhere('plantilla', 'LIKE', $keyWord)
						->orWhere('path_image1', 'LIKE', $keyWord)
						->orWhere('path_image2', 'LIKE', $keyWord)
						->orWhere('path_image3', 'LIKE', $keyWord)
						->orWhere('path_image4', 'LIKE', $keyWord)
						->orWhere('layer1', 'LIKE', $keyWord)
						->orWhere('layer2', 'LIKE', $keyWord)
						->orWhere('layer3', 'LIKE', $keyWord)
						->orWhere('layer4', 'LIKE', $keyWord)
						->orWhere('btn1', 'LIKE', $keyWord)
						->orWhere('btn2', 'LIKE', $keyWord)
						->orWhere('btn3', 'LIKE', $keyWord)
						->orWhere('btn4', 'LIKE', $keyWord)
						->orWhere('state', 'LIKE', $keyWord)
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
		$this->plantilla = null;
		$this->path_image1 = null;
		$this->path_image2 = null;
		$this->path_image3 = null;
		$this->path_image4 = null;
		$this->layer1 = null;
		$this->layer2 = null;
		$this->layer3 = null;
		$this->layer4 = null;
		$this->btn1 = null;
		$this->btn2 = null;
		$this->btn3 = null;
		$this->btn4 = null;
		$this->state = null;
    }

    public function store()
    {
        $this->validate([
		'plantilla' => 'required',
		'path_image1' => 'required',
		'path_image2' => 'required',
		'path_image3' => 'required',
		'path_image4' => 'required',
		'layer1' => 'required',
		'layer2' => 'required',
		'layer3' => 'required',
		'layer4' => 'required',
		'btn1' => 'required',
		'btn2' => 'required',
		'btn3' => 'required',
		'btn4' => 'required',
		'state' => 'required',
        ]);

        Feedback::create([ 
			'plantilla' => $this-> plantilla,
			'path_image1' => $this-> path_image1,
			'path_image2' => $this-> path_image2,
			'path_image3' => $this-> path_image3,
			'path_image4' => $this-> path_image4,
			'layer1' => $this-> layer1,
			'layer2' => $this-> layer2,
			'layer3' => $this-> layer3,
			'layer4' => $this-> layer4,
			'btn1' => $this-> btn1,
			'btn2' => $this-> btn2,
			'btn3' => $this-> btn3,
			'btn4' => $this-> btn4,
			'state' => $this-> state
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Feedback Successfully created.');
    }

    public function edit($id)
    {
        $record = Feedback::findOrFail($id);

        $this->selected_id = $id; 
		$this->plantilla = $record-> plantilla;
		$this->path_image1 = $record-> path_image1;
		$this->path_image2 = $record-> path_image2;
		$this->path_image3 = $record-> path_image3;
		$this->path_image4 = $record-> path_image4;
		$this->layer1 = $record-> layer1;
		$this->layer2 = $record-> layer2;
		$this->layer3 = $record-> layer3;
		$this->layer4 = $record-> layer4;
		$this->btn1 = $record-> btn1;
		$this->btn2 = $record-> btn2;
		$this->btn3 = $record-> btn3;
		$this->btn4 = $record-> btn4;
		$this->state = $record-> state;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'plantilla' => 'required',
		'path_image1' => 'required',
		'path_image2' => 'required',
		'path_image3' => 'required',
		'path_image4' => 'required',
		'layer1' => 'required',
		'layer2' => 'required',
		'layer3' => 'required',
		'layer4' => 'required',
		'btn1' => 'required',
		'btn2' => 'required',
		'btn3' => 'required',
		'btn4' => 'required',
		'state' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Feedback::find($this->selected_id);
            $record->update([ 
			'plantilla' => $this-> plantilla,
			'path_image1' => $this-> path_image1,
			'path_image2' => $this-> path_image2,
			'path_image3' => $this-> path_image3,
			'path_image4' => $this-> path_image4,
			'layer1' => $this-> layer1,
			'layer2' => $this-> layer2,
			'layer3' => $this-> layer3,
			'layer4' => $this-> layer4,
			'btn1' => $this-> btn1,
			'btn2' => $this-> btn2,
			'btn3' => $this-> btn3,
			'btn4' => $this-> btn4,
			'state' => $this-> state
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Feedback Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Feedback::where('id', $id);
            $record->delete();
        }
    }
}
