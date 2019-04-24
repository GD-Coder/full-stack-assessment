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
                <g stroke="#0f0" transform="translate(150, -50)">
                    <path d="M164.55 136.535a57.4 55.537 0 0 1-56.978 55.935 57.4 55.537 0 0 1-57.82-55.12 57.4 55.537 0 0 1 56.962-55.951 57.4 55.537 0 0 1 57.836 55.104" fill="#fff" stroke-width=".744"/>
                    <g fill="none" stroke-width=".265">
                    <path d="M146.166 99.13L62.63 136.175l31.961 13.802zM146.166 99.13l-37.16 83.484-13.758-31.98z" stroke-width="1.44044195"/>
                    <path class="trails" d="M74.733 145.176l-14.412 13.122M91.081 153.35L68.71 175.076M100.976 172.495L90.221 183.25" stroke-width="2"/>
                </g></g>
            <text class="success-msg-large" x="0" y="200" fill="none" stroke="white" stroke-width="1" font-size="30">Thank you for getting in touch!</text>
            <text class="success-msg-small" x="50" y="250" fill="none" stroke="white" stroke-width="1" font-size="28">We will get back to you soon!</text>
        </svg>
        <h1 class="success-msg-large">Thank you for getting in touch!</h1><br>
        <v-spacer></v-spacer>
        <h3 class="success-msg-small">We will get back to you soon!</h3>
    </v-sheet>
    </center>
</v-card>
@endsection
