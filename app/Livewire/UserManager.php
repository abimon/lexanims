<?php

namespace App\Livewire;

use App\Models\Organization;
use App\Models\User;
use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class UserManager extends Component
{
    public $users = [];
    public $user, $id, $role, $name, $email, $phone, $organization_id, $organizations;
    public $roles = [
        'Client-User',
        'Auditor',
        'Admin',
        'Super-Admin'
    ];

    public function addUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'organization_id' => $this->organization_id,
            'password' => Hash::make($this->phone),
        ]);
        Flux::modal('add-user')->close();
        $this->mount();
    }
    public function onChangeRole($id)
    {
        $user = User::findOrFail($id);
        $user->role = $this->role;
        $user->update();
    }
    public function delete($id)
    {
        User::destroy($id);
    }

    public function mount(){
        $this->organization_id = Organization::first()->id;
        if(Auth::user()->role=='Admin'){
            $this->organization_id = Auth::user()->organization_id;
            $this->users = User::where([['organization_id',$this->organization_id],['id','!=', Auth::user()->id]])->get();
        }
        if(Auth::user()->role=='Super-Admin'){
            $this->organizations = Organization::where('status','approved')->select('name','id')->get();
            $this->users = User::all();
        }
    }
    public function render()
    {
        return view('livewire.user-manager');
    }
}
