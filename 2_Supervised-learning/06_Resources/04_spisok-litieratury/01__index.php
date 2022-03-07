<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="keywords" content="Машинное обучение (курс лекций, К.В.Воронцов),CRISP-DM,Data Mining,EM-алгоритм,Python,RVM,Аддитивная регуляризация тематических моделей,Алгоритм AdaBoost,Алгоритм AnyBoost,Алгоритм LOWESS,Байесовский информационный критерий" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="search" type="application/opensearchdescription+xml" href="/wiki/opensearch_desc.php" title="MachineLearning (Русский)" />
		<link title="Creative Commons" type="application/rdf+xml" href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29&amp;action=creativecommons" rel="meta" />
		<link rel="copyright" href="http://creativecommons.org/licenses/by-sa/3.0/" />
<link rel="alternate" type="application/rss+xml" title="MachineLearning — RSS-лента" href="http://machinelearning.ru/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Recentchanges&amp;feed=rss" />
<link rel="alternate" type="application/atom+xml" title="MachineLearning - Atom лента" href="http://machinelearning.ru/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Recentchanges&amp;feed=atom" />
		<title>Машинное обучение (курс лекций, К.В.Воронцов)</title>
		<style type="text/css" media="screen, projection">/*<![CDATA[*/
			@import "/wiki/skins/common/shared.css?116";
			@import "/wiki/skins/monobook/main.css?116";
		/*]]>*/</style>
		<link rel="stylesheet" type="text/css" media="print" href="/wiki/skins/common/commonPrint.css?116" />
		<!--[if lt IE 5.5000]><style type="text/css">@import "/wiki/skins/monobook/IE50Fixes.css?116";</style><![endif]-->
		<!--[if IE 5.5000]><style type="text/css">@import "/wiki/skins/monobook/IE55Fixes.css?116";</style><![endif]-->
		<!--[if IE 6]><style type="text/css">@import "/wiki/skins/monobook/IE60Fixes.css?116";</style><![endif]-->
		<!--[if IE 7]><style type="text/css">@import "/wiki/skins/monobook/IE70Fixes.css?116";</style><![endif]-->
		<!--[if lt IE 7]><script type="text/javascript" src="/wiki/skins/common/IEFixes.js?116"></script>
		<meta http-equiv="imagetoolbar" content="no" /><![endif]-->
		
		<script type= "text/javascript">/*<![CDATA[*/
var skin = "monobook";
var stylepath = "/wiki/skins";
var wgArticlePath = "/wiki/index.php?title=$1";
var wgScriptPath = "/wiki";
var wgScript = "/wiki/index.php";
var wgServer = "http://machinelearning.ru";
var wgCanonicalNamespace = "";
var wgCanonicalSpecialPageName = false;
var wgNamespaceNumber = 0;
var wgPageName = "Машинное_обучение_(курс_лекций,_К.В.Воронцов)";
var wgTitle = "Машинное обучение (курс лекций, К.В.Воронцов)";
var wgAction = "view";
var wgRestrictionEdit = [];
var wgRestrictionMove = [];
var wgArticleId = "280";
var wgIsArticle = true;
var wgUserName = null;
var wgUserGroups = null;
var wgUserLanguage = "ru";
var wgContentLanguage = "ru";
var wgBreakFrames = false;
var wgCurRevisionId = "103436";
var wgVersion = "1.12.0";
var wgEnableAPI = true;
var wgEnableWriteAPI = false;
/*]]>*/</script>
                
		<script type="text/javascript" src="/wiki/skins/common/wikibits.js?116"><!-- wikibits js --></script>
		<!-- Head Scripts -->
		<script type="text/javascript" src="/wiki/skins/common/ajax.js?116"></script>
		<script type="text/javascript" src="/wiki/index.php?title=-&amp;action=raw&amp;gen=js&amp;useskin=monobook"><!-- site js --></script>
		<style type="text/css">/*<![CDATA[*/
@import "/wiki/index.php?title=MediaWiki:Common.css&usemsgcache=yes&action=raw&ctype=text/css&smaxage=18000";
@import "/wiki/index.php?title=MediaWiki:Monobook.css&usemsgcache=yes&action=raw&ctype=text/css&smaxage=18000";
@import "/wiki/index.php?title=-&action=raw&gen=css&maxage=18000";
/*]]>*/</style>
	</head>
<body class="mediawiki ns-0 ltr page-Машинное_обучение_курс_лекций_К_В_Воронцов">
	<div id="globalWrapper">
		<div id="column-content">
	<div id="content">
		<a name="top" id="top"></a>
				<h1 class="firstHeading">Машинное обучение (курс лекций, К.В.Воронцов)</h1>
		<div id="bodyContent">
			<h3 id="siteSub">Материал из MachineLearning.</h3>
			<div id="contentSub"></div>
									<div id="jump-to-nav">Перейти к: <a href="#column-one">навигация</a>, <a href="#searchInput">поиск</a></div>			<!-- start content -->
			<table align="right" cellspacing="0" cellpadding="0" style="clear:right; margin-bottom: .5em; float: right; padding: .5em 0 .8em 1.4em; background: none;" width="&#123;&#123;&#123;toc_width}}}">
