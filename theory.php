<?php
require_once "config.php";
$pageName = "Теория";
include ROOT_DIR."/admin/header.php";
?>


<!--ОСНОВНОЙ КОНТЕНТ--> 

  <table 
  border="1"
  bgcolor="#e6e6fa" 
  cellpadding="10" 
  style="width:100%;  border-radius:5px;">  
    <tr>	
      <td 
	  rowspan="2" 
	  style="width:80%"> 
	   <h2>Теория</h2>	   
        <p style="text-indent:20px">
		Здесь будут представлены основные теоретические материалы. </p>
 
        <p style="text-indent:20px">Что такое html — если посмотреть, что пишет Википедия - (HyperText Markup Language) язык гипертекстовой разметки документов. Большинство страниц в интернете содержат разметку страницы на этом языке. Данный язык интерпретируется браузерами, полученный в результате форматированный текст отображается на вашем мониторе компьютера или мобильного устройства.

Данный язык по своей сути очень легкий и доступный в обучении. Выучить и понять его основы может каждый желающий человек. Для использования такого языка нужно знать и применять дескрипторы, которые еще называются тегами. Именно с помощью тегов и создается документ.

Из чего должна состоять структура документа, какие теги должны присутствовать. Давайте разберем все на одном маленьком примере. Я написал некоторый текст в MS Office и показал его вот на этом скриншоте.

Основы HTML

Чтобы отобразить данный текст в браузере так же само, как он был написан в документе, для этого нужно к нему добавить разметку страницу, которая включает в себя некоторые теги. Для начала посмотрите на них, дальше я опишу каждый, кто за что отвечает.


<p>Из каких тегов состоит любой html документ, что в него входит и где все это нужно прописать.</p>
</body>
</html>

<html>
<body>

Любой код состоит из символов, которые помещаются в угловые скобки. Все это называется элементами. Все элементы, как правило состоят из двух тегов, открывающего и закрывающего. Советую вам изначально внимательно смотреть за тегами, если вы пропустите один из них и не закроете его, вам нужно будет пересматривать большие части кода, чтоб найти ошибку.

Были случаи, когда на это уходил не один день, человек обращается и просит ему помочь, он не может найти у себя ошибку на сайте, поэтому всегда смотрите очень внимательно, что и где вы пишите. Давайте теперь на данном примере посмотрим на каждый элемент из кода, что в нем написано, что это означает и что получается в итоге.

Большинство тегов парные, которые включают в себя открывающийся тег и закрывающийся. Кроме таких тегов, существуют еще и одиночные теги. Теги могут идти вместе с другими, таким образом вкладываются друг в друга. Например отобразить текст сразу жирным и курсивом.

<strong><i>Текст</strong></i>
1
<strong><i>Текст</strong></i>
к оглавлению ^

Структура html документа

Напомню еще раз раз, нужно следовать правилам, которые присутствуют в документе. Именно так браузер понимает что находится на странице, ее последовательность, содержание и так далее.

Тег — это компонент, который говорит веб браузеру выполнить ту или иную задачу. Например присутствие абзаца, таблицы, формы или изображения.

Атрибут — изменяет тег. Например можно абзац выровнять по центру или по правому краю, задать так же расположение изображения на странице и так далее.

ВСЕГДА закрывайте теги, если вы его отрыли, обязательно нужно его закрыть. В противном случае будет ошибка и ваш документ будет некорректно отображаться на странице. Так же существуют исключения, про них не следует забывать.

Четко нужно понимать, что существует заголовок документа и его тело. Заголовок это все, что состоит в теге <head>. Тело документа (<body>), в теле документа состоит все содержимое страницы. Если возникает необходимость оставить участок кода для себя, тем самым заключить данные теги в комментарии, для этого используется тег <!>. Все, что находится внутри такого тега, служит в роли комментария и не воспринимается браузерами.

к оглавлению ^

<html>
Начнем с самого первого. В начале документа я открыл тег <html> и в конце я его закрыл </html>. Данный код присутствует абсолютно в каждом документе, он говорит браузеру, что все, помещенное между этими тегами, является HTML кодом. Является корнем самого документа, все, что в дальнейшем присутствует за этим тегом, уже не включается в документ и не воспринимается браузерами. В самом начале документа тег открывается и в самом конце он обязательно должен быть закрытым.

к оглавлению ^

