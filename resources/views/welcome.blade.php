<!DOCTYPE html>
<html>
  <head>
    <title>Your Name - Resume</title>
    <link rel="stylesheet" href="{{url('css/welcomeStyle.css')}}" />
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="full-name">
          <span class="first-name">{{$data['nameFirst']}}</span>
          <span class="last-name">{{$data['nameLast']}}</span>

          <img class="profilePic" src="{{url('images/profile.png')}}" alt="" />
        </div>
        <div class="contact-info">
          <span class="email">Email: </span>
          <span class="email-val">{{$data['email']}}</span>
          <span class="separator"></span>
          <span class="phone">Phone: </span>
          <span class="phone-val">{{$data['contact']}}</span>
        </div>

        <div class="about">
          <span class="position">{{$data['position']}}</span>
          <span class="desc">
          {{$data['positionDescription']}}
          </span>
        </div>
      </header>

      <div class="details">
        <div class="section">
          <div class="section__title">Experience</div>
          <div class="section__list">
            <div class="section__list-item">
              <div class="left">
                <div class="name">{{$data['experienceCompanyName']}}</div>
                <div class="addr">{{$data['experienceCompanyAddress']}}</div>
                <div class="duration">{{$data['experienceCompanyDuration']}}</div>
              </div>

              <div class="right">
                <div class="name">{{$data['experienceCompanyPosition']}}</div>
                <div class="desc">{{$data['experienceCompanyPositionDescription']}}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section__title">Education</div>
          <div class="section__list">
            <div class="section__list-item">
              <div class="left">
                <div class="level">Collage</div>
                <div class="name">{{$data['educationSchoolName']}}</div>
                <div class="addr">{{$data['educationSchoolAddress']}}</div>
                <div class="duration">{{$data['educationSchoolDuration']}}</div>
              </div>
              <div class="right">
                <div class="level">Course</div>
                <div class="name">{{$data['educationSchoolCourse']}}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section__title">Projects</div>
          <div class="section__list">
            <div class="section__list-item">
              <div class="name">{{$data['projectName']}}</div>
              <div class="text">{{$data['educationPosition']}}</div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section__title">Skills</div>
          <div class="skills">
            <div class="skills__item">
              <div class="left"><div class="name">React</div></div>
              <div class="right">
                <input id="ck1" type="checkbox" checked />

                <label for="ck1"></label>
                <input id="ck2" type="checkbox" checked />

                <label for="ck2"></label>
                <input id="ck3" type="checkbox" checked />

                <label for="ck3"></label>
                <input id="ck4" type="checkbox" checked />
                <label for="ck4"></label>
                <input id="ck5" type="checkbox" />
                <label for="ck5"></label>
              </div>
            </div>
          </div>
          <div class="skills__item">
            <div class="left"><div class="name">HTML</div></div>
            <div class="right">
              <input id="ck1" type="checkbox" checked />

              <label for="ck1"></label>
              <input id="ck2" type="checkbox" checked />

              <label for="ck2"></label>
              <input id="ck3" type="checkbox" checked />

              <label for="ck3"></label>
              <input id="ck4" type="checkbox" checked />
              <label for="ck4"></label>
              <input id="ck5" type="checkbox" checked />
              <label for="ck5"></label>
            </div>
          </div>

          <div class="skills__item">
            <div class="left"><div class="name">JavaScript</div></div>
            <div class="right">
              <input id="ck1" type="checkbox" checked />

              <label for="ck1"></label>
              <input id="ck2" type="checkbox" checked />

              <label for="ck2"></label>
              <input id="ck3" type="checkbox" checked />

              <label for="ck3"></label>
              <input id="ck4" type="checkbox" checked />
              <label for="ck4"></label>
              <input id="ck5" type="checkbox" />
              <label for="ck5"></label>
            </div>
          </div>

          <div class="skills__item">
            <div class="left"><div class="name">CSS</div></div>
            <div class="right">
              <input id="ck1" type="checkbox" checked />

              <label for="ck1"></label>
              <input id="ck2" type="checkbox" checked />

              <label for="ck2"></label>
              <input id="ck3" type="checkbox" checked />

              <label for="ck3"></label>
              <input id="ck4" type="checkbox" checked />
              <label for="ck4"></label>
              <input id="ck5" type="checkbox" />
              <label for="ck5"></label>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section__title">Interests</div>
          <div class="section__list">
            <div class="section__list-item">
            {{$data['interest']}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
