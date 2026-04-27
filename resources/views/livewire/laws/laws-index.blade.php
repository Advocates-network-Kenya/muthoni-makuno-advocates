<div>
    <header class="flex items-center justify-between mb-6">
        <flux:heading size="xl">Areas of Law</flux:heading>
        <flux:button variant="primary" color="blue" :href="route('admin.laws.create')">Add New Area</flux:button>
    </header>

    <flux:card>
        <flux:table :paginate="$this->laws">
            <flux:table.columns>
                <flux:table.column>Title</flux:table.column>
                <flux:table.column>Description</flux:table.column>
                <flux:table.column>Created By</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($this->laws as $law)
                    <flux:table.row :key="$law->id">
                        <flux:table.cell class="font-medium">{{ $law->title }}</flux:table.cell>
                        <flux:table.cell>{{ str($law->description)->limit(50) }}</flux:table.cell>
                        <flux:table.cell>{{ $law->user?->name }}</flux:table.cell>
                        <flux:table.cell class="flex justify-end gap-2">
                            <flux:button
                                icon="pencil-square"
                                variant="ghost"
                                inset="top bottom"
                                :href="route('admin.laws.edit', $law)"
                            />
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>

        <div class="mt-4">
            {{ $this->laws->links() }}
        </div>
    </flux:card>
</div>
