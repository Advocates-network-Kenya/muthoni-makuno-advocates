<?php

use App\Actions\Teams\CreateTeam;
use App\Models\Team;
use App\Rules\TeamName;
use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.app')] #[Title('Teams')] class extends Component {
    public string $name = '';

    public function teams()
    {
        return Auth::user()->teams;
    }

    public function createTeam(CreateTeam $createTeam)
    {
        $this->authorize('create', Team::class);

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255', new TeamName],
        ]);

        $team = $createTeam->handle(Auth::user(), $validated['name']);

        $this->reset('name');

        Flux::toast(variant: 'success', text: __('Team created.'));

        return $this->redirectRoute('teams.edit', $team, navigate: true);
    }
}; ?>

<div class="space-y-10">
    <header>
        <flux:heading size="xl" level="1">{{ __('Teams') }}</flux:heading>
        <flux:subheading>{{ __('Manage your existing teams or create a new one.') }}</flux:subheading>
    </header>

    <flux:card>
        <form wire:submit="createTeam" class="space-y-6">
            <flux:heading size="lg">{{ __('Create Team') }}</flux:heading>

            <flux:input wire:model="name" :label="__('Team Name')" placeholder="e.g. Acme Corp" required />

            <div class="flex justify-end">
                <flux:button type="submit" variant="primary">{{ __('Create Team') }}</flux:button>
            </div>
        </form>
    </flux:card>

    <div class="space-y-4">
        <flux:heading size="lg">{{ __('Your Teams') }}</flux:heading>

        <flux:table>
            <flux:table.columns>
                <flux:table.column>{{ __('Name') }}</flux:table.column>
                <flux:table.column>{{ __('Role') }}</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($this->teams() as $team)
                    <flux:table.row :key="$team->id">
                        <flux:table.cell class="font-medium">{{ $team->name }}</flux:table.cell>
                        <flux:table.cell>{{ $team->pivot->role ?? __('Member') }}</flux:table.cell>
                        <flux:table.cell class="flex justify-end">
                            <flux:button :href="route('teams.edit', $team)" variant="ghost" icon="cog-6-tooth" inset="top bottom" />
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </div>
</div>