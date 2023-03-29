<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/futebol', function () {
    return "<h1>Futebol</h1>".
    "<p>O futebol,[4] também referido como futebol de campo,[5][6] futebol de onze[7][8] e, originalmente, futebol associado
    [nota 1][9][10][11][12] (em inglês: association football, football, soccer), é um desporto de equipe jogado entre dois times de 11
     jogadores cada um e um árbitro que se ocupa da correta aplicação das normas. É considerado o desporto mais popular do mundo, pois cerca
      de 270 milhões de pessoas participam das suas várias competições.[13] É jogado num campo retangular gramado, com uma baliza em cada
       lado do campo. O objetivo do jogo é deslocar uma bola através do campo para colocá-la dentro da baliza adversária, ação que se 
       denomina golo (português europeu) ou gol (português brasileiro). A equipe que marca mais gols ao término da partida é a vencedora.
       [14]</p>"."<h4> Fonte: Wikipedia</h4>";
});
Route::get('/futsal', function () {
    return "<h1>Futsal</h1>".
    "<p>Futsal é o futebol adaptado para prática em uma quadra esportiva por times de 5 jogadores. As equipes, tal como no futebol,
     têm como objetivo colocar a bola na meta adversária, definida por dois postes verticais limitados pela altura por uma trave horizontal.
    Quando tal objetivo é alcançado, diz-se que um gol foi marcado, e um ponto é adicionado à equipe que o atingiu. O goleiro, último jogador responsável por evitar o gol, é o único autorizado a segurar a bola com as mãos. A partida é ganha pela equipe que marcar o maior número de gols em 40 minutos divididos em dois tempos.
    Devido às proporções da área de jogo, o menor número de jogadores e a facilidade em que se pode jogar uma partida, o futsal já é
     considerado por muitos como o esporte mais praticado do Brasil, superando o futebol que ainda assim é o mais popular.[4]</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/basquetebol', function () {
    return "<h1>Basquetebol</h1>".
    "<p>O basquetebol ou bola ao cesto, popularmente conhecido simplesmente como "."basquete".". É um jogo desportivo coletivo inventado em
     1891 pelo professor de Educação Física canadense James Naismit, na Associação Cristã de Rapazes de Springfield, Massachusetts,
      Estados Unidos.[carece de fontes] É disputado por duas equipes de 12 jogadores (5 em campo e 7 suplentes) que têm como objetivo passar
       a bola por dentro de um cesto e evitar que a bola entre no seu cesto colocado nas extremidades da quadra, seja num ginásio ou ao ar
        livre.<br>
    Os aros que formam os cestos são colocados a uma altura de 3 metros e 5 centímetros. Os jogadores podem caminhar no campo desde que
     driblem (batam a bola contra o chão) a cada passo dado. Também é possível executar um passe, ou seja, passar a bola em direção a um
      companheiro de equipe.</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/handebol', function () {
    return "<h1>Handebol</h1>".
    "<p>Andebol (português europeu) ou handebol (português brasileiro) (do inglês handball) é uma modalidade desportiva criada pelo alemão 
    Karl Schelenz, em 1919 — embora se baseasse em outros desportos praticados desde fins do século XIX, na Europa setentrional e no Uruguai.
     O jogo inicialmente era praticado na relva em um campo similar ao do futebol com dimensões entre 90 m a 110 m de comprimento e entre 55
      m a 65 m de largura, a área de baliza (gol em português do Brasil) com raio de 13 m, a baliza com 7,32 m de largura por 2,44 m de 
      altura (a mesma usada no futebol), e era disputado por duas equipas de onze jogadores cada, sendo a bola semelhante à usada na versão
       de sete jogadores. Hoje em dia a maioria dos jogadores pratica apenas o andebol de sete.</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/futamericano', function () {
    return "<h1>Futebol americano</h1>".
    "<p>Futebol americano, conhecido nos Estados Unidos simplesmente como football ("."futebol".", em português),[1] e em alguns outros
     países de língua inglesa como gridiron football,[2] é um esporte de contato em equipe que surgiu de uma variação do rugby e que
      recompensa a velocidade, agilidade, capacidade tática e força bruta dos jogadores, que se empurram, bloqueiam e perseguem
       uns aos outros, tentando avançar uma bola em território inimigo durante uma hora de tempo de jogo, que se transforma em três
        ou quatro de tempo real. É frequente ver no futebol americano uma metáfora para a guerra, com muita violência pessoal e estratégias
         elaboradas a ter lugar dentro do campo, com jogadores pesados e fortes empurrando-se mutuamente, com cada grama do seu peso, e com
          uma linha de frente claramente definida, que se move para trás e para a frente ao longo do campo, separando as equipes de ataque e
           defesa.</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/rugby', function () {
    return "<h1>Rugby</h1>".
    "<p>O rúgbi (português brasileiro) ou râguebi (português europeu), também chamado rugby e Rugby Football,[nt 1] é um esporte coletivo de intenso contato físico. É originário da Inglaterra[9][10] em 1845, quando suas regras forma pela primeira vez escritas. O rugby, no entanto, cultiva um mito fundador que remete sua origem ao ano de 1823.

    Existem duas modalidades de rugby, o Rugby Union e o Rugby League, jogados com regras diferentes e regulados por entidades distintas,
     constituindo-se como esportes distintos. A separação entre Rugby Union e Rugby League se deu em 1895. Por sua maior difusão, o Rugby
      Union costuma ser chamado apenas de "."rugby".", "."rúgbi"." ou "."râguebi".".</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/hoquei', function () {
    return "<h1>Hóquei no gelo</h1>".
    "<p>O hóquei no gelo ou hóquei sobre o gelo é um esporte olímpico jogado num rinque de patinação entre duas equipes de cinco jogadores,
     sendo dois defensores, três atacantes e um goleiro - onde todos os jogadores e juízes calçam patins sobre o gelo.
      Os jogadores patinam no gelo e usam tacos (sticks, em inglês; bâtons, em francês) para movimentar um disco de borracha
       (em inglês, puck; em francês, rondelle). O objetivo do jogo é fazer com que o disco seja colocado na baliza do adversário.<br>
        Um gol equivale a um ponto. A equipe com o maior número de pontos no final vence a partida. O hóquei no gelo é um dos jogos mais
         rápidos do mundo - tanto pelo movimento constante e rápido dos jogadores quanto pelas tacadas disparadas pelos jogadores,
          que podem alcançar uma velocidade de mais de 160 quilômetros por hora.[1]</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/polo', function () {
    return "<h1>Polo aquático</h1>".
    "<p>O polo aquático (pré-AO 1990: pólo aquático) é um desporto coletivo, semelhante no princípio básico do handebol. As equipes devem tentar jogar a bola dentro da baliza adversária, defendida pelo guarda-redes, mas é praticado dentro de uma piscina.
    <br>
    Olympic pictogram Water polo.png
    O jogo foi oficialmente inventado no fim do século XIX, embora existam desportos ancestrais ao polo aquático praticados desde o início do século XVIII. Era conhecido como o rugby aquático e junto ao futebol, foram os primeiros desportos coletivos oficiais das Olimpíadas dos tempos modernos.
   <br> 
    As duas regras básicas oficiais são: a bola não pode ser segurada com as duas mãos juntas por qualquer jogador com exceção do guarda-redes, a bola não pode ser afundada por qualquer jogador quando atacado.
    <br>
    Diferentemente do futebol, onde não há limite de tempo, no polo aquático as equipes devem executar as suas jogadas em 30 segundos. O jogo é dividido em quatro partes de 8 minutos de tempo útil (o tempo para sempre que a bola sai dos limites da piscina, um técnico ou capitão pede tempo, ocorre alguma falta, ou um dos árbitros assinala alguma coisa com o apito).
    <br>
    Entre as melhores equipes mundiais estão a Hungria, Sérvia, Montenegro, Espanha, Rússia, Itália, Croácia, entre outras. No lado feminino, temos também grande destaque para os Estados Unidos</p>"."
     <h4> Fonte: Wikipedia</h4>";
});
Route::get('/floorball', function () {
    return "<h1>FloorBall</h1>".
    "<p>O floorball é um esporte, praticado no interior de um recinto, em que se enfrentam duas equipes de seis jogadores de campo e um guarda-redes, utilizando sticks e uma pequena bola oca.[1]
    <br>
    Os jogadores usam sticks de plástico para movimentar uma bola de plástico com 72 mm de diâmetro e com 26 orifícios. O objetivo do jogo é fazer com que a bola passe por dentro da baliza do adversário. Um gol equivale a um ponto. A equipe com o maior número de pontos no final vence a partida.
    <br>
    O floorball é um desporto rápido e fácil, praticado por muitas pessoas dos dois sexos e de variadas idades.
    <br>
    É uma modalidade desportiva muito popular em países como a Suécia, a Finlândia, a Suíça, a República Checa, a Noruega, a Dinamarca, Singapura, o Japão e Taiwan.</p>"."
     <h4> Fonte: Wikipedia</h4>";
});