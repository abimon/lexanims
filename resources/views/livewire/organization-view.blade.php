<div class="w-full h-full">
    <div class="mb-4 flex justify-end">
        <flux:modal.trigger name="add-organization">
            <flux:button>Add organization</flux:button>
        </flux:modal.trigger>

        <flux:modal name="add-organization" class="w-100">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add organization</flux:heading>
                    <flux:text class="mt-2">Add new organization.</flux:text>
                </div>
                <!-- show selected image -->
                <form wire:submit="addOrganization" enctype="multipart/form-data">

                    <flux:input class="mb-3" wire:model="name" label="Full Name" placeholder="E.g Maicohs Limited" />

                    <flux:input class="mb-3" wire:model="authorized_email" label="Authorized Email" placeholder="E.g example@domain.com" />

                    <flux:input class="mb-3" wire:model="email" label="Email" placeholder="E.g example@domain.com" />

                    <flux:input class="mb-3" wire:model="phone" label="Phone Number" placeholder="E.g +1234567890" />

                    @if (Auth::user()->role=='Super-Admin')
                    <flux:select class="mb-3" wire:model="status" label="Status" placeholder="Choose status...">
                        @foreach ($this->states as $state)
                        <flux:select.option value="{{ $state }}">{{$state}}</flux:select.option>
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
                    <table class="w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">#</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Name</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Authorized Email</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Status</th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($this->organizations as $organization)
                            <tr style="white-space: nowrap;text-align:left;" class="mb-3">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $loop->iteration}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $organization->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $organization->authorized_email}}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium " style="text-transform: capitalize;">{{ $organization->status }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">

                                    <flux:dropdown class="ms-3">
                                        <flux:button icon:trailing="chevron-down" size="sm">Options</flux:button>

                                        <flux:menu>
                                            <flux:menu.separator />
                                            <flux:menu.submenu heading="Change Status To">
                                                <flux:menu.radio.group wire:model="status">
                                                    @foreach ($this->states as $state)
                                                    <flux:menu.radio wire:click='onChangeStatus({{ $organization->id }})'>{{$state}}</flux:menu.radio>
                                                    @endforeach
                                                </flux:menu.radio.group>
                                            </flux:menu.submenu>
                                            <flux:menu.item>
                                                <flux:modal.trigger name="delete-{{ $organization->id }}">
                                                    <flux:button variant="danger" icon="trash" class="w-full">Delete</flux:button>
                                                </flux:modal.trigger>
                                            </flux:menu.item>
                                        </flux:menu>
                                    </flux:dropdown>
                                    <flux:modal name="delete-{{ $organization->id }}" class="md:w-1000">
                                        <div class="space-y-6">
                                            <div>
                                                <flux:heading size="lg">Delete organization</flux:heading>
                                                <flux:text class="mt-2" variant="danger">Delete this user ({{ $organization->name }})?. <br>Remember this once done can not be undone.</flux:text>
                                            </div>
                                            <!-- show selected image -->
                                            <form wire:submit="delete({{ $organization->id }})" enctype="multipart/form-data">
                                                <div class="flex">
                                                    <flux:spacer />
                                                    <flux:button type="submit" variant="danger" class="ms-5">Delete</flux:button>
                                                    <flux:button wire:click="close('delete-{{ $organization->id }}')" variant="primary" class="ms-5">Cancel</flux:button>
                                                </div>
                                            </form>
                                        </div>
                                    </flux:modal>
                                </td>
                            </tr>
                            <flux:menu.separator />
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>