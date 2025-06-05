<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Job;

class FeaturedJobs extends Component
{
    use WithPagination;

    public function render()
    {
        
        return view('livewire.featured-jobs', [ 'featuredJobs' => Job::latest()->simplePaginate(3),]);
    }
}
