@extends('front.layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/crea.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Our Services</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Services</span>
                    <h2 class="mb-3">Our Latest Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Design Creation</h3>
                            <p>We put our technical know-how and our creativity at your service in order to achieve your
                                objectives and optimize your costs. We provide a complete service, from design, printing to
                                delivery of all your documents.
                                We can also deliver your document digitally or, of course, print directly from your own
                                files…</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Offset Printing</h3>
                            <p>produced on a printing press using printing plates and wet ink. This type of print takes a
                                little longer to produce as there is more setup time and the final product must dry before
                                finishing can take place. At the same time, offset printing traditionally produces the
                                highest quality available on the widest variety of media and offers the greatest degree of
                                control over color. Additionally, offset printing is the most economical choice when
                                producing a large number of prints from a few originals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Digital Printing</h3>
                            <p>used to be called "copy", but this term is now obsolete. Today, instead of copying a paper
                                original, the vast majority of digital printing is output directly from electronic files.
                                Digital printing is the fastest way to produce small print runs, especially when there are a
                                lot of originals. The quality level of digital printing is now extremely close to offset
                                printing. Although digital printing works well on most media today, there are still papers
                                and jobs where offset printing works better. There are also stocks and jobs where digital
                                printing will work as well or better than offset printing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Packaging</h3>
                            <p>Offset printing is typically used for presentation boxes, brochures, posters, and displays;
                                Flexographic printing is typically used for shipping packaging, folding boxes, stackable
                                display boxes and wrapping papers.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
