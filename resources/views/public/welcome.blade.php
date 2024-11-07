<x-header></x-header>

<x-nav-bar></x-nav-bar>


<h1 class="text-center">Cursos disponibles</h1>

<section class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($courses as $course)
            <x-card>
                <x-slot name="name">{{ $course->name }}</x-slot>
                <x-slot name="description">{{ $course->description }}</x-slot>
                <x-slot name="content">{{ $course->content }}</x-slot>
                <x-slot name="start">{{ $course->start }}</x-slot>
                <x-slot name="end">{{ $course->end }}</x-slot>
                <x-slot name="limit">{{ $course->limit }}</x-slot>
                <x-slot name="price">{{ $course->price }}</x-slot>
                <x-slot name="level">{{ $course->level_id }}</x-slot>
                <x-slot name="divition">{{ $course->divition_id }}</x-slot>
            </x-card>
        @endforeach
    </div>
</section>

<x-footer></x-footer>

<x-end-body></x-end-body>
