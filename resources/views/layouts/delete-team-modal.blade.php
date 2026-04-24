<?php

use App\Models\Team;
use Flux\Flux;
use Livewire\Component;

new class extends Component {
    public Team $team;
    public string $deleteName = '';

    public function deleteTeam()
    {
        $this->authorize('delete', $this->team);

        if ($this->deleteName !== $this->team->name) {
            $this->addError('deleteName', __('The name you entered does not match the team name.'));
            return;
        }

        $this->team->delete();

        Flux::toast(variant: 'success', text: __('Team deleted successfully.'));

        return $this->redirectRoute('teams.index', navigate: true);
    }
}; ?>

<div>
    <flux:modal.trigger name="delete-team">
        <flux:button variant="danger">{{ __('Delete Team') }}</flux:button>
    </flux:modal.trigger>

    <flux:modal name="delete-team" class="max-w-lg">
        <form wire:submit="deleteTeam" class="space-y-6">
            <div>
                <flux:heading size="lg">{{ __('Are you sure?') }}</flux:heading>
                <flux:subheading>
                    {{ __('This action cannot be undone. Please type **:name** to confirm.', ['name' => $team->name]) }}
                </flux:subheading>
            </div>

            <flux:input wire:model="deleteName" :label="__('Confirmation')" placeholder="..." />

            <div class="flex space-x-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">{{ __('Cancel') }}</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="danger">{{ __('Delete Team') }}</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
