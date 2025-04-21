<?php

namespace App\Filament\Dashboard\Resources\SubscriptionResource\Pages;

use App\Filament\Dashboard\Resources\SubscriptionResource;
use App\Filament\Dashboard\Resources\SubscriptionResource\ActionHandlers\DiscardSubscriptionCancellationActionHandler;
use App\Models\Subscription;
use App\Services\PaymentProviders\PaymentService;
use App\Services\SubscriptionService;
use Filament\Resources\Pages\ViewRecord;

class ViewSubscription extends ViewRecord
{
    protected static string $resource = SubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\ActionGroup::make([
                \Filament\Actions\Action::make('change-plan')
                    ->label(__('Change Plan'))
                    ->color('primary')
                    ->icon('heroicon-o-rocket-launch')
                    ->visible(function (Subscription $record, SubscriptionService $subscriptionService): bool {
                        return $subscriptionService->canChangeSubscriptionPlan($record);
                    })
                    ->url(fn (Subscription $record): string => SubscriptionResource::getUrl('change-plan', ['record' => $record->uuid])),
                \Filament\Actions\Action::make('update-payment-details')
                    ->label(__('Update Payment Details'))
                    ->color('gray')
                    ->icon('heroicon-s-credit-card')
                    ->visible(fn (Subscription $record, SubscriptionService $subscriptionService): bool => $subscriptionService->canEditSubscriptionPaymentDetails($record))
                    ->action(function (Subscription $record, PaymentService $paymentService) {
                        $paymentProvider = $paymentService->getPaymentProviderBySlug($record->paymentProvider->slug);

                        redirect()->to($paymentProvider->getChangePaymentMethodLink($record));
                    }),
                \Filament\Actions\Action::make('add-discount')
                    ->label(__('Add Discount'))
                    ->color('gray')
                    ->icon('heroicon-s-tag')
                    ->visible(function (Subscription $record, SubscriptionService $subscriptionService): bool {
                        return $subscriptionService->canAddDiscount($record);
                    })
                    ->url(fn (Subscription $record): string => SubscriptionResource::getUrl('add-discount', ['record' => $record->uuid])),
                \Filament\Actions\Action::make('cancel')
                    ->color('gray')
                    ->label(__('Cancel Subscription'))
                    ->icon('heroicon-m-x-circle')
                    ->url(fn (Subscription $record): string => SubscriptionResource::getUrl('cancel', ['record' => $record->uuid]))
                    ->visible(fn (Subscription $record, SubscriptionService $subscriptionService): bool => $subscriptionService->canCancelSubscription($record)),
                \Filament\Actions\Action::make('discard-cancellation')
                    ->color('gray')
                    ->label(__('Discard Cancellation'))
                    ->icon('heroicon-m-x-circle')
                    ->action(function ($record, DiscardSubscriptionCancellationActionHandler $handler) {
                        $handler->handle($record);
                    })->visible(fn (Subscription $record, SubscriptionService $subscriptionService): bool => $subscriptionService->canDiscardSubscriptionCancellation($record)),
            ])->button()->icon('heroicon-s-cog')->label(__('Manage Subscription')),
        ];
    }
}
