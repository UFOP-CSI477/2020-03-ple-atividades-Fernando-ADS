@extends('principal')

@section('conteudo')

  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block" style="width:100%; height:579px;" src="https://www.portal.adusc.org/wp-content/uploads/2020/06/doac%CC%A7a%CC%83o-de-sangue-Foto-Camila-Souza-GOVBA-1200x720-1.jpg" alt="Primeiro slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" style="width:100%; height:579px;" src="https://www.unidos.com.br/wp-content/uploads/2019/06/Doa%C3%A7%C3%A3o-de-sangue-saiba-como-doar-e-quais-s%C3%A3o-os-benef%C3%ADcios-Blog-Lab-Unidos.png" alt="Segundo slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" style="width:100%; height:579px;" src="https://www.marabraz.com.br/blog/wp-content/uploads/2015/11/imagem-doe-sangue.jpg" alt="Terceiro slide">
      </div>
      <div class="carousel-item">
        <img class="d-block" style="width:100%; height:579px;" src="https://www.al.sp.gov.br/repositorio/noticia/N-05-2020/fg248733.jpg" alt="Quarto slide">
      </div>
      <div class="carousel-item">
        <img class"d-block" style="width:100%; height:579px;" src="https://harpersbazaar.uol.com.br/wp-content/uploads/2020/03/doe-sangue.jpg" alt="Quinto slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


@endsection
