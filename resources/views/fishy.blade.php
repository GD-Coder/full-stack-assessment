@extends('layouts.app')

@section('content')
<v-card class="card" raised dark>
    <center>
        <v-sheet
        class="success-sheet"
        elevation="15"
        color="black"
        height="400px"
        width="100%">

        <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="210mm" height="297mm" viewBox="0 0 210 297" transform="translate(-130, -350)">
            <defs>
                <linearGradient id="d">
                <stop offset="0" stop-color="#fff"/>
                <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="c">
                <stop offset="0" stop-color="#fff"/>
                <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="b">
                <stop offset="0" stop-color="#fff"/>
                <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="a">
                <stop offset="0" stop-opacity="0"/>
                <stop offset="1"/>
                </linearGradient>
                <radialGradient xlink:href="#b" id="g" cx="126.194" cy="105.371" fx="126.194" fy="105.371" r=".458" gradientTransform="matrix(1 0 0 1.05117 0 -5.392)" gradientUnits="userSpaceOnUse"/>
                <radialGradient xlink:href="#c" id="f" cx="123.842" cy="109.24" fx="123.842" fy="109.24" r=".336" gradientTransform="matrix(1 0 0 1.05117 0 -5.59)" gradientUnits="userSpaceOnUse"/>
                <radialGradient xlink:href="#d" id="e" cx="125.319" cy="112.185" fx="125.319" fy="112.185" r=".254" gradientTransform="matrix(1 0 0 1.05117 0 -5.74)" gradientUnits="userSpaceOnUse"/>
            </defs>
            <text style="line-height:1.25;-inkscape-font-specification:Impact" x="46.751" y="152.914" font-weight="400" font-size="10.583" font-family="Impact" letter-spacing="0" word-spacing="0" stroke-width=".265"/>
            <path stroke-width=".5" class="fish" d="M104.722 123.744c-5.644-1.504-8.258-4.365-6.83-7.473 1.471-3.198 9.599-5.01 15.18-3.386 5.964 1.736 7.269 5.112 2.826 7.31-2.658 1.314-7.517 1.346-10.153.065-2.838-1.378-2.913-3.379-.17-4.612 1.893-.852 4.011-.929 5.023-.182.706.521.685.563-.498.978-2.332.82-1.135 2.39 1.822 2.39 1.854 0 3.406-.836 3.406-1.834 0-1.422-3.917-3.21-7.034-3.21-2.017 0-4.976.874-5.973 1.764-2.158 1.926-1.46 4.021 1.88 5.647 1.987.967 2.565 1.066 6.184 1.061 4.706-.007 7.316-.739 9.324-2.615 4.085-3.818-2.194-8.485-11.415-8.485-6.643 0-9.655 1.35-14.828 6.643-4.133 4.228-6.042 5.781-7.108 5.781-1.098 0-.813-.7 1.155-2.832 2.095-2.272 3.101-4.131 3.101-5.731 0-1.354-1.926-4.316-3.658-5.626-1.285-.97-1.704-2.012-.81-2.01.262.002 2.101.764 4.088 1.694 4.075 1.91 5.948 2.116 10.19 1.125 4.407-1.03 5.537-2.176 4.056-4.116-.803-1.052-.688-1.718.297-1.717 1.194 0 14.698 6.449 17.842 8.52 2.913 1.919 3.735 2.872 3.735 4.328 0 2.045-4.872 5.212-10.06 6.539-2.836.725-8.82.717-11.572-.017z" stroke="#00d0ff" fill="#00adef"/>
            <g transform="translate(-125, -110)">
            <path class="bubble" d="M125.71 112.319a.604.635 0 0 1-.6.639.604.635 0 0 1-.608-.63.604.635 0 0 1 .599-.639.604.635 0 0 1 .608.63" fill="#00adef" stroke="#0ff" stroke-width=".015"/>
            <path class="bubble" d="M125.573 112.183a.254.267 0 0 1-.252.269.254.267 0 0 1-.257-.265.254.267 0 0 1 .253-.27.254.267 0 0 1 .256.265" fill="url(#e)"/>
             <animateMotion dur="2.5s" keyPoints="0 ; 0.25 ; 0.5 ; 0.75 ; 1" keyTimes="0 ; 0.25 ; 0.5 ; 0.75 ; 1" calcMode="linear" repeatCount="indefinite" >
                    <mpath xlink:href="#bubble-path"></mpath>
                </animateMotion>
            </g>
            <g transform="translate(-125, -110)">
            <path class="bubble" d="M124.667 109.398a.79.83 0 0 1-.784.836.79.83 0 0 1-.796-.824.79.83 0 0 1 .784-.837.79.83 0 0 1 .796.824" fill="#00adef" stroke="#0ff" stroke-width=".019"/>
            <path class="bubble" d="M124.178 109.238a.336.353 0 0 1-.333.355.336.353 0 0 1-.339-.35.336.353 0 0 1 .333-.356.336.353 0 0 1 .339.35" fill="url(#f)"/>
             <animateMotion dur="2.2s" keyPoints="0 ; 0.15 ; 0.25 ; 0.55 ; 1" keyTimes="0 ; 0.15 ; 0.25 ; 0.55 ; 1" calcMode="linear" repeatCount="indefinite" >
                    <mpath xlink:href="#bubble-path"></mpath>
                </animateMotion>
            </g>
            <g transform="translate(-125, -110)">
                <path class="bubble" d="M127.16 105.774a1.027 1.08 0 0 1-1.02 1.087 1.027 1.08 0 0 1-1.034-1.071 1.027 1.08 0 0 1 1.019-1.088 1.027 1.08 0 0 1 1.035 1.071" fill="#00adef" stroke="#0ff" stroke-width=".025"/>
                <path class="bubble" d="M126.653 105.368a.458.482 0 0 1-.455.485.458.482 0 0 1-.462-.478.458.482 0 0 1 .455-.485.458.482 0 0 1 .462.478" fill="url(#g)"/>
                 <animateMotion dur="2s" keyPoints="0 ; 0.25 ; 0.5 ; 0.75 ; 1" keyTimes="0 ; 0.25 ; 0.5 ; 0.75 ; 1" calcMode="linear" repeatCount="indefinite" >
                    <mpath xlink:href="#bubble-path"></mpath>
                </animateMotion>
            </g>
            <path id="bubble-path"  d="M126.818 116.15s-3.377-5.242-3.042-8.11c.289-2.466 3.68-3.745 4.157-6.183.284-1.457-.913-4.359-.913-4.359" fill="none" stroke="none" stroke-width=".265"/>
        </svg>
        
    </v-sheet>
    </center>
</v-card>
@endsection
