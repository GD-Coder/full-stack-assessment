<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>{{ $title }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="{{url('/images/lf-logo.png')}}"/>
    <style>
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url({{url('fonts/material-icons/MaterialIcons-Regular.eot')}});
            src: local('Material Icons'),
                local('MaterialIcons-Regular'),
                url({{url('fonts/material-icons/MaterialIcons-Regular.eot')}}) format('embedded-opentype'),
                url({{url('fonts/material-icons/MaterialIcons-Regular.woff2')}}) format('woff2'),
                url({{url('fonts/material-icons/MaterialIcons-Regular.woff')}}) format('woff'),
                url({{url('fonts/material-icons/MaterialIcons-Regular.ttf')}}) format('truetype');
        }
        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            font-feature-settings: 'liga';
        }
        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 400;
            src: url({{url('fonts/Quicksand-Medium.ttf')}});
        }
	</style>
</head>
<body>
<div id="app">
    <v-app id="inspire" dark>
            {{--  <snack-bar ref="snackBar" :text="snackbarText" :color="snackbarColor" :icon="snackbarIcon"></snack-bar>  --}}
        <v-navigation-drawer
        clipped
        fixed
        v-model="drawer"
        app>
        <v-list dense>
        <hr>
            <v-list-tile>
            <v-list-tile-action>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title>
                </v-list-tile-title>
            </v-list-tile-content>
            </v-list-tile>
        </v-list>
        </v-navigation-drawer>
        <v-toolbar app fixed clipped-left>
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        </v-toolbar>
        <v-content>
        <main class="py-4">
            <center>
            <v-card class="card main-card" max-width="600" raised dark>
            @yield('content')
            </v-card>
        </center>
        </main>
        </v-content>
        <v-footer app fixed>
        <span class="dsd-footer">Dreamscape Technologies &copy; 2019</span>
        </v-footer>
    </v-app>
</div>
@stack('scripts')
@stack('styles')
</body>
</html>
