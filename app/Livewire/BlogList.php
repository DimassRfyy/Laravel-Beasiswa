<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory = '';
    public $categories;

    protected $queryString = [
        'search' => ['except' => ''],
        'selectedCategory' => ['except' => ''],
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedSelectedCategory()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->selectedCategory = '';
        $this->resetPage();
    }

    public function render()
    {
        $query = Blog::with(['category', 'user'])
            ->orderBy('created_at', 'desc');

        // Apply search filter
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('content', 'like', '%' . $this->search . '%');
            });
        }

        // Apply category filter
        if ($this->selectedCategory) {
            $query->whereHas('category', function ($q) {
                $q->where('slug', $this->selectedCategory);
            });
        }

        $blogs = $query->paginate(12);

        return view('livewire.blog-list', [
            'blogs' => $blogs
        ]);
    }
}
