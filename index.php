<!DOCTYPE HTML>
<html>
<head>
	<title>Sambhashana Sandesha</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">	
	<script src="php/js/jquery.min.js"></script>
	<script src="php/js/jquery.dropotron.min.js"></script>
	<script src="php/js/jquery.scrolly.min.js"></script>
	<script src="php/js/jquery.scrollgress.min.js"></script>
	<script src="php/js/skel.min.js"></script>
	<script src="php/js/skel-layers.min.js"></script>
	<script src="php/js/init.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<noscript>
		<link rel="stylesheet" href="php/css/skel.css" />
		<link rel="stylesheet" href="php/css/style.css" />
		<link rel="stylesheet" href="php/css/style-wide.css" />
		<link rel="stylesheet" href="php/css/style-noscript.css" />
	</noscript>
</head>
<body class="index">
	<!-- Google Analytics Code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60797448-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Header -->
	<header id="header" class="alt">
		<h1><a href="index.php">&nbsp;&nbsp;</a></h1>
		<nav id="nav">
			<ul>
				<li><a href="index.php">Home | <span class="sanskrit">उपक्रमः:</span></a></li>
				<li><a href="php/about.php">About | <span class="sanskrit">परिचयः</span></a>
					<ul>
						<li><a href="php/about.php">Sambhshana Sandesha</a></li>
						<li><a href="php/about_sb.php">Samskrita Bharati</a></li>
					</ul>
				</li>
				<li><a href="php/subscribe.php">Subscribe | <span class="sanskrit">ग्राहकता</span></a>
					<ul>
						<li><a href="php/subscribe.php">India</a></li>
						<li><a href="php/subscribe_us.php">US &amp; Canada</a></li>
						<li><a href="php/subscribe_ot.php">Other Nations</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);">Archives | <span class="sanskrit">सङ्ग्रहः</span></a>
					<ul>
						<li><a href="php/volumes.php">Volumes | <span class="sanskrit">सम्पुटाः</span></a></li>
						<li><a href="php/feature.php">Features | <span class="sanskrit">प्रधानविभागाः</span></a></li>
						<li><a href="php/articles.php?letter=अ">Articles | <span class="sanskrit">लेखाः</span></a></li>
						<li><a href="php/authors.php?letter=अ">Authors | <span class="sanskrit">लेखकाः</span></a></li>
						<li><a href="php/special_issue.php">Special Issues | <span class="sanskrit">विशेषाङ्कः</span></a></li>
						<li><a href="php/search.php">Search | <span class="sanskrit">अन्वेषणम्</span></a></li>
					</ul>
				</li>
				<li><a href="php/feedback.php">FEEDBACK | <span class="sanskrit">प्रतिपुष्टिः</span></a></li>
			</ul>
		</nav>
	</header>
	<!-- Banner -->
	<section id="banner">
		<p class="webtitle">सम्भाषणसन्देश:</p>
		<div class="current_issue">
			<div class="cur_image">
				<span class="cur_month">सद्य: प्रकाशितम्</span><br />
				<span class="cur_month">Current Issue</span><br />
				<img src="php/images/current_issue.jpg" alt="Current Issue - November 2016" /><br />
				<span class="cur_month">मार्गशीर्षमासः</span><br />
				<span class="cur_month">डिसेम्बर् – २०१६</span>
			</div>
			<div class="cur_text">
				<div class="inthisissue">
					<span>अस्यां सञ्चिकायाम् (In this Issue)</span>
					<div class="rule">&nbsp;</div>
				</div>
				<div class="inthis_left">
					<div class="toc_entry">
						<a href="#"><span class="icon fa-share"></span>  अङ्कात्मकम् अपूर्वं काव्यं सिरिभूवलयः  </a><br />
						<span class="article_details"> जनार्दनः  &nbsp;|&nbsp; लेखनम्</span>
					</div>
					<div class="toc_entry">
						<a href="#"><span class="icon fa-share"></span> को वा योगः ? </a><br />
						<span class="article_details"> इन्दुशेखरशास्त्री माडुगुल, सुधा ईमानि च  &nbsp;|&nbsp; लेखनम्</span>
					</div>
					<div class="toc_entry">
						<a href="#"><span class="icon fa-share"></span> एकस्मै उद्योगाय (उत्तरार्धम्) </a><br />
						<span class="article_details"> मूलम् – अप्पशय्या नवीनः, अनु – तङ्गेड जनार्दनरावः &nbsp;|&nbsp; कथा</span>
					</div>
				</div>
			    <div  class="read_more">
					<div><a href="#">इतोऽधिकम् अचिरादेव (Coming Soon)...</a></div>
					<div class="rule">&nbsp;</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Columns -->
	<div class="columns">
		<div class="column1">
			<?php 
				include("php/connect.php");
				include("php/common.php");
				
				$db=mysql_connect($server,$user,$password) or die("Not Connected To Database".mysql_error());
				mysql_select_db($database,$db);
				mysql_set_charset("utf8",$db);
				
				$currentIssueDetails = getCurrentVolumeIssue($database,$db);
				$volume = $currentIssueDetails['volume'];
				$issue = $currentIssueDetails['issue'];

				$query_1 = "select * from feature where featurename = 'सम्पादकीयम्'";
				$result_1=mysql_query($query_1);
				$row_1=mysql_fetch_assoc($result_1);
				$featid = $row_1['featid'];
				$query2 = "select * from article where volume='$volume' and issue='$issue' and featid='$featid' limit 1";
				$result2=mysql_query($query2);
				$row2=mysql_fetch_assoc($result2);
				echo "<div class=\"widget\">";
				echo "<div class=\"tbar\">" . getMonthDevanagari($row2['month']) . " सञ्चिकाः</div>";
				echo "<img src=\"php/images/current_issue.jpg\" alt=\"Current Issue\"/><br />";
				echo "<div class=\"indexTitle\"><a href=\"Volumes/".$row2['year']."/".$row2['month']."/".$row2['page']."/".$row2['page'].".php"."\" target=\"_blank\">" . $row_1['featurename'] . " : " . $row2['title'] . "</a></div>";
				echo "<div class=\"text\">";
				echo $row2['text'];
				echo "</div>";
				echo "</div>";
			?>
			<?php 
			print_widget("वार्ताः",0,$volume,$issue);
			print_widget("प्रतिस्पन्दः",0,$volume,$issue);
			print_widget("स्तम्भलेखः",0,$volume,$issue);
			print_widget("पदरञ्जिनी",0,$volume,$issue);
			print_widget("अनूदितकथा",0,$volume,$issue);
			?>
			
		</div>
		<div class="column2">
			<?php print_widget("बालमोदिनी",1,$volume,$issue);?>
			<?php print_widget("लेखनम्",1,$volume,$issue);?>
			<?php print_widget("ग्रन्थपरिचयः",1,$volume,$issue);?>
		</div>
		<div class="column3">
			<?php print_widget("स्मारं स्मारं सुखिनः स्याम",2,$volume,$issue);
			print_widget("धारावाहिनी",2,$volume,$issue);
			print_widget("विज्ञापिकाः",2,$volume,$issue);
			print_widget("निकषोपलः",2,$volume,$issue);
			print_widget("भाषापाकः",2,$volume,$issue);
			print_widget("सुयोगः",2,$volume,$issue);
			print_widget("कुतुककुटी",2,$volume,$issue);
			print_widget("चित्रकथा",2,$volume,$issue);
			print_widget("चाटुचणकः",2,$volume,$issue);
			print_widget("गीतम्",2,$volume,$issue);
			?>
		</div>
	</div>
	<!-- Main -->
	<article id="main">
		<header class="special container">
			<span class="icon fa-newspaper-o"></span>
			<h2>Welcome to our web portal</h2>
			<p>Be it globalization or global warming, Sandesha is always at the forefront of burning issues. Not to mention articles that unearth the hidden treasures in Samskritam texts. There are sections suited for beginners, children, adult and advanced students. Comics, short stories, serials, puzzles and thought-provoking articles are some of the highlights of this wonderful monthly magazine.</p>
		</header>
	<!-- One -->
		<section class="wrapper style2 container special-alt">
			<div class="row 50%">
				<div class="8u 12u(narrower)">
					<header>
						<h2>Surf through the volumes, issues, articles and authors of <strong>"Sambhashana Sandesha"</strong></h2>
					</header>
					<p>The language is very simple. Anyone with a basic knowledge of Sanskrit can easily understand. This is a project of "Sanskrit Bharati", which conducts the famous 10 day Sanskrit conversation classes.</p>
					<footer>
						<ul class="buttons">
							<li><a href="php/volumes.php" class="button">Find Out More</a></li>
						</ul>
					</footer>
				</div>
				<div class="4u 4u(narrower) important(narrower)">
					<ul class="featured-icons">
						<li><a href="index.php"><span class="icon fa-home"><span class="label">Home</span></span></a></li>
						<li><a href="php/volumes.php"><span class="icon fa-book"><span class="label">Volumes</span></span></a></li>
						<li><a href="php/feature.php"><span class="icon fa-tags"><span class="label">Categories</span></span></a></li>
						<li><a href="php/articles.php"><span class="icon fa-pencil"><span class="label">Articles</span></span></a></li>
						<li><a href="php/authors.php?letter=अ"><span class="icon fa-user"><span class="label">Authors</span></span></a></li>
						<li><a href="php/search.php"><span class="icon fa-search"><span class="label">Search</span></span></a></li>
					</ul>
				</div>
			</div>
		</section>
		<section id="temp" class="wrapper style1 container special">
			<div class="row">
				<div class="6u 12u(narrower)">
					<section>
						<span class="icon featured fa-newspaper-o"></span>
							<header>
								<h3>Sambhashana Sandesha</h3>
							</header>
							<p>Sambhashana Sandesha (सम्भाषणसन्देश:) is a magazine published by Samskrita Bharati from Aksharam.The monthly magazine comes to you with news, current affairs, articles, Samskritam news and events from across the world, stories for children and grown-ups, cartoons, crossword, vocabulary builders, and so on. Written in conversational-style prose, many articles are easily accessible to even beginners in Samskritam. For our more scholarly readers, we bring you articles on a wide range of topics including science, philosophy, biographical sketches, discussions in grammar and so on.</p>
					</section>
				</div>
				<div class="6u 12u(narrower)">
					<section>
						<span class="icon featured fa-university"></span>
						<header>
							<h3>Samskritabharati</h3>
						</header>
						<p>A movement for the development of Samskrit language, literature and mankind. It is registered as a Trust and also under Section 12A of IT Act. The Movement, called “Speak Samskrit Movement”, started in 1981 in Bangalore and it was later named and registered as “Samskrita Bharati” in 1995 in Delhi. Samskrita Bharati is also an organization of dedicated volunteers, who strive for the popularization of Samskrit, Samskriti and the Knowledge Tradition of Bharat. Its activities are spread to more than 2000 places all over the country.</p>
					</section>
				</div>
			</div>
			<footer class="major">
				<ul class="buttons">
					<li><a href="php/about.php" class="button">See More</a></li>
				</ul>
			</footer>
		</section>
	</article>
	<!-- CTA -->
	<section id="cta">
		<header>
				<h2>Subscribe for <strong>Sambhashana Sandesha</strong></h2>
		</header>
		<footer>
			<ul class="buttons">
				<li><a href="php/subscribe.php" class="button special">Click here to subscribe</a></li>
			</ul>
		</footer>
	</section>
	<!-- Footer -->
	<footer id="footer">
		<ol class="icons">
			<li>samskritam@gmail.com</li>
		</ol>
		<ol class="copyright">
			<li>©&nbsp;www.samskrita.in All Rights Reserved</li><li>Digitization &amp; Design : <a href="http://srirangadigital.com/">Sriranga Digital Software Technologies</a></li>
		</ol>
	</footer>
	
