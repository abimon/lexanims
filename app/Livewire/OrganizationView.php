<?php

namespace App\Livewire;

use App\Models\Organization;
use Livewire\Component;
use Flux\Flux;

class OrganizationView extends Component
{
    use \Livewire\WithFileUploads;
    protected $rules = [
        'name' => 'required|string|max:255',
        'authorized_email' => 'required|email|unique:organizations,authorized_email',
        'address' => 'nullable|string',
        'phone' => 'nullable|string',
        'email' => 'nullable|email',
        'website' => 'nullable|url',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
    public $states = ['approved', 'pending', 'rejected'];

    public $organizations=[];
    public $name,$authorized_email,$address,$phone,$email,$website,$logo,$status;
    // mount
    public function mount()
    {
        $this->organizations = Organization::all();
    }
    public function addOrganization()
    {
        if ($this->logo) {
            $this->logo = $this->logo->store('logos', 'public');
        }
        $this->validate();
        $this->saveOrganization();
    }
    public function saveOrganization()
    {
       Organization::create([
            'name'=>$this->name,
            'authorized_email'=>$this->authorized_email,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'website'=>$this->website,
            'logo'=>$this->logo,
            'status'=>$this->status,
       ]);

        Flux::modal('add-organization')->close();
    }
    public function render()
    {
        return view('livewire.organization-view');
    }
}
