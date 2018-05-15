
    {!! Form::open(
      array('route'=>['admin.galeria.edit',0],'method'=>'GET' )) !!}
    <div class="row">
      <div class="column">
        <div class="input=-group col-md-12">
          <label for="nombre">Imagen</label><br>
          {{Form::file('imagen','',array('class'=>'form-control','placeholder'=>'Imagen') )}}
        </div>
      </div>
      <div class="column">
        <img src="./img/abuelo.jpg" style="width:100%"  class="hover-shadow cursor " id="galim">
      </div>
      <div class="column">
        <img src="./img/actividad.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/actividad1.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/altar.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/altar2.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/apoyo.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/aprendiendo.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cefib2.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/aprendiendo.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cefib2.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/aprendiendo.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cefib2.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/concursos.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" id="galim">
      </div>
      <div class="column">
        <img src="./img/cultura.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" id="galim">
      </div>


    </div>

    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()" style="color:white;">&times;</span>
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 36</div>
          <img src="./img/abuela.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 36</div>
          <img src="./img/abuelo.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 36</div>
          <img src="./img/actividad.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 36</div>
          <img src="./img/actividad1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">5 / 36</div>
          <img src="./img/altar.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">6 / 36</div>
          <img src="./img/apoyo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">7 / 36</div>
          <img src="./img/aprendiendo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">8 / 36</div>
          <img src="./img/cefib2.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">9 / 36</div>
          <img src="./img/concursos.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">10 / 36</div>
          <img src="./img/cultura.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">11 / 36</div>
          <img src="./img/abuela.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">12 / 36</div>
          <img src="./img/abuelo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">13 / 36</div>
          <img src="./img/actividad.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">14 / 36</div>
          <img src="./img/actividad1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">15 / 36</div>
          <img src="./img/altar.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">16 / 36</div>
          <img src="./img/apoyo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">17 / 36</div>
          <img src="./img/aprendiendo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">18 / 36</div>
          <img src="./img/cefib2.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">19 / 36</div>
          <img src="./img/concursos.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">20 / 36</div>
          <img src="./img/cultura.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">21 / 36</div>
          <img src="./img/abuela.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">22 / 36</div>
          <img src="./img/abuelo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">23 / 36</div>
          <img src="./img/actividad.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">24 / 36</div>
          <img src="./img/actividad1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">25 / 36</div>
          <img src="./img/altar.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">26 / 36</div>
          <img src="./img/apoyo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">27 / 36</div>
          <img src="./img/aprendiendo.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">28 / 36</div>
          <img src="./img/cefib2.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">29 / 36</div>
          <img src="./img/concursos.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">30 / 36</div>
          <img src="./img/cultura.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">31 / 36</div>
          <img src="./img/abuela.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">32 / 36</div>
          <img src="./img/abuelo.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">33 / 36</div>
          <img src="./img/actividad.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">34 / 36</div>
          <img src="./img/actividad1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">35 / 36</div>
          <img src="./img/altar.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">36 / 36</div>
          <img src="./img/apoyo.jpg" style="width:100%">
        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>



      </div>
    </div>
      {{Form::close() }}
