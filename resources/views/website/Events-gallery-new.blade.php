@extends('website.app')


@section('content')
@push('style')
.fixed-image-size {
	width: 414px !important;
	height: 311px !important;
	object-fit: cover;  /* This ensures the image covers the area without distorting */
  }	
@endpush


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
            <div class="col-lg-4 mt-4 col-md-6 portfolio-item isotope-item filter-{{ $year }}">
                <div class="portfolio-content h-100">
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
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div> --}}
<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    @foreach($dataGroupedByYear as $year => $images)
        @foreach($images->groupBy('category.cat_name') as $categoryName => $categoryImages)
            <!-- Display only the first image of the category -->
            @php $firstImage = $categoryImages->first(); @endphp
            <div class="col-lg-4 mt-4 col-md-6 portfolio-item isotope-item filter-{{ $year }}">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('gallery_images/' . $firstImage->image) }}" 
                         class="img-fluid fixed-image-size" 
                         alt="{{ $categoryName }}">
                    <div class="portfolio-info">
                        <h4>{{ $categoryName }}</h4>
                        <p>{{ $firstImage->created_at->format('Y-m-d') }}</p>
                        <div>
                            <!-- Main trigger for the lightbox -->
                            <a href="{{ asset('gallery_images/' . $firstImage->image) }}" 
                               title="{{ $categoryName }}" 
                               data-gallery="portfolio-gallery-{{ $year }}" 
                               class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                            <!-- Add hidden links for all other images in this category -->
                            @foreach($categoryImages->skip(1) as $image)
                                <a href="{{ asset('gallery_images/' . $image->image) }}" 
                                   title="{{ $categoryName }}" 
                                   data-gallery="portfolio-gallery-{{ $year }}" 
                                   class="glightbox d-none"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div>



				
				<!-- End Portfolio Item -->
	
				
	
				
	
				
	
				
	
				
				
	
				
	
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
<script>
	document.addEventListener("DOMContentLoaded", function () {
    const lightbox = GLightbox({
        selector: '.glightbox',
    });
});

// document.addEventListener('DOMContentLoaded', () => {
//     const lightbox = GLightbox({
//         selector: '.glightbox', // Ensure this matches your link class
//         touchNavigation: true,
//         loop: true, // Optional: Loop through images
//         zoomable: true, // Optional: Enable zoom
//     });
// });
</script>
@endpush
