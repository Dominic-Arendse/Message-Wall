<style>
  #home_page_title {
  	z-index: 1;

    font-family: Freshman;

    text-align: center;

    margin-top: 64px;
   	margin-bottom: 0px;
  }

  #home_page_slogan {
  	font-family: SweetlyBroken;

  	text-align: center;

  	margin-top: 0px;
  }

  #messages {
  	margin-left: auto;
  	margin-right: auto;
  }

	ul, li {
  	list-style: none;
	}

	ul {
  	overflow: hidden;
  	padding: 1em;
	}

	ul li a {
  	text-decoration: none;
  	
  	color: #000;
  	
  	background: #ffc;
  	
  	display: block;
  	height: 20em;
  	width: 20em;
  	padding: 1em;
  	margin: 1em;
	}

	ul li {
  	margin: 1em;
  	float: left;
	}

	ul li h2 {
  	font-size: 140%;
  	font-weight: bold;
  	padding-bottom: 10px;
	}

	ul li p {
  	font-family: "Reenie Beanie", arial, sans-serif;
  	font-size: 180%;
	}

	ul li a {
  	text-decoration: none;
  	color: #000;
  	background: #ffc;
  	display: block;
  	height: 20em;
  	width: 20em;
  	padding: 1em;
  	/* Firefox */
  	-moz-box-shadow: 5px 5px 7px rgba(33, 33, 33, 1);
  	/* Safari+Chrome */
  	-webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, .7);
  	/* Opera */
  	box-shadow: 5px 5px 7px rgba(33, 33, 33, .7);
	}

	ul li a {
  	-webkit-transform: rotate(-6deg);
  	-o-transform: rotate(-6deg);
  	-moz-transform: rotate(-6deg);
	}

	ul li:nth-child(even) a {
  	-o-transform: rotate(4deg);
  	-webkit-transform: rotate(4deg);
  	-moz-transform: rotate(4deg);
  	position: relative;
  	top: 5px;
	}

	ul li:nth-child(3n) a {
  	-o-transform: rotate(-3deg);
  	-webkit-transform: rotate(-3deg);
  	-moz-transform: rotate(-3deg);
  	position: relative;
  	top: -5px;
	}

	ul li:nth-child(5n) a {
  	-o-transform: rotate(5deg);
  	-webkit-transform: rotate(5deg);
  	-moz-transform: rotate(5deg);
  	position: relative;
  	top: -10px;
	}

	ul li a:hover, ul li a:focus {
	  -moz-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
	  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
	  box-shadow: 10px 10px 7px rgba(0,0,0,.7);
	  -webkit-transform: scale(1.25);
	  -moz-transform: scale(1.25);
	  -o-transform: scale(1.25);
	  position: relative;
	  z-index: 5;
	}

	ul li a {
  	text-decoration: none;
  	color: #000;
  	background: #ffc;
  	display: block;
  	height: 15em;
  	width: 15em;
  	padding: 1em;
  	-moz-box-shadow: 5px 5px 7px rgba(33,33,33,1);
  	-webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  	box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  	-moz-transition: -moz-transform .15s linear;
  	-o-transition: -o-transform .15s linear;
  	-webkit-transition: -webkit-transform .15s linear;

    overflow: hidden;
  }

	ul li:nth-child(even) a {
  	-o-transform: rotate(4deg);
  	-webkit-transform: rotate(4deg);
  	-moz-transform: rotate(4deg);
  	position: relative;
  	top: 5px;
  	background: #cfc;
	}

	ul li:nth-child(3n) a{
	  -o-transform: rotate(-3deg);
	  -webkit-transform: rotate(-3deg);
	  -moz-transform: rotate(-3deg);
	  position: relative;
	  top: -5px;
	  background: #FFC0C0;
	}
</style>