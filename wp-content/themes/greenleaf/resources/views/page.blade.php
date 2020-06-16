@extends('layouts.app')

@section('content')
  <div class="main_container terms-page pt-5 pb-5">
        <div class="overlay"></div>

        <section class=" p-5 ">
            <h2 class="text-center"><?=get_the_title()?></h2>
            <div class="mt-5 container">
                <?=(!empty($post->post_content)?$post->post_content:'')?>
            </div>
        </section>
    </div>
@endsection
