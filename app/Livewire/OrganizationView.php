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

    public $organizations = [];
    public $name, $authorized_email, $address, $phone, $email, $website, $logo, $status;
    // mount
    public function mount()
    {
        $this->organizations = Organization::all();
    }
    public function onChangeStatus($id){
        // dd([$id,$this->status]);
        Organization::where('id', $id)->update(['status' => $this->status]);
        $this->mount();
    }
    public function addOrganization()
    {
        $this->validate();
        Organization::create([
            'name' => $this->name,
            'authorized_email' => $this->authorized_email,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);
        $this->mount();
        $this->reset();
        Flux::modal('add-organization')->close();
    }
    public function render()
    {
        return view('livewire.organization-view');
    }
}