<head>
Весь раздел этого тега содержит в себе всю техническую информацию документа. Как и предыдущий тег, head так же должен быть открыт и в конце закрыт. В такую информацию относится заголовок страницы, ее описание, ключевые слова для поисковых систем и кодировку. Про кодировку немного ниже.

<head> Содержание </head>
1
<head> Содержание </head>
к оглавлению ^

<Title>
Данный тег включается в head, он должен быть написан внутри тега head. Данный тег title является обязательным и должен присутствовать в каждом html документе. В добавок к этому он отображается как заголовок окна браузера. Длинна такого заголовка не должна превышать 60 символов. В тексте такого заголовка должна содержаться максимально полная информация, которая характеризует содержание страницы.

Если вы написали в заголовке "Привет Мир", именно эта информация должна отображаться на странице и никакой другой. Не стоит обманывать людей и поисковые машины, они этого не любят, тем самым вы делаете хуже себе. Информация, которая содержится в этом теге, должна соответствовать содержанию вашей страницы.

к оглавлению ^

<meta>
После обязательного тега title, идет необязательный, но так же не мало важный тег meta. Данный тег является одинарным. С помощью данного тега задается описание для страницы (description) и ее ключевые слова (keywords).

<meta name="keywords" content="Ключевые слова задаются через запятую">
<meta name="description" content="Описание страницы не больше двух предложений">
1
2
<meta name="keywords" content="Ключевые слова задаются через запятую">
<meta name="description" content="Описание страницы не больше двух предложений">
Кроме этого, в теге meta могут содержаться данные про автора страницы и другие свойства метаданных. Можно запретить индексацию страницы в целом для поисковых машин. Поставить автоматическое обновление страницы через 20 секунд или через 5 секунд с последующим переходом на другую страницу.

<meta name="robots" content="index, follow">
<meta http-equiv="refresh" content="20">
<meta http-equiv="refresh" content="5; url=http://nesmelov.ru/">

<meta name="robots" content="index, follow">
<meta http-equiv="refresh" content="20">
<meta http-equiv="refresh" content="5; url=http://nesmelov.ru/">
Таких элементов meta может быть несколько, так как они могут нести абсолютно разную информацию. Остальные пользователи, когда открывают страницу в браузере, не видят все ваши описания, все это остается скрытым от глаз.

к оглавлению ^

<style>
Тег style так же можно использовать для задания стилей на странице. Если вы используете много разных стилей css, в таком случае желательно задавать их в отдельном файле. Если нужно указать несколько из них, все это можно задать прямо в html документе.