<tr>
<td> <table id="toc" class="toc" summary="Содержание"><tr><td><div id="toctitle"><h2>Содержание</h2></div>
<ul>
<li class="toclevel-1"><a href="#.D0.97.D0.B0.D0.BC.D0.B5.D1.87.D0.B0.D0.BD.D0.B8.D1.8F_.D0.B4.D0.BB.D1.8F_.D1.81.D1.82.D1.83.D0.B4.D0.B5.D0.BD.D1.82.D0.BE.D0.B2"><span class="tocnumber">1</span> <span class="toctext">Замечания для студентов</span></a></li>
<li class="toclevel-1"><a href="#.D0.A1.D0.B5.D0.BC.D0.B5.D1.81.D1.82.D1.80_1._.D0.9C.D0.B0.D1.82.D0.B5.D0.BC.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BE.D1.81.D0.BD.D0.BE.D0.B2.D1.8B_.D0.BC.D0.B0.D1.88.D0.B8.D0.BD.D0.BD.D0.BE.D0.B3.D0.BE_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D1.8F"><span class="tocnumber">2</span> <span class="toctext">Семестр 1. Математические основы машинного обучения</span></a>
<ul>
<li class="toclevel-2"><a href="#.D0.9E.D1.81.D0.BD.D0.BE.D0.B2.D0.BD.D1.8B.D0.B5_.D0.BF.D0.BE.D0.BD.D1.8F.D1.82.D0.B8.D1.8F_.D0.B8_.D0.BF.D1.80.D0.B8.D0.BC.D0.B5.D1.80.D1.8B_.D0.BF.D1.80.D0.B8.D0.BA.D0.BB.D0.B0.D0.B4.D0.BD.D1.8B.D1.85_.D0.B7.D0.B0.D0.B4.D0.B0.D1.87"><span class="tocnumber">2.1</span> <span class="toctext">Основные понятия и примеры прикладных задач</span></a></li>
<li class="toclevel-2"><a href="#.D0.9B.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D1.8B.D0.B9_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.82.D0.BE.D1.80_.D0.B8_.D1.81.D1.82.D0.BE.D1.85.D0.B0.D1.81.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B9_.D0.B3.D1.80.D0.B0.D0.B4.D0.B8.D0.B5.D0.BD.D1.82"><span class="tocnumber">2.2</span> <span class="toctext">Линейный классификатор и стохастический градиент</span></a></li>
<li class="toclevel-2"><a href="#.D0.9D.D0.B5.D0.B9.D1.80.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B5.D1.82.D0.B8:_.D0.B3.D1.80.D0.B0.D0.B4.D0.B8.D0.B5.D0.BD.D1.82.D0.BD.D1.8B.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BE.D0.BF.D1.82.D0.B8.D0.BC.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D0.B8"><span class="tocnumber">2.3</span> <span class="toctext">Нейронные сети: градиентные методы оптимизации</span></a></li>
<li class="toclevel-2"><a href="#.D0.9C.D0.B5.D1.82.D1.80.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8_.D0.B8_.D1.80.D0.B5.D0.B3.D1.80.D0.B5.D1.81.D1.81.D0.B8.D0.B8"><span class="tocnumber">2.4</span> <span class="toctext">Метрические методы классификации и регрессии</span></a></li>
<li class="toclevel-2"><a href="#.D0.9C.D0.B5.D1.82.D0.BE.D0.B4_.D0.BE.D0.BF.D0.BE.D1.80.D0.BD.D1.8B.D1.85_.D0.B2.D0.B5.D0.BA.D1.82.D0.BE.D1.80.D0.BE.D0.B2"><span class="tocnumber">2.5</span> <span class="toctext">Метод опорных векторов</span></a></li>
<li class="toclevel-2"><a href="#.D0.9C.D0.BD.D0.BE.D0.B3.D0.BE.D0.BC.D0.B5.D1.80.D0.BD.D0.B0.D1.8F_.D0.BB.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D0.B0.D1.8F_.D1.80.D0.B5.D0.B3.D1.80.D0.B5.D1.81.D1.81.D0.B8.D1.8F"><span class="tocnumber">2.6</span> <span class="toctext">Многомерная линейная регрессия</span></a></li>
<li class="toclevel-2"><a href="#.D0.9D.D0.B5.D0.BB.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D0.B0.D1.8F_.D1.80.D0.B5.D0.B3.D1.80.D0.B5.D1.81.D1.81.D0.B8.D1.8F"><span class="tocnumber">2.7</span> <span class="toctext">Нелинейная регрессия</span></a></li>
<li class="toclevel-2"><a href="#.D0.9A.D1.80.D0.B8.D1.82.D0.B5.D1.80.D0.B8.D0.B8_.D0.B2.D1.8B.D0.B1.D0.BE.D1.80.D0.B0_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D0.B5.D0.B9_.D0.B8_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BE.D1.82.D0.B1.D0.BE.D1.80.D0.B0_.D0.BF.D1.80.D0.B8.D0.B7.D0.BD.D0.B0.D0.BA.D0.BE.D0.B2"><span class="tocnumber">2.8</span> <span class="toctext">Критерии выбора моделей и методы отбора признаков</span></a></li>
<li class="toclevel-2"><a href="#.D0.9B.D0.BE.D0.B3.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8"><span class="tocnumber">2.9</span> <span class="toctext">Логические методы классификации</span></a></li>
<li class="toclevel-2"><a href="#.D0.9B.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D1.8B.D0.B5_.D0.B0.D0.BD.D1.81.D0.B0.D0.BC.D0.B1.D0.BB.D0.B8"><span class="tocnumber">2.10</span> <span class="toctext">Линейные ансамбли</span></a></li>
<li class="toclevel-2"><a href="#.D0.9F.D1.80.D0.BE.D0.B4.D0.B2.D0.B8.D0.BD.D1.83.D1.82.D1.8B.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.B0.D0.BD.D1.81.D0.B0.D0.BC.D0.B1.D0.BB.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F"><span class="tocnumber">2.11</span> <span class="toctext">Продвинутые методы ансамблирования</span></a></li>
<li class="toclevel-2"><a href="#.D0.92.D0.BE.D1.81.D1.81.D1.82.D0.B0.D0.BD.D0.BE.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D0.B5_.D0.BF.D0.BB.D0.BE.D1.82.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D1.80.D0.B0.D1.81.D0.BF.D1.80.D0.B5.D0.B4.D0.B5.D0.BB.D0.B5.D0.BD.D0.B8.D1.8F"><span class="tocnumber">2.12</span> <span class="toctext">Восстановление плотности распределения</span></a></li>
<li class="toclevel-2"><a href="#.D0.91.D0.B0.D0.B9.D0.B5.D1.81.D0.BE.D0.B2.D1.81.D0.BA.D0.B0.D1.8F_.D1.82.D0.B5.D0.BE.D1.80.D0.B8.D1.8F_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8"><span class="tocnumber">2.13</span> <span class="toctext">Байесовская теория классификации</span></a></li>
<li class="toclevel-2"><a href="#.D0.9A.D0.BB.D0.B0.D1.81.D1.82.D0.B5.D1.80.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D1.8F_.D0.B8_.D1.87.D0.B0.D1.81.D1.82.D0.B8.D1.87.D0.BD.D0.BE.D0.B5_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"><span class="tocnumber">2.14</span> <span class="toctext">Кластеризация и частичное обучение</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.D0.A1.D0.B5.D0.BC.D0.B5.D1.81.D1.82.D1.80_2._.D0.9F.D1.80.D0.B8.D0.BA.D0.BB.D0.B0.D0.B4.D0.BD.D1.8B.D0.B5_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D0.B8_.D0.BC.D0.B0.D1.88.D0.B8.D0.BD.D0.BD.D0.BE.D0.B3.D0.BE_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D1.8F"><span class="tocnumber">3</span> <span class="toctext">Семестр 2. Прикладные модели машинного обучения</span></a>
<ul>
<li class="toclevel-2"><a href="#.D0.93.D0.BB.D1.83.D0.B1.D0.BE.D0.BA.D0.B8.D0.B5_.D0.BD.D0.B5.D0.B9.D1.80.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B5.D1.82.D0.B8"><span class="tocnumber">3.1</span> <span class="toctext">Глубокие нейронные сети</span></a></li>
<li class="toclevel-2"><a href="#.D0.9D.D0.B5.D0.B9.D1.80.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B5.D1.82.D0.B8_.D1.81_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5.D0.BC_.D0.B1.D0.B5.D0.B7_.D1.83.D1.87.D0.B8.D1.82.D0.B5.D0.BB.D1.8F"><span class="tocnumber">3.2</span> <span class="toctext">Нейронные сети с обучением без учителя</span></a></li>
<li class="toclevel-2"><a href="#.D0.92.D0.B5.D0.BA.D1.82.D0.BE.D1.80.D0.BD.D1.8B.D0.B5_.D0.BF.D1.80.D0.B5.D0.B4.D1.81.D1.82.D0.B0.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D1.8F_.D1.82.D0.B5.D0.BA.D1.81.D1.82.D0.BE.D0.B2_.D0.B8_.D0.B3.D1.80.D0.B0.D1.84.D0.BE.D0.B2"><span class="tocnumber">3.3</span> <span class="toctext">Векторные представления текстов и графов</span></a></li>
<li class="toclevel-2"><a href="#.D0.9C.D0.BE.D0.B4.D0.B5.D0.BB.D0.B8_.D0.B2.D0.BD.D0.B8.D0.BC.D0.B0.D0.BD.D0.B8.D1.8F_.D0.B8_.D1.82.D1.80.D0.B0.D0.BD.D1.81.D1.84.D0.BE.D1.80.D0.BC.D0.B5.D1.80.D1.8B"><span class="tocnumber">3.4</span> <span class="toctext">Модели внимания и трансформеры</span></a></li>
<li class="toclevel-2"><a href="#.D0.A2.D0.B5.D0.BC.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.BE.D0.B5_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"><span class="tocnumber">3.5</span> <span class="toctext">Тематическое моделирование</span></a></li>
<li class="toclevel-2"><a href="#.D0.9E.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5_.D1.80.D0.B0.D0.BD.D0.B6.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8E"><span class="tocnumber">3.6</span> <span class="toctext">Обучение ранжированию</span></a></li>
<li class="toclevel-2"><a href="#.D0.A0.D0.B5.D0.BA.D0.BE.D0.BC.D0.B5.D0.BD.D0.B4.D0.B0.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D1.8B"><span class="tocnumber">3.7</span> <span class="toctext">Рекомендательные системы</span></a></li>
<li class="toclevel-2"><a href="#.D0.9F.D0.BE.D0.B8.D1.81.D0.BA_.D0.B0.D1.81.D1.81.D0.BE.D1.86.D0.B8.D0.B0.D1.82.D0.B8.D0.B2.D0.BD.D1.8B.D1.85_.D0.BF.D1.80.D0.B0.D0.B2.D0.B8.D0.BB"><span class="tocnumber">3.8</span> <span class="toctext">Поиск ассоциативных правил</span></a></li>
<li class="toclevel-2"><a href="#.D0.90.D0.B4.D0.B0.D0.BF.D1.82.D0.B8.D0.B2.D0.BD.D1.8B.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BF.D1.80.D0.BE.D0.B3.D0.BD.D0.BE.D0.B7.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F"><span class="tocnumber">3.9</span> <span class="toctext">Адаптивные методы прогнозирования</span></a></li>
<li class="toclevel-2"><a href="#.D0.98.D0.BD.D0.BA.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D1.82.D0.BD.D0.BE.D0.B5_.D0.B8_.D0.BE.D0.BD.D0.BB.D0.B0.D0.B9.D0.BD.D0.BE.D0.B2.D0.BE.D0.B5_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"><span class="tocnumber">3.10</span> <span class="toctext">Инкрементное и онлайновое обучение</span></a></li>
<li class="toclevel-2"><a href="#.D0.9E.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5_.D1.81_.D0.BF.D0.BE.D0.B4.D0.BA.D1.80.D0.B5.D0.BF.D0.BB.D0.B5.D0.BD.D0.B8.D0.B5.D0.BC"><span class="tocnumber">3.11</span> <span class="toctext">Обучение с подкреплением</span></a></li>
<li class="toclevel-2"><a href="#.D0.90.D0.BA.D1.82.D0.B8.D0.B2.D0.BD.D0.BE.D0.B5_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"><span class="tocnumber">3.12</span> <span class="toctext">Активное обучение</span></a></li>
<li class="toclevel-2"><a href="#.D0.97.D0.B0.D0.BA.D0.BB.D1.8E.D1.87.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D0.B0.D1.8F_.D0.BB.D0.B5.D0.BA.D1.86.D0.B8.D1.8F"><span class="tocnumber">3.13</span> <span class="toctext">Заключительная лекция</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.D0.A1.D0.BC._.D1.82.D0.B0.D0.BA.D0.B6.D0.B5"><span class="tocnumber">4</span> <span class="toctext">См. также</span></a></li>
<li class="toclevel-1"><a href="#.D0.9B.D0.B8.D1.82.D0.B5.D1.80.D0.B0.D1.82.D1.83.D1.80.D0.B0"><span class="tocnumber">5</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1"><a href="#.D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BF.D0.BE.D0.B4.D1.81.D1.82.D1.80.D0.B0.D0.BD.D0.B8.D1.86"><span class="tocnumber">6</span> <span class="toctext">Список подстраниц</span></a></li>
</ul>
</td></tr></table><script type="text/javascript"> if (window.showTocToggle) { var tocShowText = "показать"; var tocHideText = "убрать"; showTocToggle(); } </script>
</td></tr></table>
<p><b>Теория обучения машин</b> (machine learning, машинное обучение) находится на стыке <a href="/wiki/index.php?title=%D0%9F%D1%80%D0%B8%D0%BA%D0%BB%D0%B0%D0%B4%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D0%B0%D1%82%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0&amp;action=edit" class="new" title="Прикладная статистика">прикладной статистики</a>, <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4%D1%8B_%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8&amp;action=edit" class="new" title="Методы оптимизации">численных методов оптимизации</a>, <a href="/wiki/index.php?title=%D0%94%D0%B8%D1%81%D0%BA%D1%80%D0%B5%D1%82%D0%BD%D1%8B%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7&amp;action=edit" class="new" title="Дискретный анализ">дискретного анализа</a>, и за последние 60 лет оформилась в самостоятельную математическую дисциплину. Методы <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Машинное обучение">машинного обучения</a> составляют основу ещё более молодой дисциплины — <i><a href="/wiki/index.php?title=%D0%98%D0%BD%D1%82%D0%B5%D0%BB%D0%BB%D0%B5%D0%BA%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="Интеллектуальный анализ данных">интеллектуального анализа данных</a></i> (data mining). 
</p><p>В курсе рассматриваются основные задачи обучения по прецедентам: <a href="/wiki/index.php?title=%D0%9A%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F" title="Классификация">классификация</a>, <a href="/wiki/index.php?title=%D0%9A%D0%BB%D0%B0%D1%81%D1%82%D0%B5%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Кластеризация">кластеризация</a>, <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D1%8F" class="mw-redirect" title="Регрессия">регрессия</a>, <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%BD%D0%B8%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5_%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%80%D0%BD%D0%BE%D1%81%D1%82%D0%B8&amp;action=edit" class="new" title="Понижение размерности">понижение размерности</a>. Изучаются методы их решения, как классические, так и новые, созданные за последние 10–15 лет. Упор делается на глубокое понимание математических основ, взаимосвязей, достоинств и ограничений рассматриваемых методов. Теоремы в основном приводятся без доказательств. 
</p><p>Все методы излагаются по единой схеме: 
</p>
<ul><li> исходные идеи и эвристики; 
</li><li> их формализация и математическая теория; 
</li><li> описание алгоритма в виде слабо формализованного псевдокода; 
</li><li> анализ достоинств, недостатков и границ применимости; 
</li><li> пути устранения недостатков; 
</li><li> сравнение и взаимосвязи с другими методами. 
</li><li> примеры прикладных задач.
</li></ul>
<p>Данный курс расширяет и углубляет набор тем, рекомендованный международным стандартом <b>ACM/IEEE Computing Curricula 2001</b> по дисциплине «Машинное обучение и нейронные сети» (machine learning and neural networks) в разделе «Интеллектуальные системы» (intelligent systems). 
</p><p>Курс читается 
</p>
<ul><li> студентам 3 курса кафедры <a href="/wiki/index.php?title=%D0%98%D0%BD%D1%82%D0%B5%D0%BB%D0%BB%D0%B5%D0%BA%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B_%28%D0%BA%D0%B0%D1%84%D0%B5%D0%B4%D1%80%D0%B0_%D0%9C%D0%A4%D0%A2%D0%98%29" title="Интеллектуальные системы (кафедра МФТИ)">«Интеллектуальные системы / интеллектуальный анализ данных» ФУПМ МФТИ</a> с 2004 года; 
</li><li> студентам 3 курса кафедры <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4%D1%8B_%D0%BF%D1%80%D0%BE%D0%B3%D0%BD%D0%BE%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%28%D0%BA%D0%B0%D1%84%D0%B5%D0%B4%D1%80%D0%B0_%D0%92%D0%9C%D0%B8%D0%9A_%D0%9C%D0%93%D0%A3%29" title="Математические методы прогнозирования (кафедра ВМиК МГУ)">«Математические методы прогнозирования» ВМиК МГУ</a> с 2007 года;
</li><li> студентам <a href="/wiki/index.php?title=%D0%A8%D0%BA%D0%BE%D0%BB%D0%B0_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85_%D0%AF%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%D0%B0" title="Школа анализа данных Яндекса">Школы анализа данных Яндекса</a> с 2009 года.
</li></ul>
<p>От студентов требуются знания курсов линейной алгебры, математического анализа, теории вероятностей. Знание <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%81%D1%82%D0%B0%D1%82%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0" title="Математическая статистика">математической статистики</a>, <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4%D1%8B_%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8&amp;action=edit" class="new" title="Методы оптимизации">методов оптимизации</a> и языка программирования <a href="/wiki/index.php?title=Python" title="Python">Python</a> желательно, но не обязательно. 
</p><p><i>Курсивом</i> выделен дополнительный материал, который может разбираться на семинарах.
</p>
<a name=".D0.97.D0.B0.D0.BC.D0.B5.D1.87.D0.B0.D0.BD.D0.B8.D1.8F_.D0.B4.D0.BB.D1.8F_.D1.81.D1.82.D1.83.D0.B4.D0.B5.D0.BD.D1.82.D0.BE.D0.B2"></a><h3> <span class="mw-headline"> Замечания для студентов </span></h3>
<ul><li> Осенью 2021 года курс читается в дистанционном режиме. 
<ul><li> <a href="https://us06web.zoom.us/j/81766985440?pwd=UWdrbk5OYVhFdm1Jczlsc0lpZTBkQT09" class="external text" title="https://us06web.zoom.us/j/81766985440?pwd=UWdrbk5OYVhFdm1Jczlsc0lpZTBkQT09" rel="nofollow">Ссылка на Zoom для 4-го курса МФТИ</a> <font color="#F02020">Обновлено: 2022-02-04</font>
</li></ul>
</li><li> <a href="https://github.com/andriygav/MachineLearningSeminars/blob/master/README.rst" class="external text" title="https://github.com/andriygav/MachineLearningSeminars/blob/master/README.rst" rel="nofollow">Ссылка на семинары для студентов МФТИ</a>
</li><li> <a href="https://ya-r.ru/2020/05/07/vorontsov-kurs-mashinnoe-obuchenie-2019-shkola-analiza-dannyh/" class="external text" title="https://ya-r.ru/2020/05/07/vorontsov-kurs-mashinnoe-obuchenie-2019-shkola-analiza-dannyh/" rel="nofollow">Видеолекции ШАД Яндекс</a>. <font color="#F02020">Обновлено: 2019 год</font>
</li><li> <a href="https://www.coursera.org/learn/vvedenie-mashinnoe-obuchenie" class="external text" title="https://www.coursera.org/learn/vvedenie-mashinnoe-obuchenie" rel="nofollow">«Введение в машинное обучение» на Курсэре</a> содержит примерно втрое меньше материала, чем в годовом курсе, представленном на этой странице. Там очень многое упрощено, спрятано, пропущено. Действительно введение. 
</li><li> На подстранице имеется перечень <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29/%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B" title="Машинное обучение (курс лекций, К.В.Воронцов)/Вопросы">вопросов к устному экзамену</a>. Очень помогает при подготовке к устному экзамену!
</li><li> О найденных ошибках и опечатках <a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:EmailUser/Vokov" title="Служебная:EmailUser/Vokov">сообщайте мне</a>. —&nbsp;<i><a href="/wiki/index.php?title=%D0%A3%D1%87%D0%B0%D1%81%D1%82%D0%BD%D0%B8%D0%BA:Vokov" title="Участник:Vokov">К.В.Воронцов</a> 18:24, 19 января 2009 (MSK)</i>
</li><li> Материал, который есть в pdf-тексте, но не рассказывался на лекциях, обычно не входит в программу экзамена.
</li><li> Короткая ссылка на эту страницу: <a href="https://bit.ly/1bCmE3Z" class="external free" title="https://bit.ly/1bCmE3Z" rel="nofollow">https://bit.ly/1bCmE3Z</a>.
</li></ul>
<a name=".D0.A1.D0.B5.D0.BC.D0.B5.D1.81.D1.82.D1.80_1._.D0.9C.D0.B0.D1.82.D0.B5.D0.BC.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BE.D1.81.D0.BD.D0.BE.D0.B2.D1.8B_.D0.BC.D0.B0.D1.88.D0.B8.D0.BD.D0.BD.D0.BE.D0.B3.D0.BE_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D1.8F"></a><h1> <span class="mw-headline"> Семестр 1. Математические основы машинного обучения </span></h1>
<p><b>Текст лекций:</b> <a href="/wiki/images/6/6d/Voron-ML-1.pdf" class="internal" title="Voron-ML-1.pdf">(PDF,&nbsp;3&nbsp;МБ)</a> <font color="#F02020">— обновление 4.10.2011</font>.
</p>
<a name=".D0.9E.D1.81.D0.BD.D0.BE.D0.B2.D0.BD.D1.8B.D0.B5_.D0.BF.D0.BE.D0.BD.D1.8F.D1.82.D0.B8.D1.8F_.D0.B8_.D0.BF.D1.80.D0.B8.D0.BC.D0.B5.D1.80.D1.8B_.D0.BF.D1.80.D0.B8.D0.BA.D0.BB.D0.B0.D0.B4.D0.BD.D1.8B.D1.85_.D0.B7.D0.B0.D0.B4.D0.B0.D1.87"></a><h2> <span class="mw-headline"> Основные понятия и примеры прикладных задач </span></h2>
<p>Презентация: <a href="/wiki/images/f/fc/Voron-ML-Intro-slides.pdf" class="internal" title="Voron-ML-Intro-slides.pdf">(PDF,&nbsp;1,4&nbsp;МБ)</a> <font color="#F02020">— обновление 08.10.2021</font>.
Видеозапись: <a href="https://youtu.be/xccjt6lOoow" class="external text" title="https://youtu.be/xccjt6lOoow" rel="nofollow">Лекция</a> <a href="https://youtu.be/bJVI5AIback" class="external text" title="https://youtu.be/bJVI5AIback" rel="nofollow">Семинар</a>
</p>
<ul><li> Постановка задач обучения по прецедентам. Объекты и признаки. Типы шкал: бинарные, номинальные, порядковые, количественные.
</li><li> Типы задач: <a href="/wiki/index.php?title=%D0%9A%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F" title="Классификация">классификация</a>, <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D1%8F" class="mw-redirect" title="Регрессия">регрессия</a>, <a href="/wiki/index.php?title=%D0%9F%D1%80%D0%BE%D0%B3%D0%BD%D0%BE%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Прогнозирование">прогнозирование</a>, <a href="/wiki/index.php?title=%D0%A0%D0%B0%D0%BD%D0%B6%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5&amp;action=edit" class="new" title="Ранжирование">ранжирование</a>. 
</li><li> Основные понятия: <a href="/wiki/index.php?title=%D0%9C%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%D0%BE%D0%B2" class="mw-redirect" title="Модель алгоритмов">модель алгоритмов</a>, <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Метод обучения">метод обучения</a>, <a href="/wiki/index.php?title=%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE%D1%82%D0%B5%D1%80%D1%8C" class="mw-redirect" title="Функция потерь">функция потерь</a> и функционал качества, <a href="/wiki/index.php?title=%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF_%D0%BC%D0%B8%D0%BD%D0%B8%D0%BC%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8_%D1%8D%D0%BC%D0%BF%D0%B8%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%80%D0%B8%D1%81%D0%BA%D0%B0&amp;action=edit" class="new" title="Принцип минимизации эмпирического риска">принцип минимизации эмпирического риска</a>, <a href="/wiki/index.php?title=%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D0%B0%D1%8E%D1%89%D0%B0%D1%8F_%D1%81%D0%BF%D0%BE%D1%81%D0%BE%D0%B1%D0%BD%D0%BE%D1%81%D1%82%D1%8C" class="mw-redirect" title="Обобщающая способность">обобщающая способность</a>, <a href="/wiki/index.php?title=%D0%A1%D0%BA%D0%BE%D0%BB%D1%8C%D0%B7%D1%8F%D1%89%D0%B8%D0%B9_%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D1%8C" title="Скользящий контроль">скользящий контроль</a>. 
</li><li> Линейные модели регрессии и классификации. Метод наименьших квадратов. Полиномиальная регрессия.  
</li><li> Примеры прикладных задач.
</li><li> Методика экспериментального исследования и сравнения алгоритмов на модельных и реальных данных. 
</li><li> Конкурсы по анализу данных <a href="http://kaggle.com" class="external text" title="http://kaggle.com" rel="nofollow">kaggle.com</a>. <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%BB%D0%B8%D0%B3%D0%BE%D0%BD_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%D0%BE%D0%B2_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%B8" class="mw-redirect" title="Полигон алгоритмов классификации">Полигон алгоритмов классификации</a>.
</li><li> <a href="/wiki/index.php?title=CRISP-DM" title="CRISP-DM">CRISP-DM</a> — межотраслевой стандарт ведения проектов <a href="/wiki/index.php?title=Data_Mining" class="mw-redirect" title="Data Mining"> интеллектуального анализа данных</a>.
</li></ul>
<a name=".D0.9B.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D1.8B.D0.B9_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.82.D0.BE.D1.80_.D0.B8_.D1.81.D1.82.D0.BE.D1.85.D0.B0.D1.81.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B9_.D0.B3.D1.80.D0.B0.D0.B4.D0.B8.D0.B5.D0.BD.D1.82"></a><h2> <span class="mw-headline"> Линейный классификатор и стохастический градиент </span></h2>
<p>Презентация: <a href="/wiki/images/5/53/Voron-ML-Lin-SG.pdf" class="internal" title="Voron-ML-Lin-SG.pdf">(PDF,&nbsp;1,1&nbsp;МБ)</a> <font color="#F02020">— обновление 08.10.2021</font>.
Видеозапись: <a href="https://youtu.be/thrPR77K-os" class="external text" title="https://youtu.be/thrPR77K-os" rel="nofollow">Лекция</a> <a href="https://youtu.be/-4pPz5kX4XQ" class="external text" title="https://youtu.be/-4pPz5kX4XQ" rel="nofollow">Семинар</a>
</p>
<ul><li> <a href="/wiki/index.php?title=%D0%9B%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D0%BE%D1%80" title="Линейный классификатор">Линейный классификатор</a>, модель МакКаллока-Питтса, непрерывные аппроксимации пороговой функции потерь. 
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D1%81%D1%82%D0%BE%D1%85%D0%B0%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D0%B3%D1%80%D0%B0%D0%B4%D0%B8%D0%B5%D0%BD%D1%82%D0%B0" title="Метод стохастического градиента">Метод стохастического градиента</a> SG.
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D1%81%D1%82%D0%BE%D1%85%D0%B0%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%81%D1%80%D0%B5%D0%B4%D0%BD%D0%B5%D0%B3%D0%BE_%D0%B3%D1%80%D0%B0%D0%B4%D0%B8%D0%B5%D0%BD%D1%82%D0%B0&amp;action=edit" class="new" title="Метод стохастического среднего градиента">Метод стохастического среднего градиента</a> SAG.
</li><li> Эвристики: инициализация весов, порядок предъявления объектов, выбор величины градиентного шага, «выбивание» из локальных минимумов. 
</li><li> Проблема мультиколлинеарности и переобучения, регуляризация или <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%B2%D0%B5%D1%81%D0%BE%D0%B2&amp;action=edit" class="new" title="Редукция весов">редукция весов</a> (weight decay). 
</li><li> Вероятностная постановка задачи классификации. Принцип максимума правдоподобия. 
</li><li> Вероятностная интерпретация регуляризации, совместное правдоподобие данных и модели. Принцип максимума апостериорной вероятности. 
</li><li> Гауссовский и лапласовский регуляризаторы. 
</li><li> <a href="/wiki/index.php?title=%D0%9B%D0%BE%D0%B3%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%80%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D1%8F" title="Логистическая регрессия">Логистическая регрессия</a>. Принцип максимума правдоподобия и логарифмическая функция потерь. <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D1%81%D1%82%D0%BE%D1%85%D0%B0%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D0%B3%D1%80%D0%B0%D0%B4%D0%B8%D0%B5%D0%BD%D1%82%D0%B0" title="Метод стохастического градиента">Метод стохастического градиента</a> для логарифмической функции потерь. Многоклассовая логистическая регрессия. Регуляризованная логистическая регрессия. <a href="/wiki/index.php?title=%D0%9A%D0%B0%D0%BB%D0%B8%D0%B1%D1%80%D0%BE%D0%B2%D0%BA%D0%B0_%D0%9F%D0%BB%D0%B0%D1%82%D1%82%D0%B0&amp;action=edit" class="new" title="Калибровка Платта">Калибровка Платта</a>. 
</li></ul>
<a name=".D0.9D.D0.B5.D0.B9.D1.80.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B5.D1.82.D0.B8:_.D0.B3.D1.80.D0.B0.D0.B4.D0.B8.D0.B5.D0.BD.D1.82.D0.BD.D1.8B.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BE.D0.BF.D1.82.D0.B8.D0.BC.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D0.B8"></a><h2> <span class="mw-headline"> Нейронные сети: градиентные методы оптимизации </span></h2>
<p>Презентация: <a href="/wiki/images/e/e1/Voron-ML-ANN-slides.pdf" class="internal" title="Voron-ML-ANN-slides.pdf">(PDF,&nbsp;1,4&nbsp;МБ)</a> <font color="#F02020">— обновление 08.10.2021</font>.
Видеозапись: <a href="https://youtu.be/Wwv-orQPMDg" class="external text" title="https://youtu.be/Wwv-orQPMDg" rel="nofollow">Лекция</a> <a href="https://youtu.be/6AyE5bzFWQs" class="external text" title="https://youtu.be/6AyE5bzFWQs" rel="nofollow">Семинар</a>
</p>
<ul><li> Биологический нейрон, <a href="/wiki/index.php?title=%D0%9C%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C_%D0%9C%D0%B0%D0%BA%D0%9A%D0%B0%D0%BB%D0%BB%D0%BE%D0%BA%D0%B0-%D0%9F%D0%B8%D1%82%D1%82%D1%81%D0%B0" title="Модель МакКаллока-Питтса">модель МакКаллока-Питтса</a> как <a href="/wiki/index.php?title=%D0%9B%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D0%BE%D1%80" title="Линейный классификатор">линейный классификатор</a>. Функции активации. 
</li><li> Проблема полноты. <a href="/wiki/index.php?title=%D0%97%D0%B0%D0%B4%D0%B0%D1%87%D0%B0_%D0%B8%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B0%D1%8E%D1%89%D0%B5%D0%B3%D0%BE_%D0%B8%D0%BB%D0%B8&amp;action=edit" class="new" title="Задача исключающего или">Задача исключающего или</a>. Полнота двухслойных сетей в пространстве булевых функций. 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_%D0%BE%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D0%BE%D0%B3%D0%BE_%D1%80%D0%B0%D1%81%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B5%D0%BD%D0%B8%D1%8F_%D0%BE%D1%88%D0%B8%D0%B1%D0%BE%D0%BA&amp;action=edit" class="new" title="Алгоритм обратного распространения ошибок">Алгоритм обратного распространения ошибок</a>.  
</li><li> Быстрые методы стохастического градиента: Поляка, Нестерова, AdaGrad, RMSProp, AdaDelta, Adam, Nadam, <a href="/wiki/index.php?title=%D0%94%D0%B8%D0%B0%D0%B3%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4_%D0%9B%D0%B5%D0%B2%D0%B5%D0%BD%D0%B1%D0%B5%D1%80%D0%B3%D0%B0-%D0%9C%D0%B0%D1%80%D0%BA%D0%B2%D0%B0%D1%80%D0%B4%D1%82%D0%B0&amp;action=edit" class="new" title="Диагональный метод Левенберга-Марквардта">диагональный метод Левенберга-Марквардта</a>.
</li><li> Проблема взрыва градиента и эвристика gradient clipping.
</li><li> Метод случайных отключений нейронов (Dropout). Интерпретации Dropout. Обратный Dropout и L2-регуляризация.
</li><li> Функции активации ReLU и PReLU. Проблема <a href="/wiki/index.php?title=%D0%9F%D0%B0%D1%80%D0%B0%D0%BB%D0%B8%D1%87_%D1%81%D0%B5%D1%82%D0%B8&amp;action=edit" class="new" title="Паралич сети">«паралича» сети</a>.
</li><li> Эвристики для формирования начального приближения. Метод послойной настройки сети. 
</li><li> Подбор структуры сети: методы постепенного усложнения сети, <a href="/wiki/index.php?title=%D0%9E%D0%BF%D1%82%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D1%80%D0%B5%D0%B6%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%BD%D0%B5%D0%B9%D1%80%D0%BE%D0%BD%D0%BD%D1%8B%D1%85_%D1%81%D0%B5%D1%82%D0%B5%D0%B9" title="Оптимальное прореживание нейронных сетей">оптимальное прореживание нейронных сетей</a> (optimal brain damage).
</li></ul>
<a name=".D0.9C.D0.B5.D1.82.D1.80.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8_.D0.B8_.D1.80.D0.B5.D0.B3.D1.80.D0.B5.D1.81.D1.81.D0.B8.D0.B8"></a><h2> <span class="mw-headline"> Метрические методы классификации и регрессии </span></h2>
<p>Презентация: <a href="/wiki/images/c/c3/Voron-ML-Metric-slides.pdf" class="internal" title="Voron-ML-Metric-slides.pdf">(PDF,&nbsp;3,2&nbsp;МБ)</a> <font color="#F02020">— обновление 08.10.2021</font>.
Видеозапись: <a href="https://youtu.be/GyOxB2itxnc" class="external text" title="https://youtu.be/GyOxB2itxnc" rel="nofollow">Лекция</a> <a href="https://youtu.be/BlPOOpFhhQE" class="external text" title="https://youtu.be/BlPOOpFhhQE" rel="nofollow">Семинар</a>
</p>
<ul><li> Гипотезы компактности и непрерывности. 
</li><li> Обобщённый <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D0%BE%D1%80" title="Метрический классификатор">метрический классификатор</a>.
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%B1%D0%BB%D0%B8%D0%B6%D0%B0%D0%B9%D1%88%D0%B8%D1%85_%D1%81%D0%BE%D1%81%D0%B5%D0%B4%D0%B5%D0%B9" title="Метод ближайших соседей">Метод ближайших соседей</a> <i>k</i>NN и его обобщения. Подбор числа <i>k</i> по критерию скользящего контроля. 
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BE%D0%BA%D0%BD%D0%B0_%D0%9F%D0%B0%D1%80%D0%B7%D0%B5%D0%BD%D0%B0&amp;action=edit" class="new" title="Метод окна Парзена">Метод окна Парзена</a> с постоянной и переменной шириной окна.
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BF%D0%BE%D1%82%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B9" title="Метод потенциальных функций">Метод потенциальных функций</a> и его связь с линейной моделью классификации. 
</li><li> Задача отбора эталонов. <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%BB%D0%BD%D1%8B%D0%B9_%D1%81%D0%BA%D0%BE%D0%BB%D1%8C%D0%B7%D1%8F%D1%89%D0%B8%D0%B9_%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D1%8C" class="mw-redirect" title="Полный скользящий контроль">Полный скользящий контроль</a> (CCV), формула быстрого вычисления для метода 1NN. <a href="/wiki/index.php?title=%D0%9F%D1%80%D0%BE%D1%84%D0%B8%D0%BB%D1%8C_%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BA%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%B8" title="Профиль компактности">Профиль компактности</a>. 
</li><li> Отбор эталонных объектов на основе минимизации функционала полного скользящего контроля.
</li><li> Непараметрическая регрессия. Локально взвешенный <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BD%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D1%8C%D1%88%D0%B8%D1%85_%D0%BA%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82%D0%BE%D0%B2" title="Метод наименьших квадратов">метод наименьших квадратов</a>. <a href="/wiki/index.php?title=%D0%AF%D0%B4%D0%B5%D1%80%D0%BD%D0%BE%D0%B5_%D1%81%D0%B3%D0%BB%D0%B0%D0%B6%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" class="mw-redirect" title="Ядерное сглаживание">Ядерное сглаживание</a>. 
</li><li> <a href="/wiki/index.php?title=%D0%9E%D1%86%D0%B5%D0%BD%D0%BA%D0%B0_%D0%9D%D0%B0%D0%B4%D0%B0%D1%80%D0%B0%D1%8F-%D0%92%D0%B0%D1%82%D1%81%D0%BE%D0%BD%D0%B0" class="mw-redirect" title="Оценка Надарая-Ватсона">Оценка Надарая-Ватсона</a> с постоянной и переменной шириной окна. Выбор функции ядра и ширины окна сглаживания. 
</li><li> Задача отсева выбросов. Робастная непараметрическая регрессия. <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_LOWESS" title="Алгоритм LOWESS">Алгоритм LOWESS</a>.
</li></ul>
<a name=".D0.9C.D0.B5.D1.82.D0.BE.D0.B4_.D0.BE.D0.BF.D0.BE.D1.80.D0.BD.D1.8B.D1.85_.D0.B2.D0.B5.D0.BA.D1.82.D0.BE.D1.80.D0.BE.D0.B2"></a><h2> <span class="mw-headline"> Метод опорных векторов </span></h2>
<p>Презентация: <a href="/wiki/images/a/a0/Voron-ML-Lin-SVM.pdf" class="internal" title="Voron-ML-Lin-SVM.pdf">(PDF,&nbsp;1,1&nbsp;МБ)</a> <font color="#F02020">— обновление 08.10.2021</font>.
Видеозапись: <a href="https://youtu.be/6O4f_sIVffk" class="external text" title="https://youtu.be/6O4f_sIVffk" rel="nofollow">Лекция</a> <a href="https://youtu.be/Y--tUWQ5JaY" class="external text" title="https://youtu.be/Y--tUWQ5JaY" rel="nofollow">Семинар</a> 
</p>
<ul><li> Оптимальная разделяющая гиперплоскость. Понятие <a href="/wiki/index.php?title=%D0%97%D0%B0%D0%B7%D0%BE%D1%80&amp;action=edit" class="new" title="Зазор">зазора</a> между классами (margin). 
</li><li> Случаи линейной разделимости и отсутствия линейной разделимости. Связь с минимизацией регуляризованного эмпирического риска. Кусочно-линейная функция потерь. 
</li><li> Задача квадратичного программирования и двойственная задача. Понятие <a href="/wiki/index.php?title=%D0%9E%D0%BF%D0%BE%D1%80%D0%BD%D1%8B%D0%B9_%D0%B2%D0%B5%D0%BA%D1%82%D0%BE%D1%80&amp;action=edit" class="new" title="Опорный вектор">опорных векторов</a>. 
</li><li> Рекомендации по выбору константы&nbsp;<i>C</i>.
</li><li> <a href="/wiki/index.php?title=%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F_%D1%8F%D0%B4%D1%80%D0%B0" title="Функция ядра">Функция ядра</a> (kernel functions), <a href="/wiki/index.php?title=%D0%A1%D0%BF%D1%80%D1%8F%D0%BC%D0%BB%D1%8F%D1%8E%D1%89%D0%B5%D0%B5_%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE&amp;action=edit" class="new" title="Спрямляющее пространство">спрямляющее пространство</a>, <a href="/wiki/index.php?title=%D0%A2%D0%B5%D0%BE%D1%80%D0%B5%D0%BC%D0%B0_%D0%9C%D0%B5%D1%80%D1%81%D0%B5%D1%80%D0%B0" title="Теорема Мерсера">теорема Мерсера</a>. 
</li><li> Способы конструктивного построения ядер. Примеры ядер. 
</li><li> SVM-регрессия.
</li><li> Регуляризации для отбора признаков: <a href="/wiki/index.php?title=LASSO_SVM&amp;action=edit" class="new" title="LASSO SVM">LASSO SVM</a>, <a href="/wiki/index.php?title=Elastic_Net_SVM&amp;action=edit" class="new" title="Elastic Net SVM">Elastic Net SVM</a>, <a href="/wiki/index.php?title=SFM&amp;action=edit" class="new" title="SFM">SFM</a>, <a href="/wiki/index.php?title=RFM&amp;action=edit" class="new" title="RFM">RFM</a>.
</li><li> Метод релевантных векторов <a href="/wiki/index.php?title=RVM" class="mw-redirect" title="RVM">RVM</a>
</li></ul>
<a name=".D0.9C.D0.BD.D0.BE.D0.B3.D0.BE.D0.BC.D0.B5.D1.80.D0.BD.D0.B0.D1.8F_.D0.BB.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D0.B0.D1.8F_.D1.80.D0.B5.D0.B3.D1.80.D0.B5.D1.81.D1.81.D0.B8.D1.8F"></a><h2> <span class="mw-headline"> Многомерная линейная регрессия </span></h2>
<p>Презентация: <a href="/wiki/images/a/a2/Voron-ML-regression-slides.pdf" class="internal" title="Voron-ML-regression-slides.pdf">(PDF,&nbsp;1,2&nbsp;MБ)</a> <font color="#F02020">— обновление 08.10.2021</font>.
Видеозапись: <a href="https://youtu.be/tCE_vnPoU44" class="external text" title="https://youtu.be/tCE_vnPoU44" rel="nofollow">Лекция</a> <a href="https://youtu.be/t5imStVGC7Y" class="external text" title="https://youtu.be/t5imStVGC7Y" rel="nofollow">Семинар</a> 
</p>
<ul><li> Задача регрессии, <a href="/wiki/index.php?title=%D0%9C%D0%BD%D0%BE%D0%B3%D0%BE%D0%BC%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%BB%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D0%B0%D1%8F_%D1%80%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D1%8F" title="Многомерная линейная регрессия">многомерная линейная регрессия</a>.
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BD%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D1%8C%D1%88%D0%B8%D1%85_%D0%BA%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82%D0%BE%D0%B2" title="Метод наименьших квадратов">Метод наименьших квадратов</a>, его вероятностный смысл и геометрический смысл. 
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%B8%D0%BD%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%BD%D0%BE%D0%B5_%D1%80%D0%B0%D0%B7%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" title="Сингулярное разложение">Сингулярное разложение</a>. 
</li><li> Проблемы <a href="/wiki/index.php?title=%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BA%D0%BE%D0%BB%D0%BB%D0%B8%D0%BD%D0%B5%D0%B0%D1%80%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Мультиколлинеарность">мультиколлинеарности</a> и <a href="/wiki/index.php?title=%D0%9F%D0%B5%D1%80%D0%B5%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Переобучение">переобучения</a>. 
</li><li> <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Регуляризация">Регуляризация</a>. <a href="/wiki/index.php?title=%D0%93%D1%80%D0%B5%D0%B1%D0%BD%D0%B5%D0%B2%D0%B0%D1%8F_%D1%80%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D1%8F" class="mw-redirect" title="Гребневая регрессия">Гребневая регрессия</a> через сингулярное разложение. 
</li><li> Методы отбора признаков: <a href="/wiki/index.php?title=%D0%9B%D0%B0%D1%81%D1%81%D0%BE_%D0%A2%D0%B8%D0%B1%D1%88%D0%B8%D1%80%D0%B0%D0%BD%D0%B8" title="Лассо Тибширани">Лассо Тибширани</a>, <a href="/wiki/index.php?title=Elastic_Net&amp;action=edit" class="new" title="Elastic Net">Elastic Net</a>, сравнение с гребневой регрессией.  
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D1%8B%D1%85_%D0%BA%D0%BE%D0%BC%D0%BF%D0%BE%D0%BD%D0%B5%D0%BD%D1%82" title="Метод главных компонент">Метод главных компонент</a> и <a href="/wiki/index.php?title=%D0%94%D0%B5%D0%BA%D0%BE%D1%80%D1%80%D0%B5%D0%BB%D0%B8%D1%80%D1%83%D1%8E%D1%89%D0%B5%D0%B5_%D0%BF%D1%80%D0%B5%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5&amp;action=edit" class="new" title="Декоррелирующее преобразование">декоррелирующее преобразование</a> Карунена-Лоэва, его связь с сингулярным разложением. 
</li><li> Спектральный подход к решению задачи наименьших квадратов.
</li><li> Задачи и методы низкоранговых матричных разложений. 
</li></ul>
<a name=".D0.9D.D0.B5.D0.BB.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D0.B0.D1.8F_.D1.80.D0.B5.D0.B3.D1.80.D0.B5.D1.81.D1.81.D0.B8.D1.8F"></a><h2> <span class="mw-headline"> Нелинейная регрессия </span></h2>
<p>Презентация: <a href="/wiki/images/4/43/Voron-ML-regress-non-slides.pdf" class="internal" title="Voron-ML-regress-non-slides.pdf">(PDF,&nbsp;0,7&nbsp;MБ)</a> <font color="#F02020">— обновление 6.11.2021</font>.
Видеозапись: <a href="https://youtu.be/A_jzq0Lpgt0" class="external text" title="https://youtu.be/A_jzq0Lpgt0" rel="nofollow">Лекция</a> <a href="https://youtu.be/WhQT3J1PJfI" class="external text" title="https://youtu.be/WhQT3J1PJfI" rel="nofollow">Семинар</a> 
</p>
<ul><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%9D%D1%8C%D1%8E%D1%82%D0%BE%D0%BD%D0%B0-%D0%A0%D0%B0%D1%84%D1%81%D0%BE%D0%BD%D0%B0&amp;action=edit" class="new" title="Метод Ньютона-Рафсона">Метод Ньютона-Рафсона</a>, <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%9D%D1%8C%D1%8E%D1%82%D0%BE%D0%BD%D0%B0-%D0%93%D0%B0%D1%83%D1%81%D1%81%D0%B0" title="Метод Ньютона-Гаусса">метод Ньютона-Гаусса</a>. 
</li><li> Обобщённая аддитивная модель (GAM): <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8_%D1%81_%D0%B2%D0%BE%D0%B7%D0%B2%D1%80%D0%B0%D1%89%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8" title="Метод настройки с возвращениями">метод настройки с возвращениями</a> (backfitting) Хасти-Тибширани. 
</li><li> <a href="/wiki/index.php?title=%D0%9B%D0%BE%D0%B3%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%80%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D1%8F" title="Логистическая регрессия">Логистическая регрессия</a>. <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BD%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D1%8C%D1%88%D0%B8%D1%85_%D0%BA%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82%D0%BE%D0%B2_%D1%81_%D0%B8%D1%82%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%BC_%D0%BF%D0%B5%D1%80%D0%B5%D1%81%D1%87%D1%91%D1%82%D0%BE%D0%BC_%D0%B2%D0%B5%D1%81%D0%BE%D0%B2" title="Метод наименьших квадратов с итеративным пересчётом весов">Метод наименьших квадратов с итеративным пересчётом весов</a> (IRLS). Пример прикладной задачи: кредитный скоринг. Бинаризация признаков. Скоринговые карты и оценивание вероятности дефолта. <i>Риск кредитного портфеля банка.</i>
</li><li> <a href="/wiki/index.php?title=%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%B0%D1%8F_%D0%BB%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D0%B0%D1%8F_%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C" title="Обобщённая линейная модель">Обобщённая линейная модель</a> (GLM). Экспоненциальное семейство распределений. 
</li><li> Неквадратичные функции потерь. Метод наименьших модулей. Квантильная регрессия. Пример прикладной задачи: прогнозирование потребительского спроса.
</li><li> Робастная регрессия, функции потерь с горизонтальными асимптотами.
</li></ul>
<a name=".D0.9A.D1.80.D0.B8.D1.82.D0.B5.D1.80.D0.B8.D0.B8_.D0.B2.D1.8B.D0.B1.D0.BE.D1.80.D0.B0_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D0.B5.D0.B9_.D0.B8_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BE.D1.82.D0.B1.D0.BE.D1.80.D0.B0_.D0.BF.D1.80.D0.B8.D0.B7.D0.BD.D0.B0.D0.BA.D0.BE.D0.B2"></a><h2> <span class="mw-headline"> Критерии выбора моделей и методы отбора признаков </span></h2>
<p>Текст лекций: <a href="/wiki/images/2/2d/Voron-ML-Modeling.pdf" class="internal" title="Voron-ML-Modeling.pdf">(PDF,&nbsp;330&nbsp;КБ)</a>.<br />
Презентация: <a href="/wiki/images/d/de/Voron-ML-Quality-slides.pdf" class="internal" title="Voron-ML-Quality-slides.pdf">(PDF,&nbsp;1,5&nbsp;МБ)</a> <font color="#F02020">— обновление 6.11.2021</font>.
Видеозапись: <a href="https://youtu.be/uT_H0SFIwbE" class="external text" title="https://youtu.be/uT_H0SFIwbE" rel="nofollow">Лекция</a> <a href="https://youtu.be/fdb_cmG6hl8" class="external text" title="https://youtu.be/fdb_cmG6hl8" rel="nofollow">Семинар</a> 
</p>
<ul><li> Критерии качества классификации: чувствительность и специфичность, ROC-кривая и AUC, точность и полнота, AUC-PR. 
</li><li> Внутренние и <a href="/wiki/index.php?title=%D0%92%D0%BD%D0%B5%D1%88%D0%BD%D0%B8%D0%B5_%D0%BA%D1%80%D0%B8%D1%82%D0%B5%D1%80%D0%B8%D0%B8&amp;action=edit" class="new" title="Внешние критерии">внешние критерии</a>. Эмпирические и аналитические критерии. 
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%BA%D0%BE%D0%BB%D1%8C%D0%B7%D1%8F%D1%89%D0%B8%D0%B9_%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D1%8C" title="Скользящий контроль">Скользящий контроль</a>, разновидности эмпирических оценок скользящего контроля. <a href="/wiki/index.php?title=%D0%9A%D1%80%D0%B8%D1%82%D0%B5%D1%80%D0%B8%D0%B9_%D0%BD%D0%B5%D0%BF%D1%80%D0%BE%D1%82%D0%B8%D0%B2%D0%BE%D1%80%D0%B5%D1%87%D0%B8%D0%B2%D0%BE%D1%81%D1%82%D0%B8&amp;action=edit" class="new" title="Критерий непротиворечивости">Критерий непротиворечивости</a>. 
</li><li> Разновидности аналитических оценок. <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Регуляризация">Регуляризация</a>. <a href="/wiki/index.php?title=%D0%9A%D1%80%D0%B8%D1%82%D0%B5%D1%80%D0%B8%D0%B9_%D0%90%D0%BA%D0%B0%D0%B8%D0%BA%D0%B5" title="Критерий Акаике">Критерий Акаике</a> (AIC). <a href="/wiki/index.php?title=%D0%91%D0%B0%D0%B9%D0%B5%D1%81%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D1%80%D0%B8%D1%82%D0%B5%D1%80%D0%B8%D0%B9" title="Байесовский информационный критерий">Байесовский информационный критерий</a> (BIC). Оценка Вапника-Червоненкиса. 
</li><li> Сложность задачи <a href="/wiki/index.php?title=%D0%9E%D1%82%D0%B1%D0%BE%D1%80_%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BA%D0%BE%D0%B2&amp;action=edit" class="new" title="Отбор признаков">отбора признаков</a>. <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%BB%D0%BD%D1%8B%D0%B9_%D0%BF%D0%B5%D1%80%D0%B5%D0%B1%D0%BE%D1%80&amp;action=edit" class="new" title="Полный перебор">Полный перебор</a>.
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%B4%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F_%D0%B8_%D1%83%D0%B4%D0%B0%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F&amp;action=edit" class="new" title="Метод добавления и удаления">Метод добавления и удаления</a>, шаговая регрессия. 
</li><li> <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%B8%D1%81%D0%BA_%D0%B2_%D0%B3%D0%BB%D1%83%D0%B1%D0%B8%D0%BD%D1%83&amp;action=edit" class="new" title="Поиск в глубину">Поиск в глубину</a>, метод ветвей и границ. 
</li><li> Усечённый <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%B8%D1%81%D0%BA_%D0%B2_%D1%88%D0%B8%D1%80%D0%B8%D0%BD%D1%83&amp;action=edit" class="new" title="Поиск в ширину">поиск в ширину</a>, <a href="/wiki/index.php?title=%D0%9C%D0%BD%D0%BE%D0%B3%D0%BE%D1%80%D1%8F%D0%B4%D0%BD%D1%8B%D0%B9_%D0%B8%D1%82%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_%D0%9C%D0%93%D0%A3%D0%90&amp;action=edit" class="new" title="Многорядный итерационный алгоритм МГУА">многорядный итерационный алгоритм МГУА</a>.
</li><li> <a href="/wiki/index.php?title=%D0%93%D0%B5%D0%BD%D0%B5%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC" title="Генетический алгоритм">Генетический алгоритм</a>, его сходство с МГУА.
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D1%87%D0%B0%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BE%D0%B8%D1%81%D0%BA&amp;action=edit" class="new" title="Случайный поиск">Случайный поиск</a> и <a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D1%87%D0%B0%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BE%D0%B8%D1%81%D0%BA_%D1%81_%D0%B0%D0%B4%D0%B0%D0%BF%D1%82%D0%B0%D1%86%D0%B8%D0%B5%D0%B9&amp;action=edit" class="new" title="Случайный поиск с адаптацией">Случайный поиск с адаптацией</a> (СПА).
</li></ul>
<a name=".D0.9B.D0.BE.D0.B3.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8"></a><h2> <span class="mw-headline"> Логические методы классификации </span></h2>
<p>Текст лекций: <a href="/wiki/images/3/3e/Voron-ML-Logic.pdf" class="internal" title="Voron-ML-Logic.pdf">(PDF,&nbsp;625&nbsp;КБ)</a>.<br />
Презентация: <a href="/wiki/images/9/97/Voron-ML-Logic-slides.pdf" class="internal" title="Voron-ML-Logic-slides.pdf">(PDF,&nbsp;1.8&nbsp;МБ)</a> <font color="#F02020"> — обновление 6.11.2021</font>.
Видеозапись: <a href="https://youtu.be/ntkE5UVSLGw" class="external text" title="https://youtu.be/ntkE5UVSLGw" rel="nofollow">Лекция</a> 
<a href="https://youtu.be/Ap55F1IoTfk" class="external text" title="https://youtu.be/Ap55F1IoTfk" rel="nofollow">Семинар</a> 
</p>
<ul><li> Понятие <a href="/wiki/index.php?title=%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%B7%D0%B0%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B5%D1%80%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Логическая закономерность">логической закономерности</a>. 
</li><li> Параметрические семейства закономерностей: конъюнкции пороговых правил, синдромные правила, шары, гиперплоскости. 
</li><li> Переборные алгоритмы синтеза конъюнкций: <a href="/wiki/index.php?title=%D0%A1%D1%82%D0%BE%D1%85%D0%B0%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BB%D0%BE%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BE%D0%B8%D1%81%D0%BA&amp;action=edit" class="new" title="Стохастический локальный поиск">стохастический локальный поиск</a>, <a href="/wiki/index.php?title=%D0%A1%D1%82%D0%B0%D0%B1%D0%B8%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Стабилизация">стабилизация</a>, <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Редукция">редукция</a>.
</li><li> Двухкритериальный отбор информативных закономерностей, парето-оптимальный фронт в (p,n)-пространстве.
</li><li> Статистический критерий информативности, <a href="/wiki/index.php?title=%D0%A2%D0%BE%D1%87%D0%BD%D1%8B%D0%B9_%D1%82%D0%B5%D1%81%D1%82_%D0%A4%D0%B8%D1%88%D0%B5%D1%80%D0%B0" title="Точный тест Фишера">точный тест Фишера</a>. Сравнение областей эвристических и статистических закономерностей. Разнообразие критериев информативности в (p,n)-пространстве.
</li><li> <a href="/wiki/index.php?title=%D0%A0%D0%B5%D1%88%D0%B0%D1%8E%D1%89%D0%B5%D0%B5_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D0%BE" title="Решающее дерево">Решающее дерево</a>. Жадная нисходящая стратегия «разделяй и властвуй». <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_ID3&amp;action=edit" class="new" title="Алгоритм ID3">Алгоритм ID3</a>. Недостатки жадной стратегии и способы их устранения. Проблема переобучения. 
</li><li> Вывод критериев ветвления. Мера нечистоты (impurity) распределения. Энтропийный критерий, критерий Джини. 
</li><li> <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D1%80%D0%B5%D1%88%D0%B0%D1%8E%D1%89%D0%B8%D1%85_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%8C%D0%B5%D0%B2&amp;action=edit" class="new" title="Редукция решающих деревьев">Редукция решающих деревьев</a>: <a href="/wiki/index.php?title=%D0%9F%D1%80%D0%B5%D0%B4%D1%80%D0%B5%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Предредукция">предредукция</a> и <a href="/wiki/index.php?title=%D0%9F%D0%BE%D1%81%D1%82%D1%80%D0%B5%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Постредукция">постредукция</a>. <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_C4.5&amp;action=edit" class="new" title="Алгоритм C4.5">Алгоритм C4.5</a>.
</li><li> Деревья регрессии. <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_CART&amp;action=edit" class="new" title="Алгоритм CART">Алгоритм CART</a>.
</li><li> <a href="/wiki/index.php?title=%D0%9D%D0%B5%D0%B1%D1%80%D0%B5%D0%B6%D0%BD%D1%8B%D0%B5_%D1%80%D0%B5%D1%88%D0%B0%D1%8E%D1%89%D0%B8%D0%B5_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%8C%D1%8F&amp;action=edit" class="new" title="Небрежные решающие деревья">Небрежные решающие деревья</a> (oblivious decision tree).
</li><li> Решающий лес. <a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D1%87%D0%B0%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BB%D0%B5%D1%81&amp;action=edit" class="new" title="Случайный лес">Случайный лес</a> (Random Forest).
</li><li> Решающий пень. <a href="/wiki/index.php?title=%D0%91%D0%B8%D0%BD%D0%B0%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F_%D0%BF%D1%80%D0%B8%D0%B7%D0%BD%D0%B0%D0%BA%D0%BE%D0%B2&amp;action=edit" class="new" title="Бинаризация признаков">Бинаризация признаков</a>. Алгоритм разбиения области значений признака на информативные зоны.
</li><li> <a href="/wiki/index.php?title=%D0%A0%D0%B5%D1%88%D0%B0%D1%8E%D1%89%D0%B8%D0%B9_%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA&amp;action=edit" class="new" title="Решающий список">Решающий список</a>. Жадный алгоритм синтеза списка. Преобразование решающего дерева в решающий список.
</li></ul>
<p><b>Факультатив</b>
</p>
<ul><li> Асимптотическая эквивалентность статистического и энтропийного критерия информативности.
</li></ul>
<a name=".D0.9B.D0.B8.D0.BD.D0.B5.D0.B9.D0.BD.D1.8B.D0.B5_.D0.B0.D0.BD.D1.81.D0.B0.D0.BC.D0.B1.D0.BB.D0.B8"></a><h2> <span class="mw-headline"> Линейные ансамбли </span></h2>
<p>Текст лекций: <a href="/wiki/images/0/0d/Voron-ML-Compositions.pdf" class="internal" title="Voron-ML-Compositions.pdf">(PDF,&nbsp;1&nbsp;MБ)</a>.<br />
Презентация: <a href="/wiki/images/3/3a/Voron-ML-Compositions1-slides.pdf" class="internal" title="Voron-ML-Compositions1-slides.pdf">(PDF,&nbsp;1.0&nbsp;МБ)</a> <font color="#F02020">— обновление 6.11.2021</font>.
Видеозапись: <a href="https://youtu.be/-wa43XNJfVI" class="external text" title="https://youtu.be/-wa43XNJfVI" rel="nofollow">Лекция</a> <a href="https://youtu.be/ZS82juA9098" class="external text" title="https://youtu.be/ZS82juA9098" rel="nofollow">Семинар</a> 
</p>
<ul><li> Основные понятия: <a href="/wiki/index.php?title=%D0%91%D0%B0%D0%B7%D0%BE%D0%B2%D1%8B%D0%B9_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC&amp;action=edit" class="new" title="Базовый алгоритм">базовый алгоритм</a>, <a href="/wiki/index.php?title=%D0%9A%D0%BE%D1%80%D1%80%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D1%83%D1%8E%D1%89%D0%B0%D1%8F_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Корректирующая операция">корректирующая операция</a>. 
</li><li> <a href="/wiki/index.php?title=%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%B5_%D0%B3%D0%BE%D0%BB%D0%BE%D1%81%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5&amp;action=edit" class="new" title="Простое голосование">Простое голосование</a> (комитет большинства). 
</li><li> Стохастические методы: <a href="/wiki/index.php?title=%D0%91%D1%8D%D0%B3%D0%B3%D0%B8%D0%BD%D0%B3" title="Бэггинг">бэггинг</a> и <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D1%81%D0%BB%D1%83%D1%87%D0%B0%D0%B9%D0%BD%D1%8B%D1%85_%D0%BF%D0%BE%D0%B4%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2&amp;action=edit" class="new" title="Метод случайных подпространств">метод случайных подпространств</a>.
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D1%87%D0%B0%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BB%D0%B5%D1%81&amp;action=edit" class="new" title="Случайный лес">Случайный лес</a> (Random Forest). 
</li><li> <a href="/wiki/index.php?title=%D0%92%D0%B7%D0%B2%D0%B5%D1%88%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D0%B3%D0%BE%D0%BB%D0%BE%D1%81%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5&amp;action=edit" class="new" title="Взвешенное голосование">Взвешенное голосование</a>. Преобразование простого голосования во взвешенное. 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_AdaBoost" title="Алгоритм AdaBoost">Алгоритм AdaBoost</a>. Экспоненциальная аппроксимация пороговой функции потерь. Процесс последовательного обучения базовых алгоритмов. Теорема о сходимости <a href="/wiki/index.php?title=%D0%91%D1%83%D1%81%D1%82%D0%B8%D0%BD%D0%B3" title="Бустинг">бустинга</a>. Идентификация нетипичных объектов (выбросов). 
</li><li> Теоретические обоснования. Обобщающая способность бустинга. 
</li><li> Базовые алгоритмы в бустинге. Решающие пни.
</li><li> Сравнение бэггинга и бустинга.
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_ComBoost&amp;action=edit" class="new" title="Алгоритм ComBoost">Алгоритм ComBoost</a>. Обобщение на большое число классов.
</li></ul>
<a name=".D0.9F.D1.80.D0.BE.D0.B4.D0.B2.D0.B8.D0.BD.D1.83.D1.82.D1.8B.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.B0.D0.BD.D1.81.D0.B0.D0.BC.D0.B1.D0.BB.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F"></a><h2> <span class="mw-headline"> Продвинутые методы ансамблирования </span></h2>
<p>Презентация: <a href="/wiki/images/2/21/Voron-ML-Compositions-slides2.pdf" class="internal" title="Voron-ML-Compositions-slides2.pdf">(PDF,&nbsp;1.2&nbsp;МБ)</a> <font color="#F02020">— обновление 22.04.2021</font>.
Видеозапись: <a href="https://youtu.be/KRURAkRMo4k" class="external text" title="https://youtu.be/KRURAkRMo4k" rel="nofollow">Лекция</a> <a href="https://youtu.be/JaxB8PdbeUw" class="external text" title="https://youtu.be/JaxB8PdbeUw" rel="nofollow">Семинар</a>
</p>
<ul><li> Виды ансамблей. Теоретические обоснования. Анализ смещения и разброса для простого голосования.
</li><li> <a href="/wiki/index.php?title=%D0%93%D1%80%D0%B0%D0%B4%D0%B8%D0%B5%D0%BD%D1%82%D0%BD%D1%8B%D0%B9_%D0%B1%D1%83%D1%81%D1%82%D0%B8%D0%BD%D0%B3" class="mw-redirect" title="Градиентный бустинг">Градиентный бустинг</a>. Стохастический градиентный бустинг. 
</li><li> Варианты бустинга: регрессия, <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_AnyBoost" title="Алгоритм AnyBoost">Алгоритм AnyBoost</a>, <a href="/wiki/index.php?title=GentleBoost&amp;action=edit" class="new" title="GentleBoost">GentleBoost</a>, <a href="/wiki/index.php?title=LogitBoost&amp;action=edit" class="new" title="LogitBoost">LogitBoost</a>, <a href="/wiki/index.php?title=BrownBoost&amp;action=edit" class="new" title="BrownBoost">BrownBoost</a>, и другие.
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_XGBoost&amp;action=edit" class="new" title="Алгоритм XGBoost">Алгоритм XGBoost</a>. 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_CatBoost&amp;action=edit" class="new" title="Алгоритм CatBoost">Алгоритм CatBoost</a>. Обработка категориальных признаков. 
</li><li> <a href="/wiki/index.php?title=%D0%A1%D1%82%D1%8D%D0%BA%D0%B8%D0%BD%D0%B3&amp;action=edit" class="new" title="Стэкинг">Стэкинг</a>. Линейный стэкинг, взвешенный по признакам. 
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%BC%D0%B5%D1%81%D1%8C_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%D0%BE%D0%B2&amp;action=edit" class="new" title="Смесь алгоритмов">Смесь алгоритмов</a> (квазилинейная композиция), <a href="/wiki/index.php?title=%D0%9E%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C_%D0%BA%D0%BE%D0%BC%D0%BF%D0%B5%D1%82%D0%B5%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%B8&amp;action=edit" class="new" title="Область компетентности">область компетентности</a>, примеры функций компетентности. 
</li><li> Выпуклые функции потерь. Методы построения смесей: последовательный и иерархический. 
</li><li> Построение смеси алгоритмов с помощью EM-подобного алгоритма. 
</li></ul>
<a name=".D0.92.D0.BE.D1.81.D1.81.D1.82.D0.B0.D0.BD.D0.BE.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D0.B5_.D0.BF.D0.BB.D0.BE.D1.82.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D1.80.D0.B0.D1.81.D0.BF.D1.80.D0.B5.D0.B4.D0.B5.D0.BB.D0.B5.D0.BD.D0.B8.D1.8F"></a><h2> <span class="mw-headline"> Восстановление плотности распределения </span></h2>
<p>Презентация: <a href="/wiki/images/d/df/Voron-DE-slides.pdf" class="internal" title="Voron-DE-slides.pdf">(PDF,&nbsp;1,1&nbsp;МБ)</a> <font color="#F02020">— обновление 20.11.2021</font>.
Видеозапись: <a href="https://youtu.be/ly7v6W9-lB8" class="external text" title="https://youtu.be/ly7v6W9-lB8" rel="nofollow">Лекция</a> <a href="https://youtu.be/M8A0Wu5iPwQ" class="external text" title="https://youtu.be/M8A0Wu5iPwQ" rel="nofollow">Семинар</a>
</p>
<ul><li> Параметрическое оценивание плотности. <a href="/wiki/index.php?title=%D0%9C%D0%BD%D0%BE%D0%B3%D0%BE%D0%BC%D0%B5%D1%80%D0%BD%D0%BE%D0%B5_%D0%BD%D0%BE%D1%80%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D1%80%D0%B0%D1%81%D0%BF%D1%80%D0%B5%D0%B4%D0%B5%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5" class="mw-redirect" title="Многомерное нормальное распределение">Многомерное нормальное распределение</a>, геометрическая интерпретация. 
</li><li> Выборочные оценки параметров многомерного нормального распределения. Проблемы <a href="/wiki/index.php?title=%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BA%D0%BE%D0%BB%D0%BB%D0%B8%D0%BD%D0%B5%D0%B0%D1%80%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Мультиколлинеарность">мультиколлинеарности</a> и <a href="/wiki/index.php?title=%D0%9F%D0%B5%D1%80%D0%B5%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Переобучение">переобучения</a>. <a href="/wiki/index.php?title=%D0%A0%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Регуляризация">Регуляризация</a> ковариационной матрицы. 
</li><li> <i>Матричное дифференцирование. Вывод оценок параметров многомерного нормального распределения.</i>
</li><li> Непараметрическое оценивание плотности. <a href="/wiki/index.php?title=%D0%AF%D0%B4%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%BE%D1%86%D0%B5%D0%BD%D0%BA%D0%B0_%D0%BF%D0%BB%D0%BE%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%B8_%D0%9F%D0%B0%D1%80%D0%B7%D0%B5%D0%BD%D0%B0-%D0%A0%D0%BE%D0%B7%D0%B5%D0%BD%D0%B1%D0%BB%D0%B0%D1%82%D1%82%D0%B0&amp;action=edit" class="new" title="Ядерная оценка плотности Парзена-Розенблатта">Ядерная оценка плотности Парзена-Розенблатта</a>. Одномерный и многомерный случаи.
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%BC%D0%B5%D1%81%D1%8C_%D1%80%D0%B0%D1%81%D0%BF%D1%80%D0%B5%D0%B4%D0%B5%D0%BB%D0%B5%D0%BD%D0%B8%D0%B9&amp;action=edit" class="new" title="Смесь распределений">Смесь распределений</a>. <a href="/wiki/index.php?title=EM-%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC" class="mw-redirect" title="EM-алгоритм">EM-алгоритм</a> как метод простых итераций. Обобщённый EM-алгоритм. Стохастический EM-алгоритм. 
</li><li> Детали реализации EM-алгоритма. Критерий останова. Выбор начального приближения. 
</li><li> Выбор числа компонентов смеси. Пошаговая стратегия. Иерархический EM-алгоритм.  
</li></ul>
<a name=".D0.91.D0.B0.D0.B9.D0.B5.D1.81.D0.BE.D0.B2.D1.81.D0.BA.D0.B0.D1.8F_.D1.82.D0.B5.D0.BE.D1.80.D0.B8.D1.8F_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8"></a><h2> <span class="mw-headline"> Байесовская теория классификации </span></h2>
<p>Презентация: <a href="/wiki/images/e/e9/Voron-ML-BTC-slides.pdf" class="internal" title="Voron-ML-BTC-slides.pdf">(PDF,&nbsp;1,1&nbsp;МБ)</a> <font color="#F02020">— обновление 27.11.2021</font>.
Видеозапись: <a href="https://youtu.be/ly7v6W9-lB8" class="external text" title="https://youtu.be/ly7v6W9-lB8" rel="nofollow">Лекция</a> <a href="https://youtu.be/M8A0Wu5iPwQ" class="external text" title="https://youtu.be/M8A0Wu5iPwQ" rel="nofollow">Семинар</a>
</p>
<ul><li> Байесовская теория классификации. Оптимальный байесовский классификатор. 
</li><li> Генеративные и дискриминативные модели классификации.
</li><li> Наивный байесовский классификатор. Линейный наивный байесовский классификатор в случае экспоненциального семейства распределений. 
</li><li> Мультиномиальный наивный байесовский классификатор для классификации текстов. 
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BF%D0%B0%D1%80%D0%B7%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D0%BE%D0%BA%D0%BD%D0%B0" title="Метод парзеновского окна">Метод парзеновского окна</a>. Выбор функции ядра. Выбор ширины окна, переменная ширина окна. 
</li><li> <a href="/wiki/index.php?title=%D0%9D%D0%BE%D1%80%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA%D1%80%D0%B8%D0%BC%D0%B8%D0%BD%D0%B0%D0%BD%D1%82%D0%BD%D1%8B%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7&amp;action=edit" class="new" title="Нормальный дискриминантный анализ">Нормальный дискриминантный анализ</a>. <a href="/wiki/index.php?title=%D0%9A%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82%D0%B8%D1%87%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA%D1%80%D0%B8%D0%BC%D0%B8%D0%BD%D0%B0%D0%BD%D1%82" title="Квадратичный дискриминант">Квадратичный дискриминант</a>. Вид разделяющей поверхности. <a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%B4%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BE%D1%87%D0%BD%D1%8B%D0%B9_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC&amp;action=edit" class="new" title="Подстановочный алгоритм">Подстановочный алгоритм</a>, его недостатки и способы их устранения. <a href="/wiki/index.php?title=%D0%9B%D0%B8%D0%BD%D0%B5%D0%B9%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA%D1%80%D0%B8%D0%BC%D0%B8%D0%BD%D0%B0%D0%BD%D1%82_%D0%A4%D0%B8%D1%88%D0%B5%D1%80%D0%B0" title="Линейный дискриминант Фишера">Линейный дискриминант Фишера</a>. 
</li><li> <i>Связь линейного дискриминанта Фишера с <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BD%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D1%8C%D1%88%D0%B8%D1%85_%D0%BA%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82%D0%BE%D0%B2" title="Метод наименьших квадратов">методом наименьших квадратов</a>.</i> 
</li><li> Смесь многомерных нормальных распределений. <a href="/wiki/index.php?title=%D0%A1%D0%B5%D1%82%D1%8C_%D1%80%D0%B0%D0%B4%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85_%D0%B1%D0%B0%D0%B7%D0%B8%D1%81%D0%BD%D1%8B%D1%85_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B9" title="Сеть радиальных базисных функций">Сеть радиальных базисных функций</a> (RBF) и применение EM-алгоритма для её настройки. Сравнение RBF-сети и SVM с гауссовским ядром.
</li></ul>
<a name=".D0.9A.D0.BB.D0.B0.D1.81.D1.82.D0.B5.D1.80.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D1.8F_.D0.B8_.D1.87.D0.B0.D1.81.D1.82.D0.B8.D1.87.D0.BD.D0.BE.D0.B5_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"></a><h2> <span class="mw-headline"> Кластеризация и частичное обучение </span></h2>
<p>Презентация: <a href="/wiki/images/5/52/Voron-ML-Clustering-SSL-slides.pdf" class="internal" title="Voron-ML-Clustering-SSL-slides.pdf">(PDF,&nbsp;1,6&nbsp;МБ)</a> <font color="#F02020">— обновление 4.12.2021</font>.
Видеозапись: <a href="https://youtu.be/Zfm1rxtjKFc" class="external text" title="https://youtu.be/Zfm1rxtjKFc" rel="nofollow">Лекция</a> <a href="https://youtu.be/pobOLM1MVfc" class="external text" title="https://youtu.be/pobOLM1MVfc" rel="nofollow">Семинар</a>
</p>
<ul><li> Постановка задачи <a href="/wiki/index.php?title=%D0%9A%D0%BB%D0%B0%D1%81%D1%82%D0%B5%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Кластеризация">кластеризации</a>. Примеры прикладных задач. Типы кластерных структур. 
</li><li> Постановка задачи Semisupervised Learning, примеры приложений. 
</li><li> Оптимизационные постановки задач кластеризации и частичного обучения. 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_k-%D1%81%D1%80%D0%B5%D0%B4%D0%BD%D0%B8%D1%85&amp;action=edit" class="new" title="Алгоритм k-средних">Алгоритм k-средних</a> и <a href="/wiki/index.php?title=%D0%95%D0%9C-%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC" class="mw-redirect" title="ЕМ-алгоритм">ЕМ-алгоритм</a> для разделения гауссовской смеси. 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_DBSCAN&amp;action=edit" class="new" title="Алгоритм DBSCAN">Алгоритм DBSCAN</a>.
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%B3%D0%BB%D0%BE%D0%BC%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%BA%D0%BB%D0%B0%D1%81%D1%82%D0%B5%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F&amp;action=edit" class="new" title="Агломеративная кластеризация">Агломеративная кластеризация</a>, <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_%D0%9B%D0%B0%D0%BD%D1%81%D0%B0-%D0%92%D0%B8%D0%BB%D1%8C%D1%8F%D0%BC%D1%81%D0%B0&amp;action=edit" class="new" title="Алгоритм Ланса-Вильямса">Алгоритм Ланса-Вильямса</a> и его частные случаи. 
</li><li> Алгоритм построения <a href="/wiki/index.php?title=%D0%94%D0%B5%D0%BD%D0%B4%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0&amp;action=edit" class="new" title="Дендрограмма">дендрограммы</a>. Определение числа кластеров. 
</li><li> Свойства сжатия/растяжения и монотонности. 
</li><li> Простые эвристические методы частичного обучения: self-training, co-training, co-learning.
</li><li> Трансдуктивный метод опорных векторов TSVM. 
</li><li> Алгоритм Expectation-Regularization на основе многоклассовой регуляризированной логистической регрессии.
</li></ul>
<a name=".D0.A1.D0.B5.D0.BC.D0.B5.D1.81.D1.82.D1.80_2._.D0.9F.D1.80.D0.B8.D0.BA.D0.BB.D0.B0.D0.B4.D0.BD.D1.8B.D0.B5_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D0.B8_.D0.BC.D0.B0.D1.88.D0.B8.D0.BD.D0.BD.D0.BE.D0.B3.D0.BE_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D1.8F"></a><h1> <span class="mw-headline"> Семестр 2. Прикладные модели машинного обучения </span></h1>
<a name=".D0.93.D0.BB.D1.83.D0.B1.D0.BE.D0.BA.D0.B8.D0.B5_.D0.BD.D0.B5.D0.B9.D1.80.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B5.D1.82.D0.B8"></a><h2> <span class="mw-headline"> Глубокие нейронные сети </span></h2>
<p>Презентация: <a href="/wiki/images/7/71/Voron-ML-DeepLearning-slides.pdf" class="internal" title="Voron-ML-DeepLearning-slides.pdf">(PDF,&nbsp;4,3&nbsp;МБ)</a> <font color="#F02020">— обновление 4.02.2022</font>.
Видеозапись: <a href="https://youtu.be/x3TKdZi7Mo4" class="external text" title="https://youtu.be/x3TKdZi7Mo4" rel="nofollow">Лекция</a> <a href="https://youtu.be/_zhKsIze8QU" class="external text" title="https://youtu.be/_zhKsIze8QU" rel="nofollow">Семинар</a>
</p>
<ul><li> Обоснования глубоких нейронных сетей: выразительные возможности, скорость сходимости при избыточной параметризации. 
</li><li> Свёрточные нейронные сети (CNN) для изображений. Свёрточный нейрон. Pooling нейрон. Выборка размеченных изображений ImageNet.
</li><li> ResNet: остаточная нейронная сеть (residual NN). Сквозные связи между слоями (skip connection).
</li><li> Свёрточные сети для сигналов, текстов, графов, игр. 
</li><li> Рекуррентные нейронные сети (RNN). Обучение рекуррентных сетей: Backpropagation Through Time (BPTT).
</li><li> Сети долгой кратковременной памяти (Long short-term memory, LSTM). 
</li><li> Рекуррентные сети Gated Recurrent Unit (GRU) и Simple Recurrent Unit (SRU).
</li></ul>
<a name=".D0.9D.D0.B5.D0.B9.D1.80.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B5.D1.82.D0.B8_.D1.81_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5.D0.BC_.D0.B1.D0.B5.D0.B7_.D1.83.D1.87.D0.B8.D1.82.D0.B5.D0.BB.D1.8F"></a><h2> <span class="mw-headline"> Нейронные сети с обучением без учителя </span></h2>
<p>Презентация: <a href="/wiki/images/5/53/Voron-ML-ANN-Unsupervised-slides.pdf" class="internal" title="Voron-ML-ANN-Unsupervised-slides.pdf">(PDF,&nbsp;2,3&nbsp;МБ)</a> <font color="#F02020">— обновление 11.02.2022</font>.
Видеозапись: <a href="https://youtu.be/wfbe2yaXAkI" class="external text" title="https://youtu.be/wfbe2yaXAkI" rel="nofollow">Лекция</a> <a href="https://youtu.be/wCX-8AiYYzk" class="external text" title="https://youtu.be/wCX-8AiYYzk" rel="nofollow">Семинар</a>
</p>
<ul><li> <a href="/wiki/index.php?title=%D0%9D%D0%B5%D0%B9%D1%80%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B5%D1%82%D1%8C_%D0%9A%D0%BE%D1%85%D0%BE%D0%BD%D0%B5%D0%BD%D0%B0" title="Нейронная сеть Кохонена">Нейронная сеть Кохонена</a>. <a href="/wiki/index.php?title=%D0%9A%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D0%B5%D0%BD%D1%82%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5&amp;action=edit" class="new" title="Конкурентное обучение">Конкурентное обучение</a>, стратегии WTA и WTM. 
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%B0%D0%BC%D0%BE%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D1%83%D1%8E%D1%89%D0%B0%D1%8F%D1%81%D1%8F_%D0%BA%D0%B0%D1%80%D1%82%D0%B0_%D0%9A%D0%BE%D1%85%D0%BE%D0%BD%D0%B5%D0%BD%D0%B0" class="mw-redirect" title="Самоорганизующаяся карта Кохонена">Самоорганизующаяся карта Кохонена</a>. Применение для визуального анализа данных. Искусство интерпретации карт Кохонена.
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%B2%D1%82%D0%BE%D0%BA%D0%BE%D0%B4%D0%B8%D1%80%D0%BE%D0%B2%D1%89%D0%B8%D0%BA&amp;action=edit" class="new" title="Автокодировщик">Автокодировщик</a>. Линейный AE, SAE, DAE, CAE, RAE, VAE, AE для классификации, многослойный AE.
</li><li> Пред-обучение нейронных сетей (pre-training).
</li><li> Перенос обучения (transfer learning). 
</li><li> Многозадачное обучение (multi-task learning).
</li><li> Самостоятельное обучение (self-supervised learning).
</li><li> Дистилляция моделей или суррогатное моделирование.
</li><li> Обучение с использованием привилегированной информации (learning using priveleged information, LUPI).
</li><li> Генеративные состязательные сети (generative adversarial net, GAN).
</li></ul>
<a name=".D0.92.D0.B5.D0.BA.D1.82.D0.BE.D1.80.D0.BD.D1.8B.D0.B5_.D0.BF.D1.80.D0.B5.D0.B4.D1.81.D1.82.D0.B0.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D1.8F_.D1.82.D0.B5.D0.BA.D1.81.D1.82.D0.BE.D0.B2_.D0.B8_.D0.B3.D1.80.D0.B0.D1.84.D0.BE.D0.B2"></a><h2> <span class="mw-headline"> Векторные представления текстов и графов </span></h2>
<p>Презентация: <a href="/wiki/images/9/98/Voron-ML-Embeddings-slides.pdf" class="internal" title="Voron-ML-Embeddings-slides.pdf">(PDF,&nbsp;1,0&nbsp;МБ)</a> <font color="#F02020">— обновление 19.02.2021</font>.
Видеозапись: <a href="https://youtu.be/QJK8PRfKD2g" class="external text" title="https://youtu.be/QJK8PRfKD2g" rel="nofollow">Лекция</a> <a href="https://youtu.be/NtS9Dp4XhGE" class="external text" title="https://youtu.be/NtS9Dp4XhGE" rel="nofollow">Семинар</a>
</p>
<ul><li> Векторные представления текста. Гипотеза дистрибутивной семантики.
</li><li> Модели CBOW и SGNS из программы <a href="/wiki/index.php?title=Word2vec&amp;action=edit" class="new" title="Word2vec">word2vec</a>. Иерархический SoftMax. 
</li><li> Модель <a href="/wiki/index.php?title=FastText&amp;action=edit" class="new" title="FastText">FastText</a>.
</li><li> Векторные представления графов. 
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%BD%D0%BE%D0%B3%D0%BE%D0%BC%D0%B5%D1%80%D0%BD%D0%BE%D0%B5_%D1%88%D0%BA%D0%B0%D0%BB%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5&amp;action=edit" class="new" title="Многомерное шкалирование">Многомерное шкалирование</a> (multidimensional scaling, MDS).
</li><li> Векторное представление соседства (stochastic neighbor embedding, SNE и tSNE).
</li><li> Матричные разложения (graph factorization).
</li><li> Модели случайных блужданий <a href="/wiki/index.php?title=DeepWalk&amp;action=edit" class="new" title="DeepWalk">DeepWalk</a>, <a href="/wiki/index.php?title=Node2vec&amp;action=edit" class="new" title="Node2vec">node2vec</a>.
</li><li> Обобщённый автокодировщик на графах <a href="/wiki/index.php?title=GraphEDM&amp;action=edit" class="new" title="GraphEDM">GraphEDM</a>.
</li><li> Представление о графовых нейронных сетях (graph neural network, GNN). Передача сообщений по графу (message passing).
</li></ul>
<a name=".D0.9C.D0.BE.D0.B4.D0.B5.D0.BB.D0.B8_.D0.B2.D0.BD.D0.B8.D0.BC.D0.B0.D0.BD.D0.B8.D1.8F_.D0.B8_.D1.82.D1.80.D0.B0.D0.BD.D1.81.D1.84.D0.BE.D1.80.D0.BC.D0.B5.D1.80.D1.8B"></a><h2> <span class="mw-headline"> Модели внимания и трансформеры </span></h2>
<p>Презентация: <a href="/wiki/images/1/19/Voron-ML-Attention-slides.pdf" class="internal" title="Voron-ML-Attention-slides.pdf">(PDF,&nbsp;1,1&nbsp;МБ)</a> <font color="#F02020">— обновление 02.03.2021</font>.
Видеозапись: <a href="https://youtu.be/KhMweP00S44" class="external text" title="https://youtu.be/KhMweP00S44" rel="nofollow">Лекция</a> <a href="https://youtu.be/GfUadGOcwtc" class="external text" title="https://youtu.be/GfUadGOcwtc" rel="nofollow">Семинар</a>
</p>
<ul><li> Задачи обработки и преобразования последовательностей (sequence to sequence).
</li><li> Рекуррентная сеть с моделью внимания. 
</li><li> Разновидности моделей внимания: многомерное, иерархическое, Query–Key–Value, внутреннее (self-attention). 
</li><li> Модели внимания на графах (Graph Attention Network). Задача классификации вершин графа.  
</li><li> Трансформеры. Особенности архитектуры кодировщика и декодировщка.  
</li><li> Критерии обучения и оценивание качества (предобучение). Модель BERT.
</li><li> Прикладные задачи: машинный перевод, аннотирование изображений.
</li><li> Модели внимания и трансформеры для текстов, изображений, графов.
</li></ul>
<a name=".D0.A2.D0.B5.D0.BC.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.BE.D0.B5_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></a><h2> <span class="mw-headline"> Тематическое моделирование </span></h2>
<p>Презентация: <a href="/wiki/images/e/e6/Voron-ML-TopicModeling-slides.pdf" class="internal" title="Voron-ML-TopicModeling-slides.pdf">(PDF,&nbsp;6.3&nbsp;МБ)</a> <font color="#F02020"> — обновление 05.03.2021</font>.
Видеозапись: <a href="https://youtu.be/Eqm8-YqUzAc" class="external text" title="https://youtu.be/Eqm8-YqUzAc" rel="nofollow">Лекция</a> <a href="https://youtu.be/xxwMuxM4AEg" class="external text" title="https://youtu.be/xxwMuxM4AEg" rel="nofollow">Семинар</a>
</p>
<ul><li> Задача <a href="/wiki/index.php?title=%D0%A2%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B5_%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Тематическое моделирование">тематического моделирования</a> коллекции текстовых документов. <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BC%D0%B0%D0%BA%D1%81%D0%B8%D0%BC%D1%83%D0%BC%D0%B0_%D0%BF%D1%80%D0%B0%D0%B2%D0%B4%D0%BE%D0%BF%D0%BE%D0%B4%D0%BE%D0%B1%D0%B8%D1%8F&amp;action=edit" class="new" title="Метод максимума правдоподобия">Метод максимума правдоподобия</a>. 
</li><li> Лемма о максимизации гладкой функции на симплексах (применение условий Каруша–Куна–Таккера). 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%B4%D0%B4%D0%B8%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D1%80%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F_%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D1%85_%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D0%B5%D0%B9" title="Аддитивная регуляризация тематических моделей">Аддитивная регуляризация тематических моделей</a>. Регуляризованный EM-алгоритм, теорема о стационарной точке. Элементарная интерпретация EM-алгоритма.
</li><li> <a href="/wiki/index.php?title=%D0%92%D0%B5%D1%80%D0%BE%D1%8F%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9_%D0%BB%D0%B0%D1%82%D0%B5%D0%BD%D1%82%D0%BD%D1%8B%D0%B9_%D1%81%D0%B5%D0%BC%D0%B0%D0%BD%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7" title="Вероятностный латентный семантический анализ">Вероятностный латентный семантический анализ</a> PLSA. <a href="/wiki/index.php?title=%D0%95%D0%9C-%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC" class="mw-redirect" title="ЕМ-алгоритм">ЕМ-алгоритм</a>.    
</li><li> <a href="/wiki/index.php?title=%D0%9B%D0%B0%D1%82%D0%B5%D0%BD%D1%82%D0%BD%D0%BE%D0%B5_%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%89%D0%B5%D0%BD%D0%B8%D0%B5_%D0%94%D0%B8%D1%80%D0%B8%D1%85%D0%BB%D0%B5&amp;action=edit" class="new" title="Латентное размещение Дирихле">Латентное размещение Дирихле</a> LDA. <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%BC%D0%B0%D0%BA%D1%81%D0%B8%D0%BC%D1%83%D0%BC%D0%B0_%D0%B0%D0%BF%D0%BE%D1%81%D1%82%D0%B5%D1%80%D0%B8%D0%BE%D1%80%D0%BD%D0%BE%D0%B9_%D0%B2%D0%B5%D1%80%D0%BE%D1%8F%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%B8&amp;action=edit" class="new" title="Метод максимума апостериорной вероятности">Метод максимума апостериорной вероятности</a>. Сглаженная частотная оценка условной вероятности. Небайесовская интерпретация LDA. 
</li><li> Регуляризаторы разреживания, сглаживания, частичного обучения, декоррелирования.
</li><li> Мультимодальная тематическая модель. Мультиязычная тематическая модель. 
</li><li> Регуляризаторы классификации и регрессии. 
</li><li> Модель битермов WNTM. Модель связанных документов. Иерархическая тематическая модель.  
</li><li> Внутренние и внешние критерии качества тематических моделей.
</li></ul>
<a name=".D0.9E.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5_.D1.80.D0.B0.D0.BD.D0.B6.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8E"></a><h2> <span class="mw-headline"> Обучение ранжированию </span></h2>
<p>Презентация: <a href="/wiki/images/8/89/Voron-ML-Ranking-slides.pdf" class="internal" title="Voron-ML-Ranking-slides.pdf">(PDF,&nbsp;0,8&nbsp;МБ)</a> <font color="#F02020">— обновление 11.04.2021</font>.
Видеозапись: <a href="https://youtu.be/kQ5PeshAO1w" class="external text" title="https://youtu.be/kQ5PeshAO1w" rel="nofollow">Лекция</a> <a href="https://youtu.be/cN5WoTRJYtY" class="external text" title="https://youtu.be/cN5WoTRJYtY" rel="nofollow">Семинар</a>
</p>
<ul><li> Постановка задачи <a href="/wiki/index.php?title=%D0%9E%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%D1%80%D0%B0%D0%BD%D0%B6%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8E&amp;action=edit" class="new" title="Обучение ранжированию">обучения ранжированию</a>. Примеры. 
</li><li> Поточечные методы Ранговая регрессия. Ранговая классификация, OC-SVM. 
</li><li> Попарные методы: RankingSVM, RankNet, LambdaRank.
</li><li> Списочные методы. 
</li><li> Признаки в задаче ранжирования поисковой выдачи: текстовые, ссылочные, кликовые. <a href="/wiki/index.php?title=TF-IDF&amp;action=edit" class="new" title="TF-IDF">TF-IDF</a>, <a href="/wiki/index.php?title=Okapi_BM25&amp;action=edit" class="new" title="Okapi BM25">Okapi BM25</a>, <a href="/wiki/index.php?title=PageRank&amp;action=edit" class="new" title="PageRank">PageRank</a>.
</li><li> Критерии качества ранжирования: Precision, MAP, AUC, DCG, NDCG, pFound.
</li><li> Глубокая структурированная семантическая модель <a href="/wiki/index.php?title=DSSM&amp;action=edit" class="new" title="DSSM">DSSM</a> (Deep Structured Semantic Model).
</li></ul>
<a name=".D0.A0.D0.B5.D0.BA.D0.BE.D0.BC.D0.B5.D0.BD.D0.B4.D0.B0.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D1.8B"></a><h2> <span class="mw-headline"> Рекомендательные системы </span></h2>
<p>Презентация: <a href="/wiki/images/9/95/Voron-ML-CF.pdf" class="internal" title="Voron-ML-CF.pdf">(PDF,&nbsp;0.8&nbsp;МБ)</a> <font color="#F02020"> — обновление 11.04.2021</font>.
Видеозапись: <a href="https://youtu.be/FW5UdtMwlpw" class="external text" title="https://youtu.be/FW5UdtMwlpw" rel="nofollow">Лекция</a> <a href="https://youtu.be/Rge1_Bnr8JI" class="external text" title="https://youtu.be/Rge1_Bnr8JI" rel="nofollow">Семинар</a>
</p>
<ul><li> Задачи <a href="/wiki/index.php?title=%D0%9A%D0%BE%D0%BB%D0%BB%D0%B0%D0%B1%D0%BE%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D1%84%D0%B8%D0%BB%D1%8C%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%8F" title="Коллаборативная фильтрация">коллаборативной фильтрации</a>, <a href="/wiki/index.php?title=%D0%A2%D1%80%D0%B0%D0%BD%D0%B7%D0%B0%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5&amp;action=edit" class="new" title="Транзакционные данные">транзакционные данные</a>. 
</li><li> Корреляционные методы user-based, item-based. Задача восстановления пропущенных значений. Меры сходства. 
</li><li> Разреженная линейная модель (Sparse LInear Method, SLIM).
</li><li> Латентные методы на основе матричных разложений. <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D1%8B%D1%85_%D0%BA%D0%BE%D0%BC%D0%BF%D0%BE%D0%BD%D0%B5%D0%BD%D1%82" title="Метод главных компонент">Метод главных компонент</a> для разреженных данных (LFM, Latent Factor Model). <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D1%81%D1%82%D0%BE%D1%85%D0%B0%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D0%B3%D1%80%D0%B0%D0%B4%D0%B8%D0%B5%D0%BD%D1%82%D0%B0" title="Метод стохастического градиента">Метод стохастического градиента</a>. 
</li><li> Неотрицательные матричные разложения NNMF. Метод чередующихся наименьших квадратов ALS. <a href="/wiki/index.php?title=%D0%92%D0%B5%D1%80%D0%BE%D1%8F%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9_%D0%BB%D0%B0%D1%82%D0%B5%D0%BD%D1%82%D0%BD%D1%8B%D0%B9_%D1%81%D0%B5%D0%BC%D0%B0%D0%BD%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7" title="Вероятностный латентный семантический анализ">Вероятностный латентный семантический анализ</a> PLSA.
</li><li> Модель с учётом неявной информации (implicit feedback).
</li><li> Автокодировщики для коллаборативной фильтрации. 
</li><li> Учёт дополнительных признаковых данных в матричных разложениях и автокодировщиках. 
</li><li> Линейная и квадратичная регрессионные модели, <a href="/wiki/index.php?title=LibFM&amp;action=edit" class="new" title="LibFM">libFM</a>.
</li><li> Гиперграфовая транзакционная тематическая модель для учёта дополнительных данных. 
</li><li> Измерение качества рекомендаций. Меры разнообразия (diversity), новизны (novelty), покрытия (coverage), догадливости (serendipity).
</li></ul>
<a name=".D0.9F.D0.BE.D0.B8.D1.81.D0.BA_.D0.B0.D1.81.D1.81.D0.BE.D1.86.D0.B8.D0.B0.D1.82.D0.B8.D0.B2.D0.BD.D1.8B.D1.85_.D0.BF.D1.80.D0.B0.D0.B2.D0.B8.D0.BB"></a><h2> <span class="mw-headline"> Поиск ассоциативных правил </span></h2>
<p>Презентация: <a href="/wiki/images/7/7c/Voron-ML-AssocRules-slides.pdf" class="internal" title="Voron-ML-AssocRules-slides.pdf">(PDF,&nbsp;1.3&nbsp;МБ)</a> <font color="#F02020"> — обновление 7.11.2020</font>.
Видеозапись: <a href="https://youtu.be/jKl2jFQVh94" class="external text" title="https://youtu.be/jKl2jFQVh94" rel="nofollow">Лекция</a> <a href="https://youtu.be/WmJKfCl9P7Y" class="external text" title="https://youtu.be/WmJKfCl9P7Y" rel="nofollow">Семинар</a> 
</p>
<ul><li> Понятие <a href="/wiki/index.php?title=%D0%90%D1%81%D1%81%D0%BE%D1%86%D0%B8%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%BE&amp;action=edit" class="new" title="Ассоциативное правило">ассоциативного правила</a> и его связь с понятием логической закономерности. 
</li><li> Примеры прикладных задач: <a href="/wiki/index.php?title=%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7_%D1%80%D1%8B%D0%BD%D0%BE%D1%87%D0%BD%D1%8B%D1%85_%D0%BA%D0%BE%D1%80%D0%B7%D0%B8%D0%BD&amp;action=edit" class="new" title="Анализ рыночных корзин">анализ рыночных корзин</a>, выделение терминов и тематики текстов. 
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_APriori&amp;action=edit" class="new" title="Алгоритм APriori">Алгоритм APriori</a>. Два этапа: поиск частых наборов и рекурсивное порождение ассоциативных правил. Недостатки и пути усовершенствования алгоритма APriori.
</li><li> <a href="/wiki/index.php?title=%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC_FP-growth&amp;action=edit" class="new" title="Алгоритм FP-growth">Алгоритм FP-growth</a>. Понятия FP-дерева и условного FP-дерева. Два этапа поиска частых наборов в FP-growth: построение FP-дерева и рекурсивное порождение частых наборов. 
</li><li> Общее представление о динамических и иерархических методах поиска ассоциативных правил.
</li></ul>
<a name=".D0.90.D0.B4.D0.B0.D0.BF.D1.82.D0.B8.D0.B2.D0.BD.D1.8B.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.BF.D1.80.D0.BE.D0.B3.D0.BD.D0.BE.D0.B7.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F"></a><h2> <span class="mw-headline"> Адаптивные методы прогнозирования </span></h2>
<p>Презентация: <a href="/wiki/images/c/cb/Voron-ML-forecasting-slides.pdf" class="internal" title="Voron-ML-forecasting-slides.pdf">(PDF,&nbsp;0,9&nbsp;MБ)</a> <font color="#F02020">— обновление 14.12.2019</font>.
Видеозапись: <a href="https://youtu.be/HyWm8FKzyPw" class="external text" title="https://youtu.be/HyWm8FKzyPw" rel="nofollow">Лекция</a> <a href="https://youtu.be/hxKdtWVqEhg" class="external text" title="https://youtu.be/hxKdtWVqEhg" rel="nofollow">Семинар</a> 
<a href="https://youtu.be/u433nrxdf5k" class="external text" title="https://youtu.be/u433nrxdf5k" rel="nofollow">Видеозапись лекции Евгения Рябенко</a>
</p>
<ul><li> Задача прогнозирования временных рядов. Примеры приложений. 
</li><li> <a href="/wiki/index.php?title=%D0%AD%D0%BA%D1%81%D0%BF%D0%BE%D0%BD%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D1%81%D0%B3%D0%BB%D0%B0%D0%B6%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Экспоненциальное сглаживание">Экспоненциальное скользящее среднее</a>. <a href="/wiki/index.php?title=%D0%9C%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C_%D0%A5%D0%BE%D0%BB%D1%8C%D1%82%D0%B0" title="Модель Хольта">Модель Хольта</a>. <a href="/wiki/index.php?title=%D0%9C%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C_%D0%A2%D0%B5%D0%B9%D0%BB%D0%B0-%D0%92%D0%B5%D0%B9%D0%B4%D0%B6%D0%B0" title="Модель Тейла-Вейджа">Модель Тейла-Вейджа</a>. <a href="/wiki/index.php?title=%D0%9C%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C_%D0%A5%D0%BE%D0%BB%D1%8C%D1%82%D0%B0-%D0%A3%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%81%D0%B0" title="Модель Хольта-Уинтерса">Модель Хольта-Уинтерса</a>.
</li><li> Адаптивная авторегрессионная модель.
</li><li> <a href="/wiki/index.php?title=%D0%A1%D0%BB%D0%B5%D0%B4%D1%8F%D1%89%D0%B8%D0%B9_%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%81%D0%B8%D0%B3%D0%BD%D0%B0%D0%BB" title="Следящий контрольный сигнал">Следящий контрольный сигнал</a>. <a href="/wiki/index.php?title=%D0%9C%D0%BE%D0%B4%D0%B5%D0%BB%D1%8C_%D0%A2%D1%80%D0%B8%D0%B3%D0%B3%D0%B0-%D0%9B%D0%B8%D1%87%D0%B0" title="Модель Тригга-Лича">Модель Тригга-Лича</a>.
</li><li> Адаптивная селективная модель. Адаптивная композиция моделей. 
</li><li> Локальная адаптация весов с регуляризацией.
</li></ul>
<a name=".D0.98.D0.BD.D0.BA.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D1.82.D0.BD.D0.BE.D0.B5_.D0.B8_.D0.BE.D0.BD.D0.BB.D0.B0.D0.B9.D0.BD.D0.BE.D0.B2.D0.BE.D0.B5_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"></a><h2> <span class="mw-headline"> Инкрементное и онлайновое обучение </span></h2>
<p>Презентация: <a href="/wiki/images/1/17/Voron-ML-incremental-slides.pdf" class="internal" title="Voron-ML-incremental-slides.pdf">(PDF,&nbsp;0,9&nbsp;MБ)</a> <font color="#F02020">— обновление 19.04.2021</font>.
Видеозапись: <a href="https://youtu.be/3KflU279d_w" class="external text" title="https://youtu.be/3KflU279d_w" rel="nofollow">Лекция</a> [ Семинар]
</p>
<ul><li> Задачи инкрементного и онлайнового обучения. Оценивание инкрементного обучения. Кривые обучения. 
</li><li> Ленивое обучение (метрические и непараметрические методы). Онлайновый отбор эталонных объектов. 
</li><li> Онлайновый наивный байесовский классификатор.
</li><li> Онлайновый градиентный спуск OGD. Алгоритм Perceptron. Алгоритм Passive-Aggressive.
</li><li> Рекуррентный метод наименьших квадратов RLS. 
</li><li> Инкрементные решающие деревья ID5R.
</li><li> Онлайновое обучение ансамбля. Алгоритм Hedge, его свойства и интерпретация в задаче портфельного инвестирования. 
</li><li> Онлайновое глубокое обучение. Алгоритм Hedge BackProp. 
</li><li> Онлайновое обучение новым классам. Проблема катастрофического забывания. Алгоритм iCaRL.
</li></ul>
<a name=".D0.9E.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5_.D1.81_.D0.BF.D0.BE.D0.B4.D0.BA.D1.80.D0.B5.D0.BF.D0.BB.D0.B5.D0.BD.D0.B8.D0.B5.D0.BC"></a><h2> <span class="mw-headline"> Обучение с подкреплением </span></h2>
<p>Презентация: <a href="/wiki/images/3/35/Voron-ML-RL-slides.pdf" class="internal" title="Voron-ML-RL-slides.pdf">(PDF,&nbsp;1.9&nbsp;МБ)</a> <font color="#F02020"> — обновление 19.04.2021</font>.
Видеозапись: <a href="https://youtu.be/B4Fk2KNHzFY" class="external text" title="https://youtu.be/B4Fk2KNHzFY" rel="nofollow">Лекция</a> <a href="https://youtu.be/3Xex0Z5D6O8" class="external text" title="https://youtu.be/3Xex0Z5D6O8" rel="nofollow">Семинар</a>
</p>
<ul><li> Задача о многоруком бандите. Жадные и эпсилон-жадные стратегии. Метод UCB (upper confidence bound). 
</li><li> Адаптивные стратегии на основе скользящих средних. Метод сравнения с подкреплением. Метод преследования. 
</li><li> Постановка задачи в случае, когда агент влияет на среду. Ценность состояния среды. Ценность действия.
</li><li> Жадные стратегии максимизации ценности. Уравнения оптимальности Беллмана. 
</li><li> Метод SARSA. Метод Q-обучения. Типизация методов на on-policy и off-policy. 
</li><li> Глубокое Q-обучение нейронной сети DQN на примере обучения играм Atari. 
</li><li> Градиентная оптимизация стратегии (policy gradient). Связь с максимизацией log-правдоподобия.
</li><li> Постановка задачи при моделировании среды. Типизация методов на model-free и model-based. 
</li><li> Контекстный многорукий бандит. Линейная регрессионная модель с верхней доверительной оценкой LinUCB.
</li><li> Оценивание новой стратегии по большим историческим данным, сформированным при старых стратегиях.
</li></ul>
<a name=".D0.90.D0.BA.D1.82.D0.B8.D0.B2.D0.BD.D0.BE.D0.B5_.D0.BE.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"></a><h2> <span class="mw-headline"> Активное обучение </span></h2>
<p>Презентация: <a href="/wiki/images/6/6b/Voron-ML-AL-slides.pdf" class="internal" title="Voron-ML-AL-slides.pdf">(PDF,&nbsp;1.2&nbsp;МБ)</a> <font color="#F02020"> — обновление 24.04.2021</font>.
Видеозапись: <a href="https://youtu.be/kGJ7PPTcUHw" class="external text" title="https://youtu.be/kGJ7PPTcUHw" rel="nofollow">Лекция</a> <a href="https://youtu.be/JlPLaNQXNO8" class="external text" title="https://youtu.be/JlPLaNQXNO8" rel="nofollow">Семинар</a>
</p>
<ul><li> Постановка задачи машинного обучения. Основные стратегии: отбор объектов из выборки и из потока, синтез объектов. Приложения активного обучения. 
</li><li> Почему активное обучение быстрее пассивного. Оценивание качества активного обучения. Кривые обучения. 
</li><li> Сэмплирование по неуверенности. 
</li><li> Сэмплирование по несогласию в комитете. Сокращение пространства решений. 
</li><li> Сэмплирование по ожидаемому изменению модели. 
</li><li> Сэмплирование по ожидаемому сокращению ошибки. 
</li><li> Синтез объектов методами безградиентной оптимизации. <a href="/wiki/index.php?title=%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_%D0%9D%D0%B5%D0%BB%D0%B4%D0%B5%D1%80%D0%B0-%D0%9C%D0%B8%D0%B4%D0%B0" title="Метод Нелдера-Мида">Метод Нелдера-Мида</a>. 
</li><li> Синтез объектов по критерию сокращения дисперсии. 
</li><li> Взвешивание по плотности. 
</li><li> Введение изучающих действий в стратегию активного обучении. Алгоритмы ε-active и EG-active.
</li><li> Использование активного обучения в краудсорсинге. Согласование оценок аннотаторов. Назначение заданий аннотаторам. 
</li></ul>
<a name=".D0.97.D0.B0.D0.BA.D0.BB.D1.8E.D1.87.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D0.B0.D1.8F_.D0.BB.D0.B5.D0.BA.D1.86.D0.B8.D1.8F"></a><h2> <span class="mw-headline"> Заключительная лекция </span></h2>
<p>Презентация: <a href="/wiki/images/a/a6/Voron-ML-final.pdf" class="internal" title="Voron-ML-final.pdf">(PDF,&nbsp;3.9&nbsp;МБ)</a> <font color="#F02020"> — обновление 4.05.2021</font>.
Видеозапись: <a href="https://youtu.be/eDptWKPrIy4" class="external text" title="https://youtu.be/eDptWKPrIy4" rel="nofollow">Лекция</a> 
</p><p>Обзор курса. Постановки оптимизационных задач в машинном обучении.
</p>
<a name=".D0.A1.D0.BC._.D1.82.D0.B0.D0.BA.D0.B6.D0.B5"></a><h1> <span class="mw-headline"> См. также </span></h1>
<ul><li> <a href="https://www.coursera.org/learn/vvedenie-mashinnoe-obuchenie" class="external text" title="https://www.coursera.org/learn/vvedenie-mashinnoe-obuchenie" rel="nofollow">Курс «Введение в машинное обучение», К.В.Воронцов (ВШЭ и Яндекс)</a>.<a href="https://habrahabr.ru/company/yandex/blog/269175" class="external text" title="https://habrahabr.ru/company/yandex/blog/269175" rel="nofollow">Хабр об этом курсе</a>.
</li><li> <a href="https://www.coursera.org/specializations/machine-learning-data-analysis" class="external text" title="https://www.coursera.org/specializations/machine-learning-data-analysis" rel="nofollow">Специализация «Машинное обучение и анализ данных» (МФТИ и Яндекс)</a>. <a href="https://habrahabr.ru/company/yandex/blog/277427" class="external text" title="https://habrahabr.ru/company/yandex/blog/277427" rel="nofollow">Хабр об этом курсе</a>.
</li><li> <a href="https://drive.google.com/open?id=0B-3LhgkjkY_OSDJncFdxTkFaOG8" class="external text" title="https://drive.google.com/open?id=0B-3LhgkjkY_OSDJncFdxTkFaOG8" rel="nofollow">Машинное обучение (семинары,ФУПМ МФТИ)</a>
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D1%81%D0%B5%D0%BC%D0%B8%D0%BD%D0%B0%D1%80%D1%8B%2C_%D0%92%D0%9C%D0%9A_%D0%9C%D0%93%D0%A3%29" title="Машинное обучение (семинары, ВМК МГУ)">Машинное обучение (семинары, ВМК МГУ)</a>
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9D.%D0%AE.%D0%97%D0%BE%D0%BB%D0%BE%D1%82%D1%8B%D1%85%29" title="Машинное обучение (курс лекций, Н.Ю.Золотых)">Машинное обучение (курс лекций, Н.Ю.Золотых)</a>
</li><li> <a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%A1%D0%93%D0%90%D0%A3%2C_%D0%A1.%D0%9B%D0%B8%D1%81%D0%B8%D1%86%D1%8B%D0%BD%29" title="Машинное обучение (курс лекций, СГАУ, С.Лисицын)">Машинное обучение (курс лекций, СГАУ, С.Лисицын)</a>
</li></ul>
<a name=".D0.9B.D0.B8.D1.82.D0.B5.D1.80.D0.B0.D1.82.D1.83.D1.80.D0.B0"></a><h1> <span class="mw-headline"> Литература </span></h1>
<ol><li> <i>Hastie T., Tibshirani R., Friedman J.</i> The Elements of Statistical Learning. Springer, 2014. — 739 p.
</li><li> <i>Bishop C. M.</i> Pattern Recognition and Machine Learning. — Springer, 2006. — 738 p.
</li><li> <i>Мерков А. Б.</i> Распознавание образов. Введение в методы статистического обучения. 2011. 256 с.
</li><li> <i>Мерков А. Б.</i> Распознавание образов. Построение и обучение вероятностных моделей. 2014. 238 с.
</li><li> <i>Коэльо Л.П., Ричарт В.</i> Построение систем машинного обучения на языке Python. 2016. 302 с.
</li></ol>
<a name=".D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BF.D0.BE.D0.B4.D1.81.D1.82.D1.80.D0.B0.D0.BD.D0.B8.D1.86"></a><h1> <span class="mw-headline"> Список подстраниц </span></h1>
<table style="background: inherit;" border="0" width="100%"><tr><td><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29/2009" title="Машинное обучение (курс лекций, К.В.Воронцов)/2009">Машинное обучение (курс лекций, К.В.Воронцов)/2009</a></td><td><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29/ToDo" title="Машинное обучение (курс лекций, К.В.Воронцов)/ToDo">Машинное обучение (курс лекций, К.В.Воронцов)/ToDo</a></td><td><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29/%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B" title="Машинное обучение (курс лекций, К.В.Воронцов)/Вопросы">Машинное обучение (курс лекций, К.В.Воронцов)/Вопросы</a></td></tr><tr><td><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29/%D0%A1%D0%B5%D0%BC%D0%B5%D1%81%D1%82%D1%80%D0%BE%D0%B2%D1%8B%D0%B9_%D0%BA%D1%83%D1%80%D1%81" title="Машинное обучение (курс лекций, К.В.Воронцов)/Семестровый курс">Машинное обучение (курс лекций, К.В.Воронцов)/Семестровый курс</a></td><td><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29/%D0%A4%D0%BE%D1%80%D0%BC%D0%B0_%D0%BE%D1%82%D1%87%D0%B5%D1%82%D0%B0" title="Машинное обучение (курс лекций, К.В.Воронцов)/Форма отчета">Машинное обучение (курс лекций, К.В.Воронцов)/Форма отчета</a></td></tr></table>