<?php
	function print_widget($feature, $column, $volume, $issue)
	{
		include("php/connect.php");
		$db_con=mysql_connect($server,$user,$password) or die("Not connected To database");
		mysql_set_charset("utf8",$db_con);
		mysql_select_db($database,$db_con) or die("No Database".mysql_error());
		$query_2 = "select * from feature where featurename = '$feature'";
		$result_2=mysql_query($query_2);
		$row_2=mysql_fetch_assoc($result_2);
		$feat_id = $row_2['featid'];
		$query="select * from article where featid='$feat_id' and volume=$volume and issue=$issue";
		$result=mysql_query($query) or die("Invalid Article Query".mysql_error());
		$num_rows=mysql_num_rows($result);
		if($num_rows>0)
		{
			if($column==0)
			{
				echo "<div class=\"art_widget_col1\">";
			}
			else
			{
				echo "<div class=\"art_widget\">";
			}
			echo "<div class=\"tbar\">" . $row_2['featurename'] . "</div>";
			for($i=0;$i<$num_rows;$i++)
			{
				$row=mysql_fetch_assoc($result);
				$authid=$row['authid'];
				$query="select * from author where authid='$authid'";
				$result1=mysql_query($query) or die("Invalid Author Query".mysql_error());
				$row1=mysql_fetch_assoc($result1);
				$author=$row1['authorname'];
				$sal=$row1['sal'];
				$page = $row['page'];
				$path = "Volumes/".$row['year']."/".$row['month']."/".$page."/thumbs/";
				$files = scandir($path);
				$num_files = count($files)-2;
				
				echo "<div class=\"thumbs\">";
				for($j=1;$j<=$num_files;$j++)
				{
					echo "<img id=\"art_widget_img\" src=\"".$path.$j. ".png\" alt=\"cover\"/>";
				}
				echo "</div>";
				echo "<div style=\"width: 50%;\" class=\"text\">";
				echo "<div class=\"indexTitle\"><a href=\"Volumes/".$row['year']."/".$row['month']."/".$row['page']."/".$row['page'].".php"."\" target=\"_blank\">".$row['title']."</a></div>";
				echo ($authid != 0) ? "<a href=\"php/showAuthorArticles.php?authid=" . $authid . "&amp;authorname=" . $author . "\" target=\"_blank\"><span class=\"authorspan\">" . $sal . " " . $author."," ."</span></a><br />" : "";
				echo ($row['text'] == '') ? "" : "<div class=\"indexText\">" . $row['text'] . "&nbsp;...</div>";
				echo "</div>";
				echo "<div class=\"further\"><span class=\"furtherspan\"><a href=\"Volumes/".$row['year']."/".$row['month']."/".$row['page']."/".$row['page'].".php"."\" target=\"_blank\">Read...</a></span></div>";
				if($i!=$num_rows-1)
				{
					echo "<div class=\"art_widget_rule\"></div>";
				}
			}
			echo "</div>";
		}
	}
?>
</body>
</html>
