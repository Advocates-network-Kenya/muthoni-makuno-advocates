<div>
    <header class="mb-6">
        <flux:heading size="xl">{{ __('Add Advocate') }}</flux:heading>
        <flux:subheading>{{ __('Register a new advocate or staff member.') }}</flux:subheading>
    </header>

    <flux:card>
        <form wire:submit="save" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input wire:model="name" :label="__('Full Name')" placeholder="John Doe" required />
                <flux:input wire:model="email" type="email" :label="__('Email Address')" placeholder="john@example.com"
                    required />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <flux:input wire:model="phone" :label="__('Phone Number')" placeholder="+1..." required />
                <flux:select wire:model="role" :label="__('Role')" placeholder="Select a role..." required>
                    <flux:select.option value="partner">Partner</flux:select.option>
                    <flux:select.option value="associate">Associate</flux:select.option>
                    <flux:select.option value="lawyer">Lawyer</flux:select.option>
                    <flux:select.option value="paralegal">Paralegal</flux:select.option>
                    <flux:select.option value="accountant">Accountant</flux:select.option>
                    <flux:select.option value="ict">ICT</flux:select.option>
                </flux:select>
            </div>

            <flux:textarea wire:model="qualifications" :label="__('Qualifications')"
                placeholder="List degrees, certifications..." rows="3" required />

            <flux:textarea wire:model="content" :label="__('Biography/Content')"
                placeholder="Detailed profile description..." rows="6" required />

            <div class="space-y-3">
                <flux:label>{{ __('Profile Image') }}</flux:label>

                <div class="flex items-center gap-4">
                    <input type="file" wire:model="image"
                        class="block w-full text-sm text-zinc-500 
                        file:mr-4 file:py-2 file:px-4 
                        file:rounded-md file:border-0 
                        file:text-sm file:font-semibold 
                        file:bg-zinc-100 file:text-zinc-700 
                        hover:file:bg-zinc-200 
                        dark:file:bg-zinc-800 dark:file:text-zinc-200 
                        cursor-pointer" />
                    @if ($image)
                        <div
                            class="relative size-16 shrink-0 overflow-hidden rounded-lg border border-zinc-200 dark:border-zinc-700">
                            <img src="{{ $image->temporaryUrl() }}" class="size-full object-cover">
                        </div>
                    @endif


                </div>
                <flux:error name="image" />
            </div>

            <div class="flex gap-2">
                <flux:spacer />
                <flux:button variant="ghost" :href="route('admin.advocates.index')" wire:navigate>{{ __('Cancel') }}
                </flux:button>
                <flux:button type="submit" variant="primary" color="blue">{{ __('Create Advocate') }}</flux:button>
            </div>
        </form>
    </flux:card>
</div>