<!-- 
NewPP limit report
Preprocessor node count: 191/1000000
Post-expand include size: 2137/2097152 bytes
Template argument size: 1039/2097152 bytes
#ifexist count: 0/100
-->
<div class="printfooter">
Источник — «<a href="http://machinelearning.ru/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29">http://machinelearning.ru/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29</a>»</div>
			<div id="catlinks"><p class='catlinks'><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Categories" title="Служебная:Categories">Категория</a>: <span dir='ltr'><a href="/wiki/index.php?title=%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%A3%D1%87%D0%B5%D0%B1%D0%BD%D1%8B%D0%B5_%D0%BA%D1%83%D1%80%D1%81%D1%8B" title="Категория:Учебные курсы">Учебные курсы</a></span></p></div>			<!-- end content -->
			<div class="visualClear"></div>
		</div>
	</div>
		</div>
		<div id="column-one">
	<div id="p-cactions" class="portlet">
		<h5>Просмотры</h5>
		<div class="pBody">
			<ul>
					 <li id="ca-nstab-main" class="selected"><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29" title="Содержание статьи [c]" accesskey="c">Статья</a></li>
					 <li id="ca-talk"><a href="/wiki/index.php?title=%D0%9E%D0%B1%D1%81%D1%83%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5:%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29" title="Обсуждение содержания страницы [t]" accesskey="t">Обсуждение</a></li>
					 <li id="ca-viewsource"><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29&amp;action=edit" title="Эта страница защищена от изменений, но вы можете посмотреть и скопировать её исходный текст [e]" accesskey="e">Просмотр</a></li>
					 <li id="ca-history"><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29&amp;action=history" title="Журнал изменений страницы [h]" accesskey="h">История</a></li>
				</ul>
		</div>
	</div>
	<div class="portlet" id="p-personal">
		<h5>Личные инструменты</h5>
		<div class="pBody">
			<ul>
				<li id="pt-login"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Userlogin&amp;returnto=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2)" title="Здесь можно зарегистрироваться в системе, но это необязательно [o]" accesskey="o">Представиться системе</a></li>
			</ul>
		</div>
	</div>
	<div class="portlet" id="p-logo">
		<a style="background-image: url(/wiki/logo.png);" href="/wiki/index.php?title=%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0" title="Перейти на заглавную страницу [z]" accesskey="z"></a>
	</div>
	<script type="text/javascript"> if (window.isMSIE55) fixalpha(); </script>
		<div class='portlet' id='p-navigation'>
		<h5>Навигация</h5>
		<div class='pBody'>
			<ul>
				<li id="n-mainpage"><a href="/wiki/index.php?title=%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0" title="Перейти на заглавную страницу [z]" accesskey="z">Заглавная страница</a></li>
				<li id="n-portal"><a href="/wiki/index.php?title=MachineLearning:%D0%9F%D0%BE%D1%80%D1%82%D0%B0%D0%BB_%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B0" title="О проекте, о том, что вы можете сделать, где что находится">Сообщество</a></li>
				<li id="n-.D0.9D.D0.BE.D0.B2.D0.BE.D1.81.D1.82.D0.B8"><a href="/wiki/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B8">Новости</a></li>
				<li id="n-.D0.9F.D0.BE.D1.81.D0.BB.D0.B5.D0.B4.D0.BD.D0.B8.D0.B5-.D0.BF.D1.80.D0.B0.D0.B2.D0.BA.D0.B8"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Recentchanges">Последние правки</a></li>
				<li id="n-randompage"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Random" title="Посмотреть случайную страницу [x]" accesskey="x">Случайная статья</a></li>
				<li id="n-help"><a href="/wiki/index.php?title=%D0%A1%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D0%B0:%D0%A1%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D0%B0" title="Справочник по проекту «MachineLearning»">Справка</a></li>
				<li id="n-.D0.98.D0.BD.D1.81.D1.82.D1.80.D1.83.D0.BA.D1.82.D0.B0.D0.B6"><a href="/wiki/index.php?title=MachineLearning:%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%B0%D0%B6">Инструктаж</a></li>
				<li id="n-.D0.92.D0.BE.D0.BF.D1.80.D0.BE.D1.81.D1.8B-.D0.B8-.D0.BE.D1.82.D0.B2.D0.B5.D1.82.D1.8B"><a href="/wiki/index.php?title=MachineLearning:%D0%A7%D0%B0%D0%92%D0%9E">Вопросы и ответы</a></li>
				<li id="n-ToDo"><a href="/wiki/index.php?title=MachineLearning:ToDo">ToDo</a></li>
			</ul>
		</div>
	</div>
		<div class='portlet' id='p-.C2.A0'>
		<h5>&nbsp;</h5>
		<div class='pBody'>
			<ul>
				<li id="n-.D0.AD.D0.BD.D1.86.D0.B8.D0.BA.D0.BB.D0.BE.D0.BF.D0.B5.D0.B4.D0.B8.D1.8F-.D0.B0.D0.BD.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0-.D0.B4.D0.B0.D0.BD.D0.BD.D1.8B.D1.85"><a href="/wiki/index.php?title=%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%AD%D0%BD%D1%86%D0%B8%D0%BA%D0%BB%D0%BE%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85">Энциклопедия анализа данных</a></li>
				<li id="n-.D0.9F.D0.BE.D0.BF.D1.83.D0.BB.D1.8F.D1.80.D0.BD.D1.8B.D0.B5-.D0.B8-.D0.BE.D0.B1.D0.B7.D0.BE.D1.80.D0.BD.D1.8B.D0.B5-.D1.81.D1.82.D0.B0.D1.82.D1.8C.D0.B8"><a href="/wiki/index.php?title=%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%9F%D0%BE%D0%BF%D1%83%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B5_%D0%B8_%D0%BE%D0%B1%D0%B7%D0%BE%D1%80%D0%BD%D1%8B%D0%B5_%D1%81%D1%82%D0%B0%D1%82%D1%8C%D0%B8">Популярные и обзорные статьи</a></li>
				<li id="n-.D0.9F.D1.83.D0.B1.D0.BB.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D0.B8"><a href="/wiki/index.php?title=%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%9F%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%B8">Публикации</a></li>
				<li id="n-.D0.9F.D0.BE.D0.BB.D0.B5.D0.B7.D0.BD.D1.8B.D0.B5-.D1.81.D1.81.D1.8B.D0.BB.D0.BA.D0.B8"><a href="/wiki/index.php?title=%D0%9F%D0%BE%D0%BB%D0%B5%D0%B7%D0%BD%D1%8B%D0%B5_%D1%81%D1%81%D1%8B%D0%BB%D0%BA%D0%B8">Полезные ссылки</a></li>
			</ul>
		</div>
	</div>
		<div id="p-search" class="portlet">
		<h5><label for="searchInput">Поиск</label></h5>
		<div id="searchBody" class="pBody">
			<form action="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Search" id="searchform"><div>
				<input id="searchInput" name="search" type="text" title="Искать это слово [f]" accesskey="f" value="" />
				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="Перейти" title="Перейти к странице, имеющей в точности такое название" />&nbsp;
				<input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="Найти" title="Найти страницы, содержащие указанный текст" />
			</div></form>
		</div>
	</div>
	<div class="portlet" id="p-tb">
		<h5>Инструменты</h5>
		<div class="pBody">
			<ul>
				<li id="t-whatlinkshere"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Whatlinkshere/%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29" title="Список всех страниц, которые ссылаются на эту страницу [j]" accesskey="j">Ссылки сюда</a></li>
				<li id="t-recentchangeslinked"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Recentchangeslinked/%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29" title="Последние изменения в страницах, на которые ссылается эта страница [k]" accesskey="k">Связанные правки</a></li>
