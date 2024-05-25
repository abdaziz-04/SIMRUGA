<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\Login;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\View; // Use View to display the custom Blade view
use Illuminate\Support\Facades\Auth;

class CustomLogin extends Login
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLoginFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                        Placeholder::make('login_error')
                            ->content(View::make('components.login-error'))
                            ->visible(fn ($get) => $get('login_error_visible') === true),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label(__('Username'))
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        return [
            'username' => $data['login'],
            'password' => $data['password'],
        ];
    }

    protected function failed(): void
    {
        parent::failed();

        $this->notify('danger', 'Invalid username or password.');

        $this->state([
            'data.login_error_visible' => true,
        ]);
    }
}
