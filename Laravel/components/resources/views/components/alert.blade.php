<div
    {{ $attributes->class(['alert-dismissible fade show' => $dismissible])->merge(['class' => 'alert alert-' . $validType, 'role' => $attributes->prepends('alert')]) }}>




    @isset($title)
        <h4 {{ $title->attributes->class(['alert-heading']) }}>{{ $title }}</h4>
        <hr>
    @endisset


    @if ($slot->isEmpty())
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, distinctio.</p>
    @else
        {{ $slot }}
    @endif



    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif


</div>
