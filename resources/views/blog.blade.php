@extends('layouts.fontpage')

@section('title', 'Blog')

@push('styles')
<link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
  
</style>

@endpush


@section('content')
<section class="blog-heading">
  <p class="blog-label">Blog</p>
  <h2 class="blog-title">Growth Insights & Startup Guides</h2>
  <p class="blog-subtext">Expert insights to build and scale smarter</p>
</section>
 <section class="blog-section">
    <div class="blog-container">
        <!-- Left: Main Blog -->
        <div class="blog-left">
            <img src="{{asset('assets/images/blog/blogimg (1).png')}}" alt="Main Blog" />
            <div class="blog-meta">
                <span style="font-size: 16px;color: #5a5a5a;">📅 18 Jul 2023</span>
                <span style="font-size: 16px;color: #5a5a5a;">💬 Comments</span>
            </div>
            <h3><a style="text-decoration: none;color: black" href="{{ route('post_blog') }}">Wise Spending Habits, 13 Tips for Maximizing Your Money.</a></h3>
            <button><a style="text-decoration: none;color: black" href="{{ route('post_blog') }}">Learn More</a></button>
        </div>
        <!-- Right: Blog List -->
        <div class="blog-right">
        <div class="blog-item">
            <img src="{{asset('assets/images/blog/blogimg (2).png')}}" alt="Blog 1" />
            <div class="blog-item-content">
            <div class="blog-meta"style="gap: 6px !important">
                <span>📅 18 Jul 2023</span>
                <span>💬 Comments</span>
            </div>
            <h4><a style="text-decoration: none;color: black" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h4>
            </div>
        </div>
        <hr style="color: #26252561;margin: 0px;">
        <div class="blog-item">
            <img src="{{asset('assets/images/blog/blogimg (3).png')}}" alt="Blog 2" />
            <div class="blog-item-content">
            <div class="blog-meta" style="gap: 6px !important">
                <span>📅 18 Jul 2023</span>
                <span>💬 Comments</span>
            </div>
            <h4><a style="text-decoration: none;color: black" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h4>
            </div>
        </div>
        <hr style="color: #26252561;margin: 0px;">
        <div class="blog-item">
            <img src="{{asset('assets/images/blog/blogimg (4).png')}}" alt="Blog 3" />
            <div class="blog-item-content">
            <div class="blog-meta" style="gap: 6px !important">
                <span>📅 18 Jul 2023</span>
                <span>💬 Comments</span>
            </div>
            <h4><a style="text-decoration: none;color: black" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h4>
            </div>
        </div>
    </div>
</section>

<section class="blog-section" style="max-width: 1150px;">
    <h2>Latest Blogs</h2>
    <div class="blog-grid">
      <!-- Blog 1 -->
      <div class="blog-card">
        <img src="{{asset('assets/images/blog/blogimg (2).png')}}" alt="Blog 1" />
        <div class="meta">
          <span>📅 18 Jul 2023</span>
          <span>💬 Comments</span>
        </div>
        <h4><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h4>
      </div>
      <!-- Blog 2 -->
      <div class="blog-card">
        <img src="{{asset('assets/images/blog/blogimg (3).png')}}" alt="Blog 2" />
        <div class="meta">
          <span>📅 18 Jul 2023</span>
          <span>💬 Comments</span>
        </div>
        <h4><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h4>
      </div>
      <!-- Blog 3 -->
      <div class="blog-card">
        <img src="{{asset('assets/images/blog/blogimg (4).png')}}" alt="Blog 3" />
        <div class="meta">
          <span>📅 18 Jul 2023</span>
          <span>💬 Comments</span>
        </div>
        <h4><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Quick and Easy Flaky Pastry for Tasty Breakfast</a></h4>
      </div>
    </div>
</section>
<div class="container">
    <h1>Business Ideas and Tips</h1>
    <div class="grids">
        <div class="blog-cards">
            <img src="{{asset('assets/images/blog/blogimg (2).png')}}" alt="Blog 1" />
            <div class="blog-infos">
                <div class="metas">
                    <span>📅 18 Jul 2023</span>
                    <span>💬 Comments</span>
                </div>
                <h3><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h3>
            </div>
        </div>
        <div class="blog-cards">
            <img src="{{asset('assets/images/blog/blogimg (3).png')}}" alt="Blog 2" />
            <div class="blog-infos">
                <div class="metas">
                    <span>📅 18 Jul 2023</span>
                    <span>💬 Comments</span>
                </div>
                <h3><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h3>
            </div>
        </div>
        <div class="blog-cards">
            <img src="{{asset('assets/images/blog/blogimg (4).png')}}" alt="Blog 3" />
            <div class="blog-infos">
                <div class="metas">
                    <span>📅 18 Jul 2023</span>
                    <span>💬 Comments</span>
                </div>
                <h3><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h3>
            </div>
        </div>
        <div class="blog-cards">
            <img src="{{asset('assets/images/blog/blogimg (2).png')}}" alt="Blog 4" />
            <div class="blog-infos">
                <div class="metas">
                    <span>📅 18 Jul 2023</span>
                    <span>💬 Comments</span>
                </div>
                <h3><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h3>
            </div>
        </div>
        <div class="blog-cards">
            <img src="{{asset('assets/images/blog/blogimg (3).png')}}" alt="Blog 5" />
            <div class="blog-infos">
                <div class="metas">
                    <span>📅 18 Jul 2023</span>
                    <span>💬 Comments</span>
                </div>
                <h3><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h3>
            </div>
        </div>
        <div class="blog-cards">
            <img src="{{asset('assets/images/blog/blogimg (4).png')}}" alt="Blog 6" />
            <div class="blog-infos">
                <div class="metas">
                    <span>📅 18 Jul 2023</span>
                    <span>💬 Comments</span>
                </div>
                <h3><a style="text-decoration: none;color: #555" href="{{ route('post_blog') }}">Never Worry About What to Do About Banking Again</a></h3>
            </div>
        </div>
    </div>

    <div class="pagination">
        <button style="font-weight: bold;" disabled>&larr; Previous</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <span>.........</span>
        <button>8</button>
        <button>9</button>
        <button>10</button>
        <button style="font-weight: bold;">Next &rarr;</button>
    </div>
</div>

<section class="sub mt-5 mb-5 pt-4 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="secure-your-us">Secure Your U.S. Business Identity — Take the First Step Now!</div>

            </div>
            <div class="col-md-6 text-center mt-2">
                <form class="form-inline" action="/action_page.php">

                    <div class="form-group">
                      <input type="password" class="form-control pwd"placeholder="company name" name="pwd">
                      <button  class="blogbutton subbtn">Start an LLC </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>


@endsection

@push('scripts')

@endpush










 
