    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>{{$resume[0]->title}}</h2>
            <p>{{$resume[0]->subtitle}}</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h3 class="resume-title">{{$resume[0]->summary}}</h3>
              <div class="resume-item pb-0">
                <h4>{{$summary[0]->name}}</h4>
                <p><em>{{$summary[0]->paragraph}}</em></p>
                <p>
                <ul>
                  @foreach ($summary2 as $element)
                    <li>{{$element->data}}</li>
                  @endforeach
                </ul>
                </p>
              </div>
              <h3 class="resume-title">{{$resume[0]->education}}</h3>
              @foreach ($education as $element)
                <div class="resume-item">
                  <h4>{{$element->name}}</h4>
                  <h5>{{$element->date}}</h5>
                  <p><em>{{$element->place}}</em></p>
                  <p>{{$element->paragraph}}</p>
                </div>
              @endforeach
            </div>
            <div class="col-lg-6">
              <h3 class="resume-title">{{$resume[0]->experience}}</h3>
              @foreach ($experience as $item)
                <div class="resume-item">
                  <h4>{{$item->name}}</h4>
                  <h5>{{$item->date}}</h5>
                  <p><em>{{$item->place}}</em></p>
                  <p>
                    <ul>
                      @foreach ($experience2 as $item)
                        <li>{{$item->data}}</li>
                      @endforeach
                    </ul>
                  </p>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- End Resume Section -->  