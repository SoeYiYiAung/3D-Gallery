@extends('layout.master')
@section('content')
    <!-- <model-viewer> HTML element -->

    <model-viewer src="{{ asset('photo/AAC22.glb') }}" ar ar-modes="scene-viewer webxr quick-look" camera-controls poster="poster.webp" shadow-intensity="1" ios-src="AAC22.usdz" xr-environment>

      <button slot="ar-button" id="ar-button">
          View in your space
      </button>

      <template shadowroot="open">
          <slot name="ar-button"></slot>
      </template>

      {{-- <button id="ar-button"> Start AR </button> --}}
      
      <div id="ar-prompt">
        <img src="ar_hand_prompt.png">
      </div>
    </model-viewer>  
    <!-- Loads <model-viewer> for browsers: -->
   
@endsection