<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? 'OpenBooker' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
            rel="stylesheet"
        />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        {{-- The navbar with `sticky` and `full-width` --}}
        <x-mary-nav sticky full-width>
            <x-slot:brand>
                {{-- Drawer toggle for "main-drawer" --}}
                <label for="main-drawer" class="mr-3 lg:hidden">
                    <x-mary-icon name="o-bars-3" class="cursor-pointer" />
                </label>
            </x-slot>

            {{-- Right side actions --}}
            <x-slot:actions>
                <x-mary-theme-toggle />
                <x-mary-button
                    icon="o-envelope"
                    link="###"
                    class="btn-ghost btn-sm"
                />
                <x-mary-button
                    icon="o-bell"
                    link="###"
                    class="btn-ghost btn-sm"
                />
            </x-slot>
        </x-mary-nav>

        {{-- The main content with `full-width` --}}
        <x-mary-main with-nav full-width>
            {{-- This is a sidebar that works also as a drawer on small screens --}}
            {{-- Notice the `main-drawer` reference here --}}
            <x-slot:sidebar
                drawer="main-drawer"
                collapsible
                class="bg-base-200"
            >
                {{-- User --}}
                @if ($user = auth()->user())
                    <x-mary-list-item
                        :item="$user"
                        value="name"
                        sub-value="email"
                        no-separator
                        no-hover
                        class="pt-2"
                    >
                        <x-slot:actions>
                            <x-mary-button
                                icon="o-power"
                                class="btn-circle btn-ghost btn-xs"
                                tooltip-left="logoff"
                                no-wire-navigate
                                link="/logout"
                            />
                        </x-slot>
                    </x-mary-list-item>

                    <x-mary-menu-separator />
                @endif

                {{-- Activates the menu item when a route matches the `link` property --}}
                <x-mary-menu activate-by-route>
                    <x-mary-menu-item
                        title="Dashboard"
                        icon="lucide.layout-dashboard"
                        :link="route('dashboard')"
                    />
                    <x-mary-menu-item
                        title="Contacts"
                        icon="lucide.users"
                        :link="route('app.contacts')"
                    />
                    <x-mary-menu-item
                        title="Availabilities"
                        icon="lucide.clock"
                        :link="route('app.availabilities')"
                    />
                    <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                        <x-mary-menu-item
                            title="Wifi"
                            icon="o-wifi"
                            link="####"
                        />
                        <x-mary-menu-item
                            title="Archives"
                            icon="o-archive-box"
                            link="####"
                        />
                    </x-mary-menu-sub>
                </x-mary-menu>
            </x-slot>

            {{-- The `$slot` goes here --}}
            <x-slot:content>
                {{ $slot }}
            </x-slot>
        </x-mary-main>

        {{-- TOAST area --}}
        <x-mary-toast />
    </body>
</html>
