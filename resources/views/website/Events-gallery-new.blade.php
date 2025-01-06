@extends('website.app')


@section('content')


    <section class="view-courses-bg ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <h2 class="text-center" style="margin-top: 70px;">Gallery</h2>
                        </div>
                    </div>
                </div>

            </div>

    </section>
	{{-- <main class="main"> --}}

		<!-- Portfolio Section -->
		<section id="portfolio" class="portfolio section" style="margin-top: -7% !important;">
	
		  <div class="container">
	
			<div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
	
			  <div class="row align-items-center">
				<div class="col-lg-7 portfolio-info">
				  {{-- <h3>Hey, I'm Johan Stanworth</h3>
				  <p>Voluptatem sit minima et dignissimos earum fuga vel nulla quidem aut quam</p> --}}
				</div>


				{{-- <div class="col-lg-5 text-center text-lg-end">
				  <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-app">App</li>
					<li data-filter=".filter-product">Product</li>
					<li data-filter=".filter-branding">Branding</li>
					<li data-filter=".filter-books">Books</li>
				  </ul><!-- End Portfolio Filters -->
				</div> --}}

				<div class="col-lg-5 text-center text-lg-end">
					<ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
						<li data-filter="*" class="filter-active">All</li>
						@foreach($dataGroupedByYear as $year => $images)
							<li data-filter=".filter-{{ $year }}">{{ $year }}</li>
						@endforeach
					</ul><!-- End Portfolio Filters -->
				</div>



			  </div>
	
			  <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 1344px;">

				{{-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					@foreach($dataGroupedByYear as $year => $images)
						@foreach($images as $image)
							<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $year }}" style="position: absolute; left: 440px; top: 0px;">
								<div class="portfolio-content h-100">
									<img src="{{ asset('gallery_images/' . $image->image) }}" class="img-fluid" alt="">
									<div class="portfolio-info">
										<h4>{{ $image->category->cat_name }}</h4>
										<p>{{ $image->created_at->format('Y-m-d') }}</p>
										<div>
											<a href="{{ asset('gallery_images/' . $image->image) }}" title="{{ $image->category->cat_name }}" data-gallery="portfolio-gallery-{{ $year }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
											<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					@endforeach
				</div> --}}

					


<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    @foreach($dataGroupedByYear as $year => $images)
        @foreach($images as $image)
            <div class="col-lg-4 mt-4 col-md-6 portfolio-item isotope-item filter-{{ $year }}">
                <div class="portfolio-content h-100">
                    <!-- Add a class to the image for custom size styling -->
                    <img src="{{ asset('gallery_images/' . $image->image) }}" 
                         class="img-fluid fixed-image-size" 
                         alt="">
                    <div class="portfolio-info">
                        <h4>{{ $image->category->cat_name }}</h4>
                        <p>{{ $image->created_at->format('Y-m-d') }}</p>
                        <div>
                            <a href="{{ asset('gallery_images/' . $image->image) }}" 
                               title="{{ $image->category->cat_name }}" 
                               data-gallery="portfolio-gallery-{{ $year }}" 
                               class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            {{-- <a href="portfolio-details.html" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div>

				
				<!-- End Portfolio Item -->
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product" style="position: absolute; left: 440px; top: 0px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Product 1</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding" style="position: absolute; left: 880px; top: 0px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Branding 1</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books" style="position: absolute; left: 0px; top: 336px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Books 1</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div> --}}
				<!-- End Portfolio Item -->
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app" style="position: absolute; left: 440px; top: 336px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>App 2</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product" style="position: absolute; left: 880px; top: 336px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Product 2</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding" style="position: absolute; left: 0px; top: 672px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Branding 2</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books" style="position: absolute; left: 440px; top: 672px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Books 2</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app" style="position: absolute; left: 880px; top: 672px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>App 3</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product" style="position: absolute; left: 0px; top: 1008px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Product 3</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding" style="position: absolute; left: 440px; top: 1008px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Branding 3</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
				{{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books" style="position: absolute; left: 880px; top: 1008px;">
				  <div class="portfolio-content h-100">
					<img src="gallery/assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
					<div class="portfolio-info">
					  <h4>Books 3</h4>
					  <p>Lorem ipsum</p>
					  <div>
						<a href="gallery/assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
						<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
					  </div>
					</div>
				  </div>
				</div><!-- End Portfolio Item --> --}}
	
			  </div><!-- End Portfolio Container -->
	
			</div>
	
		  </div>
	
		</section><!-- /Portfolio Section -->

		
	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	  {{-- </main> --}}
    {{-- </div> --}}

	
@endsection

@push('scripts')

@endpush
