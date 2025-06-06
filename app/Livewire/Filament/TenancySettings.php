<?php

namespace App\Livewire\Filament;

use App\Services\ConfigService;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;

class TenancySettings extends Component implements HasForms
{
    private ConfigService $configService;

    use InteractsWithForms;

    public ?array $data = [];

    public function render()
    {
        return view('livewire.filament.tenancy-settings');
    }

    public function boot(ConfigService $configService): void
    {
        $this->configService = $configService;
    }

    public function mount(): void
    {
        $this->form->fill([
            'allow_tenant_invitations' => $this->configService->get('app.allow_tenant_invitations', false),
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('Tenancy Settings'))
                    ->schema([
                        Toggle::make('allow_tenant_invitations')
                            ->label(__('Allow Tenant Invitations'))
                            ->helperText(__('If enabled, tenants users with an "admin" tenant role will be able to invite users to their tenant.'))
                            ->required(),
                    ]),

            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->configService->set('app.allow_tenant_invitations', $data['allow_tenant_invitations']);

        Notification::make()
            ->title(__('Settings Saved'))
            ->success()
            ->send();
    }
}
