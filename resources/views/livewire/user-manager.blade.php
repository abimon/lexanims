<div>
    <div class="mb-4 flex justify-end">
        <flux:modal.trigger name="add-user">
            <flux:button>Add Client</flux:button>
        </flux:modal.trigger>

        <flux:modal name="add-user" class="md:w-1000">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Client</flux:heading>
                    <flux:text class="mt-2">Add new Client.</flux:text>
                </div>
                <!-- show selected image -->
                <form wire:submit="addUser" enctype="multipart/form-data">

                    <flux:input class="mb-3" wire:model="name" label="Full Name" placeholder="E.g Joe Doe" />

                    <flux:input class="mb-3" wire:model="email" label="Email" placeholder="E.g example@domain.com" />

                    <flux:input class="mb-3" wire:model="phone" label="Phone Number" placeholder="E.g +1234567890" />

                    @if (Auth::user()->role=='Super-Admin')
                    <flux:select class="mb-3" wire:model="organization_id" label="Organization" placeholder="Choose organization...">
                        @foreach ($this->organizations as $organization)
                        <flux:select.option value="{{ $organization->id }}">{{$organization->name}}</flux:select.option>
                        @endforeach
                    </flux:select>
                    @endif

                    <div class="flex mb-2">
                        <flux:spacer />
                        <flux:button type="submit" variant="primary">Save changes</flux:button>
                    </div>
                </form>
            </div>
        </flux:modal>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Client Name
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Client Company
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Role
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center" colspan="2">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($this->users as $client)

                            <tr class="">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $loop->iteration }}</td>
                                <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                    {{ $client->name }}
                                </td>
                                <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                    {{ $client->company?$client->company->name:'N/A' }}
                                </td>
                                <td class="text-sm font-light px-6 py-4 whitespace-nowrap text-capitalize">
                                    {{ $client->role }}
                                </td>
                                <td>
                                    <flux:dropdown class="ms-3">
                                        <flux:button icon:trailing="chevron-down" size="sm">Options</flux:button>

                                        <flux:menu>
                                            <flux:menu.separator />
                                            <flux:menu.submenu heading="Change Role To">
                                                <flux:menu.radio.group wire:model="role">
                                                    @foreach ($this->roles as $rol)
                                                    <flux:menu.radio wire:click='onChangeRole({{ $client->id }})'>{{$rol}}</flux:menu.radio>
                                                    @endforeach
                                                </flux:menu.radio.group>
                                            </flux:menu.submenu>
                                            <flux:menu.item>
                                                <flux:modal.trigger name="delete-{{ $client->id }}">
                                                    <flux:button variant="danger" icon="trash" class="w-full">Delete</flux:button>
                                                </flux:modal.trigger>
                                                <flux:modal name="delete-{{ $client->id }}" class="md:w-1000">
                                                    <div class="space-y-6">
                                                        <div>
                                                            <flux:heading size="lg">Delete client</flux:heading>
                                                            <flux:text class="mt-2" variant="danger">Delete this user ({{ $client->name }})?. <br>Remember this once done can not be undone.</flux:text>
                                                        </div>
                                                        <!-- show selected image -->
                                                        <form wire:submit="delete({{ $client->id }})" enctype="multipart/form-data">
                                                            <div class="flex">
                                                                <flux:spacer />
                                                                <flux:button type="submit" variant="danger" class="ms-5">Delete</flux:button>
                                                                <flux:button wire:click="close('delete-{{ $client->id }}')" variant="primary" class="ms-5">Cancel</flux:button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </flux:modal>
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>