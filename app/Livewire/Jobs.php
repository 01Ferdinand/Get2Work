<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class Jobs extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.jobs', ['jobs' => Job::latest()->paginate(6)]);
    }
}
