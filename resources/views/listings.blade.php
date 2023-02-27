<h1>{{ $heading }}</h1>


<?php print_r($listings); ?>



<?php foreach ($listings as $listing) : ?>
<h2><?php echo $listing['title']; ?></h2>
<h2><?php echo $listing['description']; ?></h2>
<?php endforeach; ?>


{{-- 條件引入1 --}}
{{--
@if (count($listings) == 0)
    <p>NO Listings found</p>
@endif --}}


{{-- 條件引入 2  --}}

@unless(count($listings) == 0)
    @foreach ($listings as $listing)
        <h2>
            <a href="/listings/{{ $listing['id'] }}">
                {{ $listing['title'] }}
            </a>
        </h2>
        <a>
            {{ $listing['description'] }}
        </a>
    @endforeach
@else
    <p>NO listings found</p>
@endunless
