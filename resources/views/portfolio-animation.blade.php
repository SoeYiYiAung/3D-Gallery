@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row work">
            <h1>Architectural Movies</h1>
        </div>

        <div class="row">
            <h3>Concept Animation</h3>
            {{-- <iframe width="560" height="400" src="https://www.youtube.com/embed/0SDrhZ-jBSw?si=GsaR7NljVw0r01b0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            <iframe class="mt-3" height="450" src="https://www.youtube.com/embed/Uhy1vSygkvs?si=dw88eIf0DPck1k87" title="YouTube video player" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h4 class="mt-3">Born Neo</h4>
            <h6 class="mt-3">Please turn the sound on to enjoy the full experience</h6>
            <p class="mt-3">We create this high end Animation to challenge our artists working on the tight deadlines, that’s why the caption is “pressure challenge”. All the content generated in 3D Rendering. The concept start from the phrase “Born” and “Neo”. It’s reflected on the story of this animation which is the new face of architecture for the new development of future capital city of Indonesia located in Kalimantan Island and also known as “Borneo”.</p>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="{{route('work-detail')}}" class="btn btn-secondary" style="color:white;">View Full Project</a>
            </div>
        </div>
    </div>

@endsection