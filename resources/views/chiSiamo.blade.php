<x-layout title="Chi Siamo">

  
    <header class="container-fluid bg-chiSiamo">
        <div class="row vh-100">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="display-1 fw-bold text-decoration-underline">Chi Siamo</h1>
            </div>
        </div>
    </header>

    {{-- sezione delle card --}}

    <section class="container my-5">
        <div class="row justify-content-center">

            @foreach ($students as $student)
                <div class="col-12 col-md-3">
                  {{-- qui ci va la card --}}
                    <x-card
                        id="{{$student['id']}}"
                        name="{{$student['name']}}"
                        surname="{{$student['surname']}}"
                    />
                </div>
            @endforeach

        </div>
    </section>

</x-layout>
