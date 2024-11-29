@props(['employer', 'width' => 90])

<img src="https://picsum.photos/seed/{{ $employer->id }}/{{ $width }}" alt="employer.jpg" class="rounded-xl" width="{{ $width }}">