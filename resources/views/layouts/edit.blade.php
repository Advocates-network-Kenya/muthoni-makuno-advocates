<?php

use App\Models\Team;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.app')] class extends Component {
    public Team $team;
    public string $teamName = '';

    public function mount(Team $team)
    {
        $this->authorize('update', $team);

        $this->team = $team;
        $this->teamName = $team->name;
    }

    public function updateTeam()
    {
        $this->authorize('update', $this->team);

        $validated = $this->validate([
            'teamName' => 'required|string|max:255',
        ]);

        $this->team->update(['name' => $validated['teamName']]);

        Flux::toast(variant: 'success', text: __('Team settings updated.'));
    }
}; ?>

<div class="space-y-10">
    <header>
        <flux:heading size="xl" level="1">{{ __('Team Settings') }}</flux:heading>
        <flux:subheading>{{ __('Manage settings and members for :name.', ['name' => $team->name]) }}</flux:subheading>
    </header>

    <flux:card>
        <form wire:submit="updateTeam" class="space-y-6">
            <flux:heading size="lg">{{ __('Team Details') }}</flux:heading>

            <flux:input wire:model="teamName" :label="__('Team Name')" required />

            <div class="flex justify-end">
                <flux:button type="submit" variant="primary">{{ __('Save Changes') }}</flux:button>
            </div>
        </form>
    </flux:card>

    @if (! $team->is_personal)
        <flux:card class="border-red-200! dark:border-red-900!">
            <flux:heading size="lg" class="text-red-600!">{{ __('Danger Zone') }}</flux:heading>
            <flux:subheading>{{ __('Once you delete a team, there is no going back. Please be certain.') }}</flux:subheading>

            <div class="mt-6">
                <livewire:pages.teams.delete-team-modal :team="$team" />
            </div>
        </flux:card>
    @endif
</div>