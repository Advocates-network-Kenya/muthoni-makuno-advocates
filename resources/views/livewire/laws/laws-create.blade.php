<div>
    <header class="mb-6">
        <flux:heading size="xl">{{ __('Add Area of Law') }}</flux:heading>
        <flux:subheading>{{ __('Create a new legal specialization area.') }}</flux:subheading>
    </header>

    <flux:card>
        <form wire:submit="save" class="space-y-6">
            {{-- title --}}
            <flux:input wire:model="title" :label="__('Title')" placeholder="e.g. Family Law"  />
            {{-- description --}}
            <flux:textarea wire:model="description" :label="__('Description')"
                placeholder="Briefly describe this area of law..." rows="5" />
            {{-- content --}}
            <flux:textarea wire:model="content" :label="__('Content')"
                placeholder="Enter the content for this area of law..." rows="10"  />

            <div class="space-y-3">
                <flux:label>{{ __('Featured Image') }}</flux:label>

                <div class="flex items-center gap-4">
                    @if ($image)
                        <div class="relative size-16 shrink-0 overflow-hidden rounded-lg border border-zinc-200 dark:border-zinc-700">
                            <img src="{{ $image->temporaryUrl() }}" class="size-full object-cover">
                        </div>
                    @endif

                    <input type="file" wire:model="image" class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200 dark:file:bg-zinc-800 dark:file:text-zinc-200 cursor-pointer" />
                </div>
                <flux:error name="image" />
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:button variant="ghost" :href="route('admin.laws.index')" wire:navigate>{{ __('Cancel') }}
                </flux:button>

                <flux:button type="submit" variant="primary" color="blue" style="cursor: pointer;">{{ __('Create Area') }}</flux:button>
            </div>
        </form>
    </flux:card>
</div>
