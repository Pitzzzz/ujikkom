@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
<section class="page-hero">
    <div class="page-hero__inner reveal">
        <nav class="breadcrumb label-nav" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">{{ __('nav.home') }}</a>
            <span aria-hidden="true">/</span>
            <span>{{ __('nav.about') }}</span>
        </nav>
        <h1 class="page-hero__title">{{ __('about.heading_1') }}<br>{{ __('about.heading_2') }}</h1>
        <p class="page-hero__lead"></p>
    </div>
</section>

<section class="about-profile">
    <div class="about-profile__copy reveal">
        <p class="label-nav text-[var(--accent-soft)]">{{ __('about.profile_label') }}</p>
        <h2 class="about-profile__title">{{ __('about.profile_title_1') }}<br>{{ __('about.profile_title_2') }}</h2>
        <p>{{ __('about.profile_body') }}</p>
    </div>
    <figure class="about-profile__figure reveal">
        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=1000&h=1200&fit=crop" alt="{{ __('about.main_building_alt') }}" loading="lazy">
        <figcaption>{{ __('about.main_building') }}</figcaption>
    </figure>
</section>

<section class="about-vision">
    <article class="about-vision__block reveal">
        <span class="about-vision__mark" aria-hidden="true"></span>
        <p class="label-nav text-[var(--accent-soft)]">{{ __('about.vision') }}</p>
        <h2>{{ __('about.vision_body') }}</h2>
    </article>
    <article class="about-vision__block reveal">
        <span class="about-vision__mark" aria-hidden="true"></span>
        <p class="label-nav text-[var(--accent-soft)]">{{ __('about.mission') }}</p>
        <p>{{ __('about.mission_body') }}</p>
    </article>
</section>


<section class="about-timeline">
    <div class="about-timeline__intro reveal">
        <p class="label-nav text-[var(--accent-soft)]">{{ __('about.timeline') }}</p>
        <h2>{{ __('about.timeline_title_1') }}<br>{{ __('about.timeline_title_2') }}</h2>
    </div>
    <ol class="about-timeline__list">
        <li class="reveal">
            <span class="about-timeline__year">1928</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>{{ __('about.t1928_title') }}</h3>
                <p>{{ __('about.t1928_body') }}</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">1963</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>{{ __('about.t1963_title') }}</h3>
                <p>{{ __('about.t1963_body') }}</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">2006</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>{{ __('about.t2006_title') }}</h3>
                <p>{{ __('about.t2006_body') }}</p>
            </div>
        </li>
        <li class="reveal">
            <span class="about-timeline__year">{{ __('about.now') }}</span>
            <span class="about-timeline__dot" aria-hidden="true">◆</span>
            <div>
                <h3>{{ __('about.tnow_title') }}</h3>
                <p>{{ __('about.tnow_body') }}</p>
            </div>
        </li>
    </ol>
</section>



@endsection