<li id="t-upload"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Upload" title="Загрузить изображения или мультимедиа-файлы [u]" accesskey="u">Загрузить файл</a></li>
<li id="t-specialpages"><a href="/wiki/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:Specialpages" title="Список служебных страниц [q]" accesskey="q">Спецстраницы</a></li>
				<li id="t-print"><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29&amp;printable=yes" title="Версия для печати этой страницы [p]" accesskey="p">Версия для печати</a></li>				<li id="t-permalink"><a href="/wiki/index.php?title=%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%28%D0%BA%D1%83%D1%80%D1%81_%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B9%2C_%D0%9A.%D0%92.%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D1%86%D0%BE%D0%B2%29&amp;oldid=103436" title="Постоянная ссылка на эту версию страницы">Постоянная ссылка</a></li>			</ul>
		</div>
	</div>
		</div><!-- end of the left (by default at least) column -->
			<div class="visualClear"></div>
			<div id="footer">
				<div id="f-poweredbyico"><a href="http://www.mediawiki.org/"><img src="/wiki/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" /></a></div>
				<div id="f-copyrightico"><a href="http://creativecommons.org/licenses/by-sa/3.0/"><img src="/wiki/skins/common/images/cc-logo.png" alt='Creative Commons Attribution/Share-Alike' /></a></div>
			<ul id="f-list">
				<li id="lastmod"> Последнее изменение этой страницы: 23:51, 10 февраля 2022.</li>
				<li id="viewcount">К этой странице обращались 1 104 327 раз.</li>
				<li id="copyright">Содержимое доступно в соответствии с <a href="http://creativecommons.org/licenses/by-sa/3.0/" class="external " title="http://creativecommons.org/licenses/by-sa/3.0/" rel="nofollow">Creative Commons Attribution/Share-Alike</a>.</li>
				<li id="privacy"><a href="/wiki/index.php?title=MachineLearning:%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0_%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8" title="MachineLearning:Политика конфиденциальности">Политика конфиденциальности</a></li>
				<li id="about"><a href="/wiki/index.php?title=MachineLearning:%D0%9E%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5" title="MachineLearning:Описание">Описание MachineLearning</a></li>
				<li id="disclaimer"><a href="/wiki/index.php?title=MachineLearning:%D0%9E%D1%82%D0%BA%D0%B0%D0%B7_%D0%BE%D1%82_%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8" title="MachineLearning:Отказ от ответственности">Отказ от ответственности</a></li>
			</ul>
		</div>
		
	
		<script type="text/javascript">if (window.runOnloadHook) runOnloadHook();</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4591433-2");
pageTracker._initData();
pageTracker._trackPageview();
</script><!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.machinelearning.ru"]);
  _paq.push(["setDomains", ["*.machinelearning.ru","*.www.machinelearning.ru"]]);
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://s.inmedias.ru/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "3]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><img src="http://s.inmedias.ru/piwik.php?idsite=3&amp;rec=1" style="border:0" alt="" /></noscript>
<!-- End Piwik Code --><!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30907996 = new Ya.Metrika({id:30907996,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30907996" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --></div>
<!-- Served in 0.327 secs. --></body></html>
