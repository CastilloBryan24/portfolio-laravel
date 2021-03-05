    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>{{$portfolio[0]->title}}</h2>
            <p>{{$portfolio[0]->paragraph}}</p>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                @foreach ($navigation as $element)
                  <li data-filter="{{$element->filter}}" class="{{$element->class}}">{{$element->name}}</li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($image as $element)
            <div class="col-lg-4 col-md-6 portfolio-item {{$element->filter}}">
              <div class="portfolio-wrap">
                <img src="{{asset("storage/img/" .$element->picture)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$element->name1}}</h4>
                  <p>{{$element->name2}}</p>
                  <div class="portfolio-links">
                    <a href="{{asset("storage/img/" .$element->picture2)}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach            
          </div>
        </div>
      </section><!-- End Portfolio Section -->
  