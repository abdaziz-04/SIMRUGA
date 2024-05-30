<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use App\Filament\Auth\CustomLogin;
use Filament\Support\Colors\Color;
use App\Filament\Widgets\WargaChart;
use App\Filament\Pages\Settings\Settings;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Outerweb\FilamentSettings\Filament\Plugins\FilamentSettingsPlugin;
use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->sidebarCollapsibleOnDesktop(true)
            ->id('admin')
            ->path('admin')
            ->login(CustomLogin::class)
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                WargaChart::class,

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                \Hasnayeen\Themes\Http\Middleware\SetTheme::class
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugin(FilamentSpatieRolesPermissionsPlugin::make())
            ->plugin(\Hasnayeen\Themes\ThemesPlugin::make());
            // ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
            //     return $builder->groups([
            //         NavigationGroup::make()
            //             ->items([
            //                 NavigationItem::make('Dashboard')
            //                     ->icon('heroicon-o-home')
            //                     ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.dashboard'))
            //                     ->url(fn (): string => route('filament.admin.pages.dashboard')),
            //             ]),
            //         NavigationGroup::make()
            //             ->label('Ketua')
            //             ->items([
            //                 NavigationItem::make('Daftar RT')
            //                     ->icon('heroicon-o-globe-asia-australia')
            //                     ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.rts'))
            //                     ->url(fn (): string => route('filament.admin.pages.rts')),
            //             ]),
            //         NavigationGroup::make()
            //             ->label('Settings')
            //             ->icon('heroicon-o-wrench')
            //             ->items([
            //                 NavigationItem::make('Roles')
            //                     ->icon('heroicon-o-user-group')
            //                     ->isActiveWhen(fn (): bool => in_array(request()->route()->getName(), [
            //                         'filament.admin.resources.roles.index',
            //                         'filament.admin.resources.roles.create',
            //                         'filament.admin.resources.roles.view',
            //                         'filament.admin.resources.roles.edit',
            //                     ]))
            //                     ->url(fn (): string => '/admin/roles'),
            //                 NavigationItem::make('Permissions')
            //                     ->icon('heroicon-o-lock-closed')
            //                     ->isActiveWhen(fn (): bool => in_array(request()->route()->getName(), [
            //                         'filament.admin.resources.permissions.index',
            //                         'filament.admin.resources.permissions.create',
            //                         'filament.admin.resources.permissions.view',
            //                         'filament.admin.resources.permissions.edit',
            //                     ]))
            //                     ->url(fn (): string => '/admin/permissions'),
            //             ]),
            //     ]);
            // });
    }
}
