<div>
    <header class="flex items-center justify-between mb-6">
        <flux:heading size="xl">{{ __('Advocates') }}</flux:heading>
        <flux:button variant="primary" color="blue" :href="route('admin.advocates.create')">{{ __('Add Advocate') }}</flux:button>
    </header>

    <flux:card>
        <flux:table :paginate="$this->advocates">
            <flux:table.columns>
                <flux:table.column>{{ __('Name') }}</flux:table.column>
                <flux:table.column>{{ __('Role') }}</flux:table.column>
                <flux:table.column>{{ __('Email') }}</flux:table.column>
                <flux:table.column>{{ __('Phone') }}</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($this->advocates as $advocate)
                    <flux:table.row :key="$advocate->id">
                        <flux:table.cell class="font-medium">{{ $advocate->name }}</flux:table.cell>
                        <flux:table.cell>{{ str($advocate->role)->headline() }}</flux:table.cell>
                        <flux:table.cell>{{ $advocate->email }}</flux:table.cell>
                        <flux:table.cell>{{ $advocate->phone }}</flux:table.cell>
                        <flux:table.cell class="flex justify-end gap-2">
                            <flux:button
                                icon="pencil-square"
                                variant="ghost"
                                inset="top bottom"
                                :href="route('admin.advocates.edit', $advocate)"
                            />
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>

        <div class="mt-4">
            {{ $this->advocates->links() }}
        </div>
    </flux:card>
</div>