<style type="text/css">
.base {
width: 100px;
background-color: #000;
height: 150px;
color: #fff;

<style type="text/css">
.base {
width: 100px;
background-color: #000;
height: 150px;
color: #fff;
}
Или добавить стили конкретно к одному тегу, для этого внутри самого тега нужно добавить элемент style. Данный тег нужно использовать внутри контейнера <head>, который задает стили для страницы. Можно использовать несколько таких тегов, ошибкой это не будет.

<h3 style="color: #fff; background: #3ee33e; margin: 5px 10px 15px 20px;">
1
<h3 style="color: #fff; background: #3ee33e; margin: 5px 10px 15px 20px;">
к оглавлению ^

<link>
Немного похожий с предыдущим тегом, с помощью тега link можно задать стили для документа, которые находятся в другом файле. Другими словами, можно подключить к существующему документу полную таблицу стилей css, которая состоит из множества свойств. Тем самым вы уменьшаете размер документа, который в итоге будет быстрее грузиться и открываться на компьютере или мобильном устройстве при слабой скорости интернета.

Подключать можно больше одного файла, тут ограничений нет. Закрывать такой тег не нужно. Если все сделать правильно, к вашему документу будут подгружаться конкретные стили из отдельного файла. Данный тег можно добавить в основы html и не забывать про его существование. В итоге получается такая картинка:

<link href="css/style-lg.css" rel="stylesheet">
<link href="css/style-md.css" rel="stylesheet">
<link href="css/style-sm.css" rel="stylesheet">
1
2
3
<link href="css/style-lg.css" rel="stylesheet">
<link href="css/style-md.css" rel="stylesheet">
<link href="css/style-sm.css" rel="stylesheet">
к оглавлению ^

<script>
С помощью тега script к документу можно подключить разные сценарии (скрипты). Присутствие закрывающего тега обязательно. Сам скрипт может располагаться в начале документа, внутри и в конце.

<script type="text/javascript" href="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
1
<script type="text/javascript" href="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
к оглавлению ^

<body>
Говорит браузеру, что все помещенное между этими тегами, должно отобразиться в окне вашего браузера. Вот основные теги, которые  могут присутствовать абсолютно в каждом документе. Тег body служит в качестве основного тела страницы, который включает в себя все ее содержимое. Данный тег желательно открывать и в конце документа не забыть закрывать.

к оглавлению ^

Заголовки страницы h1 h2 h3
Яндекс.Директ
Изучение языка HTML с нуля
praktikum.yandex.ru
 
Поехали дальше, мы видим тег <h1>, который так же открывается и закрывается. Данный тег обозначает основной заголовок текста, в большинстве случаев под заголовком H1 идет название страницы. На самом деле данных заголовком всего шесть. <h1> <h2> <h3> <h4> <h5> <h6>. Их так же используют в SEO, но это уже немного другая тема. Я обязательно выделю для этого одну статью и дам подробное описание для них, подписывайтесь на обновления блога, чтоб ничего не пропустить.

Наличие таких заголовком в статье сыграет важную роль при продвижении страницы. Кроме этого, ихнее использование дает вам четкую структуру страницы, ее заголовок, подзаголовки, выделения, подпункты и так далее. Всегда пользуйтесь ними и применяйте на практике. На многих CMS, например таких как WordPress, при написании текста, можно заметить «заголовок 1», "заголовок 2", "заголовок 3" и так далее. Именно они и отвечают за h1, h2 и h3.

к оглавлению ^

<p>
Если вы пишите основной текст с нового абзаца, вы пишите тег <p> в начале и закрываете его в конце </p>. Обозначение абзаца в html равносильно создание нового абзаца в документе MS Word. Больше ничего нового в документ я не добавлял. Но, это еще далеко не все, что должно присутствовать в html документе. Посмотрим на еще один пример, описание будет немного позже.

<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>HTML документ</title>
   </head>
   <body>
      <p>
         <b>
            Этот текст будет полужирным, 
            <i>а этот - ещё и курсивным</i>
         </b>
      </p>
   </body>
</html>

11
12
13
14
15
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>HTML документ</title>
   </head>
   <body>
      <p>
         <b>
            Этот текст будет полужирным, 
            <i>а этот - ещё и курсивным</i>
         </b>
      </p>
   </body>
</html>
к оглавлению ^

Основные элементы Head и Title
Основы HTML для начинающих

В каждом документе присутствует элемент head и Title. Первый из них <head>, который идет сразу после первого тега <html>. В данном теге идет вся информация о странице, в нем так же заключается элемент <title>. Title –информация о заголовке странице, другими словами название страницы, ее имя. Именно в тайтл вы указываете правильное название страницы, по которому пользователь будет искать вас через поисковую систему, очень важный момент. Оба элемента должны быть открыты и так же закрыты. Закрывается каждый элемент знаком «/». В итоге получается вот такая картинка.

<html>
<head>
<title>Заголовок&amp</title>
</head>
<body>\Содержание страницы</body>
</head>
</html>

<html>
<head>
<title>Заголовок&amp</title>
</head>
<body>\Содержание страницы</body>
</head>
</html>
Как видите, ничего сложного нет. Перед вами самые основные теги, которые должны присутствовать в каждом html документа. Не забывайте закрывать каждый из них, иначе браузер не сможет воспринять полноценную картину кода. Это нужно знать и помнить всегда. Дальше вы уже начинаете вставлять текст, картинки, видео и так далее. Но это уже будет в других статьях.

к оглавлению ^

Редактор Notepad++
Основные теги html

Для работы с кодом используйте программку Notepad++. Она бесплатная, найти ее в интернете не составит труда. Очень удобная для восприятия любого кода, так же удобно показывается открывающийся тег и закрывающийся. Поддерживаем синтаксис более 40 языков программирования. Как раз то, что нужно для изучения основ html.

Notepad превышает во всех смыслах обычный блокнот. Для максимального удобства, простоты и учебы данный редактор изначально необходимо установить на компьютер. Самое основное преимущество и удобство, редактор Notepad++ показывает подсказки при написании кода, что делает вашу работу быстрее и качественней в разы.



Элемент DOCTYPE

В каждом документе так же должен быть указан вот такой элемента doctype. Для чего он нужен и что в нем должно быть. Обычно народ сильно не увлекается этими строчками, копируют себе в документы и работают спокойно. Данные элементы говорят браузеру, какая версия html используется в документе, какое описание страницы, какая используется кодировка, какие ключевые слова включены, кто автор и как называется страница.

Ставятся они обычно в самом начале. Существует несколько вариантов и все они отличаются друг от друга, я напишу один пример, который используется чаще всего. Данную заготовку можно использовать как готовый шаблон. Далее будет понятное описание каждой строчки, проблем с этим быть не должно.

<!DOCTYPE html "-//w3c//dtd XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=windows-1251" />
<meta name="Nesmelov.ru" content="Nesmelov Evgeniy" />
<meta name="description" content="полное описание данной страницы, о чем идет речь. 1-2 предложения" />
<meta name="keywords" content="джинсы, купить джинсы, зауженные джинсы, крутые джинсы, мужские крутые джинсы" />
<title>Заголовок данной страницы</title>
</head>
<body>
 
</body>
</html>

<!DOCTYPE html "-//w3c//dtd XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=windows-1251" />
<meta name="Nesmelov.ru" content="Nesmelov Evgeniy" />
<meta name="description" content="полное описание данной страницы, о чем идет речь. 1-2 предложения" />
<meta name="keywords" content="джинсы, купить джинсы, зауженные джинсы, крутые джинсы, мужские крутые джинсы" />
<title>Заголовок данной страницы</title>
</head>
<body>
 
</body>
</html>
к оглавлению ^

Информация для чайников
Коротко на понятном языке про основы html: Данная строчка говорит браузеру о том, что данный документ является XHTML версия 1.0, используется английский язык и вся эта каша расположена по данному адресу. Далее в теге meta указываем кодировку, которая используется. Чаще всего используется виндовс 1251.

Далее часто различные конторы по созданию шаблонов, скриптов и так далее...указывают свое название организации или просто имя фамилию и отчество. Не обязательный meta тег, но встретить его можно часто.

Description — затрагивается тема по SEO, один из трех главных тегов, который должен присутствовать абсолютно в каждом документе, данный тег указывает описание страницы. Что написано на этой странице, короткое описание, не больше двух предложений. Тег keywords, так же затрагивается тема по SEO, данный тег является обязательным. В нем пишутся ключевые слова, по которым пользователи интернета будут находить вас через поисковые системы.

В теге title идет название самого документа, его заголовок, который мы видим в браузере. Наверное самый важный тег во всем документе, который больше всего влияет на продвижение страницы. В статье по добавлению и оформлению текста html идет описание данного тега более детально.

Что необходимо запомнить с данного урока про основы html:

Почти все теги открываются и закрываются;
Начинается документ с тега <html>;
Наличие тега <head>;
Наличие тега <body>;
Четкая структура html документа.
Все главные страницы всегда должны называться словом index. Так принято и так все привыкли, без разницы какое будет расширение у файла, это может быть и html и php. Называется он всегда только так.
Язык гипертекстовой разметки, базовые элементы и структура. Все это и многое другое я постараюсь описать на своем блоге. В первую очередь для новичков будет написана полезная информация, предоставлен пример кода и возможность скачать сам пример вместе с готовой страницей.




 
<!--САЙДБАР-->
 
      <td bgcolor="#e6e6fa"> 
       <h3>Меню</h3>	   
         <p>		 
		 <a href="">
		 <img src="http://trueimages.ru/img/31/ab/4dcb087c2ae4305edcd15171696.jpg">
		 <span style="margin-left:5px;">Главная</span></a>
		 </p> 
         <p>
		 <a href="">
		 <img src="http://trueimages.ru/img/00/06/f4fffdb5.png">
		 <span style="margin-left:5px;">Cтраница 1</span;></a>
		 </p> 
         <p>
		 <a href="">
		 <img src="http://trueimages.ru/img/31/ab/4dcb087c2ae4305edcd15171696.jpg">
		 <span style="margin-left:5px;">Страница 2</span></a>
		 </p>		 
      </td> 
    </tr>	
    <tr>	
      <td 
	  bgcolor="#e6e6fa" 
	  align="center"> 
       
  </table>
 </body> 
 </html>