<?php

namespace App\Filament\Pages;

use App\Forms\Components\CustomPlaceholder;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Dados Gerais')
                    ->schema([

                        CustomPlaceholder::make('title')
                            ->label('Perfil do '.auth()->user()->name)
                            ->content('Confira os seus dados e altere caso necessário.'),

                        ViewField::make('hr')
                            ->view('forms.components.hr'),

                        Group::make([
                            Placeholder::make('name')
                                ->columnSpan(1),
                            TextInput::make('name')
                                ->required()
                                ->hiddenLabel()
                                ->columnSpan(5),
                        ])->columns(6),

                        Group::make([
                            Placeholder::make('email')
                                ->columnSpan(1),
                            TextInput::make('email')
                                ->required()
                                ->hiddenLabel()
                                ->columnSpan(5),
                        ])->columns(6),

                        Group::make([
                            Placeholder::make('whatsapp')
                                ->columnSpan(1),
                            TextInput::make('whatsapp')
                                ->required()
                                ->hiddenLabel()
                                ->columnSpan(5),
                        ])->columns(6),

                        ViewField::make('hr')
                            ->view('forms.components.hr'),

                        CustomPlaceholder::make('title')
                            ->label('Localização')
                            ->content('Escolha seu idioma e formato de tela'),

                        Group::make([
                            Placeholder::make('Idioma')
                                ->columnSpan(1),
                            Select::make('language')
                                ->options([])
                                ->hiddenLabel()
                                ->columnSpan(5),
                        ])->columns(6),

                        Group::make([
                            Placeholder::make('Formato da data')
                                ->columnSpan(1),
                            Select::make('date_format')
                                ->options([])
                                ->hiddenLabel()
                                ->columnSpan(5),
                        ])->columns(6),

                        ViewField::make('hr')
                            ->view('forms.components.hr'),

                        Group::make([
                            Placeholder::make('Notificações por email')
                                ->columnSpan(1),

                            Group::make([
                                Toggle::make('notification_email')
                                    ->hiddenLabel(),
                            ])->extraAttributes(['class' => 'float-right']),

                        ])->columns(2),

                        Group::make([
                            Placeholder::make('Notificações por whatsapp')
                                ->columnSpan(1),

                            Group::make([
                                Toggle::make('notification_whatsapp')
                                    ->hiddenLabel(),
                            ])->extraAttributes(['class' => 'float-right']),

                        ])->columns(2),
                    ]),

            ])
            ->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
