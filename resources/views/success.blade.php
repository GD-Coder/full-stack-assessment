@extends('layouts.app')

@section('content')
<v-card class="card" raised dark>
    <center>
        <v-sheet
        class="success-sheet"
        elevation="15"
        color="success"
        height="400px"
        width="100%">
        <svg class="success-animation" width="600" height="400">
            <text class="success-msg-large" x="0" y="80" fill="none" stroke="white" stroke-width="1" font-size="30">Thank you for getting in touch!</text>
            <text class="success-msg-small" x="50" y="120" fill="none" stroke="white" stroke-width="1" font-size="28">We will get back to you soon!</text>
        </svg>
        <h1 class="success-msg-large">Thank you for getting in touch!</h1><br>
        <v-spacer></v-spacer>
        <h3 class="success-msg-small">We will get back to you soon!</h3>
    </v-sheet>
    </center>
</v-card>
@endsection
