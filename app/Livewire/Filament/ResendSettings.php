<?php

namespace App\Livewire\Filament;

use App\Services\ConfigService;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;

class ResendSettings extends Component implements HasForms
{
    private ConfigService $configService;

    protected string $slug = 'resend';

    use InteractsWithForms;

    public ?array $data = [];

    public function boot(ConfigService $configService): void
    {
        $this->configService = $configService;
    }

    public function render()
    {
        return view('livewire.filament.resend-settings');
    }

    public function mount(): void
    {
        $this->form->fill([
            'key' => $this->configService->get('services.'.$this->slug.'.key'),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('key')
                            ->label(__('Key'))
                            ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->configService->set('services.'.$this->slug.'.key', $data['key']);

        Notification::make()
            ->title(__('Settings Saved'))
            ->success()
            ->send();
    }
}
