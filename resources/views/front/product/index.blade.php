@extends('layouts.front')

@section('title', '首頁')

@section('content')
<div id="block1" class="full-page parallax" style="background-image: url({{asset('/img/flower.jpg')}});">
        <div class="mask">
            <div class="word-bg bg-g">
                {{$name}}
                價格:${{$price}}
            </div>
        </div>
    </div>

    <div id="block2" class="parallax bg-w pad">
        <div id="block2-anchor"></div>
        <h3 id="block2title">PARALLAX DEMO</h3>
        <p>Parallax scrolling is a web site trend where the background content is moved at a different speed than the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
    </div>

    <div id="block3" class="half-page parallax" style="background-image: url({{asset('/img/smoke.jpg')}});">
        <div class="mask">
            <div class="word-bg">LESS HEIGHT</div>
        </div>
    </div>

    <div id="block4" class="bg-b pad ww">
        <div id="block4-anchor"></div>
        <p id="block4title">Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
    </div>

    <div id="block5" class="half-page parallax"style="background-image: url({{asset('/img/girl.jpg')}});">
        <div class="mask">
            <div class="word-bg">SCROLL UP</div>
        </div>
    </div>

    <div id="block6" class="bg-b pad ww">
        <div id="block6-anchor"></div>
        <p id="block6title">Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
    </div>

    <div id="block7" class="full-page parallax"style="background-image: url({{asset('/img/makeup.jpg')}});">
        <div class="mask">
            <div class="word-bg bg-g">COOL!</div>
        </div>
    </div>
@endsection
