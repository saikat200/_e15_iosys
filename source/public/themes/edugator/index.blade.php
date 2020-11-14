@extends('layouts.theme')


@section('content')

    <div class="hero-banner py-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">

                    <div class="hero-left-wrap">
                        <h1 class="hero-title mb-4">{{__t('hero_title')}}</h1>
                        <p class="hero-subtitle  mb-4">
                            {!! __t('hero_subtitle') !!}
                        </p>
                        <a href="{{route('categories')}}" class="btn btn-theme-primary btn-lg">Browse Course</a>
                    </div>

                </div>


                <div class="col-md-12 col-lg-6 hero-right-col">
                    <div class="hero-right-wrap">
                        <img src="{{theme_url('images/hero-image.png')}}" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="home-section-wrap home-info-box-wrapper py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="home-info-box">
                        <img src="{{theme_url('images/skills.svg')}}">
                        <h3 class="info-box-title">Learn the latest Math VR Lab</h3>
                        <p class="info-box-desc">Course You Need to Follow</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="home-info-box">
                        <img src="{{theme_url('images/career-goal.svg')}}">
                        <h3 class="info-box-title">Experience home Physics Lab</h3>
                        <p class="info-box-desc">Thermal Dynamics to Light ,What we need to practice</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="home-info-box">
                        <img src="{{theme_url('images/instructions.svg')}}">
                        <h3 class="info-box-title">Practice Chemistry in the virtual Lab</h3>
                        <p class="info-box-desc">Every course designed by expert instructor</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="home-info-box">
                        <img src="{{theme_url('images/cartificate.svg')}}">
                        <h3 class="info-box-title">Simple way to learn Biology</h3>
                        <p class="info-box-desc">get opportunity to experience VL from home</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if($featured_courses->count())
        <div class="home-section-wrap home-featured-courses-wrapper py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-wrap">
                            <h3 class="section-title">
                                {{__t('featured_courses')}}

                                <a href="{{route('featured_courses')}}" class="btn btn-link float-right"><i class="la la-bookmark"></i> {{__t('all_featured_courses')}}</a>
                            </h3>

                            <p class="section-subtitle">{{__t('featured_courses_desc')}}</p>
                        </div>
                    </div>
                </div>
                <div class="popular-courses-cards-wrap mt-3">
                    <div class="row">
                        @foreach($featured_courses as $course)
                            {!! course_card($course, 'col-md-4') !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="mid-callto-action-wrap text-white text-center py-5">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3">Have Any Confusions!! Clear Them Out</h2>
                    <h4 class="mb-3 mid-callto-action-subtitle">Create a issue in the forum section  <br /> Get teaching Assistance from the feculties and Tutors</h4>

                    <a href="https://arctodo.com/forum/public/" class="btn btn-warning btn-lg" >Get Teaching Assistance</a>
                </div>
            </div>
        </div>
    </div>

    @if($popular_courses->count())
        <div class="home-section-wrap home-fatured-courses-wrapper py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-wrap">
                            <h3 class="section-title">{{__t('popular_courses')}}

                                <a href="{{route('popular_courses')}}" class="btn btn-link float-right"><i class="la la-bolt"></i> {{__t('all_popular_courses')}}</a>
                            </h3>
                            <p class="section-subtitle">{{__t('popular_courses_desc')}}</p>
                        </div>
                    </div>
                </div>
                <div class="popular-courses-cards-wrap mt-3">
                    <div class="row">
                        @foreach($featured_courses as $course)
                            {!! course_card($course) !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif


    @if($new_courses->count())
        <div class="home-section-wrap home-new-courses-wrapper py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header-wrap">
                            <h3 class="section-title">{{__t('new_arrival')}}

                                <a href="{{route('courses')}}" class="btn btn-link float-right"><i class="la la-list"></i> {{__t('all_courses')}}</a>
                            </h3>
                            <p class="section-subtitle">{{__t('new_arrival_desc')}}</p>
                        </div>
                    </div>
                </div>

                <div class="popular-courses-cards-wrap mt-3">
                    <div class="row">
                        @foreach($new_courses as $course)
                            {!! course_card($course) !!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($posts->count())
    <div class="home-section-wrap home-blog-section-wrapper py-5">

        <div class="container">

            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="section-header-wrap">
                        <h3 class="section-title">{{__t('latest_blog_text')}}</h3>
                        <p class="section-subtitle">{{__t('latest_blog_desc')}}</p>
                    </div>
                </div>
            </div>


            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-4 mb-4">
                        <div class="home-blog-card">
                            <a href="{{$post->url}}">
                                <img src="{{$post->thumbnail_url->image_md}}" alt="{{$post->title}}" class="img-fluid">
                            </a>
                            <div class="excerpt px-4">
                                <h2><a href="{{$post->url}}">{{$post->title}}</a></h2>
                                <div class="post-meta d-flex justify-content-between">
                                    <span>
                                        <i class="la la-user"></i>
                                        <a href="{{route('profile', $post->user_id)}}">
                                            {{$post->author->name}}
                                        </a>
                                    </span>
                                    <span>&nbsp;<i class="la la-calendar"></i>&nbsp; {{$post->published_time}}</span>
                                </div>
                                <p class="mt-4">
                                    <a href="{{$post->url}}"><strong>READ MORE <i class="la la-arrow-right"></i> </strong></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="btn-see-all-posts-wrapper pt-4">
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <a href="{{route('blog')}}" class="btn btn-lg btn-theme-primary ml-auto mr-auto">
                            <i class="la la-blog"></i> See All Posts
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endif

   

        <div class="container">
            <div class="row">
                <div class="col-sm-6 home-cta-left-col">


                </div>



            </div>
        </div>

    </div>

@endsection
