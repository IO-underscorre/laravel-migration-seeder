@extends('layouts.main')

@section('page_title')
    Home
@endsection

@section('jumbo')
    <section class="jumbo">
        <h1 class="title">
            {{ $title }}
        </h1>
    </section>
@endsection

@section('content')
    <main>
        @foreach ($main_sections as $section)
            <section>
                <h2 class="title">
                    {{ $section['section_title'] }}
                </h2>

                <p class="text">
                    {{ $section['section_text'] }}
                </p>
            </section>
        @endforeach
    </main>
@endsection
