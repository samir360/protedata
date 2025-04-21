<?php

namespace App\Filament\Admin\Resources\VerificationProviderResource\Pages;

use App\Filament\Admin\Resources\VerificationProviderResource;
use App\Models\VerificationProvider;
use App\Services\UserVerificationService;
use Filament\Actions;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditVerificationProvider extends EditRecord
{
    protected static string $resource = VerificationProviderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            \Filament\Actions\Action::make('edit-credentials')
                ->label(__('Edit Credentials'))
                ->color('primary')
                ->icon('heroicon-o-rocket-launch')
                ->url(fn (VerificationProvider $record): string => VerificationProviderResource::getUrl(
                    $record->slug.'-settings'
                )),
            \Filament\Actions\Action::make('send-test-sms')
                ->color('gray')
                ->form([
                    TextInput::make('phone')->required(),
                    Textarea::make('body')->default('This is a test sms.')->required(),
                ])
                ->action(function (array $data, VerificationProvider $record, UserVerificationService $userVerificationService) {
                    try {
                        $userVerificationService->getProviderBySlug($record->slug)
                            ->sendSms($data['phone'], $data['body']);
                    } catch (\Exception $e) {
                        logger()->error($e->getMessage());
                        Notification::make()
                            ->title(__('Test SMS Failed To Send with message:'))
                            ->body($e->getMessage())
                            ->send();

                        return;
                    }

                    Notification::make()
                        ->title(__('Test SMS was sent.'))
                        ->success()
                        ->send();
                })->modalSubmitActionLabel(__('Send Test SMS')),
        ];
    }
}
