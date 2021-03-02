    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>{{$about[0]->title}}</h2>
            <p>{{$about[0]->subtitle}}</p>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <img src="{{asset("img/" .$about[0]->picture)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3>{{$about[0]->job}}</h3>
              <p class="font-italic">{{$about[0]->subtitle2}}</p>
              <div class="row">
                @foreach ($info as $element)
                  <div class="col-lg-6">
                    <ul>
                      <li><i class="{{$element->icone}}"></i> <strong>{{$element->data1}}</strong> {{$element->data2}}</li>
                    </ul>
                  </div>
                  @if ($loop->iteration %2 == 0)
                    </div>
                    <div class="row">
                  @endif
                @endforeach
              </div>
              <p>{{$about[0]->paragraph}}</p>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->
  
      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>{{$skill[0]->title}}</h2>
            <p>{{$skill[0]->paragraph}}</p>
          </div>
          <div class="row skills-content">
            @foreach ($progress as $element)
              <div class="col-lg-6">
                <div class="progress">
                  <span class="skill">{{$element->skills}} <i class="val">{{$element->pourcentage}}%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$element->aria}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              @if ($loop->iteration %2 == 0)
                </div>
                <div class="row skills-content">
              @endif
            @endforeach
          </div>
        </div>
      </section><!-- End Skills Section -->